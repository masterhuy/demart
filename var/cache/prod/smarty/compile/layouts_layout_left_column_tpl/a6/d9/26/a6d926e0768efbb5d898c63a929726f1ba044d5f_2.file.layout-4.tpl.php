<?php
/* Smarty version 3.1.33, created on 2020-05-28 04:23:12
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\_partials\contacts\layout-4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecf2ea02f2c68_94486225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6d926e0768efbb5d898c63a929726f1ba044d5f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\_partials\\contacts\\layout-4.tpl',
      1 => 1574045696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecf2ea02f2c68_94486225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14053453405ecf2ea02f2c62_97242399', 'page_header_container');
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15904991765ecf2ea02f2c68_23430042', 'page_content');
?>

<?php }
/* {block 'page_header_container'} */
class Block_14053453405ecf2ea02f2c62_97242399 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_14053453405ecf2ea02f2c62_97242399',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_15904991765ecf2ea02f2c68_23430042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_15904991765ecf2ea02f2c68_23430042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="contact-layout-1" id="contact-wrapper">
    <div class="contact-map" id="contact-map">
        <div class="contact-box">
            <img width="100%" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_image'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>
    <div class="row contact-row">
          <div class="col-md-5" id="contact-info">
              <div class="contact-box">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayRightColumn'),$_smarty_tpl ) );?>

              </div>
          </div>
          <div class="col-md-7" id="contact-form">
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
