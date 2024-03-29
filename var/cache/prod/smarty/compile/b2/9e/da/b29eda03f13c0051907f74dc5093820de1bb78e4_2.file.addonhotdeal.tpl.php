<?php
/* Smarty version 3.1.33, created on 2020-07-02 09:01:46
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\modules\jmspagebuilder\views\templates\hook\addonhotdeal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efd946ad0af68_87923803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b29eda03f13c0051907f74dc5093820de1bb78e4' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\modules\\jmspagebuilder\\views\\templates\\hook\\addonhotdeal.tpl',
      1 => 1589278967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_5efd946ad0af68_87923803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
	var h_items = <?php if ($_smarty_tpl->tpl_vars['items_show']->value) {
echo $_smarty_tpl->tpl_vars['items_show']->value;
} else { ?>1<?php }?>,
	    h_itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['items_show']->value) {
echo $_smarty_tpl->tpl_vars['items_show']->value;
} else { ?>1<?php }?>,
	    h_itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['items_show_md']->value) {
echo $_smarty_tpl->tpl_vars['items_show_md']->value;
} else { ?>1<?php }?>,
	    h_itemsTablet = <?php if ($_smarty_tpl->tpl_vars['items_show_sm']->value) {
echo $_smarty_tpl->tpl_vars['items_show_sm']->value;
} else { ?>1<?php }?>,
	    h_itemsMobile = <?php if ($_smarty_tpl->tpl_vars['items_show_xs']->value) {
echo $_smarty_tpl->tpl_vars['items_show_xs']->value;
} else { ?>1<?php }?>;
	    h_nav = <?php if ($_smarty_tpl->tpl_vars['navigation']->value == 1) {?>true<?php } else { ?>false<?php }?>;
		h_pag = <?php if ($_smarty_tpl->tpl_vars['pagination']->value == 1) {?>true<?php } else { ?>false<?php }?>;
		h_auto_play_carousel = <?php if ($_smarty_tpl->tpl_vars['autoplay']->value == 1) {?>true<?php } else { ?>false<?php }?>;
<?php echo '</script'; ?>
>
<div class="jms-hotdeal">
	<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
	<div class="addon-title">
		<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
		<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
	<?php }?>
	<div class="product_box">
		<div class="hotdeal-carousel">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>	
				<div class="item">
					<div class="product-miniature js-product-miniature productbox-1" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
						<div class="product-preview">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1552826765efd946ac95c64_82631232', 'product_thumbnail');
?>

							<div class="product-flags">
								<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
									<div class="discount-percentage discount">
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Off','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
										<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'], ENT_QUOTES, 'UTF-8');?>
</span>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
									<span class="discount-amount discount"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
								<?php }?>
							</div>
						</div>
						<div class="product-info">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12970859135efd946acbcd64_27883741', 'product_reviews');
?>

							<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants'] && $_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_variant']) {?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5658332215efd946acbcd61_99068494', 'product_variants');
?>

							<?php }?>
							
							<div class="title-price align-items-center">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8405929965efd946acbcd66_34441202', 'product_name');
?>

							</div>
							<div class="product-action">
								<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_price']) {?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16956364825efd946acbcd64_60309557', 'product_price_and_shipping');
?>

								<?php }?>
								<?php $_smarty_tpl->_assignInScope('str_at', strpos($_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon'],"_"));?>
								<?php if ($_smarty_tpl->tpl_vars['str_at']->value && $_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon_thickness']) {?>
									<?php $_smarty_tpl->_assignInScope('cart_icon', substr($_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon'],0,($_smarty_tpl->tpl_vars['str_at']->value)));?>
									<?php $_smarty_tpl->_assignInScope('cart_icon', ($_smarty_tpl->tpl_vars['cart_icon']->value).($_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon_thickness']));?>
								<?php } else { ?>
									<?php $_smarty_tpl->_assignInScope('cart_icon', $_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon']);?>
								<?php }?>
								<div class="product-sold">
									<div class="sold-quantyties">
										<div class="already-sold">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sold','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
:
											<span>
												<?php if ($_smarty_tpl->tpl_vars['product']->value['sold'] != '') {?>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['sold'], ENT_QUOTES, 'UTF-8');?>

												<?php } else { ?>
													0
												<?php }?>
											</span>
										</div>
										<div class="available">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'], ENT_QUOTES, 'UTF-8');?>
</span>
										</div>
									</div>

									<div class="proces-bars">
										<span style="width:<?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['product']->value['sold']/$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])*100, ENT_QUOTES, 'UTF-8');?>
%;"></span>
									</div>
									<div class="label-countdown"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hurry Up! Offer ends in:','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</div>
									<div class="countdown" id="countdown-<?php echo $_smarty_tpl->tpl_vars['hotdeals']->value[$_smarty_tpl->tpl_vars['k']->value]['id_hotdeals'];?>
"><?php echo $_smarty_tpl->tpl_vars['hotdeals']->value[$_smarty_tpl->tpl_vars['k']->value]['deals_time'];?>
</div>
								</div>
							</div>
							<div class="product-short-desc">
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],300,'...' ));?>

							</div>
						</div>
					</div>
		  		</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
	<?php if (($_smarty_tpl->tpl_vars['showall_link']->value == '1')) {?> 
		<div class="hotdeal-viewall col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('hotdeals','allproduct');?>
" class="btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View All Product','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
</a>
		</div>
	<?php }?>
</div><?php }
/* {block 'product_thumbnail'} */
class Block_1552826765efd946ac95c64_82631232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_1552826765efd946ac95c64_82631232',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product-image<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_hover'] == 'swap-image' && isset($_smarty_tpl->tpl_vars['product']->value['images'][1]) && $_smarty_tpl->tpl_vars['product']->value['images'][1]) {?> swap-image<?php } else { ?> blur-image<?php }?>">
									<img class="img-responsive product-img1<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_lazyload']) {?> owl-lazy<?php }?>"
									<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_lazyload']) {?>data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?> src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
										alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
										title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
										data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
									/>
									<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_hover'] == 'swap-image' && isset($_smarty_tpl->tpl_vars['product']->value['images'][1]) && $_smarty_tpl->tpl_vars['product']->value['images'][1]) {?>
										<img class="img-responsive product-img2<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_lazyload']) {?> owl-lazy<?php }?>"
										<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_lazyload']) {?>data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?> src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
											alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['legend'], ENT_QUOTES, 'UTF-8');?>
"
											title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
											data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
										/>
									<?php }?>
								</a>
							<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_reviews'} */
class Block_12970859135efd946acbcd64_27883741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reviews' => 
  array (
    0 => 'Block_12970859135efd946acbcd64_27883741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

							<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_variants'} */
class Block_5658332215efd946acbcd61_99068494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_variants' => 
  array (
    0 => 'Block_5658332215efd946acbcd61_99068494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, true);
?>
								<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_name'} */
class Block_8405929965efd946acbcd66_34441202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_8405929965efd946acbcd66_34441202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<h3 class="product-title" itemprop="name"><a class="product-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
								<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_16956364825efd946acbcd64_60309557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_16956364825efd946acbcd64_60309557',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
										<div class="content_price">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

										<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

											<span class="old price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
										<?php }?>
										<span class="price new"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

										</div>
									<?php }?>
									<?php
}
}
/* {/block 'product_price_and_shipping'} */
}
