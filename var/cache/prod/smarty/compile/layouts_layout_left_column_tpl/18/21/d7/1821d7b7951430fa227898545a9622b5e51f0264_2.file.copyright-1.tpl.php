<?php
/* Smarty version 3.1.33, created on 2020-05-28 09:00:05
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\_partials\footers\copyright-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecf6f85b84778_96002035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1821d7b7951430fa227898545a9622b5e51f0264' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\_partials\\footers\\copyright-1.tpl',
      1 => 1587548079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecf6f85b84778_96002035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14452155325ecf6f85b6d068_15021991', 'footer-copyright');
?>

<?php }
/* {block 'footer-copyright'} */
class Block_14452155325ecf6f85b6d068_15021991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-copyright' => 
  array (
    0 => 'Block_14452155325ecf6f85b6d068_15021991',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="footer-copyright" class="footer-copyright<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_class'], ENT_QUOTES, 'UTF-8');
}?>">
        <div class="container">
            <div class="row align-items-center">
				<?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) {?>
					<div class="layout-column copyright-content col-12 col-sm-12 col-md-12 col-lg-6">
						<?php echo $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content'];?>

					</div>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_payment_image']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_payment_image']) {?>
					<div class="layout-column payment-img col-12 col-sm-12 col-md-12 col-lg-6 ">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_payment_image'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payments','d'=>'Shop.jmstheme'),$_smarty_tpl ) );?>
"/>
					</div>
				<?php }?>
			</div>
        </div>
    </div>
<?php
}
}
/* {/block 'footer-copyright'} */
}