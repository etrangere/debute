<?php /* Smarty version Smarty-3.1.14, created on 2018-02-02 04:30:15
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/themes/default-bootstrap/modules/homefeatured/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12719534115a73db479c9ff1-38537030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11bf6d31d6e9813aaf344f40c359a2b876eb9def' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/themes/default-bootstrap/modules/homefeatured/tab.tpl',
      1 => 1395073066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12719534115a73db479c9ff1-38537030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a73db479d9a40_02333138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73db479d9a40_02333138')) {function content_5a73db479d9a40_02333138($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>