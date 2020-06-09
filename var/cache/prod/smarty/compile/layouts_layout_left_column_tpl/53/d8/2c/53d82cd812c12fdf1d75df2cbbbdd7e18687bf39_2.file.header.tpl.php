<?php
/* Smarty version 3.1.33, created on 2020-06-09 03:42:37
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edef71d6ef537_56042953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53d82cd812c12fdf1d75df2cbbbdd7e18687bf39' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\_partials\\header.tpl',
      1 => 1585897516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/headers/header-1.tpl' => 1,
    'file:_partials/headers/header-2.tpl' => 1,
    'file:_partials/headers/header-3.tpl' => 1,
    'file:_partials/headers/header-4.tpl' => 1,
    'file:_partials/headers/header-5.tpl' => 1,
    'file:_partials/headers/header-6.tpl' => 1,
    'file:_partials/headers/header-7.tpl' => 1,
    'file:_partials/headers/header-8.tpl' => 1,
    'file:_partials/headers/header-mobile-1.tpl' => 1,
    'file:_partials/headers/header-mobile-2.tpl' => 1,
    'file:_partials/headers/header-mobile-3.tpl' => 1,
    'file:_partials/headers/header-mobile-4.tpl' => 1,
  ),
),false)) {
function content_5edef71d6ef537_56042953 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php if (isset($_GET['header_layout']) && $_GET['header_layout'] != '') {?>
      <?php $_smarty_tpl->_assignInScope('header_layout', $_GET['header_layout']);?>
 <?php } else { ?>
      <?php $_smarty_tpl->_assignInScope('header_layout', $_smarty_tpl->tpl_vars['jmsSetting']->value['header_layout']);?>
 <?php }?>
<div id="desktop-header" class="header-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['header_layout']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['header_class'], ENT_QUOTES, 'UTF-8');
}?>">
    <?php if ($_smarty_tpl->tpl_vars['header_layout']->value == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 2) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 3) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 4) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 5) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 6) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-6.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 7) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-7.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 8) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-8.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</div>
<div id="mobile-header" class="header-mobile-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['header_mobile_layout'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['header_class'], ENT_QUOTES, 'UTF-8');
}?>">
    <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_mobile_layout'] == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_mobile_layout'] == 2) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_mobile_layout'] == 3) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</div>
<?php }
}
