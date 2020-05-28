<?php
/* Smarty version 3.1.33, created on 2020-05-27 11:01:34
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\layouts\layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ece3a7e037eb7_22827422',
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
function content_5ece3a7e037eb7_22827422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4384538425ece3a7e034039_73916775', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8661533585ece3a7e034034_60752120', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_4384538425ece3a7e034039_73916775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_4384538425ece3a7e034039_73916775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_19593287575ece3a7e034037_14460617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p>Hello world! This is HTML5 Boilerplate.</p>
        <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_8661533585ece3a7e034034_60752120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_8661533585ece3a7e034034_60752120',
  ),
  'content' => 
  array (
    0 => 'Block_19593287575ece3a7e034037_14460617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="content-wrapper col-12 col-sm-12 col-md-12 col-lg-9 ">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19593287575ece3a7e034037_14460617', 'content', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
