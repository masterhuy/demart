{*
* 2007-2019 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2019 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<script type="text/javascript">
	var h_items = {if $items_show}{$items_show nofilter}{else}1{/if},
	    h_itemsDesktop = {if $items_show}{$items_show nofilter}{else}1{/if},
	    h_itemsDesktopSmall = {if $items_show_md}{$items_show_md nofilter}{else}1{/if},
	    h_itemsTablet = {if $items_show_sm}{$items_show_sm nofilter}{else}1{/if},
	    h_itemsMobile = {if $items_show_xs}{$items_show_xs nofilter}{else}1{/if};
	    h_nav = {if $navigation == 1}true{else}false{/if};
		h_pag = {if $pagination == 1}true{else}false{/if};
		h_auto_play_carousel = {if $autoplay == 1}true{else}false{/if};
</script>
<div class="jms-hotdeal">
	{if $addon_title}
	<div class="addon-title">
		<h3>{$addon_title nofilter}</h3>
	</div>
	{/if}
	{if $addon_desc}
		<p class="addon-desc">{$addon_desc nofilter}</p>
	{/if}
	<div class="product_box">
		<div class="hotdeal-carousel">
			{foreach from=$products item=product key=k}	
				<div class="item">
					<div class="product-miniature js-product-miniature productbox-1" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
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
							{block name='product_flags'}
								<ul class="product-flags">
									{foreach from=$product.flags item=flag}
										<li class="product-flag {$flag.type}">
											{if $flag.label == 'On sale!'}
												{l s='Sale' d='Shop.Theme.Catalog'}
											{else if $flag.type == 'discount'}
												<span>{l s='Off' d='Shop.Theme.Catalog'}</span>
												<span>{$flag.label}</span>
											{else}
												{$flag.label}
											{/if}
										</li>
									{/foreach}
								</ul>
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
									<h3 class="product-title" itemprop="name"><a class="product-link" href="{$product.canonical_url}">{$product.name|truncate:50:'...'}</a></h3>
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
								<div class="product-sold">
									<div class="sold-quantyties">
										<div class="already-sold">
											{l s='Sold' d='Shop.Theme.Actions'}:
											<span>
												{if $product.sold != "" }
													{$product.sold}
												{else}
													0
												{/if}
											</span>
										</div>
										<div class="available">
											{l s='Available' d='Shop.Theme.Actions'}: <span>{$product.quantity_all_versions}</span>
										</div>
									</div>

									<div class="proces-bars">
										<span style="width:{($product.sold/$product.quantity_all_versions)*100}%;"></span>
									</div>
									<div class="label-countdown">{l s='Hurry Up! Offer ends in:' d='Shop.Theme.Actions'}</div>
									<div class="countdown" id="countdown-{$hotdeals[$k].id_hotdeals nofilter}">{$hotdeals[$k].deals_time nofilter}</div>
								</div>
							</div>
							<div class="product-short-desc">
								{$product.description_short|truncate:300:'...' nofilter}
							</div>
						</div>
					</div>
		  		</div>
			{/foreach}
		</div>
	</div>
	{if ($showall_link == '1')} 
		<div class="hotdeal-viewall col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<a href="{$link->getModuleLink('hotdeals','allproduct') nofilter}" class="btn btn-default">{l s='View All Product' d='Modules.JmsPagebuilder'}</a>
		</div>
	{/if}
</div>