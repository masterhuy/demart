{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="jmsflashsales-tab2 row">
	<div class="tabpanel col-3">
		<div class="addon-title ">
			<h3>{l s='Week Deals Limited, Hurry Up!' d='Shop.Theme.Catalog'}</h3>
		</div>
        <div class="discount">{l s='Discount' d='Shop.Theme.Catalog'}</div>
		<ul class="nav">
			{foreach from = $categories item = category key = k}
				{$cat_products = $products[$k]}
				{if !empty($cat_products)}
					<li class="nav-item {if $k != 4}hidden{/if}">
						<a class="{if $k == 4}active{/if}" href="#category-{$k}" data-toggle="tab">
							{$category.title|escape:'htmlall':'UTF-8'}<span>%</span>
						</a>
					</li>	
				{/if}	
			{/foreach}
		</ul>
		<label>{l s='End in offers:' d='Shop.Theme.Catalog'}</label>
		<div class="flashsales-countdown">{$expiretime|escape:'htmlall':'UTF-8'}</div>
	</div>
	<div class="tab-content col-9">
		{foreach from=$products item=cat_products key=k}
			{if !empty($cat_products)}
				<div class="tab-pane {if $k == 0}active{/if}" id="category-{$k}">	
					<div class="flashsales-tab-carousel2">
						{foreach from = $cat_products item = product}	
							<div class="item ajax_block_product">		
								{include file="catalog/_partials/miniatures/product.tpl" product=$product}
							</div>	
						{/foreach}
					</div>	
				</div>
			{/if}	
		{/foreach}
	</div>
</div>
