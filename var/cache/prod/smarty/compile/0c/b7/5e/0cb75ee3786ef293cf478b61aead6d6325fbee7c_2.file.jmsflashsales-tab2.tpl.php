<?php
/* Smarty version 3.1.33, created on 2020-07-02 09:48:13
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\modules\jmsflashsales\views\templates\hook\jmsflashsales-tab2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efd9f4dbc5fd5_71041187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cb75ee3786ef293cf478b61aead6d6325fbee7c' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\modules\\jmsflashsales\\views\\templates\\hook\\jmsflashsales-tab2.tpl',
      1 => 1591931711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5efd9f4dbc5fd5_71041187 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="jmsflashsales-tab2 row">
	<div class="tabpanel col-12 col-sm-12 col-md-4 col-lg-4">
		<div class="addon-title ">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Week Deals Limited, Hurry Up!','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
		</div>
        <div class="discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</div>
		<ul class="nav">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['category']->value) {
?>
				<?php $_smarty_tpl->_assignInScope('cat_products', $_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->tpl_vars['k']->value]);?>
				<?php if (!empty($_smarty_tpl->tpl_vars['cat_products']->value)) {?>
					<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['k']->value != 4) {?>hidden<?php }?>">
						<a class="<?php if ($_smarty_tpl->tpl_vars['k']->value == 4) {?>active<?php }?>" href="#category-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab">
							<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
<span>%</span>
						</a>
					</li>	
				<?php }?>	
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'End in offers:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
		<div class="flashsales-countdown"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['expiretime']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
	</div>
	<div class="tab-content col-12 col-sm-12 col-md-8 col-lg-8">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'cat_products', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['cat_products']->value) {
?>
			<?php if (!empty($_smarty_tpl->tpl_vars['cat_products']->value)) {?>
				<div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>active<?php }?>" id="category-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
">	
					<div class="flashsales-tab-carousel2">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>	
							<div class="item ajax_block_product">		
								<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
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
<?php }
}
