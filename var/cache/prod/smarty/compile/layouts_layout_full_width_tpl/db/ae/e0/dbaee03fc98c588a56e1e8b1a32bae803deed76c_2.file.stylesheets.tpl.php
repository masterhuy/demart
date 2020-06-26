<?php
/* Smarty version 3.1.33, created on 2020-06-26 09:47:08
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\_partials\stylesheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef5b60cdba634_01751273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbaee03fc98c588a56e1e8b1a32bae803deed76c' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\_partials\\stylesheets.tpl',
      1 => 1592987368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef5b60cdba634_01751273 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
linearicons/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
css/pro.min.css" />

<link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/jmsthemesetting/views/fonts/font-icon.css" rel="stylesheet">

<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['body_font'] == 'google' && isset($_smarty_tpl->tpl_vars['jmsSetting']->value['body_font_google'])) {?>
<link href="https://fonts.googleapis.com/css?family=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['body_font_google'], ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['body_font_google_weightstyle'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
<?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['body_font'] == 'fontface' && isset($_smarty_tpl->tpl_vars['jmsSetting']->value['body_fontface_css'])) {?>
<link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/jmsthemesetting/views/fonts/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['body_fontface_css'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['heading_font'] == 'google' && isset($_smarty_tpl->tpl_vars['jmsSetting']->value['heading_font_google'])) {?>
    <link href="https://fonts.googleapis.com/css?family=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['heading_font_google'], ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['heading_font_google_weightstyle'], ENT_QUOTES, 'UTF-8');?>
&display=swap" rel="stylesheet">
<?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['heading_font'] == 'fontface' && isset($_smarty_tpl->tpl_vars['jmsSetting']->value['heading_fontface_css'])) {?>
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/jmsthemesetting/views/fonts/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['heading_fontface_css'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
<?php }?> 

<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['body_icon_font'] != '') {?>
<link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/jmsthemesetting/views/fonts/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['body_icon_font'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['external'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['inline'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
<style>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

</style>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['jpb_rtl']->value) {?>
<link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
css/rtl.css" rel="stylesheet">
<?php }?>


<?php }
}
