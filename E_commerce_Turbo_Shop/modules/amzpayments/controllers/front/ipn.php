<?php
/**
 * 2013-2017 Amazon Advanced Payment APIs Modul
 *
 * for Support please visit www.patworx.de
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 *  @author    patworx multimedia GmbH <service@patworx.de>
 *  @copyright 2013-2017 patworx multimedia GmbH
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

class AmzpaymentsIpnModuleFrontController extends ModuleFrontController
{

    public $ssl = true;

    public $isLogged = false;

    public $display_column_left = false;

    public $display_column_right = false;

    public function __construct()
    {
        $this->controller_type = 'modulefront';
        $this->module = Module::getInstanceByName(Tools::getValue('module'));
        if (! $this->module->active) {
            Tools::redirect('index');
        }
        
        file_put_contents(dirname(__FILE__) . '/../../amz.log', '[' . date("Y-m-d H:i:s") . '] IPN wurde aufgerufen' . "\n", FILE_APPEND);
        
        $headers_tmp = getallheaders();
        $headers = array();
        foreach ($headers_tmp as $k => $v) {
            $headers[Tools::strtolower($k)] = $v;
        }
        $response = Tools::file_get_contents('php://input');

        $amz_payments = new AmzPayments();
        
        try {
            $client = $amz_payments->getService(false, 'notification');
            file_put_contents(dirname(__FILE__) . '/../../amz.log', '[' . date("Y-m-d H:i:s") . '] Notification response received' . "\n", FILE_APPEND);
            $result = $client->parseRawMessage($headers, $response);
        } catch (OffAmazonPaymentsNotifications_InvalidMessageException $ex) {
            error_log($ex->getMessage());
            file_put_contents(dirname(__FILE__) . '/../../amz.log', '[' . date("Y-m-d H:i:s") . '] Error: ' . $ex->getMessage() . "\n", FILE_APPEND);
            header("HTTP/1.1 503 Service Unavailable");
            exit(0);
        }
        
        ob_start();
        
        $response = $this->jsonCleanDecode($response);
        $message = $this->jsonCleanDecode($response->Message);
        $response_xml = simplexml_load_string($message->NotificationData);
        $response_xml = $response_xml;
        
        if ($amz_payments->ipn_status == '1') {
            echo '[' . date("Y-m-d H:i:s") . '] [' . $message->NotificationType . '] ';
        
            switch ($message->NotificationType) {
                case 'PaymentAuthorize':
                    $q = 'SELECT * FROM ' . _DB_PREFIX_ . 'amz_transactions
                    WHERE amz_tx_type = \'auth\' AND amz_tx_amz_id = \'' . pSQL($response_xml->AuthorizationDetails->AmazonAuthorizationId) . '\'';
                    $r = Db::getInstance()->getRow($q);
        
                    $sqlArr = array(
                        'amz_tx_status' => pSQL((string) $response_xml->AuthorizationDetails->AuthorizationStatus->State),
                        'amz_tx_last_change' => time(),
                        'amz_tx_expiration' => strtotime($response_xml->AuthorizationDetails->ExpirationTimestamp),
                        'amz_tx_last_update' => time()
                    );
                    Db::getInstance()->update('amz_transactions', $sqlArr, ' amz_tx_id = ' . (int) $r['amz_tx_id']);
                    $amz_payments->refreshAuthorization($response_xml->AuthorizationDetails->AmazonAuthorizationId);
                    if ($sqlArr['amz_tx_status'] == 'Open') {
                        AmazonTransactions::setOrderStatusAuthorized($r['amz_tx_order_reference'], true);
                        if ($amz_payments->capture_mode == 'after_auth') {
                            $order_id = AmazonTransactions::getOrdersIdFromOrderRef($r['amz_tx_order_reference']);
                            $order = new Order((int) $order_id);
                            if (Validate::isLoadedObject($order)) {
                                $currency = new Currency($order->id_currency);
                                if (Validate::isLoadedObject($currency)) {
                                    AmazonTransactions::capture($amz_payments, $amz_payments->getService(), $response_xml->AuthorizationDetails->AmazonAuthorizationId, $r['amz_tx_amount'], $currency->iso_code);
                                }
                            }
                        }
                    } elseif ($sqlArr['amz_tx_status'] == 'Declined') {
                        $reason = (string) $response_xml->AuthorizationDetails->AuthorizationStatus->ReasonCode;
                        $amz_payments->intelligentDeclinedMail($response_xml->AuthorizationDetails->AmazonAuthorizationId, $reason);
                        if ($amz_payments->decline_status_id > 0) {
                            AmazonTransactions::setOrderStatusDeclined($r['amz_tx_order_reference']);
                        }
                    }
        
                    break;
                case 'PaymentCapture':
                    $q = 'SELECT * FROM ' . _DB_PREFIX_ . 'amz_transactions
                    WHERE amz_tx_type = \'capture\' AND amz_tx_amz_id = \'' . pSQL($response_xml->CaptureDetails->AmazonCaptureId) . '\'';
                    $r = Db::getInstance()->getRow($q);
        
                    $sqlArr = array(
                        'amz_tx_status' => pSQL((string) $response_xml->CaptureDetails->CaptureStatus->State),
                        'amz_tx_last_change' => time(),
                        'amz_tx_amount_refunded' => (float) $response_xml->CaptureDetails->RefundedAmount->Amount,
                        'amz_tx_last_update' => time()
                    );
                    Db::getInstance()->update('amz_transactions', $sqlArr, ' amz_tx_id = ' . (int) $r['amz_tx_id']);
                    
                    AmazonTransactions::setOrderStatusCapturedSuccesfully($r['amz_tx_order_reference']);
        
                    $orderTotal = AmazonTransactions::getOrderRefTotal($r['amz_tx_order_reference']);
                    if ($r['amz_tx_amount'] == $orderTotal) {
                        AmazonTransactions::closeOrder($amz_payments, $amz_payments->getService(), $r['amz_tx_order_reference']);
                    }
        
                    break;
        
                case 'PaymentRefund':
                    $q = 'SELECT * FROM ' . _DB_PREFIX_ . 'amz_transactions
                    WHERE amz_tx_type = \'refund\' AND amz_tx_amz_id = \'' . pSQL($response_xml->RefundDetails->AmazonRefundId) . '\'';
                    $r = Db::getInstance()->getRow($q);
        
                    $sqlArr = array(
                        'amz_tx_status' => pSQL((string) $response_xml->RefundDetails->RefundStatus->State),
                        'amz_tx_last_change' => time(),
                        'amz_tx_last_update' => time()
                    );
                    Db::getInstance()->update('amz_transactions', $sqlArr, ' amz_tx_id = ' . (int) $r['amz_tx_id']);
        
                    break;
                case 'OrderReferenceNotification':
                    $q = 'SELECT * FROM ' . _DB_PREFIX_ . 'amz_transactions
                    WHERE amz_tx_type = \'order_ref\' AND amz_tx_amz_id = \'' . pSQL($response_xml->OrderReference->AmazonOrderReferenceId) . '\'';
                    $r = Db::getInstance()->getRow($q);
        
                    $sqlArr = array(
                        'amz_tx_status' => pSQL((string) $response_xml->OrderReference->OrderReferenceStatus->State),
                        'amz_tx_last_change' => time(),
                        'amz_tx_last_update' => time()
                    );
                    Db::getInstance()->update('amz_transactions', $sqlArr, ' amz_tx_id = ' . (int) $r['amz_tx_id']);
        
                    break;
            }
            if ($amz_payments->capture_mode == 'after_shipping') {
                $amz_payments->shippingCapture();
            }
        }
        
        $str = ob_get_contents();
        ob_end_clean();
        
        if (trim($str) != '') {
            $str .= "\n";
        }
        
        file_put_contents(dirname(__FILE__) . '/../../amz.log', $str, FILE_APPEND);
        echo 'OK';
        exit();
    }
    
    protected function jsonCleanDecode($json, $assoc = false, $depth = 512, $options = 0)
    {
        $json = preg_replace("#(/\*([^*]|[\r\n]|(\*+([^*/]|[\r\n])))*\*+/)|([\s\t](//).*)#", '', $json);
        if (version_compare(phpversion(), '5.4.0', '>=')) {
            $json = Tools::jsonDecode($json, $assoc, $depth, $options);
        } elseif (version_compare(phpversion(), '5.3.0', '>=')) {
            $json = Tools::jsonDecode($json, $assoc, $depth);
        } else {
            $json = Tools::jsonDecode($json, $assoc);
        }
        return $json;
    }
}
