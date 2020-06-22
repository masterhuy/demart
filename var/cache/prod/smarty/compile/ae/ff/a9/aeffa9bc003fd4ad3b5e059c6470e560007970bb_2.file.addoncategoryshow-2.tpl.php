<?php
/* Smarty version 3.1.33, created on 2020-06-22 03:36:23
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\modules\jmspagebuilder\views\templates\hook\addoncategoryshow-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef01927ca0344_60069383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeffa9bc003fd4ad3b5e059c6470e560007970bb' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncategoryshow-2.tpl',
      1 => 1590978771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef01927ca0344_60069383 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['category']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('categoryLink', $_smarty_tpl->tpl_vars['link']->value->getcategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']));?>
	<?php $_smarty_tpl->_assignInScope('categoryname', $_smarty_tpl->tpl_vars['category']->value['name'][$_smarty_tpl->tpl_vars['language']->value['id']]);?>
	<div class="category-box">
		<?php if ($_smarty_tpl->tpl_vars['show_img']->value == 1) {?>
		<div class="category-thumb">
			<a href="<?php echo $_smarty_tpl->tpl_vars['categoryLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['categoryname']->value;?>
" class="category_image">
				<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['category']->value['link_rewrite'],$_smarty_tpl->tpl_vars['category']->value['id_image']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['categoryname']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['categoryname']->value;?>
" class="img-responsive"/>			
			</a>
		</div>
		<?php }?>
        <div class="d-flex align-items-center">
            <h3 class="parent-category">
                <a href="<?php echo $_smarty_tpl->tpl_vars['categoryLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['categoryname']->value;?>
">
                    <?php echo $_smarty_tpl->tpl_vars['categoryname']->value;?>

                </a>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['counts']->value, 'count');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['count']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['count']->value['totalProducts'] > 0) {?>
                        <p class="count">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Included','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['count']->value['totalProducts'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'items for your living room','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>

                        </p>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </h3>
            <a class="btn btn-default shop-now" href="<?php echo $_smarty_tpl->tpl_vars['categoryLink']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop Now','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
</a>
        </div>
        <?php if (!empty('childs')) {?>
            <ul class="child-categories">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['childs']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                    <?php $_smarty_tpl->_assignInScope('categoryLink', $_smarty_tpl->tpl_vars['link']->value->getcategoryLink($_smarty_tpl->tpl_vars['c']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']));?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['categoryLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</a>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
	</div>
<?php } else { ?>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No sub categories','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
</p>
<?php }?>

			<?php }
}
