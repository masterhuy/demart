<?php
/* Smarty version 3.1.33, created on 2020-05-28 11:29:44
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecf92985c5fa5_86688713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84989161515814db893babbd091e0cfa277b69f1' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\_partials\\footer.tpl',
      1 => 1585897616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/footers/footer-1.tpl' => 1,
    'file:_partials/footers/footer-2.tpl' => 1,
    'file:_partials/footers/footer-3.tpl' => 1,
    'file:_partials/footers/footer-4.tpl' => 1,
    'file:_partials/footers/footer-5.tpl' => 1,
    'file:_partials/footers/footer-6.tpl' => 1,
    'file:_partials/footers/footer-7.tpl' => 1,
  ),
),false)) {
function content_5ecf92985c5fa5_86688713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21181256345ecf929859eea9_39515477', "footer");
?>

<?php }
/* {block "footer"} */
class Block_21181256345ecf929859eea9_39515477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_21181256345ecf929859eea9_39515477',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (isset($_GET['footer_layout']) && $_GET['footer_layout'] != '') {?>
       <?php $_smarty_tpl->_assignInScope('footer_layout', $_GET['footer_layout']);?>
  <?php } else { ?>
       <?php $_smarty_tpl->_assignInScope('footer_layout', $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_layout']);?>
  <?php }?>
 <footer id="footer" class="footer-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['footer_layout']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_class'], ENT_QUOTES, 'UTF-8');
}?>">
     <?php if ($_smarty_tpl->tpl_vars['footer_layout']->value == 1) {?>
         <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php } elseif ($_smarty_tpl->tpl_vars['footer_layout']->value == 2) {?>
         <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php } elseif ($_smarty_tpl->tpl_vars['footer_layout']->value == 3) {?>
         <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php } elseif ($_smarty_tpl->tpl_vars['footer_layout']->value == 4) {?>
         <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php } elseif ($_smarty_tpl->tpl_vars['footer_layout']->value == 5) {?>
         <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php } elseif ($_smarty_tpl->tpl_vars['footer_layout']->value == 6) {?>
         <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-6.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php } elseif ($_smarty_tpl->tpl_vars['footer_layout']->value == 7) {?>
         <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-7.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php }?>
</footer>
<?php
}
}
/* {/block "footer"} */
}