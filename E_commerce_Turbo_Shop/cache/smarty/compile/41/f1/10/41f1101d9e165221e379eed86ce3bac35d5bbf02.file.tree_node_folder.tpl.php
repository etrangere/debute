<?php /* Smarty version Smarty-3.1.19, created on 2017-11-23 23:03:42
         compiled from "/var/www/debut/E_commerce_Turbo_Shop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13812640995a1753ce763429-90081619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41f1101d9e165221e379eed86ce3bac35d5bbf02' => 
    array (
      0 => '/var/www/debut/E_commerce_Turbo_Shop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1511450276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13812640995a1753ce763429-90081619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1753ce76b438_33676884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1753ce76b438_33676884')) {function content_5a1753ce76b438_33676884($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/debut/E_commerce_Turbo_Shop/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
