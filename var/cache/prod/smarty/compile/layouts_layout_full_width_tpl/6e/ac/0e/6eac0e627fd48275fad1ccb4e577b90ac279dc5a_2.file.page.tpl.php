<?php
/* Smarty version 3.1.33, created on 2020-06-26 09:46:50
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef5b5faf0d304_94988873',
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
function content_5ef5b5faf0d304_94988873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2795197665ef5b5faf0d307_33173137', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_9902660545ef5b5faf0d306_48168177 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_17030482345ef5b5faf0d301_37863159 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2663168875ef5b5faf0d304_00743878 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9902660545ef5b5faf0d306_48168177', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17030482345ef5b5faf0d301_37863159', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_12043762715ef5b5faf0d304_07411184 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2795197665ef5b5faf0d307_33173137 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2795197665ef5b5faf0d307_33173137',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2663168875ef5b5faf0d304_00743878',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9902660545ef5b5faf0d306_48168177',
  ),
  'page_content' => 
  array (
    0 => 'Block_17030482345ef5b5faf0d301_37863159',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_12043762715ef5b5faf0d304_07411184',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2663168875ef5b5faf0d304_00743878', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12043762715ef5b5faf0d304_07411184', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
