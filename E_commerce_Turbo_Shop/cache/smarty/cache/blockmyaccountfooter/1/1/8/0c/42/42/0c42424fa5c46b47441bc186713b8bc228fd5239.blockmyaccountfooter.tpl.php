<?php /*%%SmartyHeaderCode:6267007415a175777de1b12-71841126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c42424fa5c46b47441bc186713b8bc228fd5239' => 
    array (
      0 => '/var/www/debut/E_commerce_Turbo_Shop/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1511450276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6267007415a175777de1b12-71841126',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a175777e41f85_75362933',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a175777e41f85_75362933')) {function content_5a175777e41f85_75362933($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost/debut/E_commerce_Turbo_Shop/index.php?controller=my-account" title="Gérer mon compte client" rel="nofollow">Mon compte</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost/debut/E_commerce_Turbo_Shop/index.php?controller=history" title="Mes commandes" rel="nofollow">Mes commandes</a></li>
						<li><a href="http://localhost/debut/E_commerce_Turbo_Shop/index.php?controller=order-slip" title="Mes avoirs" rel="nofollow">Mes avoirs</a></li>
			<li><a href="http://localhost/debut/E_commerce_Turbo_Shop/index.php?controller=addresses" title="Mes adresses" rel="nofollow">Mes adresses</a></li>
			<li><a href="http://localhost/debut/E_commerce_Turbo_Shop/index.php?controller=identity" title="Gérer mes informations personnelles" rel="nofollow">Mes informations personnelles</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
