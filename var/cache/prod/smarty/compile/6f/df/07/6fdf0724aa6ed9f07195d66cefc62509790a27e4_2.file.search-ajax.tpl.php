<?php
/* Smarty version 3.1.33, created on 2020-07-01 08:44:32
  from 'D:\xamppp\htdocs\jms_demart\modules\jmsajaxsearch\views\templates\hook\search-ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efc3ee0355e28_31209332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fdf0724aa6ed9f07195d66cefc62509790a27e4' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\modules\\jmsajaxsearch\\views\\templates\\hook\\search-ajax.tpl',
      1 => 1585124061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efc3ee0355e28_31209332 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="search-result-content">
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <div class="search_product_list">
            <div class="row clearfix">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                    <div class="item col-6 col-sm-4 col-md-4 col-lg-2">
                        <?php if ($_smarty_tpl->tpl_vars['show_image']->value == 1) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="search-product-image">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" />
                            </a>
                        <?php }?>
                        <div class="product-info">
                            <a class="product-link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],35,'...' ));?>

                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['show_desc']->value == 1) {?>
                                <p class="desc"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['desc'],$_smarty_tpl->tpl_vars['desc_count']->value,'...' ));?>
</p>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['show_price']->value == 1) {?>
                                <div class="content_price">
                                    <span class="price new"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['no_text']->value;?>

    <?php }?>
</div>
<?php }
}
