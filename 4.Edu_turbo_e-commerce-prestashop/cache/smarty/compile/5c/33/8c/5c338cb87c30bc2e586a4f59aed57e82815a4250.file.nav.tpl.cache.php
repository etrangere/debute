<?php /* Smarty version Smarty-3.1.14, created on 2018-02-02 04:38:07
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/themes/default-bootstrap/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10457253255a73dd1fa7ed59-59010016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c338cb87c30bc2e586a4f59aed57e82815a4250' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/themes/default-bootstrap/modules/blockcontact/nav.tpl',
      1 => 1395073066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10457253255a73dd1fa7ed59-59010016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a73dd1fb357d9_34036065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73dd1fb357d9_34036065')) {function content_5a73dd1fb357d9_34036065($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value){?>
	<span class="shop-phone">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now toll free:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?><?php }} ?>