<?php
/* Smarty version 3.1.33, created on 2020-06-18 08:15:05
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\modules\jmspagebuilder\views\templates\hook\addonmegaproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eeb147946de00_54198924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81c0aa00aaaa976d48385cfccffef70c99d86ebf' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\modules\\jmspagebuilder\\views\\templates\\hook\\addonmegaproduct.tpl',
      1 => 1591322683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5eeb147946de00_54198924 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-tab <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<div class="addon-tab-title">
		<h3>
			<i class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['icon_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i>
			<span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['categoryname']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
		</h3>
	</div>
	<?php $_smarty_tpl->_assignInScope('subcats', $_smarty_tpl->tpl_vars['subcats']->value);?>
	<div class="tabs-navigation">
		<ul class="nav nav-tabs">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcats']->value, 'sub', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['sub']->value) {
?>
			<?php $_smarty_tpl->_assignInScope('cat_products', $_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->tpl_vars['k']->value]);?>
			<?php if (!empty($_smarty_tpl->tpl_vars['cat_products']->value)) {?>
			<li class="nav-item">
				<a href="#mega-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value['id_category'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="nav-link<?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?> active<?php }?>" data-toggle="tab">
					<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

				</a>
			</li>
			<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</div>
<div class="mega-box-content">
		<div class="inner">
			<?php if ($_smarty_tpl->tpl_vars['hor_img1']->value || $_smarty_tpl->tpl_vars['hor_img2']->value) {?>
			<div class="hor-img">
				<?php if ($_smarty_tpl->tpl_vars['hor_img1']->value) {?>
				<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hor_img1']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" class="img-responsive" />
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['hor_img2']->value) {?>
				<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hor_img2']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" class="img-responsive" />
				<?php }?>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['ver_img']->value) {?>
			<div class="ver-img">
				<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ver_img']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" class="img-responsive" />
			</div>
			<?php }?>
			<div class="category-product-tab tab-content">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcats']->value, 'sub', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['sub']->value) {
?>
					<?php $_smarty_tpl->_assignInScope('cat_products', $_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->tpl_vars['k']->value]);?>
					<?php if (!empty($_smarty_tpl->tpl_vars['cat_products']->value)) {?>
					<div role="tabpanel" class="tab-pane<?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?> active<?php }?>" id="mega-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value['id_category'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
						<div 
							class="mega-box-carousel owl-carousel" 
							data-items="<?php if ($_smarty_tpl->tpl_vars['cols']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" 
							data-lg="<?php if ($_smarty_tpl->tpl_vars['cols']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" 
							data-md="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>" 
							data-sm="<?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>" 
							data-nav="<?php if ($_smarty_tpl->tpl_vars['navigation']->value == '0') {?>false<?php } else { ?>true<?php }?>" 
							data-dots="<?php if ($_smarty_tpl->tpl_vars['pagination']->value == '1') {?>true<?php } else { ?>false<?php }?>" 
							data-auto="<?php if ($_smarty_tpl->tpl_vars['autoplay']->value == '1') {?>true<?php } else { ?>false<?php }?>" 
							data-rewind="<?php if ($_smarty_tpl->tpl_vars['rewind']->value == '1') {?>true<?php } else { ?>false<?php }?>" 
							data-slidebypage="<?php if ($_smarty_tpl->tpl_vars['slidebypage']->value == '1') {?>page<?php } else { ?>1<?php }?>"
						>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_products']->value, 'products_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->value) {
?>
								<div class="item">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slide']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
										<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
</div>
<?php }
}
