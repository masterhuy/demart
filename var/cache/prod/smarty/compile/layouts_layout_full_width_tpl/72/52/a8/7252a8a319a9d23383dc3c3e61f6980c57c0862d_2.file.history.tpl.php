<?php
/* Smarty version 3.1.33, created on 2020-05-29 08:19:43
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\customer\history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed0b78f7ab406_51745794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7252a8a319a9d23383dc3c3e61f6980c57c0862d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\customer\\history.tpl',
      1 => 1586316394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed0b78f7ab406_51745794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6586243165ed0b78f77c607_34607654', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17442827495ed0b78f780482_08087928', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_6586243165ed0b78f77c607_34607654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_6586243165ed0b78f77c607_34607654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_17442827495ed0b78f780482_08087928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_17442827495ed0b78f780482_08087928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h6><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here are the orders you\'ve placed since your account was created.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h6>

  <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
    <table class="table table-striped table-bordered table-labeled hidden-sm-down">
      <thead class="thead-default">
        <tr>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total price','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th class="hidden-md-down text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th class="hidden-md-down text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th>&nbsp;</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
          <tr>
            <th scope="row"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reference'], ENT_QUOTES, 'UTF-8');?>
</th>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['order_date'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="hidden-md-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['payment'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="text-center">
              <span
                class="label label-pill <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['contrast'], ENT_QUOTES, 'UTF-8');?>
"
                style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['color'], ENT_QUOTES, 'UTF-8');?>
"
              >
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['ostate_name'], ENT_QUOTES, 'UTF-8');?>

              </span>
            </td>
            <td class="text-center hidden-md-down">
              <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'], ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
              <?php } else { ?>
                -
              <?php }?>
            </td>
            <td class="text-center order-actions">
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['details_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="view-order-details" class="btn">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

              </a>
              <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url'], ENT_QUOTES, 'UTF-8');?>
" class="btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
              <?php }?>
            </td>
          </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>

    <div class="orders hidden-md-up">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
        <div class="order mb-3">
          <div class="row">
            <div class="col-12">
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['details_url'], ENT_QUOTES, 'UTF-8');?>
"><h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reference'], ENT_QUOTES, 'UTF-8');?>
</h3></a>
              <div class="date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['order_date'], ENT_QUOTES, 'UTF-8');?>
</div>
              <div class="total"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</div>
              <div class="status">
                <span
                  class="label label-pill <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['contrast'], ENT_QUOTES, 'UTF-8');?>
"
                  style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['color'], ENT_QUOTES, 'UTF-8');?>
"
                >
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['ostate_name'], ENT_QUOTES, 'UTF-8');?>

                </span>
              </div>
            </div>
          </div>
        </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

  <?php }
}
}
/* {/block 'page_content'} */
}
