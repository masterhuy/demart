<?php
/* Smarty version 3.1.33, created on 2020-06-01 05:58:22
  from 'module:pscurrencyselectorpscurre' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed48aeeb547a9_60158848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b97756c07f8c7dd53da6530f78f67ddd242f77c9' => 
    array (
      0 => 'module:pscurrencyselectorpscurre',
      1 => 1586747631,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed48aeeb547a9_60158848 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xamppp\htdocs\jms_demart/themes/jms_demart/modules/ps_currencyselector/ps_currencyselector.tpl --><div class="_desktop_currency_selector currency-info">
	<div id="currency-selector-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
	<ul>
      	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
	        <li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
	          	<a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</a>
	        </li>
      	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>

<!-- end D:\xamppp\htdocs\jms_demart/themes/jms_demart/modules/ps_currencyselector/ps_currencyselector.tpl --><?php }
}
