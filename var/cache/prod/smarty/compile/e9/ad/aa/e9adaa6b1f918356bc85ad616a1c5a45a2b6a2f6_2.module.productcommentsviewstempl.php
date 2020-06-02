<?php
/* Smarty version 3.1.33, created on 2020-06-02 10:43:14
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed61f32b0f457_77997455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9adaa6b1f918356bc85ad616a1c5a45a2b6a2f6' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1591071998,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed61f32b0f457_77997455 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0 || $_smarty_tpl->tpl_vars['post_allowed']->value) {?>
    <div class="product-comments-additional-info">
        <?php if ($_smarty_tpl->tpl_vars['nb_comments']->value == 0) {?>
            <?php if ($_smarty_tpl->tpl_vars['post_allowed']->value) {?>
                <div class="d-flex align-items-center empty">
                    <div class="empty-stars"></div>
                    <button class="btn-default btn-comment post-product-comment">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add your review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

                    </button>
                </div>
            <?php }?>
        <?php } else { ?>
                        <div class="additional-links">
                <a class="link-comment user-reviews" href="#product-comments-list-header">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nb_comments']->value, ENT_QUOTES, 'UTF-8');?>
)
                </a>
                <?php if ($_smarty_tpl->tpl_vars['post_allowed']->value) {?>
                    <a class="link-comment post-product-comment" href="#product-comments-list-header">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add your review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

                    </a>
                <?php }?>
            </div>

                        <div itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" itemscope>
                <meta itemprop="reviewCount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nb_comments']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_grade']->value, ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        <?php }?>
    </div>
<?php }
}
}
