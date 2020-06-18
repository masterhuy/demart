<?php
/* Smarty version 3.1.33, created on 2020-06-18 07:38:25
  from 'D:\xamppp\htdocs\jms_demart\modules\jmspagebuilder\views\templates\hook\addoninstantshop-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eeb0be135f468_40171315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bfd7bb04f7c5da59de90c07ec8f72c9741bfb2b' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstantshop-content.tpl',
      1 => 1569916432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5eeb0be135f468_40171315 (Smarty_Internal_Template $_smarty_tpl) {
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
>	
jQuery(function ($) {
<?php if ($_smarty_tpl->tpl_vars['loadmore_type']->value == 'infinite') {?>
    $("#instant-products").loadMore({
        selector: 'div.item',
        loadBtn: '#btn',
		limit: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['limit']->value, ENT_QUOTES, 'UTF-8');?>
',
        load: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['load']->value, ENT_QUOTES, 'UTF-8');?>
',
    });
<?php } else { ?>
	$("#instant-products").loadMore({
            selector: 'div.item',
            loadBtn: '#btn',
            limit: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['limit']->value, ENT_QUOTES, 'UTF-8');?>
',
            load: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['load']->value, ENT_QUOTES, 'UTF-8');?>
',
            animate: true,
            animateIn: 'fadeIn'
    });
<?php }?>
});
<?php echo '</script'; ?>
><?php }
}
