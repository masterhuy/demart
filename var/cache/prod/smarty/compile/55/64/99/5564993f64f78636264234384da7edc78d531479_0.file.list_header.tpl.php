<?php
/* Smarty version 3.1.33, created on 2020-06-16 03:52:43
  from 'D:\xamppp\htdocs\jms_demart\admin041sahknz\themes\default\template\controllers\tracking\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee833fbc7c3e8_57042854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5564993f64f78636264234384da7edc78d531479' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\admin041sahknz\\themes\\default\\template\\controllers\\tracking\\helpers\\list\\list_header.tpl',
      1 => 1587030597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee833fbc7c3e8_57042854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2003067335ee833fbc78565_82954718', "preTable");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "preTable"} */
class Block_2003067335ee833fbc78565_82954718 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'preTable' => 
  array (
    0 => 'Block_2003067335ee833fbc78565_82954718',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['list_id']->value == 'empty_categories') {?>
		<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An empty category is a category that has no product directly associated to it. An empty category may however contain products through its subcategories.','d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>
</div>
	<?php }
}
}
/* {/block "preTable"} */
}
