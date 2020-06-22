<?php
/* Smarty version 3.1.33, created on 2020-06-22 07:48:50
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\_partials\products-big.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef05452e6f2c9_65423252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f52c5afb9fb6fb029c848ca17671963c6bcd5cd' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\catalog\\_partials\\products-big.tpl',
      1 => 1586831876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_5ef05452e6f2c9_65423252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_type'] == 'product-1') {?>
    <?php $_smarty_tpl->_assignInScope('productbox', 'catalog/_partials/miniatures/product-1-big.tpl');
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_type'] == 'product-2') {?>
    <?php $_smarty_tpl->_assignInScope('productbox', 'catalog/_partials/miniatures/product-2-big.tpl');
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_type'] == 'product-3') {?>
    <?php $_smarty_tpl->_assignInScope('productbox', 'catalog/_partials/miniatures/product-3-big.tpl');
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_type'] == 'product-4') {?>
    <?php $_smarty_tpl->_assignInScope('productbox', 'catalog/_partials/miniatures/product-4-big.tpl');
}?>
<div id="js-product-list">
    <div class="products row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'product', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10898654875ef05452e675c7_51765648', 'product_miniature');
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21059091435ef05452e6f2c9_06056823', 'pagination');
?>

</div>
<?php }
/* {block 'product_miniature'} */
class Block_10898654875ef05452e675c7_51765648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_10898654875ef05452e675c7_51765648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['productbox']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'index'=>$_smarty_tpl->tpl_vars['index']->value), 0, true);
?>
            <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'pagination'} */
class Block_21059091435ef05452e6f2c9_06056823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_21059091435ef05452e6f2c9_06056823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
    <?php
}
}
/* {/block 'pagination'} */
}
