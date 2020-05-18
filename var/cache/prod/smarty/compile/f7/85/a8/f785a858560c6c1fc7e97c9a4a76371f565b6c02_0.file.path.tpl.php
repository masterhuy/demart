<?php
/* Smarty version 3.1.33, created on 2020-05-13 04:41:09
  from 'D:\xamppp\htdocs\jms_demart\modules\jmsflashsales\views\templates\hook\path.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ebb6c55eb8648_50749719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f785a858560c6c1fc7e97c9a4a76371f565b6c02' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\modules\\jmsflashsales\\views\\templates\\hook\\path.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebb6c55eb8648_50749719 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.jms-nav{
	margin-bottom:10px;
}
.jms-menu{
	background: -moz-linear-gradient(center top , #fff 0%, #fff 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: 1px solid #e6e6e6;
    border-radius: 5px;
    box-shadow: 0 0 9px rgba(0, 0, 0, 0.15);
    list-style: none outside none;
    padding: 0 20px;
	height: 39px;
    position: relative;
}
.jms-menu li{
	float:left;
}
.jms-menu li:hover,.jms-menu li.active {
    background: -moz-linear-gradient(center top , #4f5964 0%, #5f6975 40%) repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.jms-menu li a{
	color: #757575;
    display: block;
    padding: 10px 20px;
    text-decoration: none !important;
}
.jms-menu li:hover a,.jms-menu li.active a{
	color: #fff;
	text-dicoration:none;
}
</style>
<div class="jms-nav">
	<ul class="jms-menu">
		<li class="<?php if ($_smarty_tpl->tpl_vars['view']->value == 'categories') {?>active<?php }?>"><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html' ));?>
&configure=jmsflashsales&categories=1">Categories</a></li>
		<li class="<?php if ($_smarty_tpl->tpl_vars['view']->value == 'items') {?>active<?php }?>"><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html' ));?>
&configure=jmsflashsales">Items</a></li>		
		<li class="<?php if ($_smarty_tpl->tpl_vars['view']->value == 'config') {?>active<?php }?>"><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html' ));?>
&configure=jmsflashsales&config=1">Config</a></li>
	</ul>
</div><?php }
}
