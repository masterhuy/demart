<?php
/* Smarty version 3.1.33, created on 2020-05-28 11:29:44
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecf92986141a7_47810069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1590636330,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecf92986141a7_47810069 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="block-contact wrapper">
    <div class="block-content">
        <div class="addon-title">
            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our Store','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
            <div class="phone section">
                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotline','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
:</label>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </div>
        <?php }?>

        <div class="address section">
            <div class="info-address">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
:
                <span><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['address1'];?>
</span>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
            <div class="email section">
                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
:</label>
                                    
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%email%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </div>
        <?php }?>
    </div>
</div>
<?php }
}
