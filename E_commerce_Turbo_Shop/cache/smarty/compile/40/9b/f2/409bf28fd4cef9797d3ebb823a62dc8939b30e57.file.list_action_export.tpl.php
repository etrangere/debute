<?php /* Smarty version Smarty-3.1.19, created on 2017-10-15 12:47:32
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/E-commerce-Turbo-Shop/admin/themes/default/template/controllers/request_sql/list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194801254759e33cc4f162f4-63768322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '409bf28fd4cef9797d3ebb823a62dc8939b30e57' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/E-commerce-Turbo-Shop/admin/themes/default/template/controllers/request_sql/list_action_export.tpl',
      1 => 1504515462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194801254759e33cc4f162f4-63768322',
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
  'unifunc' => 'content_59e33cc5023b57_90276771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e33cc5023b57_90276771')) {function content_59e33cc5023b57_90276771($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
