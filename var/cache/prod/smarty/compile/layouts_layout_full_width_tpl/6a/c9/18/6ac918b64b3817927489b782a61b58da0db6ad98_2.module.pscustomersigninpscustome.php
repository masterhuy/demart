<?php
/* Smarty version 3.1.33, created on 2020-06-22 03:36:25
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef019299dd942_86027865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ac918b64b3817927489b782a61b58da0db6ad98' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1590722159,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef019299dd942_86027865 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="_desktop_user_info">
	<div class="user-info btn-group">
		<a href="#" class="account" data-toggle="dropdown" data-display="static">
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
.</span>
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
		</a>
      	<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
			<div id="login" class="dropdown-menu user-info-content<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_type'] == 'sidebar') {?> user-info-sidebar<?php }
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_class'], ENT_QUOTES, 'UTF-8');
}?>">
				<ul>          
					<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_logged_links'] && in_array('my-account',$_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_logged_links'])) {?>
          				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
          			<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_logged_links'] && in_array('my-orders',$_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_logged_links'])) {?>
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Order','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_logged_links'] && in_array('checkout',$_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_logged_links'])) {?>
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
 </a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_logged_links'] && in_array('logout',$_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_logged_links'])) {?>
						<li><a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
					<?php }?>
				</ul>
			</div>
		  	<?php } else { ?>
			<div id="login" class="dropdown-menu user-info-content<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_type'] == 'sidebar') {?> user-info-sidebar<?php }
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_class'], ENT_QUOTES, 'UTF-8');
}?>">
				<ul>
					<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_logged_links'] && in_array('register',$_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_notlogged_links'])) {?>
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
 </a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_logged_links'] && in_array('login',$_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin_notlogged_links'])) {?>
						<li><a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
" rel="nofollow" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log In','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
					<?php }?>
				</ul>
			</div>
		<?php }?>
	</div>
</div>

<?php }
}
