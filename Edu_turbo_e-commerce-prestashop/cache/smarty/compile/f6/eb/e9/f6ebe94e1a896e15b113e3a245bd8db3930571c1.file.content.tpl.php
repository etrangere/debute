<?php /* Smarty version Smarty-3.1.14, created on 2018-02-02 04:30:02
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/admin/themes/default/template/controllers/addons_catalog/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11669737455a73db3a486038-75901913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6ebe94e1a896e15b113e3a245bd8db3930571c1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/admin/themes/default/template/controllers/addons_catalog/content.tpl',
      1 => 1395073064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11669737455a73db3a486038-75901913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a73db3a4f4c12_04994912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73db3a4f4c12_04994912')) {function content_5a73db3a4f4c12_04994912($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value){?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php }else{ ?>
	<iframe frameborder="no" class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>