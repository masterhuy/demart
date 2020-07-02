<?php
/* Smarty version 3.1.33, created on 2020-07-02 09:54:37
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efda0cd780b40_46229409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fca5d01f250e3c1e443305c56d82d966afb0930e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\errors\\not-found.tpl',
      1 => 1593680014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efda0cd780b40_46229409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9246547395efda0cd759a44_23387166', 'page_content');
?>

</section>
<?php }
/* {block 'search'} */
class Block_17065933815efda0cd759a42_35353760 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_10332592675efda0cd759a44_88542041 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_9246547395efda0cd759a44_23387166 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_9246547395efda0cd759a44_23387166',
  ),
  'search' => 
  array (
    0 => 'Block_17065933815efda0cd759a42_35353760',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_10332592675efda0cd759a44_88542041',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17065933815efda0cd759a42_35353760', 'search', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10332592675efda0cd759a44_88542041', 'hook_not_found', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_content'} */
}
