<?php
/* Smarty version 3.1.33, created on 2020-06-18 05:37:36
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\modules\jmspagebuilder\views\templates\hook\addonalert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eeaef9081abf0_54418287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d1c9650ad24754a50e4c322e536bd26b3e14abd' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\modules\\jmspagebuilder\\views\\templates\\hook\\addonalert.tpl',
      1 => 1592454986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eeaef9081abf0_54418287 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-alertbox">
	<div id="alert-box" class="collapse show">
		<div class="alert alert-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alert_type']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['box_class']->value, ENT_QUOTES, 'UTF-8');
}?> text-center">
			<?php echo $_smarty_tpl->tpl_vars['alert_message']->value;?>

		</div>
		<?php if ($_smarty_tpl->tpl_vars['show_close_btn']->value) {?>
			<a href="#" class="close" data-toggle="collapse" data-target="#alert-box">
				<i class="lnr lnr-cross"></i>
			</a>
		<?php }?>
	</div>
</div>


<?php }
}
