<?php
/* Smarty version 3.1.33, created on 2020-05-28 09:00:04
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\product-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecf6f84f0aa34_16114870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2a5c4149997cba80482b2f69415a7b5873097a3' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\catalog\\product-content.tpl',
      1 => 1590400010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_5ecf6f84f0aa34_16114870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="row product-detail default">
    <div class="pb-left-column col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="pd-left-content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18512481805ecf6f84ed00a2_84047901', 'page_content_container');
?>

        </div>
    </div>
    <div class="pb-right-column col-lg-6 col-md-6 col-sm-6 col-12">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1844905205ecf6f84ed3f26_96121763', 'page_header_container');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20083029115ecf6f84ed7da2_03881552', 'product_additional_info');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17908542005ecf6f84ed7da0_54040584', 'product_prices');
?>


        <div class="product-information">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9603600665ecf6f84edbc29_09731459', 'product_description_short');
?>


            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] > 0) {?>
                <div class="specific_prices">
                    <div class="countdown-box">
                        <div class="countdown"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'], ENT_QUOTES, 'UTF-8');?>
</div>
                    </div>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5956184765ecf6f84ee77a3_10697445', 'product_customization');
?>

            <?php }?>

            <div class="product-actions">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_610251585ecf6f84ee77a0_29649301', 'product_buy');
?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['product_page_sharing']) {?>
                <!-- Go to www.addthis.com/dashboard to customize your tools --> 
                <div class="addthis_inline_share_toolbox_fx4m"></div>
            <?php }?>
        </div>
    </div>
</div>
<?php }
/* {block 'product_cover_thumbnails'} */
class Block_7061862265ecf6f84ed00a1_40712046 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_18765977975ecf6f84ed00a3_53138641 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
                                
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7061862265ecf6f84ed00a1_40712046', 'product_cover_thumbnails', $this->tplIndex);
?>

                    <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18512481805ecf6f84ed00a2_84047901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_18512481805ecf6f84ed00a2_84047901',
  ),
  'page_content' => 
  array (
    0 => 'Block_18765977975ecf6f84ed00a3_53138641',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_7061862265ecf6f84ed00a1_40712046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <section class="page-content" id="content">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18765977975ecf6f84ed00a3_53138641', 'page_content', $this->tplIndex);
?>

                </section>
            <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_10251523635ecf6f84ed3f23_17411203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_3358941925ecf6f84ed3f23_95267865 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h1 itemprop="name" class="product-name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10251523635ecf6f84ed3f23_17411203', 'page_title', $this->tplIndex);
?>
</h1>
            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_1844905205ecf6f84ed3f26_96121763 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_1844905205ecf6f84ed3f26_96121763',
  ),
  'page_header' => 
  array (
    0 => 'Block_3358941925ecf6f84ed3f23_95267865',
  ),
  'page_title' => 
  array (
    0 => 'Block_10251523635ecf6f84ed3f23_17411203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3358941925ecf6f84ed3f23_95267865', 'page_header', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_additional_info'} */
class Block_20083029115ecf6f84ed7da2_03881552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_additional_info' => 
  array (
    0 => 'Block_20083029115ecf6f84ed7da2_03881552',
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
class Block_17908542005ecf6f84ed7da0_54040584 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_17908542005ecf6f84ed7da0_54040584',
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
class Block_9603600665ecf6f84edbc29_09731459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_9603600665ecf6f84edbc29_09731459',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-desc"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],450,"..." ));?>
</div>
            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_5956184765ecf6f84ee77a3_10697445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_5956184765ecf6f84ee77a3_10697445',
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
/* {block 'product_miniature'} */
class Block_3538068885ecf6f84eef4a2_16309300 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
                                                        <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_19458209395ecf6f84eeb620_99795042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                                <section class="product-pack">
                                    <h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
                                    <article>
                                        <div class="card">
                                            <div class="pack-product-container">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Products</th>
                                                            <th>Price</th>
                                                            <th>Quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3538068885ecf6f84eef4a2_16309300', 'product_miniature', $this->tplIndex);
?>

                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </table>
                                                </div>
                                        </div>
                                    </article>
                                </section>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_7435990275ecf6f84ef3327_57532296 extends Smarty_Internal_Block
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
class Block_3743990485ecf6f84ef71b7_95614254 extends Smarty_Internal_Block
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
class Block_3632857945ecf6f84ef71b9_54285557 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_8260236045ecf6f84f06bb5_72217171 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                        <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_610251585ecf6f84ee77a0_29649301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_610251585ecf6f84ee77a0_29649301',
  ),
  'product_pack' => 
  array (
    0 => 'Block_19458209395ecf6f84eeb620_99795042',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_3538068885ecf6f84eef4a2_16309300',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_7435990275ecf6f84ef3327_57532296',
  ),
  'product_variants' => 
  array (
    0 => 'Block_3743990485ecf6f84ef71b7_95614254',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_3632857945ecf6f84ef71b9_54285557',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_8260236045ecf6f84f06bb5_72217171',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19458209395ecf6f84eeb620_99795042', 'product_pack', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7435990275ecf6f84ef3327_57532296', 'product_discounts', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3743990485ecf6f84ef71b7_95614254', 'product_variants', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3632857945ecf6f84ef71b9_54285557', 'product_add_to_cart', $this->tplIndex);
?>

                        <ul class="other-info">
                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display']) && $_smarty_tpl->tpl_vars['product']->value['reference_to_display'] != '') {?>
                                <li class="product-reference">
                                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product code','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
: </label>
                                    <span itemprop="sku"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </li>
                            <?php }?>
                            <!-- availability or doesntExist -->
                            <li id="availability_statut">
                                <label id="availability_label">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                </label>
                                <span id="availability_value" class="label-availability">
                                    <?php if (intval($_smarty_tpl->tpl_vars['product']->value['quantity']) <= 0) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                    <?php } else { ?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                    <?php }?>
                                </span>
                            </li>
                            <li>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['additional_shipping_cost'] > 0) {?>
                                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping tax: '),$_smarty_tpl ) );?>
</label>
                                    <span class="shipping_cost"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['additional_shipping_cost'], ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php } else { ?>
                                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping tax:'),$_smarty_tpl ) );?>
</label>
                                    <span class="shipping_cost"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Free'),$_smarty_tpl ) );?>
</span>
                                <?php }?>
                            </li>
                        </ul>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8260236045ecf6f84f06bb5_72217171', 'product_refresh', $this->tplIndex);
?>

                    </form>
                <?php
}
}
/* {/block 'product_buy'} */
}
