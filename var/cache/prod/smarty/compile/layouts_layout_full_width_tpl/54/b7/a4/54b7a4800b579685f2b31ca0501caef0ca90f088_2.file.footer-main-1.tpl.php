<?php
/* Smarty version 3.1.33, created on 2020-06-03 11:23:35
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\_partials\footers\footer-main-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed77a27969d14_39180026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54b7a4800b579685f2b31ca0501caef0ca90f088' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\_partials\\footers\\footer-main-1.tpl',
      1 => 1587615582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/headers/logo.tpl' => 1,
    'file:_partials/socials.tpl' => 1,
  ),
),false)) {
function content_5ed77a27969d14_39180026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="footer-main" class="footer-main">
    <div class="container">
        <div class="row">
            <div class="layout-column col-3">
                <div class="block-logo">
                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11263965435ed77a2795a314_17347329', 'footer-contact');
?>

            </div>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4635798435ed77a2795e192_01080876', 'hook_footer');
?>

            <div class="layout-column col-3 newsletter">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13366668925ed77a27962019_24499145', 'footer-newsletter');
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19958311905ed77a27965e98_46086243', 'hook_footer_after');
?>

        </div>
    </div>
</div>
<?php }
/* {block 'footer-contact'} */
class Block_11263965435ed77a2795a314_17347329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-contact' => 
  array (
    0 => 'Block_11263965435ed77a2795a314_17347329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="block block-footer block-contact">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo"),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block 'footer-contact'} */
/* {block 'hook_footer'} */
class Block_4635798435ed77a2795e192_01080876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_4635798435ed77a2795e192_01080876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'footer-newsletter'} */
class Block_13366668925ed77a27962019_24499145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-newsletter' => 
  array (
    0 => 'Block_13366668925ed77a27962019_24499145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="block block-footer block-newsletter">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_emailsubscription",'hook'=>'displayFooter'),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block 'footer-newsletter'} */
/* {block 'hook_footer_after'} */
class Block_19958311905ed77a27965e98_46086243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_19958311905ed77a27965e98_46086243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer_after'} */
}
