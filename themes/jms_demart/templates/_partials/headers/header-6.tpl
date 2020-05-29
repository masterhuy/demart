{**
 * 2007-2017 PrestaShop
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{if ($jmsSetting.header_topbar == 1)}
    <div id="header-topbar" class="{if $jmsSetting.topbar_class} {$jmsSetting.topbar_class}{/if}">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="layout-column col col-left">
                    <div class="row no-margin align-items-center">
                        {widget_block name="ps_languageselector"}
                            {include 'module:ps_languageselector/ps_languageselector-dropdown.tpl'}
                        {/widget_block}
                        {widget_block name="ps_currencyselector"}
                            {include 'module:ps_currencyselector/ps_currencyselector-dropdown.tpl'}
                        {/widget_block}
                        <div class="number-phone">Need Help? +01 2345 6788</div>
                    </div>
                </div>
                <div class="layout-column col-auto col-right">
                    <div class="row no-margin align-items-center">
                        {$jmsSetting.topbar_content nofilter}
                        <div>
                            <a class="link-cms" href="index.php?id_cms=16&controller=cms">Return</a>
                        </div>
                        <div>
                            <a class="link-cms" href="{$urls.pages.history}">Track Your Order</a>
                        </div>
                        {if ($jmsSetting.customersignin == 1)}
                            {widget_block name="ps_customersignin"}
                                {include 'module:ps_customersignin/ps_customersignin-dropdown-2.tpl'}
                            {/widget_block}
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/if}
<div id="header-top" class="header-top{if $jmsSetting.header_sticky == 1} header-sticky{/if}{if ($jmsSetting.header_sticky == 1) && ($jmsSetting.header_sticky_effect != '')} {$jmsSetting.header_sticky_effect}{/if}">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="layout-column col-3 header-left">
                <div class="vermenu d-flex align-items-center">
                    <a data-toggle="collapse" data-target="#ver-menu" class="vermenu-btn align-items-center" aria-expanded="false">
                        <img src="{$urls.theme_assets}img/icons/icon-vermenu.png" />
                    </a>
                    <div id="ver-menu" class="navbar limit-sub collapse{if $jmsSetting.vermenu_class} {$jmsSetting.vermenu_class}{/if}">
                        {widget name="jmsmegamenu" hook='VerMenu'}
                    </div>
                    <div class="block-logo">
                        {include file='_partials/headers/logo.tpl'}
                    </div>
                </div>
            </div>
            <div class="layout-column col-6 megamenu">
                <div id="hor-menu" class="{if $jmsSetting.hormenu_class} {$jmsSetting.hormenu_class}{/if} {if $jmsSetting.hormenu_align} align-{$jmsSetting.hormenu_align}{/if}">
                    {widget name="jmsmegamenu" hook='HorMenu'}
                </div>
            </div>
            <div class="layout-column col-3 header-right">
                <div class="row no-margin align-item-center justify-content-end">
                    {if $jmsSetting.search}
                        {if $jmsSetting.search_box_type != 'dropdown'}
                            {widget_block name="jmsajaxsearch"}
                                {include 'module:jmsajaxsearch/views/templates/hook/jmsajaxsearch-button.tpl'}
                            {/widget_block}
                        {else}
                            {widget_block name="jmsajaxsearch"}
                                {include 'module:jmsajaxsearch/views/templates/hook/jmsajaxsearch-dropdown.tpl'}
                            {/widget_block}
                        {/if}
                    {/if}
                    {if ($jmsSetting.wishlist == 1)}
                        {include file='_partials/headers/wishlist.tpl'}
                    {/if}
                    {if ($jmsSetting.cart == 1)}
                        {widget_block name="ps_shoppingcart"}
                            {include 'module:ps_shoppingcart/ps_shoppingcart-dropdown-2.tpl'}
                        {/widget_block}
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>
{if $jmsSetting.search && $jmsSetting.search_box_type != 'dropdown'}
    {widget_block name="jmsajaxsearch"}
        {include 'module:jmsajaxsearch/views/templates/hook/jmsajaxsearch-fullscreen.tpl'}
    {/widget_block}
{/if}

