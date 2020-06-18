<?php
/* Smarty version 3.1.33, created on 2020-06-18 07:37:23
  from 'D:\xamppp\htdocs\jms_demart\modules\jmspagebuilder\views\templates\hook\addoninstantshop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eeb0ba3ea13f4_70035636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '517e023e000db2a4e4df8de182a181cafc550608' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstantshop.tpl',
      1 => 1569916432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5eeb0ba3ea13f4_70035636 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<div class="instant-tabs">
	<ul class="nav nav-tabs" role="tablist">
		<?php if ($_smarty_tpl->tpl_vars['showall']->value) {?>
		<li class="active"><a class="instant-btn" data-id="0">All</a></li>					
		<?php }?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['category']->value) {
?>
			<li <?php if (!$_smarty_tpl->tpl_vars['showall']->value && $_smarty_tpl->tpl_vars['k']->value == 0) {?>class="active"<?php }?>><a class="instant-btn" data-id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['id_category'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></li>					
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
	</ul>
	<div class="instantshop-filters btn-group">
		<a class="dropdown-toggle" data-toggle="dropdown"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
<i class="fa fa-angle-down"></i></a>
		<div class="dropdown-menu" role="menu">
			<div class="row">
				<div class="filter col-sm-6 col-md-6 col-xs-12">
					<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort By','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
</label>
					<ul name="instantshop-orderby" id="instantshop-s-orderby">
						<li data-val="date_add" class="<?php if ($_smarty_tpl->tpl_vars['order_by']->value == 'date_add') {?>active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date Add','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
</li>
						<li data-val="date_upd" class="<?php if ($_smarty_tpl->tpl_vars['order_by']->value == 'date_upd') {?>active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date Update','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
</li>
						<li data-val="price" class="<?php if ($_smarty_tpl->tpl_vars['order_by']->value == 'price') {?>active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
</li>
						<li data-val="position" class="<?php if ($_smarty_tpl->tpl_vars['order_by']->value == 'position') {?>active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
</li>
						<li data-val="name" class="<?php if ($_smarty_tpl->tpl_vars['order_by']->value == 'name') {?>active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
</li>
						<li data-val="id_product" class="<?php if ($_smarty_tpl->tpl_vars['order_by']->value == 'id_product') {?>active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product ID','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
</li>
					</ul>
				</div>
				<div class="filter col-sm-6 col-md-6 col-xs-12">
					<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort Way','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
</label>
					<ul name="instantshop-orderway" id="instantshop-s-orderway">
						<li data-val="DESC" class="<?php if ($_smarty_tpl->tpl_vars['order_way']->value == 'DESC') {?>active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Desc','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
</li>
						<li data-val="ASC" class="<?php if ($_smarty_tpl->tpl_vars['order_way']->value == 'ASC') {?>active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Asc','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
</li>		
					</ul>
				</div>
			</div>	
		</div>	
	</div>	
</div>
<div class="row" id="instant-products">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>				
	<div class="item col-sm-6 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col_class']->value, ENT_QUOTES, 'UTF-8');?>
 col-xs-12">
		<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
	</div>	
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<span class="instantshop-loading"></span>
<div class="instantshop-loadmore">
<?php if ($_smarty_tpl->tpl_vars['loadmore_type']->value == 'infinite') {?>
<button id="btn" class="load-btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Scroll to Load','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
</button>
<?php } else { ?>
<button id="btn" class="load-btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Load More','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
</button>
<?php }?>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var instantshow_limit = <?php if ($_smarty_tpl->tpl_vars['limit']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['limit']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>8<?php }?>;
	var instantshow_load = <?php if ($_smarty_tpl->tpl_vars['load']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['load']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>;	
<?php echo '</script'; ?>
>
</div>
<input type="hidden" name="instantshop_id_category" id="instantshop-id-category" value="0" />
<input type="hidden" name="instantshop_loadmore_type" id="instantshop-loadmore-type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loadmore_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="instantshop_limit" id="instantshop-limit" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['limit']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="instantshop_load" id="instantshop-load" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['load']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="instantshop_total" id="instantshop-total" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_config']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="instantshop_col_class" id="instantshop-col-class" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col_class']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="instantshop_orderby" id="instantshop-orderby" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_by']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="instantshop_orderway" id="instantshop-orderway" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_way']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php }
}
