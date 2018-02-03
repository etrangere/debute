<?php /* Smarty version Smarty-3.1.14, created on 2018-02-02 04:38:04
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/modules/homeslider/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9811894395a73dd1c59efb1-56898348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a53dcff6849a54ea6bdd0979a9d86eefbb3068fb' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/modules/homeslider/views/templates/hook/header.tpl',
      1 => 1395073066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9811894395a73dd1c59efb1-56898348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a73dd1c6d62a4_79603227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73dd1c6d62a4_79603227')) {function content_5a73dd1c6d62a4_79603227($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)){?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_loop'=>$_smarty_tpl->tpl_vars['homeslider']->value['loop']),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_width'=>$_smarty_tpl->tpl_vars['homeslider']->value['width']),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_speed'=>$_smarty_tpl->tpl_vars['homeslider']->value['speed']),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_pause'=>$_smarty_tpl->tpl_vars['homeslider']->value['pause']),$_smarty_tpl);?>

<?php }?><?php }} ?>