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
 <div id="header-mobile-top" class="header-mobile-top{if $jmsSetting.header_mobile_sticky == 1} header-sticky{/if}{if ($jmsSetting.header_mobile_sticky == 1) && ($jmsSetting.header_sticky_effect != '')} {$jmsSetting.header_sticky_effect}{/if}">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="layout-column header-left">
                {include file='_partials/headers/logo.tpl'}
            </div>
            <div class="layout-column col-auto header-right">
                <div class="row">
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
                    {if ($jmsSetting.customersignin == 1)}
                        {widget_block name="ps_customersignin"}
                            {include 'module:ps_customersignin/ps_customersignin-dropdown.tpl'}
                        {/widget_block}
                    {/if}
                    {if ($jmsSetting.cart == 1)}
                        {widget_block name="ps_shoppingcart"}
                            {include 'module:ps_shoppingcart/ps_shoppingcart.tpl'}
                        {/widget_block}
                    {/if}
                    {include file='_partials/headers/mobile-menu.tpl'}
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
