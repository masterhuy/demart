<?php
/* Smarty version 3.1.33, created on 2020-06-15 04:18:20
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\_partials\category-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee6e87c4d2ec9_68805000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec3ea0799192aa85680f638d3d386d47ff73c489' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\catalog\\_partials\\category-header.tpl',
      1 => 1591066391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee6e87c4d2ec9_68805000 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
    <?php if ($_smarty_tpl->tpl_vars['category']->value['image'] || $_smarty_tpl->tpl_vars['category']->value['description']) {?>
        <div id="js-product-list-header">
            <div class="block-category">
                <div class="block-category-inner">
                    <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'] && $_smarty_tpl->tpl_vars['jmsSetting']->value['shop_cat_banner']) {?>
                        <div class="category-cover">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>">
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['category']->value['description'] && $_smarty_tpl->tpl_vars['jmsSetting']->value['shop_cat_desc']) {?>
                        <div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php }
}
}
}
