<?php
/* Smarty version 3.1.33, created on 2020-06-15 11:12:01
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\_partials\contacts\layout-3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74971b5d5a9_74935097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b97f39a93d3efc217b9d73493b10e1335cae6b8' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\_partials\\contacts\\layout-3.tpl',
      1 => 1584688283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74971b5d5a9_74935097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20126173535ee74971b59722_98890761', 'page_header_container');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17709447155ee74971b59728_06668787', 'page_content');
?>

<?php }
/* {block 'page_header_container'} */
class Block_20126173535ee74971b59722_98890761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_20126173535ee74971b59722_98890761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_17709447155ee74971b59728_06668787 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_17709447155ee74971b59728_06668787',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="contact-layout-3" id="contact-wrapper">
    <div class="row contact-row">
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-image">
            <div class="contact-box">
                <img width="100%" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_image'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>    
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-7">
            <div id="contact-info">
                <div class="contact-box">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayRightColumn'),$_smarty_tpl ) );?>

                </div>
            </div>
            <div id="contact-form" class="contact-row">
                <div class="contact-box">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'page_content'} */
}
