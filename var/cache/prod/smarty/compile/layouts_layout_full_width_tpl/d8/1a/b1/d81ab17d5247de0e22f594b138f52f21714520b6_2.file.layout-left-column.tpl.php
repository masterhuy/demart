<?php
/* Smarty version 3.1.33, created on 2020-06-26 09:47:08
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\layouts\layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef5b60cd1e239_19545877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd81ab17d5247de0e22f594b138f52f21714520b6' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\layouts\\layout-left-column.tpl',
      1 => 1592204042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef5b60cd1e239_19545877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13440613505ef5b60cd1e235_89112306', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18175190255ef5b60cd1e230_67085126', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_13440613505ef5b60cd1e235_89112306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_13440613505ef5b60cd1e235_89112306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_6774362695ef5b60cd1e235_42527132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p>Hello world! This is HTML5 Boilerplate.</p>
        <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_18175190255ef5b60cd1e230_67085126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_18175190255ef5b60cd1e230_67085126',
  ),
  'content' => 
  array (
    0 => 'Block_6774362695ef5b60cd1e235_42527132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="content-wrapper col-12 col-sm-12 col-md-9 col-lg-9 ">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6774362695ef5b60cd1e235_42527132', 'content', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
