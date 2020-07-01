<?php
/* Smarty version 3.1.33, created on 2020-07-01 03:32:33
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\cms\sitemap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efbf5c1037233_04593254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3df4ba4d7452fc099f8a4762c6b9f3a04fcde42' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\cms\\sitemap.tpl',
      1 => 1569916436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cms/_partials/sitemap-nested-list.tpl' => 4,
  ),
),false)) {
function content_5efbf5c1037233_04593254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6331085555efbf5c10239b2_23493262', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15612819045efbf5c102b6b3_78620733', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_6331085555efbf5c10239b2_23493262 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_6331085555efbf5c10239b2_23493262',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <span class="sitemap-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sitemap','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_15612819045efbf5c102b6b3_78620733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_15612819045efbf5c102b6b3_78620733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
    <div class="row sitemap">
        <div class="col-md-3">
          <h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['our_offers']->value, ENT_QUOTES, 'UTF-8');?>
</h5>
          <?php $_smarty_tpl->_subTemplateRender('file:cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('links'=>$_smarty_tpl->tpl_vars['links']->value['offers']), 0, false);
?>
        </div>
        <div class="col-md-3">
          <h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories']->value, ENT_QUOTES, 'UTF-8');?>
</h5>
          <?php $_smarty_tpl->_subTemplateRender('file:cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('links'=>$_smarty_tpl->tpl_vars['links']->value['categories']), 0, true);
?>
        </div>
        <div class="col-md-3">
          <h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['your_account']->value, ENT_QUOTES, 'UTF-8');?>
</h5>
          <?php $_smarty_tpl->_subTemplateRender('file:cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('links'=>$_smarty_tpl->tpl_vars['links']->value['user_account']), 0, true);
?>
        </div>
        <div class="col-md-3">
          <h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pages']->value, ENT_QUOTES, 'UTF-8');?>
</h5>
          <?php $_smarty_tpl->_subTemplateRender('file:cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('links'=>$_smarty_tpl->tpl_vars['links']->value['pages']), 0, true);
?>
        </div>
    </div>
  
<?php
}
}
/* {/block 'page_content_container'} */
}
