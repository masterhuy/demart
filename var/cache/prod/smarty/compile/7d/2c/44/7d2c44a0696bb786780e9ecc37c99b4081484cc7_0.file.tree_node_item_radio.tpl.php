<?php
/* Smarty version 3.1.33, created on 2020-06-08 07:48:13
  from 'D:\xamppp\htdocs\jms_demart\admin041sahknz\themes\default\template\helpers\tree\tree_node_item_radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edddf2d3ebaf7_40646245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d2c44a0696bb786780e9ecc37c99b4081484cc7' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\admin041sahknz\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1587030597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edddf2d3ebaf7_40646245 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
