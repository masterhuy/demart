<?php
/* Smarty version 3.1.33, created on 2020-05-18 11:18:49
  from 'D:\xamppp\htdocs\jms_demart\admin041sahknz\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ec26109421066_63419825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0b0f50675555cce6861b3a5a0beb29d45094c48' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\admin041sahknz\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1587030598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec26109421066_63419825 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
