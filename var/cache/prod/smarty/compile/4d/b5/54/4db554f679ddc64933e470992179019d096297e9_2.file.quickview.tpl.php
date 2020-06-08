<?php
/* Smarty version 3.1.33, created on 2020-06-05 09:59:03
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\_partials\quickview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eda09573b2c70_53314423',
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
function content_5eda09573b2c70_53314423 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16576668705eda09573976e8_53906286', 'product_cover_thumbnails');
?>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 right">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16553028245eda095739b568_46765091', 'page_header_container');
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11357054295eda095739f3e9_55360597', 'product_additional_info');
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2397690375eda095739f3e2_87856170', 'product_prices');
?>


                        <div class="product-information">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17002274405eda09573a3279_61071230', 'product_description_short');
?>


                            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10694284555eda09573a70f2_36285650', 'product_customization');
?>

                            <?php }?>

                            <div class="product-actions">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14950013635eda09573aaf79_14385563', 'product_buy');
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
class Block_16576668705eda09573976e8_53906286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_16576668705eda09573976e8_53906286',
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
class Block_5415477855eda095739b566_96114733 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_10655939795eda095739b565_15112043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <h2 itemprop="name" class="product-name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5415477855eda095739b566_96114733', 'page_title', $this->tplIndex);
?>
</h2>
                            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_16553028245eda095739b568_46765091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_16553028245eda095739b568_46765091',
  ),
  'page_header' => 
  array (
    0 => 'Block_10655939795eda095739b565_15112043',
  ),
  'page_title' => 
  array (
    0 => 'Block_5415477855eda095739b566_96114733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10655939795eda095739b565_15112043', 'page_header', $this->tplIndex);
?>

                        <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_additional_info'} */
class Block_11357054295eda095739f3e9_55360597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_additional_info' => 
  array (
    0 => 'Block_11357054295eda095739f3e9_55360597',
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
class Block_2397690375eda095739f3e2_87856170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_2397690375eda095739f3e2_87856170',
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
class Block_17002274405eda09573a3279_61071230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_17002274405eda09573a3279_61071230',
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
class Block_10694284555eda09573a70f2_36285650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_10694284555eda09573a70f2_36285650',
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
class Block_20496512295eda09573aedf0_23861057 extends Smarty_Internal_Block
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
class Block_5903215965eda09573aedf3_80912637 extends Smarty_Internal_Block
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
class Block_15682160125eda09573b2c72_65815503 extends Smarty_Internal_Block
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
class Block_14950013635eda09573aaf79_14385563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_14950013635eda09573aaf79_14385563',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_20496512295eda09573aedf0_23861057',
  ),
  'product_variants' => 
  array (
    0 => 'Block_5903215965eda09573aedf3_80912637',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_15682160125eda09573b2c72_65815503',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20496512295eda09573aedf0_23861057', 'product_discounts', $this->tplIndex);
?>


                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5903215965eda09573aedf3_80912637', 'product_variants', $this->tplIndex);
?>


                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15682160125eda09573b2c72_65815503', 'product_add_to_cart', $this->tplIndex);
?>


                                    </form>
                                <?php
}
}
/* {/block 'product_buy'} */
}
