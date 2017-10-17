<?php /* Smarty version Smarty-3.1.19, created on 2017-10-15 12:47:46
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/E-commerce-Turbo-Shop/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136799952659e33cd2d54a87-50434990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ddd5bae95de50bf535f39487ab9731e469c97d4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/E-commerce-Turbo-Shop/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1504515462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136799952659e33cd2d54a87-50434990',
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
  'unifunc' => 'content_59e33cd2e02d80_05979328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e33cd2e02d80_05979328')) {function content_59e33cd2e02d80_05979328($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
