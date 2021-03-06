<?php
/* Smarty version 3.1.33, created on 2020-07-02 10:23:31
  from 'module:jmsajaxsearchviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efda7931fd8c7_98849353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce50c540965b5f47467f8fcf5e281750372dd4a4' => 
    array (
      0 => 'module:jmsajaxsearchviewstemplat',
      1 => 1592448883,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efda7931fd8c7_98849353 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="btn-group jms_ajax_search col-auto<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['search_box_type']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['search_box_type'], ENT_QUOTES, 'UTF-8');
}?>" id="jms_ajax_search">
	<?php $_smarty_tpl->_assignInScope('str_at', strpos($_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon'],"_"));?>
	<?php if ($_smarty_tpl->tpl_vars['str_at']->value && $_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon_thickness']) {?>
		<?php $_smarty_tpl->_assignInScope('search_icon', substr($_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon'],0,($_smarty_tpl->tpl_vars['str_at']->value)));?>
		<?php $_smarty_tpl->_assignInScope('search_icon', ($_smarty_tpl->tpl_vars['search_icon']->value).($_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon_thickness']));?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('search_icon', $_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon']);?>
	<?php }?>
	<a href="#" class="btn-search d-flex align-items-center" data-toggle="dropdown" data-display="static">
		<i class="lnr lnr-magnifier"></i>
	</a>
	<div id="search-form-dropdown" class="search-form dropdown-menu">
		<div class="search-box">
			<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
        		<div class="input-group">
    				<input type="text" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search everything...','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl ) );?>
" class="jms-search-input form-control search-input" />
    				<button type="submit" name="submit_search" class="button-search">
    					<i class="lnr lnr-magnifier"></i>
    				</button>
        		</div>
			</form>
			<div class="search-result-area"></div>
		</div>
	</div>
</div>
<?php }
}
