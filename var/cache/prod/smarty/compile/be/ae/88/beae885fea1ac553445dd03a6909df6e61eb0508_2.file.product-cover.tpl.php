<?php
/* Smarty version 3.1.33, created on 2020-07-02 11:05:54
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\_partials\product-cover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efdb18280ac10_79691918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beae885fea1ac553445dd03a6909df6e61eb0508' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\catalog\\_partials\\product-cover.tpl',
      1 => 1593663744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efdb18280ac10_79691918 (Smarty_Internal_Template $_smarty_tpl) {
?> <div class="product-cover">
    <?php if (count($_smarty_tpl->tpl_vars['product']->value['flags']) > 0) {?>
        <ul class="product-flags">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
                <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>
    <img 
        class="js-qv-product-cover<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['product_image_zoom'] == 'elevatezoom') {?> product-image-zoom<?php }?>" 
        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" 
        data-zoom-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" 
        alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" 
        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" 
        style="width:100%;" 
        itemprop="image"
    >
    <div class="zoom-icon d-none d-md-block" data-toggle="modal" data-target="#product-modal">
        <i class="ptw-icon icon-search-5_medium"></i>
    </div>
</div>
<?php }
}
