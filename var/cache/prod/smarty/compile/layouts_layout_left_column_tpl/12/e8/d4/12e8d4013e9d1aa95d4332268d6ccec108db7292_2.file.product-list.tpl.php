<?php
/* Smarty version 3.1.33, created on 2020-05-29 10:04:34
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed0d022c69783_84587147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12e8d4013e9d1aa95d4332268d6ccec108db7292' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1585905502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products-big.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5ed0d022c69783_84587147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_layout'] == 'right-sidebar') {?>
    <?php $_smarty_tpl->_assignInScope('layout', 'layouts/layout-right-column.tpl');
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_layout'] == 'left-sidebar') {?>
    <?php $_smarty_tpl->_assignInScope('layout', 'layouts/layout-left-column.tpl');
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_layout'] == 'no-sidebar') {?>
    <?php $_smarty_tpl->_assignInScope('layout', 'layouts/layout-full-width.tpl');
}
if (isset($_GET['shop_layout']) && $_GET['shop_layout'] == 'right-sidebar') {?>
    <?php $_smarty_tpl->_assignInScope('layout', 'layouts/layout-right-column.tpl');
} elseif (isset($_GET['shop_layout']) && $_GET['shop_layout'] == 'left-sidebar') {?>
    <?php $_smarty_tpl->_assignInScope('layout', 'layouts/layout-left-column.tpl');
} elseif (isset($_GET['shop_layout']) && $_GET['shop_layout'] == 'no-sidebar') {?>
    <?php $_smarty_tpl->_assignInScope('layout', 'layouts/layout-full-width.tpl');
}
if (isset($_GET['shop_list']) && $_GET['shop_list'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('shop_list', $_GET['shop_list']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('shop_list', $_smarty_tpl->tpl_vars['jmsSetting']->value['shop_list']);
}
if (isset($_GET['shop_grid_column']) && $_GET['shop_grid_column'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('shop_grid_column', $_GET['shop_grid_column']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('shop_grid_column', $_smarty_tpl->tpl_vars['jmsSetting']->value['shop_grid_column']);
}?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11606862215ed0d022c52071_76919059', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_header'} */
class Block_13453677905ed0d022c52077_95266245 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <h2 id="js-product-list-header" class="h2 text-center mb-4"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h2>
        <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_top'} */
class Block_13708002005ed0d022c55f08_24630886 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_20926505835ed0d022c59d86_03562172 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="active-filter" class="hidden-sm-down">
                            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

                        </div>
                    <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_1475425135ed0d022c5dc00_57377435 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-big.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                        <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list'} */
class Block_13084670055ed0d022c61a86_44750424 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                        <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_7749545385ed0d022c61a84_40431384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_11606862215ed0d022c52071_76919059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11606862215ed0d022c52071_76919059',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_13453677905ed0d022c52077_95266245',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_13708002005ed0d022c55f08_24630886',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_20926505835ed0d022c59d86_03562172',
  ),
  'product_list' => 
  array (
    0 => 'Block_1475425135ed0d022c5dc00_57377435',
    1 => 'Block_13084670055ed0d022c61a86_44750424',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_7749545385ed0d022c61a84_40431384',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13453677905ed0d022c52077_95266245', 'product_list_header', $this->tplIndex);
?>

        <section id="products">
            <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
                <div id="products-top">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13708002005ed0d022c55f08_24630886', 'product_list_top', $this->tplIndex);
?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_activefilter'] == 1) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20926505835ed0d022c59d86_03562172', 'product_list_active_filters', $this->tplIndex);
?>

                <?php }?>
                <div id="product_list" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_grid_column']->value, ENT_QUOTES, 'UTF-8');?>
-grid product_list <?php if ($_smarty_tpl->tpl_vars['shop_list']->value == 'grid') {?>products-grid grid-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_grid_column']->value, ENT_QUOTES, 'UTF-8');
} else { ?>products-list<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['shop_grid_column']->value == '1-2-1-2' || $_smarty_tpl->tpl_vars['shop_grid_column']->value == '1-3-1-3' || $_smarty_tpl->tpl_vars['shop_grid_column']->value == '2-1-2-1' || $_smarty_tpl->tpl_vars['shop_grid_column']->value == '3-1-3-1') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1475425135ed0d022c5dc00_57377435', 'product_list', $this->tplIndex);
?>

                    <?php } else { ?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13084670055ed0d022c61a86_44750424', 'product_list', $this->tplIndex);
?>

                    <?php }?>
                </div>
                <div id="js-product-list-bottom">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7749545385ed0d022c61a84_40431384', 'product_list_bottom', $this->tplIndex);
?>

                </div>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        </section>
    </section>
<?php
}
}
/* {/block 'content'} */
}
