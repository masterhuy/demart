<?php
/* Smarty version 3.1.33, created on 2020-06-18 07:35:23
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\modules\jmspagebuilder\views\templates\hook\addoncountdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eeb0b2b4ec2e1_11611928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34a01cf08815f8253944399e8bd12a1388142a2f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncountdown.tpl',
      1 => 1592462118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eeb0b2b4ec2e1_11611928 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
</div>
<?php }?>
<div class="countdown-box<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> addon-title">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col_left">
			<?php if ($_smarty_tpl->tpl_vars['html_content']->value) {?>
				<div class="content">
					<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>

				</div>
			<?php }?>
			<div class="countdown">
				<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['expire_time']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

			</div>
			<?php if ($_smarty_tpl->tpl_vars['button_text']->value) {?>
				<a href="<?php if ($_smarty_tpl->tpl_vars['button_link']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button_link']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value == 'new window') {?> target="_blank"<?php }?> class="btn btn-default">
					<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button_text']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

				</a>
			<?php }?>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col_right">
			<?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
				<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
			<?php }?>
		</div>
	</div>
</div>
<?php }
}
