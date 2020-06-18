<?php
/* Smarty version 3.1.33, created on 2020-06-18 05:41:55
  from 'D:\xamppp\htdocs\jms_demart\modules\jmspagebuilder\views\templates\hook\addoncategoryproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eeaf0939698d1_43175524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd6a8bf2aeb90e7bf42c85a3f98669838f09945c' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncategoryproduct.tpl',
      1 => 1578623870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5eeaf0939698d1_43175524 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-title">
	<?php if ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
		<i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
	<?php }?>
	<h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['categories']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
        <a class="view-all-btn" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'category','id'=>$_smarty_tpl->tpl_vars['categories']->value['id_category']),$_smarty_tpl ) );?>
" title="View all product in category">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View All','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>

          <i aria-hidden="true" class="fa fa-angle-right"></i>
        </a>
</div>
<div class="catproduct-carousel owl-carousel" data-items="<?php if ($_smarty_tpl->tpl_vars['cols']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-lg="<?php if ($_smarty_tpl->tpl_vars['cols']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-md="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>" data-sm="<?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>" data-xs="<?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" data-nav="<?php if ($_smarty_tpl->tpl_vars['navigation']->value == '0') {?>false<?php } else { ?>true<?php }?>" data-dots="<?php if ($_smarty_tpl->tpl_vars['pagination']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-auto="<?php if ($_smarty_tpl->tpl_vars['autoplay']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-rewind="<?php if ($_smarty_tpl->tpl_vars['rewind']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-slidebypage="<?php if ($_smarty_tpl->tpl_vars['slidebypage']->value == '1') {?>page<?php } else { ?>1<?php }?>">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value['products'], 'products_slide');
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
<?php }
}
