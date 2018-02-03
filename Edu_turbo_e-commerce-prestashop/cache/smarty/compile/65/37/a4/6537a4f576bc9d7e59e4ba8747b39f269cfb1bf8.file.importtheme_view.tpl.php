<?php /* Smarty version Smarty-3.1.14, created on 2018-02-02 04:30:08
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/admin/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8517932125a73db40038133-70743225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6537a4f576bc9d7e59e4ba8747b39f269cfb1bf8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/debut/4.Edu_turbo_e-commerce-prestashop/admin/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl',
      1 => 1395073064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8517932125a73db40038133-70743225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add_new_theme_label' => 0,
    'add_new_theme_href' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a73db40041b27_11043166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73db40041b27_11043166')) {function content_5a73db40041b27_11043166($_smarty_tpl) {?>
<div class="panel">
    <h3>
        <i class="icon-picture"></i><?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>

    </h3>
    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['add_new_theme_href']->value;?>
"><i class="icon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
</a>
</div>
<?php }} ?>