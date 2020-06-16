<?php
/* Smarty version 3.1.33, created on 2020-06-16 02:58:20
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\customer\_partials\customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee8273c6488d6_49258750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c47e6e0320806d49a3559b595128d42dd7f47138' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\customer\\_partials\\customer-form.tpl',
      1 => 1590736438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5ee8273c6488d6_49258750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" id="customer-form" class="js-customer-form" method="post">
    <section>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8241909265ee8273c6488d1_29567670', "form_fields");
?>

    </section>
    <footer class="form-footer clearfix">
        <input type="hidden" name="submitCreate" value="1">
        <div class="col-12 col-lg-2"></div>
        <div class="col-12 col-lg-10 float-right">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13834505575ee8273c6488d3_71802858', "form_buttons");
?>

        </div>
    </footer>
</form>
<?php }
/* {block "form_field"} */
class Block_187436785ee8273c6488d3_17499591 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block "form_field"} */
/* {block "form_fields"} */
class Block_8241909265ee8273c6488d1_29567670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_fields' => 
  array (
    0 => 'Block_8241909265ee8273c6488d1_29567670',
  ),
  'form_field' => 
  array (
    0 => 'Block_187436785ee8273c6488d3_17499591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187436785ee8273c6488d3_17499591', "form_field", $this->tplIndex);
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block "form_fields"} */
/* {block "form_buttons"} */
class Block_13834505575ee8273c6488d3_71802858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_13834505575ee8273c6488d3_71802858',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <button class="btn-default" data-link-action="save-customer" type="submit">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                </button>
            <?php
}
}
/* {/block "form_buttons"} */
}
