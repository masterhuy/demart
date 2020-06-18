<?php
/* Smarty version 3.1.33, created on 2020-06-18 08:44:02
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\modules\jmspagebuilder\views\templates\hook\addontwitter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eeb1b42af31e8_51173113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '182c715f090eb785aa4de24b6c6c6e36911ee90c' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\modules\\jmspagebuilder\\views\\templates\\hook\\addontwitter.tpl',
      1 => 1569916440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eeb1b42af31e8_51173113 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tweet container">
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
<?php }
echo $_smarty_tpl->tpl_vars['tweets']->value;?>

</div><?php }
}
