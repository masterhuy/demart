<?php
/* Smarty version 3.1.33, created on 2020-06-15 10:01:47
  from 'D:\xamppp\htdocs\jms_demart\themes\jms_demart\templates\cms\stores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee738fba97c05_47621998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fde9f82c1089b10342bbd3f6655ed136d8b45bc' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\themes\\jms_demart\\templates\\cms\\stores.tpl',
      1 => 1592209383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee738fba97c05_47621998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14689871105ee738fba6cc71_74499732', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14619748075ee738fba70af7_30034410', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_14689871105ee738fba6cc71_74499732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_14689871105ee738fba6cc71_74499732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our stores','d'=>'Shop.Theme'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_14619748075ee738fba70af7_30034410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14619748075ee738fba70af7_30034410',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content page-stores">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stores']->value, 'store');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
?>
      <article id="store-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="store-item">
        <div class="store-item-container row">
          <div class="col-12 col-sm-6 col-md-6">
              <div class="row align-items-center small-gutters">
                  <div class="col-auto store-picture">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['image']['bySize']['stores_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
                  </div>
                  <div class="col-auto store-description">
                    <h3 class="h3 card-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h3>
                    <address><?php echo $_smarty_tpl->tpl_vars['store']->value['address']['formatted'];?>
</address>
                    <?php if ($_smarty_tpl->tpl_vars['store']->value['note'] || $_smarty_tpl->tpl_vars['store']->value['phone'] || $_smarty_tpl->tpl_vars['store']->value['fax'] || $_smarty_tpl->tpl_vars['store']->value['email']) {?>
                      <a data-toggle="collapse" href="#about-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id'], ENT_QUOTES, 'UTF-8');?>
" aria-expanded="false" aria-controls="about-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'About and Contact','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</strong></a>
                    <?php }?>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 store-date-hour">
              <div class="row">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['store']->value['business_hours'], 'day');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
?>
                  <div class="col-6">
                      <label><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['day']->value['day'],4,':' )), ENT_QUOTES, 'UTF-8');?>
</label>
                      <div class="value">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['day']->value['hours'], 'h');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['h']->value) {
?>
                          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h']->value, ENT_QUOTES, 'UTF-8');?>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </div>
                  </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
          </div>
        </div>
        <footer id="about-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="collapse">
          <div class="store-item-footer divide-top">
            <div class="card-block">
              <?php if ($_smarty_tpl->tpl_vars['store']->value['note']) {?>
                <p class="text-justify"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['note'], ENT_QUOTES, 'UTF-8');?>
<p>
              <?php }?>
            </div>
            <ul class="card-block">
              <?php if ($_smarty_tpl->tpl_vars['store']->value['phone']) {?>
                <li><i class="fa fa-phone"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['store']->value['fax']) {?>
                <li><i class="fa fa-phone"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['fax'], ENT_QUOTES, 'UTF-8');?>
</li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['store']->value['email']) {?>
                <li><i class="fa fa-envelope"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['email'], ENT_QUOTES, 'UTF-8');?>
</li>
              <?php }?>
            </ul>
          </div>
        </footer>
      </article>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
}
