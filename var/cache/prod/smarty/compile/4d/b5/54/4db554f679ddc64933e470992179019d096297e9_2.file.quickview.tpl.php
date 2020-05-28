<?php
/* Smarty version 3.1.33, created on 2020-05-28 08:33:39
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\_partials\quickview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecf69533d4b89_53846410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4db554f679ddc64933e470992179019d096297e9' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\catalog\\_partials\\quickview.tpl',
      1 => 1590641586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_5ecf69533d4b89_53846410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="quickview-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="modal fade quickview-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog container" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="modal-body" id="main">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 left">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12800498515ecf69533b9607_59593714', 'product_cover_thumbnails');
?>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 right">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16681473045ecf69533bd482_92978604', 'page_header_container');
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6570392325ecf69533c1301_62618046', 'product_additional_info');
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21249825725ecf69533c1305_51042513', 'product_prices');
?>


                        <div class="product-information">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15997500945ecf69533c5188_19350523', 'product_description_short');
?>


                            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7450385455ecf69533c9002_92239021', 'product_customization');
?>

                            <?php }?>

                            <div class="product-actions">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_840035205ecf69533cce87_84104464', 'product_buy');
?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
/* {block 'product_cover_thumbnails'} */
class Block_12800498515ecf69533b9607_59593714 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_12800498515ecf69533b9607_59593714',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_title'} */
class Block_5564751265ecf69533bd482_02619696 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_449984785ecf69533bd489_80852484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <h2 itemprop="name" class="product-name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5564751265ecf69533bd482_02619696', 'page_title', $this->tplIndex);
?>
</h2>
                            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_16681473045ecf69533bd482_92978604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_16681473045ecf69533bd482_92978604',
  ),
  'page_header' => 
  array (
    0 => 'Block_449984785ecf69533bd489_80852484',
  ),
  'page_title' => 
  array (
    0 => 'Block_5564751265ecf69533bd482_02619696',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_449984785ecf69533bd489_80852484', 'page_header', $this->tplIndex);
?>

                        <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_additional_info'} */
class Block_6570392325ecf69533c1301_62618046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_additional_info' => 
  array (
    0 => 'Block_6570392325ecf69533c1301_62618046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_prices'} */
class Block_21249825725ecf69533c1305_51042513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_21249825725ecf69533c1305_51042513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_15997500945ecf69533c5188_19350523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_15997500945ecf69533c5188_19350523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-desc"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],250,"..." ));?>
</div>
                            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_7450385455ecf69533c9002_92239021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_7450385455ecf69533c9002_92239021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
                                <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_discounts'} */
class Block_721899685ecf69533d0d09_62555438 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_variants'} */
class Block_13867981175ecf69533d0d03_40533920 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_add_to_cart'} */
class Block_20171146085ecf69533d4b84_75550367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_buy'} */
class Block_840035205ecf69533cce87_84104464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_840035205ecf69533cce87_84104464',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_721899685ecf69533d0d09_62555438',
  ),
  'product_variants' => 
  array (
    0 => 'Block_13867981175ecf69533d0d03_40533920',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_20171146085ecf69533d4b84_75550367',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                                        <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                                        <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_721899685ecf69533d0d09_62555438', 'product_discounts', $this->tplIndex);
?>


                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13867981175ecf69533d0d03_40533920', 'product_variants', $this->tplIndex);
?>


                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20171146085ecf69533d4b84_75550367', 'product_add_to_cart', $this->tplIndex);
?>


                                    </form>
                                <?php
}
}
/* {/block 'product_buy'} */
}
