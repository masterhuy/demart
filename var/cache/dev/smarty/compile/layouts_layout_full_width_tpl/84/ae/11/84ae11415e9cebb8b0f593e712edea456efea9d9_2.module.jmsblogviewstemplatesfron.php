<?php
/* Smarty version 3.1.33, created on 2020-05-15 03:02:24
  from 'module:jmsblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ebdf830a90290_80342332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84ae11415e9cebb8b0f593e712edea456efea9d9' => 
    array (
      0 => 'module:jmsblogviewstemplatesfron',
      1 => 1588647649,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebdf830a90290_80342332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin D:\xamppp\htdocs\jms_demart/themes/jms_demart/modules/jmsblog/views/templates/front/category.tpl --><?php if (isset($_GET['page_layout']) && $_GET['page_layout'] != '') {?>
     <?php $_smarty_tpl->_assignInScope('page_layout', $_GET['page_layout']);
}
if ($_smarty_tpl->tpl_vars['page_layout']->value == 'no') {
$_smarty_tpl->_assignInScope('layout', "layouts/layout-full-width.tpl");
} elseif ($_smarty_tpl->tpl_vars['page_layout']->value == 'right') {
$_smarty_tpl->_assignInScope('layout', "layouts/layout-right-column.tpl");
} else {
$_smarty_tpl->_assignInScope('layout', "layouts/layout-left-column.tpl");
}?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1560862985ebdf8309fbb71_29461080', 'content');
?>

<!-- end D:\xamppp\htdocs\jms_demart/themes/jms_demart/modules/jmsblog/views/templates/front/category.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block "page_content"} */
class Block_18073312995ebdf8309fbb79_99967523 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_demart\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php if (isset($_smarty_tpl->tpl_vars['posts']->value) && $_smarty_tpl->tpl_vars['posts']->value) {?>
					<div class="cat-post-list more-columns row">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
							<?php $_smarty_tpl->_assignInScope('params', array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']));?>
							<?php $_smarty_tpl->_assignInScope('catparams', array('category_id'=>$_smarty_tpl->tpl_vars['post']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias']));?>
							<div class="item col-12">
								<div class="blog-post">
									<div class="post-thumb">
										<?php if ($_smarty_tpl->tpl_vars['post']->value['link_video'] && $_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['link_video'], ENT_QUOTES, 'UTF-8');?>

										<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['image'] && $_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
											<a class="link" href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value), ENT_QUOTES, 'UTF-8');?>
">
												<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt=""/>
											</a>
										<?php }?>
										<a class="btn-default readmore" href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value), ENT_QUOTES, 'UTF-8');?>
">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

										</a>
									</div>
									<div class="post-info">
										<h4 class="post-title">
											<a class="blog-list-title" href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog Images','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
										</h4>
										<div class="post-intro">
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['introtext'],380,'...' ));?>

										</div>
										<ul class="post-meta">
											<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_CATEGORY']) {?>
												<li class="category-name">
													<span>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

													</span>
													<a href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value), ENT_QUOTES, 'UTF-8');?>
">
														<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['category_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

													</a>
												</li>
											<?php }?>
											<li class="created">
												<span class="day"><?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8' )),'%e'), ENT_QUOTES, 'UTF-8');?>
</span>
												<span class="month"><?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8' )),'%b'), ENT_QUOTES, 'UTF-8');?>
</span>
											</li>
											<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_VIEWS']) {?>
												<li>
													<span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['views'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'view(s)','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
,</span>
												</li>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_COMMENTS']) {?>
												<li>
													<span>
														<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['comment_count'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

														<?php if ($_smarty_tpl->tpl_vars['post']->value['comment_count'] > 0) {?>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comments','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>

														<?php } else { ?>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comment','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>

														<?php }?>
													</span>
												</li>
											<?php }?>
										</ul>
									</div>
								</div>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, dont have any post in this category','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

				<?php }?>
				<?php
}
}
/* {/block "page_content"} */
/* {block 'page_content_container'} */
class Block_14594067065ebdf8309fbb77_33099029 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18073312995ebdf8309fbb79_99967523', "page_content", $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_15497373815ebdf830a8c416_56094148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1560862985ebdf8309fbb71_29461080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1560862985ebdf8309fbb71_29461080',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_14594067065ebdf8309fbb77_33099029',
  ),
  'page_content' => 
  array (
    0 => 'Block_18073312995ebdf8309fbb79_99967523',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15497373815ebdf830a8c416_56094148',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14594067065ebdf8309fbb77_33099029', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15497373815ebdf830a8c416_56094148', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
