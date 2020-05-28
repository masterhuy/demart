<?php
/* Smarty version 3.1.33, created on 2020-05-28 11:29:43
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecf92979e48e8_05381786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '708e5d28eb1d4d4b37d432ace3e6fdadb3994708' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1590656614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5ecf92979e48e8_05381786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <head>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19646486655ecf92979a60d8_82010347', 'head');
?>

    </head>

    <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['jpb_rtl']->value) {?> rtl<?php }
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['blocktitle_layout']) {?> blocktitle-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['blocktitle_layout'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['blocktab_layout']) {?> blocktab-<?php }
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_nav_type']) {?> carousel-nav-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_nav_type'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_nav_show']) {?> carousel-nav-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_nav_show'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_pag_show']) {?> carousel-pag-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_pag_show'], ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_pageclass']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

        <div class="bg-overlay"></div>
        <div class="main-site">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10832547125ecf92979bd7e5_43933218', 'product_activation');
?>

            <header id="header">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10339962905ecf92979bd7e4_87465060', 'header');
?>

            </header>
    		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' && $_smarty_tpl->tpl_vars['jmsSetting']->value['breadcrumb']) {?>
    			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13364436465ecf92979c54e4_08114004', 'breadcrumb');
?>

    		<?php }?>
            <div id="wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>class="container"<?php }?>>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14798812935ecf92979c9368_16838096', 'notifications');
?>

                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
                    <div class="row">
                <?php }?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14777631645ecf92979d1069_37520233', "left_column");
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12289552315ecf92979d4ee8_87898304', "content_wrapper");
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11601131375ecf92979d8d61_41955109', "right_column");
?>


                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
                </div>
                <?php }?>
    		</div>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6800004425ecf92979dcbe1_33050707', "footer");
?>

            <div id="back-to-top" title="Back to top">
                <i class="fal fa-angle-up"></i>
            </div>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8091599945ecf92979e0a64_13082648', 'javascript_bottom');
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    </body>
</html>
<?php }
/* {block 'head'} */
class Block_19646486655ecf92979a60d8_82010347 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_19646486655ecf92979a60d8_82010347',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'head'} */
/* {block 'product_activation'} */
class Block_10832547125ecf92979bd7e5_43933218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_10832547125ecf92979bd7e5_43933218',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_10339962905ecf92979bd7e4_87465060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_10339962905ecf92979bd7e4_87465060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'header'} */
/* {block 'breadcrumb'} */
class Block_13364436465ecf92979c54e4_08114004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_13364436465ecf92979c54e4_08114004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    			   <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    			<?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'notifications'} */
class Block_14798812935ecf92979c9368_16838096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_14798812935ecf92979c9368_16838096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'notifications'} */
/* {block "left_column"} */
class Block_14777631645ecf92979d1069_37520233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_14777631645ecf92979d1069_37520233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="left-column" class="sidebar-column col-lg-3 col-md-12 col-sm-12 col-12">
                            <div class="sidebar-inner">
                                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

                                <?php } else { ?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

                                <?php }?>
                            </div>
                        </div>
                    <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_13632336655ecf92979d4ee5_52441659 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <p>Hello world! This is HTML5 Boilerplate.</p>
                            <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_12289552315ecf92979d4ee8_87898304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_12289552315ecf92979d4ee8_87898304',
  ),
  'content' => 
  array (
    0 => 'Block_13632336655ecf92979d4ee5_52441659',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="content-wrapper" class="left-column right-column col-12 col-md-6">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13632336655ecf92979d4ee5_52441659', "content", $this->tplIndex);
?>

                        </div>
                    <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_11601131375ecf92979d8d61_41955109 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_11601131375ecf92979d8d61_41955109',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="right-column" class="sidebar-column col-lg-3 col-md-12 col-sm-12 col-12">
                            <div class="sidebar-inner">
                                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                                <?php } else { ?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

                                <?php }?>
                            </div>
                        </div>
                    <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_6800004425ecf92979dcbe1_33050707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6800004425ecf92979dcbe1_33050707',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_8091599945ecf92979e0a64_13082648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_8091599945ecf92979e0a64_13082648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
        <?php
}
}
/* {/block 'javascript_bottom'} */
}
