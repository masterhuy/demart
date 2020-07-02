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
<div class="jmsflashsales-tab">
	<div class="tabpanel row align-items-center">
		<div class="addon-title col-auto">
			<h3>{l s='Flash Sale' d='Shop.Theme.Catalog'}</h3>
		</div>
		<div class="tabs-navigation col">
			<ul class="nav">
				{foreach from = $categories item = category key = k}
					{$cat_products = $products[$k]}
					{if !empty($cat_products)}
						<li class="nav-item">
							<a class="{if $k == 0}active{/if}" href="#category-{$k}" data-toggle="tab">
								{$category.title|escape:'htmlall':'UTF-8'}
							</a>
						</li>
					{/if}
				{/foreach}
			</ul>
		</div>
		<div class="tabs-navigation-mobile">
			<button type="button" class="btn-tab dropdown-toggle" data-toggle="dropdown"></button>
			<ul class="dropdown-menu nav">
				{foreach from = $categories item = category key = k}
					{$cat_products = $products[$k]}
					{if !empty($cat_products)}
						<li class="nav-item">
							<a class="nav-link {if $k == 0}active{/if}" href="#category-{$k}" data-toggle="tab">
								{$category.title|escape:'htmlall':'UTF-8'}
							</a>
						</li>
					{/if}
				{/foreach}
			</ul>
		</div>
		<div class="flashsales-countdown col-auto">{$expiretime|escape:'htmlall':'UTF-8'}</div>
	</div>
	<div class="tab-content">
		{foreach from=$products item=cat_products key=k}
			{if !empty($cat_products)}
				<div class="tab-pane {if $k == 0}active{/if}" id="category-{$k}">	
					<div class="flashsales-tab-carousel">
						{foreach from = $cat_products item = product}	
							<div class="item ajax_block_product">		
								{include file="catalog/_partials/miniatures/product-flex.tpl" product=$product}
							</div>	
						{/foreach}
					</div>	
				</div>
			{/if}	
		{/foreach}
	</div>
</div>