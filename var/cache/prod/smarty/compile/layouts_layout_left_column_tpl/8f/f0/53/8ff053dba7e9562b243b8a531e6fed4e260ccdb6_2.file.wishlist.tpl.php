<?php
/* Smarty version 3.1.33, created on 2020-06-15 11:19:29
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\_partials\headers\wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74b31e1b0b4_38243172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ff053dba7e9562b243b8a531e6fed4e260ccdb6' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\_partials\\headers\\wishlist.tpl',
      1 => 1587440511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74b31e1b0b4_38243172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('str_at', strpos($_smarty_tpl->tpl_vars['jmsSetting']->value['wishlist_icon'],"_"));
if ($_smarty_tpl->tpl_vars['str_at']->value && $_smarty_tpl->tpl_vars['jmsSetting']->value['wishlist_icon_thickness']) {?>
    <?php $_smarty_tpl->_assignInScope('wishlist_icon', substr($_smarty_tpl->tpl_vars['jmsSetting']->value['wishlist_icon'],0,($_smarty_tpl->tpl_vars['str_at']->value)));?>
    <?php $_smarty_tpl->_assignInScope('wishlist_icon', ($_smarty_tpl->tpl_vars['wishlist_icon']->value).($_smarty_tpl->tpl_vars['jmsSetting']->value['wishlist_icon_thickness']));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('wishlist_icon', $_smarty_tpl->tpl_vars['jmsSetting']->value['wishlist_icon']);
}?>
<div id="wishlist_block">
    <a class="d-flex align-items-center" href="index.php?fc=module&module=jmswishlist&controller=mywishlist">
        <i class="lnr lnr-heart"></i>
    </a>
</div>
<?php }
}
