<?php
/* Smarty version 3.1.33, created on 2020-05-28 04:19:39
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\_partials\contacts\layout-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecf2dcb269273_49714291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '105de4a8b761d5a39bb508d35ea982058f759fe3' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\_partials\\contacts\\layout-2.tpl',
      1 => 1584686201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecf2dcb269273_49714291 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13518868895ecf2dcb269273_64408130', 'page_header_container');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19907141715ecf2dcb269276_59659153', 'page_content');
?>

<?php }
/* {block 'page_header_container'} */
class Block_13518868895ecf2dcb269273_64408130 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_13518868895ecf2dcb269273_64408130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_19907141715ecf2dcb269276_59659153 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_19907141715ecf2dcb269276_59659153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="contact-layout-2" id="contact-wrapper">
    <div class="row contact-row">
        <div class="col-12 col-sm-12 col-md-5 col-lg-5" id="contact-info">
            <div class="contact-box">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayRightColumn'),$_smarty_tpl ) );?>

            </div>
            <div class="contact-map contact-row" id="contact-map">
                <div class="contact-box">
                    <iframe width="100%" height="300" style="border:0"
                        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_map_src'], ENT_QUOTES, 'UTF-8');?>
"
                        allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-7" id="contact-form">
            <div class="contact-box">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'page_content'} */
}
