<?php
/* Smarty version 3.1.33, created on 2020-06-08 03:50:20
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\layouts\layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edda76cad4a19_13115306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd81ab17d5247de0e22f594b138f52f21714520b6' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\layouts\\layout-left-column.tpl',
      1 => 1586764161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edda76cad4a19_13115306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9239033305edda76cad4a17_09472173', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19556840745edda76cad4a15_47567788', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_9239033305edda76cad4a17_09472173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_9239033305edda76cad4a17_09472173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_21056604075edda76cad4a11_66048486 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p>Hello world! This is HTML5 Boilerplate.</p>
        <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_19556840745edda76cad4a15_47567788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_19556840745edda76cad4a15_47567788',
  ),
  'content' => 
  array (
    0 => 'Block_21056604075edda76cad4a11_66048486',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="content-wrapper col-12 col-sm-12 col-md-12 col-lg-9 ">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21056604075edda76cad4a11_66048486', 'content', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
