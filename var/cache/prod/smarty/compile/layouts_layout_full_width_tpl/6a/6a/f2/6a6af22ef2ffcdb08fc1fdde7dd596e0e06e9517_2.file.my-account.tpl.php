<?php
/* Smarty version 3.1.33, created on 2020-05-29 08:55:10
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\customer\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed0bfde7ec531_75413071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a6af22ef2ffcdb08fc1fdde7dd596e0e06e9517' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\customer\\my-account.tpl',
      1 => 1590728294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed0bfde7ec531_75413071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_722740585ed0bfde7b1ba2_24769056', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1045735995ed0bfde7b98a8_54472274', 'page_content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21158923485ed0bfde7e86b0_65306790', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_722740585ed0bfde7b1ba2_24769056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_722740585ed0bfde7b1ba2_24769056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'display_customer_account'} */
class Block_9657936845ed0bfde7e4828_98990928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerAccount'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'display_customer_account'} */
/* {block 'page_content'} */
class Block_1045735995ed0bfde7b98a8_54472274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1045735995ed0bfde7b98a8_54472274',
  ),
  'display_customer_account' => 
  array (
    0 => 'Block_9657936845ed0bfde7e4828_98990928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="">
    <div class="links row no-margin">
      <div class="col">
          <a id="identity-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['identity'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
              <i class="lnr lnr-user"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </span>
          </a>
      </div>
      <?php if (count($_smarty_tpl->tpl_vars['customer']->value['addresses'])) {?>
      <div class="col">
          <a id="addresses-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['addresses'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
              <i class="lnr lnr-home"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </span>
          </a>
      </div>
      <?php } else { ?>
      <div class="col">
          <a id="address-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['address'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
              <i class="lnr lnr-home"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add first address','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </span>
          </a>
      </div>
      <?php }?>

      <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
      <div class="col">
          <a id="history-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
              <i class="lnr lnr-history"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history and details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </span>
          </a>
      </div>
      <?php }?>

      <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
      <div class="col">
          <a id="order-slips-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_slip'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
              <i class="lnr lnr-license"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </span>
          </a>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['configuration']->value['voucher_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
      <div class="col">
          <a id="discounts-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['discount'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
              <i class="lnr lnr-tag"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </span>
          </a>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['configuration']->value['return_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
      <div class="col">
          <a id="returns-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_follow'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
              <i class="lnr lnr-undo"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise returns','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </span>
          </a>
      </div>
      <?php }?>
      <div class="col">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9657936845ed0bfde7e4828_98990928', 'display_customer_account', $this->tplIndex);
?>

      </div>
    </div>
  </div>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'my_account_links'} */
class Block_20401787935ed0bfde7e86b0_92928547 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="text-sm-center">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" >
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </a>
    </div>
  <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_21158923485ed0bfde7e86b0_65306790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_21158923485ed0bfde7e86b0_65306790',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_20401787935ed0bfde7e86b0_92928547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20401787935ed0bfde7e86b0_92928547', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
