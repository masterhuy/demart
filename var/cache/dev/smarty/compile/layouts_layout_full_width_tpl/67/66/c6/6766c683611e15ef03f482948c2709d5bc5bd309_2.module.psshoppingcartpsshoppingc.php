<?php
/* Smarty version 3.1.33, created on 2020-05-18 08:48:58
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ec23dea328768_16961122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6766c683611e15ef03f482948c2709d5bc5bd309' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1587439943,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' => 1,
  ),
),false)) {
function content_5ec23dea328768_16961122 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xamppp\htdocs\jms_demart/themes/jms_demart/modules/ps_shoppingcart/ps_shoppingcart-dropdown-2.tpl --><div class="btn-group blockcart type-2 cart-preview dropdown<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['addtocart_type'] != '') {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['addtocart_type'], ENT_QUOTES, 'UTF-8');
}?>" id="cart_block" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<a href="#" class="cart-icon" data-toggle="dropdown" data-display="static" aria-expanded="false">
		<?php $_smarty_tpl->_assignInScope('str_at', strpos($_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon'],"_"));?>
		<?php if ($_smarty_tpl->tpl_vars['str_at']->value && $_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon_thickness']) {?>
			<?php $_smarty_tpl->_assignInScope('cart_icon', substr($_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon'],0,($_smarty_tpl->tpl_vars['str_at']->value)));?>
			<?php $_smarty_tpl->_assignInScope('cart_icon', ($_smarty_tpl->tpl_vars['cart_icon']->value).($_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon_thickness']));?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('cart_icon', $_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon']);?>
		<?php }?>
		<i class="lnr lnr-cart"></i>
		<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['addtocart_type'] == 'circle-filled') {?>
			<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?><span class="circle-notify"></span><?php }?>
		<?php } else { ?>
			<span class="ajax_cart_quantity">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
)</span>
		<?php }?>
		<span class="cart_block_total ajax_block_cart_total"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
	</a>
	<div class="dropdown-menu shoppingcart-box<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['cart_type'] == 'sidebar') {?> shoppingcart-sidebar<?php }?>">
		<div class="cart-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
)</div>
		<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] == 0) {?>
		<span class="ajax_cart_no_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is no product','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
		<?php } else { ?>
			<ul class="list products cart_block_list">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
					<li><?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] != 0) {?>
			<div class="billing-info">
				<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['cart_subtotal'] == 1) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type'] != '') {?>
							<div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
 cart-prices-line">
								<span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
								<span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
							</div>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['cart_total'] == 1) {?>
					<div class="cart-total cart-prices-line">
						<span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
						<span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
					</div>
				<?php }?>
			</div>
			<div class="cart-button">
				<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['cart_links'] && in_array('checkout',$_smarty_tpl->tpl_vars['jmsSetting']->value['cart_links'])) {?>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order'),$_smarty_tpl ) );?>
" class="btn-default checkout-btn w-100 text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['cart_links'] && in_array('cart',$_smarty_tpl->tpl_vars['jmsSetting']->value['cart_links'])) {?>
					<a class="btn cart-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" rel="nofollow">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

					</a>
				<?php }?>
			</div>
		<?php }?>
	</div>
</div>
<!-- end D:\xamppp\htdocs\jms_demart/themes/jms_demart/modules/ps_shoppingcart/ps_shoppingcart-dropdown-2.tpl --><?php }
}
