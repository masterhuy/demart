<?php
/* Smarty version 3.1.33, created on 2020-06-18 08:54:10
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\modules\jmspagebuilder\views\templates\hook\addonvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eeb1da2c97bb3_05436244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '971460d8bf5726ba53072ec7fd928b7f8df35d4d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\modules\\jmspagebuilder\\views\\templates\\hook\\addonvideo.tpl',
      1 => 1592466839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eeb1da2c97bb3_05436244 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-video">
    <?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
        <div class="addon-title">
            <h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
        <p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
    <?php }?>
    <div class="jms-video">
        <div class="video-image" data-toggle="modal" data-target="#video">
            <i class="lnr lnr-film-play"></i>
        </div>
        <div class="modal" id="video">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <?php if ($_smarty_tpl->tpl_vars['src']->value) {?>
                            <iframe width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
