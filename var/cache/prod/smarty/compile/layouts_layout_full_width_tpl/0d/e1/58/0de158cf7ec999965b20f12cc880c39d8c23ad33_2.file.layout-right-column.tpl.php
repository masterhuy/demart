<?php
/* Smarty version 3.1.33, created on 2020-05-27 11:00:31
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\layouts\layout-right-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ece3a3fb8d7e0_38166679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0de158cf7ec999965b20f12cc880c39d8c23ad33' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\layouts\\layout-right-column.tpl',
      1 => 1586764173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ece3a3fb8d7e0_38166679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13620994635ece3a3fb8d7e6_65784009', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17597647145ece3a3fb8d7e2_34586839', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_13620994635ece3a3fb8d7e6_65784009 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_13620994635ece3a3fb8d7e6_65784009',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_17711658515ece3a3fb8d7e2_21731621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_17597647145ece3a3fb8d7e2_34586839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_17597647145ece3a3fb8d7e2_34586839',
  ),
  'content' => 
  array (
    0 => 'Block_17711658515ece3a3fb8d7e2_21731621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="right-column sidebar col-12 col-lg-9 col-md-12 col-sm-12 ">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17711658515ece3a3fb8d7e2_21731621', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
