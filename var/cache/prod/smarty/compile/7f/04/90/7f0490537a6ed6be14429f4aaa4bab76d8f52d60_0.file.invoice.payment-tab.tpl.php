<?php
/* Smarty version 3.1.33, created on 2020-06-25 09:16:53
  from 'D:\xamppp\htdocs\jms_demart\pdf\invoice.payment-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef45d75a3c1b5_30267881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f0490537a6ed6be14429f4aaa4bab76d8f52d60' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\pdf\\invoice.payment-tab.tpl',
      1 => 1587030607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef45d75a3c1b5_30267881 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="payment-tab" width="100%">
	<tr>
		<td class="payment center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="payment left white" width="56%">
			<table width="100%" border="0">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_invoice']->value->getOrderPaymentCollection(), 'payment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
?>
					<tr>
						<td class="right small"><?php echo $_smarty_tpl->tpl_vars['payment']->value->payment_method;?>
</td>
						<td class="right small"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('currency'=>$_smarty_tpl->tpl_vars['payment']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['payment']->value->amount),$_smarty_tpl ) );?>
</td>
					</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>
		</td>
	</tr>
</table>
<?php }
}
