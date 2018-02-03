<?php /* Smarty version Smarty-3.1.14, created on 2018-02-02 04:38:06
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/themes/default-bootstrap/modules/blockbestsellers/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9121802195a73dd1e33ccc0-71824513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '165f174b6f60fda9bf4251a74a6afa7fb6ce6245' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/themes/default-bootstrap/modules/blockbestsellers/tab.tpl',
      1 => 1395073066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9121802195a73dd1e33ccc0-71824513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a73dd1e3dc728_88881667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73dd1e3dc728_88881667')) {function content_5a73dd1e3dc728_88881667($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li><?php }} ?>