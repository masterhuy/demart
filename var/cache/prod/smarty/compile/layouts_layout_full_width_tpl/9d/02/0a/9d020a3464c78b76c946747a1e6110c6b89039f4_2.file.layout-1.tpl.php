<?php
/* Smarty version 3.1.33, created on 2020-06-02 10:58:47
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\customer\_partials\login\layout-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed622d7943200_65523336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d020a3464c78b76c946747a1e6110c6b89039f4' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\customer\\_partials\\login\\layout-1.tpl',
      1 => 1586148114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed622d7943200_65523336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2984961565ed622d7943201_30808252', 'page_content');
?>

<?php }
/* {block 'display_after_login_form'} */
class Block_2175877265ed622d7943203_98648733 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

                        <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_12098916705ed622d7943209_18988616 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="login-layout-1" id="login-wrapper">
            <div class="login-image" id="login-image">
                <div class="login-box">
                    <img width="100%" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['login_page_image'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>
            </div>
            <div class="row login-row">
                <div class="col-md-6">
                    <div class="login-box login-form">
                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h3>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2175877265ed622d7943203_98648733', 'display_after_login_form', $this->tplIndex);
?>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login-box signup-form">
                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign Up','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h3>
                        <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['login_page_signup_content']) {?>
                        <div class="signup-content">
                            <?php echo $_smarty_tpl->tpl_vars['jmsSetting']->value['login_page_signup_content'];?>

                        </div>
                        <?php }?>
                        <div class="no-account">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_2984961565ed622d7943201_30808252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_2984961565ed622d7943201_30808252',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_12098916705ed622d7943209_18988616',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_2175877265ed622d7943203_98648733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12098916705ed622d7943209_18988616', 'login_form_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
