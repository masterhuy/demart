<?php
/* Smarty version 3.1.33, created on 2020-06-18 05:26:38
  from 'D:\xamppp\htdocs\jms_demart\modules\jmspagebuilder\views\templates\hook\addonbookblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eeaecfee583d0_54428743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff4a29ddb4264fd8db71d7f791ba7b0a07c9d020' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\modules\\jmspagebuilder\\views\\templates\\hook\\addonbookblock.tpl',
      1 => 1569916432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eeaecfee583d0_54428743 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }?>
<div id="bb-bookblock" class="bb-bookblock<?php if (isset($_smarty_tpl->tpl_vars['box_class']->value) && $_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['box_class']->value;
}?>">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contents']->value, 'content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
?>
	<?php if ($_smarty_tpl->tpl_vars['content']->value['content']) {?>
	<div class="bb-item">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value['content']) && $_smarty_tpl->tpl_vars['content']->value['content']) {
echo $_smarty_tpl->tpl_vars['content']->value['content'];
}?>		
	</div>
	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<nav>
	<a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
	<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
	<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
	<a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
</nav>
<?php echo '<script'; ?>
>
	var Page = (function() {				
		var config = {
			$bookBlock : $( '#bb-bookblock' ),
			$navNext : $( '#bb-nav-next' ),
			$navPrev : $( '#bb-nav-prev' ),
			$navFirst : $( '#bb-nav-first' ),
			$navLast : $( '#bb-nav-last' )
		},
		init = function() {
			config.$bookBlock.bookblock( {
				speed : 1000,
				shadowSides : 0.8,
				shadowFlip : 0.4
			} );
			initEvents();
		},
		initEvents = function() {						
			var $slides = config.$bookBlock.children();
			// add navigation events
			config.$navNext.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'next' );
				return false;
			} );
			config.$navPrev.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'prev' );
				return false;
			} );
			config.$navFirst.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'first' );
				return false;
			} );
			config.$navLast.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'last' );
				return false;
			} );						
			// add swipe events
			$slides.on( {
				'swipeleft' : function( event ) {
					config.$bookBlock.bookblock( 'next' );
					return false;
				},
				'swiperight' : function( event ) {
					config.$bookBlock.bookblock( 'prev' );
					return false;
				}
			} );

			// add keyboard events
			$( document ).keydown( function(e) {
				var keyCode = e.keyCode || e.which,
				arrow = {
					left : 37,
					up : 38,
					right : 39,
					down : 40
				};
				switch (keyCode) {
					case arrow.left:
						config.$bookBlock.bookblock( 'prev' );
						break;
					case arrow.right:
						config.$bookBlock.bookblock( 'next' );
						break;
					}
				} );
			};
		return { init : init };
	})();
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	Page.init();
<?php echo '</script'; ?>
><?php }
}
