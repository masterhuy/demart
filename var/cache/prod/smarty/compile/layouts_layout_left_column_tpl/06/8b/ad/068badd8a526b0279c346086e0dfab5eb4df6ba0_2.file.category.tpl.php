<?php
/* Smarty version 3.1.33, created on 2020-06-15 04:18:19
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\listing\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee6e87b803537_36487732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '068badd8a526b0279c346086e0dfab5eb4df6ba0' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\catalog\\listing\\category.tpl',
      1 => 1573458692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-header.tpl' => 1,
  ),
),false)) {
function content_5ee6e87b803537_36487732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10539919915ee6e87b803535_27036528', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_10539919915ee6e87b803535_27036528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_10539919915ee6e87b803535_27036528',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
?>
 <?php
}
}
/* {/block 'product_list_header'} */
}
