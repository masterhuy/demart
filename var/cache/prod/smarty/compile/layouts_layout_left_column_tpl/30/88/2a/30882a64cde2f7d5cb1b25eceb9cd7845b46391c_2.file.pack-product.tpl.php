<?php
/* Smarty version 3.1.33, created on 2020-06-02 08:13:24
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\catalog\_partials\miniatures\pack-product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed5fc14858ff3_44694633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30882a64cde2f7d5cb1b25eceb9cd7845b46391c' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\catalog\\_partials\\miniatures\\pack-product.tpl',
      1 => 1569916434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed5fc14858ff3_44694633 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tbody>
    <tr>
        <td class="d-flex" scope="row">
            <img
                src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
"
                alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
            >
            <div class="pack-product-name">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

            </div>
        </td>
        <td>
            <div class="pack-product-price">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

            </div>
        </td>
        <td>
            <div class="pack-product-quantity">
                <span>x <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['pack_quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
        </td>
    </tr>
</tbody>
           
        


<?php }
}
