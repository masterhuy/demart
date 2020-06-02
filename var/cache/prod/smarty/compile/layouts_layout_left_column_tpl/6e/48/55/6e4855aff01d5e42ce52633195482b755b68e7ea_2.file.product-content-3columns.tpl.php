<?php
/* Smarty version 3.1.33, created on 2020-06-02 10:43:14
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\product-content-3columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed61f329d6c43_33611275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e4855aff01d5e42ce52633195482b755b68e7ea' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\catalog\\product-content-3columns.tpl',
      1 => 1584606890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails-bottom.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_5ed61f329d6c43_33611275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="row product-detail product-layout-3columns">
	<div class="pb-left-column col-12 col-sm-12 col-md-4 col-lg-4">
		<div class="pd-left-content">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16574920525ed61f32988a48_60924206', 'page_content_container');
?>

			</div>
		</div>
    <div class="pb-right-column col-12 col-sm-12 col-md-8 col-lg-8">
        <div class="row">
			<div class="column-left col-lg-7 col-md-12 col-sm-12 col-12">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19782166665ed61f329afb40_13610416', 'page_header_container');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12302510825ed61f329afb41_19256369', 'product_prices');
?>

				<div class="product-information">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14856971605ed61f329afb41_09169362', 'product_description_short');
?>


					<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8408037755ed61f329afb43_64544077', 'product_customization');
?>

					<?php }?>
				</div>
          	</div>
			<div class="column-right col-lg-5 col-md-12 col-sm-12 col-12">
				<div class="product-actions">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16650979205ed61f329afb48_85252067', 'product_buy');
?>

				</div>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

			</div>
  		</div>
    </div>
</div>
<?php }
/* {block 'product_cover_thumbnails'} */
class Block_3242806965ed61f329afb45_72332079 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
                      
					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_7642229355ed61f329afb46_86612595 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3242806965ed61f329afb45_72332079', 'product_cover_thumbnails', $this->tplIndex);
?>

				<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16574920525ed61f32988a48_60924206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_16574920525ed61f32988a48_60924206',
  ),
  'page_content' => 
  array (
    0 => 'Block_7642229355ed61f329afb46_86612595',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_3242806965ed61f329afb45_72332079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<section class="page-content" id="content">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7642229355ed61f329afb46_86612595', 'page_content', $this->tplIndex);
?>

			</section>
			<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_14777186975ed61f329afb45_45289029 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_11003378385ed61f329afb40_32530022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<h1 class="product-name" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14777186975ed61f329afb45_45289029', 'page_title', $this->tplIndex);
?>
</h1>
					<?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_19782166665ed61f329afb40_13610416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_19782166665ed61f329afb40_13610416',
  ),
  'page_header' => 
  array (
    0 => 'Block_11003378385ed61f329afb40_32530022',
  ),
  'page_title' => 
  array (
    0 => 'Block_14777186975ed61f329afb45_45289029',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11003378385ed61f329afb40_32530022', 'page_header', $this->tplIndex);
?>

				<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_12302510825ed61f329afb41_19256369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_12302510825ed61f329afb41_19256369',
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
class Block_14856971605ed61f329afb41_09169362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_14856971605ed61f329afb41_09169362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-desc"itemprop="description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],800,"..." ));?>
</div>
					<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_8408037755ed61f329afb43_64544077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_8408037755ed61f329afb43_64544077',
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
class Block_19398342525ed61f329afb45_94434857 extends Smarty_Internal_Block
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
class Block_21015997955ed61f329afb48_53554945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
								<section class="product-pack">
									<h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19398342525ed61f329afb45_94434857', 'product_miniature', $this->tplIndex);
?>

									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</section>
							<?php }?>
							<?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_16179561475ed61f329afb48_64431604 extends Smarty_Internal_Block
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
class Block_12928125215ed61f329afb41_29727929 extends Smarty_Internal_Block
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
class Block_4439188925ed61f329afb49_28447019 extends Smarty_Internal_Block
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
class Block_12629964185ed61f329afb41_77888786 extends Smarty_Internal_Block
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
class Block_16650979205ed61f329afb48_85252067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_16650979205ed61f329afb48_85252067',
  ),
  'product_pack' => 
  array (
    0 => 'Block_21015997955ed61f329afb48_53554945',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_19398342525ed61f329afb45_94434857',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_16179561475ed61f329afb48_64431604',
  ),
  'product_variants' => 
  array (
    0 => 'Block_12928125215ed61f329afb41_29727929',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_4439188925ed61f329afb49_28447019',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_12629964185ed61f329afb41_77888786',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21015997955ed61f329afb48_53554945', 'product_pack', $this->tplIndex);
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16179561475ed61f329afb48_64431604', 'product_discounts', $this->tplIndex);
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12928125215ed61f329afb41_29727929', 'product_variants', $this->tplIndex);
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4439188925ed61f329afb49_28447019', 'product_add_to_cart', $this->tplIndex);
?>


							<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['product_page_sharing']) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

							<?php }?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12629964185ed61f329afb41_77888786', 'product_refresh', $this->tplIndex);
?>

						</form>
					<?php
}
}
/* {/block 'product_buy'} */
}
