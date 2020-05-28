<?php
/* Smarty version 3.1.33, created on 2020-05-28 11:29:43
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecf929798ab58_24436863',
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
function content_5ecf929798ab58_24436863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3463233505ecf9297982e56_77233581', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_12640265ecf9297986cd9_75984382 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_8352957545ecf9297986cd9_41023983 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4970364385ecf9297982e52_71812139 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12640265ecf9297986cd9_75984382', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8352957545ecf9297986cd9_41023983', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_11284119525ecf9297986cd4_71277382 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3463233505ecf9297982e56_77233581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3463233505ecf9297982e56_77233581',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_4970364385ecf9297982e52_71812139',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12640265ecf9297986cd9_75984382',
  ),
  'page_content' => 
  array (
    0 => 'Block_8352957545ecf9297986cd9_41023983',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11284119525ecf9297986cd4_71277382',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4970364385ecf9297982e52_71812139', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11284119525ecf9297986cd4_71277382', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
