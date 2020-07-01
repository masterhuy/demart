<?php
/* Smarty version 3.1.33, created on 2020-07-01 03:33:35
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efbf5ff440942_54238860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56551f13de854181523c082586fa23e280f9aa11' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\contact.tpl',
      1 => 1575271348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/contacts/layout-1.tpl' => 1,
    'file:_partials/contacts/layout-2.tpl' => 1,
    'file:_partials/contacts/layout-3.tpl' => 1,
    'file:_partials/contacts/layout-4.tpl' => 1,
  ),
),false)) {
function content_5efbf5ff440942_54238860 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20938037275efbf5ff430f49_52280226', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-full-width.tpl');
}
/* {block 'page_header_container'} */
class Block_7848343425efbf5ff430f44_50454254 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_container'} */
class Block_9209377295efbf5ff430f40_93615026 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

             <section id="content" class="page-content">
                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7848343425efbf5ff430f44_50454254', 'page_header_container', $this->tplIndex);
?>

                 <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_layout'] == 'layout-1') {?>
                     <?php $_smarty_tpl->_subTemplateRender('file:_partials/contacts/layout-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                 <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_layout'] == 'layout-2') {?>
                     <?php $_smarty_tpl->_subTemplateRender('file:_partials/contacts/layout-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                 <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_layout'] == 'layout-3') {?>
                     <?php $_smarty_tpl->_subTemplateRender('file:_partials/contacts/layout-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                 <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_layout'] == 'layout-4') {?>
                     <?php $_smarty_tpl->_subTemplateRender('file:_partials/contacts/layout-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                 <?php }?>
             </section>
         <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_15197742995efbf5ff440949_24233550 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

         <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_20938037275efbf5ff430f49_52280226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20938037275efbf5ff430f49_52280226',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_9209377295efbf5ff430f40_93615026',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_7848343425efbf5ff430f44_50454254',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15197742995efbf5ff440949_24233550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <section id="main">
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9209377295efbf5ff430f40_93615026', 'page_content_container', $this->tplIndex);
?>

         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15197742995efbf5ff440949_24233550', 'page_footer_container', $this->tplIndex);
?>

     </section>
 <?php
}
}
/* {/block 'content'} */
}
