<?php /* Smarty version Smarty-3.1.19, created on 2017-11-23 23:03:44
         compiled from "/var/www/debut/E_commerce_Turbo_Shop/admin/themes/default/template/controllers/request_sql/list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19586398145a1753d0ceab15-50564897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '113346d7347fbca282ad68cf993d925e80ee8935' => 
    array (
      0 => '/var/www/debut/E_commerce_Turbo_Shop/admin/themes/default/template/controllers/request_sql/list_action_export.tpl',
      1 => 1511450276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19586398145a1753d0ceab15-50564897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1753d0cf59c7_75878263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1753d0cf59c7_75878263')) {function content_5a1753d0cf59c7_75878263($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
