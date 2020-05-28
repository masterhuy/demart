<?php
/* Smarty version 3.1.33, created on 2020-05-28 08:33:39
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\_partials\product-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecf69534e2442_83458161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61235d5d657ee3b882a949bc692bdb8d91d2da22' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\catalog\\_partials\\product-prices.tpl',
      1 => 1590381854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecf69534e2442_83458161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <div class="product-prices content_price">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9037652215ecf69534b74b0_50436510', 'product_discount');
?>


	    <div itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
" class="price new"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2476631065ecf69534bb331_08276506', 'product_price');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19132972205ecf69534c3035_13371068', 'product_without_taxes');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6228555125ecf69534cad48_63085316', 'product_pack_price');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1208562725ecf69534cad47_67203334', 'product_ecotax');
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20018264895ecf69534d68c0_69027451', 'product_availability');
?>

  </div>
<?php }
}
/* {block 'product_discount'} */
class Block_9037652215ecf69534b74b0_50436510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_discount' => 
  array (
    0 => 'Block_9037652215ecf69534b74b0_50436510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                <div class="price old"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</div>
            <?php }?>
        <?php
}
}
/* {/block 'product_discount'} */
/* {block 'product_unit_price'} */
class Block_9978388305ecf69534bf1b4_48224150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?>
                        <p class="product-unit-price sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(%unit_price%)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full'])),$_smarty_tpl ) );?>
</p>
                    <?php }?>
                <?php
}
}
/* {/block 'product_unit_price'} */
/* {block 'product_price'} */
class Block_2476631065ecf69534bb331_08276506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price' => 
  array (
    0 => 'Block_2476631065ecf69534bb331_08276506',
  ),
  'product_unit_price' => 
  array (
    0 => 'Block_9978388305ecf69534bf1b4_48224150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div
                class="product-price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>"
                itemprop="offers"
                itemscope
                itemtype="https://schema.org/Offer"
            >
                <link itemprop="availability" href="https://schema.org/InStock"/>
                <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9978388305ecf69534bf1b4_48224150', 'product_unit_price', $this->tplIndex);
?>

            </div>
        <?php
}
}
/* {/block 'product_price'} */
/* {block 'product_without_taxes'} */
class Block_19132972205ecf69534c3035_13371068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_without_taxes' => 
  array (
    0 => 'Block_19132972205ecf69534c3035_13371068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
                <p class="product-without-taxes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl ) );?>
</p>
            <?php }?>
        <?php
}
}
/* {/block 'product_without_taxes'} */
/* {block 'product_pack_price'} */
class Block_6228555125ecf69534cad48_63085316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_pack_price' => 
  array (
    0 => 'Block_6228555125ecf69534cad48_63085316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?>
                <p class="product-pack-price"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl ) );?>
</span></p>
            <?php }?>
        <?php
}
}
/* {/block 'product_pack_price'} */
/* {block 'product_ecotax'} */
class Block_1208562725ecf69534cad47_67203334 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_ecotax' => 
  array (
    0 => 'Block_1208562725ecf69534cad47_67203334',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?>
                <p class="price-ecotax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl ) );?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                    <?php }?>
                </p>
            <?php }?>
        <?php
}
}
/* {/block 'product_ecotax'} */
/* {block 'product_availability'} */
class Block_20018264895ecf69534d68c0_69027451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_20018264895ecf69534d68c0_69027451',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
            <span id="product-availability">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'last item','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                <?php } else { ?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
            </span>
            <?php }?>
        <?php
}
}
/* {/block 'product_availability'} */
}
