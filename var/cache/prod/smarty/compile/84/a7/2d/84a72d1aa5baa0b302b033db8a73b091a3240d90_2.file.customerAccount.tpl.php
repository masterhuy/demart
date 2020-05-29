<?php
/* Smarty version 3.1.33, created on 2020-05-29 08:55:11
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\modules\psgdpr\views\templates\front\customerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed0bfdf2fad99_91210807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84a72d1aa5baa0b302b033db8a73b091a3240d90' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\modules\\psgdpr\\views\\templates\\front\\customerAccount.tpl',
      1 => 1590728334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed0bfdf2fad99_91210807 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a id="identity-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('psgdpr','gdpr'), ENT_QUOTES, 'UTF-8');?>
">
    <span class="link-item">
        <i class="lnr lnr-user"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR - Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </span>
</a>
<?php }
}
