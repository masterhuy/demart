<?php
/* Smarty version 3.1.33, created on 2020-07-01 04:47:39
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efc075b92c4c0_84775025',
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
function content_5efc075b92c4c0_84775025 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20682408005efc075b910f42_52034666', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_header'} */
class Block_4927240385efc075b910f41_09240890 extends Smarty_Internal_Block
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
class Block_12694589585efc075b918c47_06369351 extends Smarty_Internal_Block
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
class Block_14541383385efc075b918c48_57206566 extends Smarty_Internal_Block
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
class Block_36128875efc075b9247c4_95872722 extends Smarty_Internal_Block
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
class Block_649644435efc075b9247c1_18646072 extends Smarty_Internal_Block
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
class Block_12603092575efc075b928645_27190593 extends Smarty_Internal_Block
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
class Block_20682408005efc075b910f42_52034666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20682408005efc075b910f42_52034666',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_4927240385efc075b910f41_09240890',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_12694589585efc075b918c47_06369351',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_14541383385efc075b918c48_57206566',
  ),
  'product_list' => 
  array (
    0 => 'Block_36128875efc075b9247c4_95872722',
    1 => 'Block_649644435efc075b9247c1_18646072',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_12603092575efc075b928645_27190593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4927240385efc075b910f41_09240890', 'product_list_header', $this->tplIndex);
?>

        <section id="products">
            <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
                <div id="products-top">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12694589585efc075b918c47_06369351', 'product_list_top', $this->tplIndex);
?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_activefilter'] == 1) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14541383385efc075b918c48_57206566', 'product_list_active_filters', $this->tplIndex);
?>

                <?php }?>
                <div id="product_list" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_grid_column']->value, ENT_QUOTES, 'UTF-8');?>
-grid product_list <?php if ($_smarty_tpl->tpl_vars['shop_list']->value == 'grid') {?>products-grid grid-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_grid_column']->value, ENT_QUOTES, 'UTF-8');
} else { ?>products-list<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['shop_grid_column']->value == '1-2-1-2' || $_smarty_tpl->tpl_vars['shop_grid_column']->value == '1-3-1-3' || $_smarty_tpl->tpl_vars['shop_grid_column']->value == '2-1-2-1' || $_smarty_tpl->tpl_vars['shop_grid_column']->value == '3-1-3-1') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36128875efc075b9247c4_95872722', 'product_list', $this->tplIndex);
?>

                    <?php } else { ?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_649644435efc075b9247c1_18646072', 'product_list', $this->tplIndex);
?>

                    <?php }?>
                </div>
                <div id="js-product-list-bottom">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12603092575efc075b928645_27190593', 'product_list_bottom', $this->tplIndex);
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
