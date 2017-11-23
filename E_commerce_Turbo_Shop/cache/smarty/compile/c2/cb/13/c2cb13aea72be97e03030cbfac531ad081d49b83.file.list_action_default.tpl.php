<?php /* Smarty version Smarty-3.1.19, created on 2017-11-23 23:03:41
         compiled from "/var/www/debut/E_commerce_Turbo_Shop/admin/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19954647095a1753cd4c83f8-45330416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2cb13aea72be97e03030cbfac531ad081d49b83' => 
    array (
      0 => '/var/www/debut/E_commerce_Turbo_Shop/admin/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1511450276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19954647095a1753cd4c83f8-45330416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1753cd4d5478_22066571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1753cd4d5478_22066571')) {function content_5a1753cd4d5478_22066571($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
