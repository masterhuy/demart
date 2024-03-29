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
    <div class="container">
        <div class="row align-items-center">
            <div class="layout-column col header-left">
                {$jmsSetting.topbar_content nofilter}
            </div>
            <div class="layout-column col-auto header-right">
                <div class="row no-margin">
                    <div>
                        <a class="link-cms" href="index.php?id_cms=16&controller=cms">Return</a>
                    </div>
                    <div>
                        <a class="link-cms" href="{$urls.pages.history}">Track Your Order</a>
                    </div>
                    {widget_block name="ps_languageselector"}
                        {include 'module:ps_languageselector/ps_languageselector-dropdown.tpl'}
                    {/widget_block}
                    {widget_block name="ps_currencyselector"}
                        {include 'module:ps_currencyselector/ps_currencyselector-dropdown.tpl'}
                    {/widget_block}
                </div>
            </div>
        </div>
    </div>
</div>
{/if}
<div id="header-top" class="header-top{if $jmsSetting.header_sticky == 1} header-sticky{/if}{if ($jmsSetting.header_sticky == 1) && ($jmsSetting.header_sticky_effect != '')} {$jmsSetting.header_sticky_effect}{/if}">
    <div class="container">
        <div class="row align-items-center">
            <div class="layout-column col-auto header-left">
                {include file='_partials/headers/logo.tpl'}
            </div>
            <div class="layout-column col megamenu">
                <div id="hor-menu" class="{if $jmsSetting.hormenu_class} {$jmsSetting.hormenu_class}{/if} {if $jmsSetting.hormenu_align} align-{$jmsSetting.hormenu_align}{/if}">
                    {widget name="jmsmegamenu" hook='HorMenu'}
                </div>
            </div>
            <div class="layout-column col-auto header-right">
                <div class="row no-margin">
                    {if ($jmsSetting.customersignin == 1)}
                        {widget_block name="ps_customersignin"}
                            {include 'module:ps_customersignin/ps_customersignin-dropdown.tpl'}
                        {/widget_block}
                    {/if}
                    {if ($jmsSetting.wishlist == 1)}
                        {include file='_partials/headers/wishlist.tpl'}
                    {/if}
                    {if ($jmsSetting.cart == 1)}
                        {widget_block name="ps_shoppingcart"}
                            {include 'module:ps_shoppingcart/ps_shoppingcart-dropdown.tpl'}
                        {/widget_block}
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>
<div id="header-bottom">
    <div class="container">
       <div class="row align-items-center">
            <div class="layout-column col-auto header-left">
                <a data-toggle="collapse" data-target="#ver-menu" class="vermenu-btn collapsed align-items-center" aria-expanded="false">
                    <img src="{$urls.theme_assets}img/icons/icon-vermenu.png" /> {$jmsSetting.vermenu_button_text nofilter}
                </a>
            </div>
            <div class="layout-column">
                {if $jmsSetting.search}
                    {widget_block name="jmsajaxsearch"}
                        {include 'module:jmsajaxsearch/views/templates/hook/jmsajaxsearch.tpl'}
                    {/widget_block}
                {/if}
            </div>
            <div class="layout-column col-auto header-right">
                <div class="block-our-brand">
                    <button class="our-brand collapsed" data-toggle="collapse" data-target="#our-brand" aria-expanded="false"> 
                        Our brands <img src="{$urls.theme_assets}img/icons/dropdown-brand.png" />
                    </button>
                    <div id="our-brand" class="collapse">
                        <ul>
                            <li><a href="index.php?id_category=62&controller=category">Apple</a></li>
                            <li><a href="index.php?id_category=64&controller=category">Dell Inc</a></li>
                            <li><a href="index.php?id_category=66&controller=category">Asus</a></li>
                            <li><a href="index.php?id_category=63&controller=category">Sony</a></li>
                            <li><a href="index.php?id_category=61&controller=category">Zara</a></li>
                            <li><a href="index.php?id_category=62&controller=category">Givenchy</a></li>
                            <li><a href="index.php?id_category=63&controller=category">Cartier</a></li>
                            <li><a href="index.php?id_category=64&controller=category">Steelcase</a></li>
                            <li><a href="index.php?id_category=65&controller=category">Lesro</a></li>
                            <li><a href="index.php?id_category=66&controller=category">Hermes</a></li>
                        </ul>
                    </div>
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
