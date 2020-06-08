<?php
/* Smarty version 3.1.33, created on 2020-06-05 09:59:13
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\_partials\product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eda09610bf284_51961094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5048aa1a3ee42096ce2575c1d4b17235a112f424' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\catalog\\_partials\\product-cover-thumbnails.tpl',
      1 => 1591067561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails-gallery.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails-left.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails-right.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails-bottom.tpl' => 1,
  ),
),false)) {
function content_5eda09610bf284_51961094 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['product_content_layout']) && $_GET['product_content_layout'] != '') {?>
   <?php $_smarty_tpl->_assignInScope('product_content_layout', $_GET['product_content_layout']);
} else { ?>
   <?php $_smarty_tpl->_assignInScope('product_content_layout', $_smarty_tpl->tpl_vars['jmsSetting']->value['product_content_layout']);
}
if ($_smarty_tpl->tpl_vars['product_content_layout']->value == 'thumbs-gallery') {?>
   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['product_content_layout']->value == 'thumbs-left') {?>
   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['product_content_layout']->value == 'thumbs-right') {?>
   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
