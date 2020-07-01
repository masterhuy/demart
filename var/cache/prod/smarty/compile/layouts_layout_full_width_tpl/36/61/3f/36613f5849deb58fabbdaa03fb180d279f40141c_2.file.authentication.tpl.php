<?php
/* Smarty version 3.1.33, created on 2020-07-01 04:48:17
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\customer\authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efc078179a9c2_53431825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36613f5849deb58fabbdaa03fb180d279f40141c' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\customer\\authentication.tpl',
      1 => 1581654762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:customer/_partials/login/layout-1.tpl' => 1,
    'file:customer/_partials/login/layout-2.tpl' => 1,
    'file:customer/_partials/login/layout-3.tpl' => 1,
    'file:customer/_partials/login/layout-4.tpl' => 1,
  ),
),false)) {
function content_5efc078179a9c2_53431825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15837006025efc0781787146_88785199', 'page_title');
?>

<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['login_page_layout'] == 'layout-1') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/login/layout-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['login_page_layout'] == 'layout-2') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/login/layout-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['login_page_layout'] == 'layout-3') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/login/layout-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['login_page_layout'] == 'layout-4') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/login/layout-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_15837006025efc0781787146_88785199 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_15837006025efc0781787146_88785199',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
}
