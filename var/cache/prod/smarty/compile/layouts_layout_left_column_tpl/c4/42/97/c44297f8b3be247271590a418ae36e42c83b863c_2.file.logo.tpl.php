<?php
/* Smarty version 3.1.33, created on 2020-05-29 10:04:35
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\_partials\headers\logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed0d0237608e3_41570532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c44297f8b3be247271590a418ae36e42c83b863c' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\_partials\\headers\\logo.tpl',
      1 => 1580724892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed0d0237608e3_41570532 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['logo_source'] == 'default') {?>
        <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['logo_source'] == 'image') {?>
        <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['logo_image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">  
    <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['logo_source'] == 'text') {?>
        <span class="site-logo-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['logo_text'], ENT_QUOTES, 'UTF-8');?>
</span>
    <?php }?>
</a>
<?php }
}
