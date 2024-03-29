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
<div class="row product-detail default">
    <div class="pb-left-column col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="pd-left-content">
            {block name='page_content_container'}
                <section class="page-content" id="content">
                    {block name='page_content'}                                
                        {block name='product_cover_thumbnails'}
                            {include file='catalog/_partials/product-cover-thumbnails.tpl'}
                        {/block}
                    {/block}
                </section>
            {/block}
        </div>
    </div>
    <div class="pb-right-column col-lg-6 col-md-6 col-sm-6 col-12">
        {block name='page_header_container'}
            {block name='page_header'}
                <h1 itemprop="name" class="product-name">{block name='page_title'}{$product.name}{/block}</h1>
            {/block}
        {/block}

        <div class="rating">
            {block name='product_reviews'}
                {hook h='displayProductListReviews' product=$product}
            {/block}
            
            {block name='product_additional_info'}
                {include file='catalog/_partials/product-additional-info.tpl'}
            {/block}
        </div>

        {block name='product_prices'}
            {include file='catalog/_partials/product-prices.tpl'}
        {/block}

        <div class="product-information">
            {block name='product_description_short'}
                <div id="product-description-short-{$product.id}" class="product-desc">{$product.description_short|truncate:450:"..." nofilter}</div>
            {/block}

            {if isset($product.specific_prices.to) && $product.specific_prices.to > 0}
                <div class="specific_prices">
                    <div class="countdown-box">
                        <div class="countdown">{$product.specific_prices.to}</div>
                    </div>
                </div>
            {/if}

            {if $product.is_customizable && count($product.customizations.fields)}
                {block name='product_customization'}
                    {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
                {/block}
            {/if}

            <div class="product-actions">
                {block name='product_buy'}
                    <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                        <input type="hidden" name="token" value="{$static_token}">
                        <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                        <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">
                        {block name='product_pack'}
                            {if $packItems}
                                <section class="product-pack">
                                    <h3 class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</h3>
                                    <article>
                                        <div class="card">
                                            <div class="pack-product-container">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Products</th>
                                                            <th>Price</th>
                                                            <th>Quantity</th>
                                                        </tr>
                                                    </thead>
                                                    {foreach from=$packItems item="product_pack"}
                                                        {block name='product_miniature'}
                                                            {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack}
                                                        {/block}
                                                    {/foreach}
                                                </table>
                                                </div>
                                        </div>
                                    </article>
                                </section>
                            {/if}
                        {/block}

                        {block name='product_discounts'}
                            {include file='catalog/_partials/product-discounts.tpl'}
                        {/block}

                        {block name='product_variants'}
                            {include file='catalog/_partials/product-variants.tpl'}
                        {/block}

                        {block name='product_add_to_cart'}
                            {include file='catalog/_partials/product-add-to-cart.tpl'}
                        {/block}
                        <ul class="other-info">
                            {if isset($product.reference_to_display) && $product.reference_to_display neq ''}
                                <li class="product-reference">
                                    <label>{l s='Product code' d='Shop.Theme.Catalog'}: </label>
                                    <span itemprop="sku">{$product.reference_to_display}</span>
                                </li>
                            {/if}
                            <!-- availability or doesntExist -->
                            <li id="availability_statut">
                                <label id="availability_label">
                                    {l s='Availability:' d='Shop.Theme.Catalog'}
                                </label>
                                <span id="availability_value" class="label-availability">
                                    {if $product.quantity|intval <= 0}
                                        {l s='Out stock' d='Shop.Theme.Catalog'}
                                    {else}
                                        {l s='In stock' d='Shop.Theme.Catalog'}
                                    {/if}
                                </span>
                            </li>
                            <li>
                                {if $product.additional_shipping_cost > 0}
                                    <label>{l s='Shipping tax: '}</label>
                                    <span class="shipping_cost">{$product.additional_shipping_cost}</span>
                                {else}
                                    <label>{l s='Shipping tax:'}</label>
                                    <span class="shipping_cost">{l s=' Free'}</span>
                                {/if}
                            </li>
                        </ul>
                        {block name='product_refresh'}
                            <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="{l s='Refresh' d='Shop.Theme.Actions'}">
                        {/block}
                    </form>
                {/block}
            </div>
            {if $jmsSetting.product_page_sharing}
                <!-- Go to www.addthis.com/dashboard to customize your tools --> 
                <div class="addthis_inline_share_toolbox_fx4m"></div>
            {/if}
        </div>
    </div>
</div>
