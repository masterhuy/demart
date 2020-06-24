<?php
/* Smarty version 3.1.33, created on 2020-06-24 08:42:20
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\_partials\headers\mobile-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef303dc782016_21805067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90887fdd3c33f4ada7bc77aede580b8e19f96fcd' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\_partials\\headers\\mobile-menu.tpl',
      1 => 1591599683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef303dc782016_21805067 (Smarty_Internal_Template $_smarty_tpl) {
?><a id="mobile-menu-toggle" class="open-button hidden-lg">
    <i class="lnr lnr-menu"></i>
</a>
<div class="mobile-menu-wrap hidden-lg">
    <h3 class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Main Menu','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h3>
    <nav id="off-canvas-menu">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"jmsmegamenu",'hook'=>'MobiMenu'),$_smarty_tpl ) );?>

        <div class="top-column">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

        </div>
    </nav>
    <button id="mobile-menu-close" class="close-button">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme'),$_smarty_tpl ) );?>

    </button>
</div>
<?php }
}
