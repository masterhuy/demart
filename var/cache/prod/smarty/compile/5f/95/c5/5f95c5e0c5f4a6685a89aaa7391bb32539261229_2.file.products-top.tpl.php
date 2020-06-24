<?php
/* Smarty version 3.1.33, created on 2020-06-24 04:01:55
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef2c2237681a6_89911944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f95c5e0c5f4a6685a89aaa7391bb32539261229' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1586751674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/pagination.tpl' => 1,
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5ef2c2237681a6_89911944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="filters-panel">
	<div class="row align-items-center">
		<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-left">
			<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_switchlist'] == 1) {?>
				<div class="view-mode">
					<a class="switch-view view-grid <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_list'] == 'grid') {?>active<?php }?>"></a>
					<a class="switch-view view-list <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_list'] == 'list') {?>active<?php }?>"></a>
				</div>
			<?php }?>
		</div>
		<div class="col-12 col-sm-12 col-md-9 col-lg-9 col-right">
			<div class="sort-by">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10669982335ef2c2237681a5_93478861', 'pagination');
?>

				<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_sortby'] == 1) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20354193825ef2c2237681a6_13205581', 'sort_by');
?>

				<?php }?>
			</div>
			<?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
				<div class="filter-button">
					<button id="search_filter_toggler" class="btn-default">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

					</button>
				</div>
			<?php }?>
		</div>
	</div>
</div>
<?php }
/* {block 'pagination'} */
class Block_10669982335ef2c2237681a5_93478861 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_10669982335ef2c2237681a5_93478861',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
				<?php
}
}
/* {/block 'pagination'} */
/* {block 'sort_by'} */
class Block_20354193825ef2c2237681a6_13205581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_20354193825ef2c2237681a6_13205581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
					<?php
}
}
/* {/block 'sort_by'} */
}
