<?php
/* Smarty version 3.1.33, created on 2020-06-18 08:57:04
  from 'D:\xamppp\htdocs\jms_demart\modules\jmspagebuilder\views\templates\hook\addonvideobackground.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eeb1e50da8b16_37511374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '642e719c364a287772abc5f78801a38b6202899a' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\modules\\jmspagebuilder\\views\\templates\\hook\\addonvideobackground.tpl',
      1 => 1569916432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eeb1e50da8b16_37511374 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="video-background-wrap" style="height:<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
px;overflow:hidden;">
<div class="jms-addon jms-video-background" style="margin-top:-<?php echo $_smarty_tpl->tpl_vars['margintop']->value;?>
px;">
<?php if ($_smarty_tpl->tpl_vars['src']->value) {?>    
	<iframe width="1920" height="1080" frameborder="0" src="<?php echo $_smarty_tpl->tpl_vars['src']->value;
echo $_smarty_tpl->tpl_vars['videoparams']->value;?>
"></iframe>
<?php }?>
<div class="background-overlay" style="position:absolute;width:100%;height:100%;z-index:2;left:0px;top:0px;padding-top:<?php echo $_smarty_tpl->tpl_vars['paddingtop']->value;?>
px;text-align:<?php echo $_smarty_tpl->tpl_vars['text_align']->value;?>
;background:#<?php echo $_smarty_tpl->tpl_vars['overlay_color']->value;?>
;opacity:<?php echo $_smarty_tpl->tpl_vars['overlay_opacity']->value;?>
;color:#<?php echo $_smarty_tpl->tpl_vars['text_color']->value;?>
;">
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
	<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }
if ($_smarty_tpl->tpl_vars['button_text']->value) {?>
<a href="<?php if ($_smarty_tpl->tpl_vars['button_link']->value) {
echo $_smarty_tpl->tpl_vars['button_link']->value;
} else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value == 'new window') {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['button_text']->value;?>
</a>
<?php }?>
</div>
</div>
</div><?php }
}
