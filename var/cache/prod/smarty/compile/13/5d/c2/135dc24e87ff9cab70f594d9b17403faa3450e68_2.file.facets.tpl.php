<?php
/* Smarty version 3.1.33, created on 2020-06-29 10:51:24
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\modules\ps_facetedsearch\views\templates\front\catalog\facets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef9b99c243679_37829261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '135dc24e87ff9cab70f594d9b17403faa3450e68' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\modules\\ps_facetedsearch\\views\\templates\\front\\catalog\\facets.tpl',
      1 => 1593396802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef9b99c243679_37829261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18101037345ef9b99c1d21d6_64464524', 'active_filters_title');
?>


    <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeFilters']->value, 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8915927145ef9b99c1e1bd8_16888335', 'active_filters_item');
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>
</section>



<?php if (count($_smarty_tpl->tpl_vars['displayedFacets']->value)) {?>
    <div id="search_filters">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15983551245ef9b99c1e98d0_64619051', 'facets_clearall_button');
?>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayedFacets']->value, 'facet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
?>
            <section class="facet <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
 clearfix">
                <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
                <?php $_smarty_tpl->_assignInScope('_collapse', true);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {
$_smarty_tpl->_assignInScope('_collapse', false);
}?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <div class="title" data-target="#facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse"<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> aria-expanded="true"<?php }?>>
                    <h3 class="facet-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h3>
                    <span class="navbar-toggler collapse-icons">
                        <i class="fal fa-plus closing"></i>
                        <i class="fal fa-minus opening"></i>
                    </span>
                </div>

                <?php if (in_array($_smarty_tpl->tpl_vars['facet']->value['widgetType'],array('radio','checkbox'))) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6861424365ef9b99c1f92e5_18251852', 'facet_item_other');
?>


                <?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'dropdown') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15385592235ef9b99c2186e1_45887026', 'facet_item_dropdown');
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'slider') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17533689105ef9b99c22fde8_65822057', 'facet_item_slider');
?>

                <?php }?>
            </section>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
/* {block 'active_filters_title'} */
class Block_18101037345ef9b99c1d21d6_64464524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_title' => 
  array (
    0 => 'Block_18101037345ef9b99c1d21d6_64464524',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h1 class="h6 <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active-filter-title<?php } else { ?>hidden-xs-up<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h1>
    <?php
}
}
/* {/block 'active_filters_title'} */
/* {block 'active_filters_item'} */
class Block_8915927145ef9b99c1e1bd8_16888335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_item' => 
  array (
    0 => 'Block_8915927145ef9b99c1e1bd8_16888335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <li class="filter-block">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl ) );?>

                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                <a class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><i class="ptw-icon icon-closed_light close"></i></a>
            </li>
            <?php
}
}
/* {/block 'active_filters_item'} */
/* {block 'facets_clearall_button'} */
class Block_15983551245ef9b99c1e98d0_64619051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_clearall_button' => 
  array (
    0 => 'Block_15983551245ef9b99c1e98d0_64619051',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
                <div id="_desktop_search_filters_clear_all" class="hidden-sm-down clear-all-wrapper">
                    <button data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-default js-search-filters-clear-all">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                    </button>
                </div>
            <?php }?>
        <?php
}
}
/* {/block 'facets_clearall_button'} */
/* {block 'facet_item_other'} */
class Block_6861424365ef9b99c1f92e5_18251852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other' => 
  array (
    0 => 'Block_6861424365ef9b99c1f92e5_18251852',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse show">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
?>
                            <?php if (!$_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                                <?php continue 1;?>
                            <?php }?>
                            <li>
                                <label class="facet-label<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?>" for="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                                        <span class="custom-checkbox">
                                            <input
                                                id="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                                type="checkbox"
                                                <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>
                                            >
                                            <span class="checkmark"></span>
                                            <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) {?>
                                                <span class="color" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
"></span>
                                            <?php } elseif (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?>
                                                <span class="color texture" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)"></span>
                                            <?php } else { ?>
                                                <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                                            <?php }?>
                                        </span>
                                    <?php } else { ?>
                                    <span class="custom-radio">
                                        <input
                                            id="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                            data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                            type="radio"
                                            name="filter <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>
                                        >
                                        <span class="checkmark"></span>
                                        <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>></span>
                                    </span>
                                    <?php }?>

                                    <a
                                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                        class="_gray-darker search-link js-search-link"
                                        rel="nofollow"
                                    >
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                            <span class="magnitude">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
                                        <?php }?>
                                    </a>
                                </label>
                            </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php
}
}
/* {/block 'facet_item_other'} */
/* {block 'facet_item_dropdown'} */
class Block_15385592235ef9b99c2186e1_45887026 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_dropdown' => 
  array (
    0 => 'Block_15385592235ef9b99c2186e1_45887026',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
                            <li>
                                <div class="col-sm-12 col-xs-12 col-md-12 facet-dropdown dropdown">
                                    <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php $_smarty_tpl->_assignInScope('active_found', false);?>
                                        <span>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                                (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                                            <?php }?>
                                            <?php $_smarty_tpl->_assignInScope('active_found', true);?>
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php if (!$_smarty_tpl->tpl_vars['active_found']->value) {?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(no filter)','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                                        <?php }?>
                                        </span>
                                        <i class="material-icons float-xs-right">&#xE5C5;</i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                                        <?php if (!$_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                                            <a
                                                rel="nofollow"
                                                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                                class="select-list"
                                            >
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                                (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                                            <?php }?>
                                            </a>
                                        <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    <?php
}
}
/* {/block 'facet_item_dropdown'} */
/* {block 'facet_item_slider'} */
class Block_17533689105ef9b99c22fde8_65822057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_slider' => 
  array (
    0 => 'Block_17533689105ef9b99c22fde8_65822057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                        <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            class="faceted-slider collapse show"
                            data-slider-min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['min'], ENT_QUOTES, 'UTF-8');?>
"
                            data-slider-max="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['max'], ENT_QUOTES, 'UTF-8');?>
"
                            data-slider-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            data-slider-values="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['value'] )), ENT_QUOTES, 'UTF-8');?>
"
                            data-slider-unit="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['unit'], ENT_QUOTES, 'UTF-8');?>
"
                            data-slider-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                            data-slider-specifications="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['facet']->value['properties']['specifications'] )), ENT_QUOTES, 'UTF-8');?>
"
                            data-slider-encoded-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <li>
                            <p id="facet_label_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ranger">
                                 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            </p>
                            <div id="slider-range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
                            </li>
                        </ul>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
}
/* {/block 'facet_item_slider'} */
}
