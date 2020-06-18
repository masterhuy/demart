<?php
/* Smarty version 3.1.33, created on 2020-06-18 02:49:11
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eeac817e569f5_30810122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73b343f7778a4a9f561f637e122697b122f22eef' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1586335752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eeac817e569f5_30810122 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['productbox_type']) && $_GET['productbox_type'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('productbox', "catalog/_partials/miniatures/".((string)$_GET['productbox_type']).".tpl");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('productbox', "catalog/_partials/miniatures/".((string)$_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_type']).".tpl");
}
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['productbox']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
}
}
