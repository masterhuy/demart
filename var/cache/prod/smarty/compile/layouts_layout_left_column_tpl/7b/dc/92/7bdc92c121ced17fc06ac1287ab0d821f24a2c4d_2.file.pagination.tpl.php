<?php
/* Smarty version 3.1.33, created on 2020-06-26 09:35:07
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\_partials\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef5b33b4f1e53_10712230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bdc92c121ced17fc06ac1287ab0d821f24a2c4d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\_partials\\pagination.tpl',
      1 => 1590131957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef5b33b4f1e53_10712230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav class="pagination col-lg-12 col-sm-12 col-xs-12 col-md-12">
    <div class="left-pagination">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7538916285ef5b33b4d2a43_75485039', 'pagination_summary');
?>

    </div>
    <div class="right-pagination">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16178832025ef5b33b4da741_51525325', 'pagination_page_list');
?>

    </div>
</nav>
<?php }
/* {block 'pagination_summary'} */
class Block_7538916285ef5b33b4d2a43_75485039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_summary' => 
  array (
    0 => 'Block_7538916285ef5b33b4d2a43_75485039',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <span>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'], ENT_QUOTES, 'UTF-8');?>
 of
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%total%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'results','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

        </span>
        <?php
}
}
/* {/block 'pagination_summary'} */
/* {block 'pagination_page_list'} */
class Block_16178832025ef5b33b4da741_51525325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_16178832025ef5b33b4da741_51525325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?>
                <ul class="page-list clearfix text-sm-center">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                        <li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current" <?php }?>>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
                                <span class="spacer">&hellip;</span>
                            <?php } else { ?>
                                <a
                                    rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>"
                                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
                                >
                                <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
                                    <i class="fa fa-angle-left"></i>
                                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>
                                    <i class="fa fa-angle-right"></i>
                                <?php } else { ?>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                                </a>
                            <?php }?>
                        </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            <?php }?>
        <?php
}
}
/* {/block 'pagination_page_list'} */
}
