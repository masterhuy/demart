<?php
/* Smarty version 3.1.33, created on 2020-05-28 04:33:11
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecf30f7e5b493_03610472',
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
function content_5ecf30f7e5b493_03610472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3815197865ecf30f7e5b494_23981571', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-full-width.tpl');
}
/* {block 'page_header_container'} */
class Block_16944649495ecf30f7e5b491_98458697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_container'} */
class Block_18775313145ecf30f7e5b496_20677118 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

             <section id="content" class="page-content">
                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16944649495ecf30f7e5b491_98458697', 'page_header_container', $this->tplIndex);
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
class Block_8381924245ecf30f7e5b497_04600782 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

         <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3815197865ecf30f7e5b494_23981571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3815197865ecf30f7e5b494_23981571',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_18775313145ecf30f7e5b496_20677118',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_16944649495ecf30f7e5b491_98458697',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8381924245ecf30f7e5b497_04600782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <section id="main">
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18775313145ecf30f7e5b496_20677118', 'page_content_container', $this->tplIndex);
?>

         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8381924245ecf30f7e5b497_04600782', 'page_footer_container', $this->tplIndex);
?>

     </section>
 <?php
}
}
/* {/block 'content'} */
}
