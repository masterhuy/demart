<?php
/* Smarty version 3.1.33, created on 2020-06-24 10:50:44
  from 'module:jmsadvsearchviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef321f47093d5_62669061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c30b040f223a82f6a7f79089e7315fb9b1db7a5e' => 
    array (
      0 => 'module:jmsadvsearchviewstemplate',
      1 => 1592980687,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef321f47093d5_62669061 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="jms-advsearch">
	<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
" class="input-group" id="searchbox">
		<input type="hidden" name="fc" value="module" />
		<input type="hidden" name="module" value="jmsadvsearch" />
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="order" value="product.position.asc" />			
		<div class="keyword-group">
			<div class="input-group-addon icon-drop-down">
				<select name="id_category" id="selector_cat">
					<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'jmsadvsearch'),$_smarty_tpl ) );?>
</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jmscategtree']->value['children'], 'child', false, NULL, 'jmscategtree', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_jmscategtree']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_jmscategtree']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_jmscategtree']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_jmscategtree']->value['total'];
?>
						<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_jmscategtree']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_jmscategtree']->value['last'] : null)) {?>
							<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0, true);
?>
						<?php } else { ?>
							<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0, true);
?>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
			<input type="text" id="ajax_advsearch" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for shopping...','mod'=>'jmsadvsearch'),$_smarty_tpl ) );?>
" class="input-search" />
		</div>
		<span class="input-group-addon input-group-search">
			<button>
				<i class="lnr lnr-magnifier"></i>
			</button>
		</span>
	</form>
	<div id="advsearch_result"></div>
</div>
<?php }
}
