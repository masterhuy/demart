<?php
/* Smarty version 3.1.33, created on 2020-06-23 11:29:19
  from 'D:\xamppp\htdocs\jms_demart\modules\ps_mbo\views\templates\admin\toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef1d97f38ee91_15952782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a42c61bdacd7f7c2093b8d90937f10b37fa1566d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_demart\\modules\\ps_mbo\\views\\templates\\admin\\toolbar.tpl',
      1 => 1569914448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef1d97f38ee91_15952782 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<?php if (!$_smarty_tpl->tpl_vars['isSymfonyContext']->value) {?>
    <li style="display:none;">
        <a id="page-header-desc-carrier-new_carrier" class="toolbar_btn  pointer" href="" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended Modules and Services'),$_smarty_tpl ) );?>
">
            <i class="process-icon-modules-list"></i>
            <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended Modules and Services'),$_smarty_tpl ) );?>
</div>
        </a>
    </li>
<?php }?>

<?php echo '<script'; ?>
>
    
    var isSymfonyContext = <?php if ($_smarty_tpl->tpl_vars['isSymfonyContext']->value) {?>true<?php } else { ?>false<?php }?>;
    var admin_module_ajax_url_psmbo = '<?php echo $_smarty_tpl->tpl_vars['admin_module_ajax_url_psmbo']->value;?>
';
    var controller = '<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
';
    
    if (isSymfonyContext === false) {
        
        $(document).ready(function() {
            
            $('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            $('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
	
	$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
		event.preventDefault();
		openModalOrRedirect(isSymfonyContext);
	});
	
	$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
		event.preventDefault();
		openModalOrRedirect(isSymfonyContext);
	});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            $('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
	
    function openModulesList() {
        $.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                $('#modules_list_container_tab_modal').html(data).slideDown();
                $('#modules_list_loader').hide();
            },
        });
    }
	
	
<?php echo '</script'; ?>
>
<?php }
}
