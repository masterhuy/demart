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
<div class="product-miniature js-product-miniature productbox-flex" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
	<div class="product-preview">
		{block name='product_thumbnail'}
		  	<a href="{$product.url}" class="product-image{if $jmsSetting.productbox_hover == 'swap-image' && isset($product.images.1) && $product.images.1} swap-image{else} blur-image{/if}">
				<img class="img-responsive product-img1{if $jmsSetting.carousel_lazyload} owl-lazy{/if}"
                {if $jmsSetting.carousel_lazyload}data-src="{$product.cover.bySize.home_default.url}"{else} src="{$product.cover.bySize.home_default.url}"{/if}
				    alt="{$product.cover.legend}"
					title="{$product.name|escape:'html':'UTF-8'}"
				    data-full-size-image-url = "{$product.cover.large.url}"
				/>
				{if $jmsSetting.productbox_hover == 'swap-image' && isset($product.images.1) && $product.images.1}
					<img class="img-responsive product-img2{if $jmsSetting.carousel_lazyload} owl-lazy{/if}"
                    {if $jmsSetting.carousel_lazyload}data-src="{$product.images.1.bySize.home_default.url}"{else} src="{$product.images.1.bySize.home_default.url}"{/if}
					    alt="{$product.images.1.legend}"
						title="{$product.name|escape:'html':'UTF-8'}"
					    data-full-size-image-url = "{$product.images.1.large.url}"
					/>
				{/if}
		  	</a>
		{/block}
	</div>
	<div class="product-info">
        {block name='product_reviews'}
            {hook h='displayProductListReviews' product=$product}
        {/block}
        {if $product.main_variants && $jmsSetting.productbox_variant}
            {block name='product_variants'}
                {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
            {/block}
        {/if}
        
        <div class="title-price align-items-center">
    		{block name='product_name'}
                <h3 class="product-title" itemprop="name">
                    <a class="product-link" href="{$product.canonical_url}" title="{$product.name}">
                        {$product.name|truncate:50:'...'}
                    </a>
                </h3>
            {/block}
        </div>
        <div class="product-action">
            {if $jmsSetting.productbox_price}
                {block name='product_price_and_shipping'}
                {if $product.show_price}
                    <div class="content_price">
                    {hook h='displayProductPriceBlock' product=$product type="before_price"}
                    {if $product.has_discount}
                    {hook h='displayProductPriceBlock' product=$product type="old_price"}
                        <span class="old price">{$product.regular_price}</span>
                    {/if}
                    <span class="price new">{$product.price}</span>
                    {hook h='displayProductPriceBlock' product=$product type='unit_price'}
                    {hook h='displayProductPriceBlock' product=$product type='weight'}
                    </div>
                {/if}
                {/block}
            {/if}
            {assign var="str_at" value=$jmsSetting.cart_icon|strpos:"_"}
            {if $str_at && $jmsSetting.cart_icon_thickness}
                {assign var="cart_icon" value=$jmsSetting.cart_icon|substr:0:($str_at)}
                {assign var="cart_icon" value=$cart_icon|cat:$jmsSetting.cart_icon_thickness}
            {else}
                {assign var="cart_icon" value=$jmsSetting.cart_icon}
            {/if}
        </div>
        <div class="product-buttons">
            {if !$configuration.is_catalog && $jmsSetting.productbox_addtocart}
                <div class="product-cart">
                    {if $product.quantity >= 1}
                        <a href="#" class="btn btn-default ajax-add-to-cart product-btn{if $product.quantity < 1} disabled{/if} cart-button" {if $product.quantity < 1}disabled{/if} title="{if $product.quantity < 1}{l s='Sold Out' d='Shop.Theme.Actions'}{else}{l s='Add to cart' d='Shop.Theme.Actions'}{/if}" {if $product.quantity < 1}disabled{/if} data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}" data-token="{if isset($static_token) && $static_token}{$static_token}{/if}">
                            <i class="fal fa-spinner-third"></i>
                            <i class="fal fa-check"></i>
                            {l s='Add to cart' d='Shop.Theme.Actions'}
                        </a>
                    {else}
                        <a href="#" class="btn-default product-btn disabled" disabled title="{l s='Sold Out' d='Shop.Theme.Actions'}" data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}">
                            {l s='Sold Out' d='Shop.Theme.Actions'}
                        </a>
                    {/if}
                </div>
            {/if}
        </div>
	</div>
</div>
