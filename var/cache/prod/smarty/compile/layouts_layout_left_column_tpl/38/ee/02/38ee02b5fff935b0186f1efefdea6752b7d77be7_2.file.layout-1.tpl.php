<?php
/* Smarty version 3.1.33, created on 2020-05-28 04:33:12
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\_partials\contacts\layout-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecf30f88dd0c1_22301532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38ee02b5fff935b0186f1efefdea6752b7d77be7' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\_partials\\contacts\\layout-1.tpl',
      1 => 1590634627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecf30f88dd0c1_22301532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9111620975ecf30f88dd0c6_87977755', 'page_header_container');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21270118555ecf30f88dd0c2_72843318', 'page_content');
?>

<?php }
/* {block 'page_header_container'} */
class Block_9111620975ecf30f88dd0c6_87977755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_9111620975ecf30f88dd0c6_87977755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_21270118555ecf30f88dd0c2_72843318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_21270118555ecf30f88dd0c2_72843318',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="contact-layout-1" id="contact-wrapper">
    <div class="contact-map" id="contact-map">
        <div class="contact-box">
            <iframe width="100%" height="500" style="border:0" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_map_src'], ENT_QUOTES, 'UTF-8');?>
" allowfullscreen=""></iframe>
        </div>
    </div>
    <div class="row contact-row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6" id="contact-form">
            <div class="contact-box">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6" id="contact-info">
            <div class="contact-box">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayRightColumn'),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'page_content'} */
}
