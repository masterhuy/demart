<?php
/* Smarty version 3.1.33, created on 2020-06-08 11:15:41
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ede0fcd0f3146_10457735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eac0e627fd48275fad1ccb4e577b90ac279dc5a' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\page.tpl',
      1 => 1575271170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede0fcd0f3146_10457735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15816849965ede0fcd0f3147_60638458', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_16810140425ede0fcd0f3143_57907638 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_7941375975ede0fcd0f3145_35676136 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12009948085ede0fcd0f3149_08725737 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16810140425ede0fcd0f3143_57907638', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7941375975ede0fcd0f3145_35676136', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_16673775545ede0fcd0f3141_07990715 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_15816849965ede0fcd0f3147_60638458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15816849965ede0fcd0f3147_60638458',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_12009948085ede0fcd0f3149_08725737',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16810140425ede0fcd0f3143_57907638',
  ),
  'page_content' => 
  array (
    0 => 'Block_7941375975ede0fcd0f3145_35676136',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16673775545ede0fcd0f3141_07990715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12009948085ede0fcd0f3149_08725737', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16673775545ede0fcd0f3141_07990715', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
