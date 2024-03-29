{**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<!doctype html>
<html lang="{$language.iso_code}">
    <head>
        {block name='head'}
            {include file='_partials/head.tpl'}
        {/block}
    </head>

    <body id="{$page.page_name}" class="{$page.body_classes|classnames} {if $jpb_rtl} rtl{/if}{if $jmsSetting.blocktitle_layout} blocktitle-{$jmsSetting.blocktitle_layout}{/if}{if $jmsSetting.blocktab_layout} blocktab-{/if}{if $jmsSetting.carousel_nav_type} carousel-nav-{$jmsSetting.carousel_nav_type}{/if}{if $jmsSetting.carousel_nav_show} carousel-nav-{$jmsSetting.carousel_nav_show}{/if}{if $jmsSetting.carousel_pag_show} carousel-pag-{$jmsSetting.carousel_pag_show}{/if} {$jpb_pageclass}">
        <div class="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        {hook h='displayAfterBodyOpeningTag'}
        <div class="bg-overlay"></div>
        <div class="main-site">
            {block name='product_activation'}
                {include file='catalog/_partials/product-activation.tpl'}
            {/block}
            <header id="header">
                {block name='header'}
                    {include file='_partials/header.tpl'}
                {/block}
            </header>
    		{if $page.page_name != 'index' && $jmsSetting.breadcrumb}
    			{block name='breadcrumb'}
    			   {include file='_partials/breadcrumb.tpl'}
    			{/block}
    		{/if}
            <div id="wrapper" {if $page.page_name != 'index'}class="container"{/if}>
                {block name='notifications'}
                    {include file='_partials/notifications.tpl'}
                {/block}
                {if $page.page_name != 'index'}
                    <div class="row">
                {/if}
                    {block name="left_column"}
                        <div id="left-column" class="sidebar-column col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="sidebar-inner">
                                {if $page.page_name == 'product'}
                                    {hook h='displayLeftColumnProduct'}
                                {else}
                                    {hook h="displayLeftColumn"}
                                {/if}
                            </div>
                        </div>
                    {/block}

                    {block name="content_wrapper"}
                        <div id="content-wrapper" class="left-column right-column col-12 col-md-6">
                            {block name="content"}
                                <p>Hello world! This is HTML5 Boilerplate.</p>
                            {/block}
                        </div>
                    {/block}

                    {block name="right_column"}
                        <div id="right-column" class="sidebar-column col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="sidebar-inner">
                                {if $page.page_name == 'product'}
                                    {hook h='displayRightColumnProduct'}
                                {else}
                                    {hook h="displayRightColumn"}
                                {/if}
                            </div>
                        </div>
                    {/block}

                {if $page.page_name != 'index'}
                </div>
                {/if}
    		</div>
            {block name="footer"}
                {include file="_partials/footer.tpl"}
            {/block}
            <div id="back-to-top" title="Back to top">
                <i class="fal fa-angle-up"></i>
            </div>
        </div>
        {block name='javascript_bottom'}
            {include file="_partials/javascript.tpl" javascript=$javascript.bottom}
        {/block}
        {hook h='displayBeforeBodyClosingTag'}
    </body>
</html>
