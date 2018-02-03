<?php /* Smarty version Smarty-3.1.14, created on 2018-02-02 04:30:09
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14872392635a73db4198ab61-82675747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c56bf635cf2d68ba27fecb4d835fd358efd8fe0d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1395073064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14872392635a73db4198ab61-82675747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a73db419952c3_58246250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73db419952c3_58246250')) {function content_5a73db419952c3_58246250($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>