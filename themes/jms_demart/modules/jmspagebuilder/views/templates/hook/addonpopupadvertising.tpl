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
<div class="jms-popup-overlay" style="display:none;">
	<div class="jms-popup">
		<div class="text-top">{l s="Hello! Welcome to Demart - Wish you happy shopping " d='Shop.Theme.Global'}</div>
		<div class="main-content">
			<div class="logo">
				{include file='_partials/headers/logo.tpl'}
			</div>
			{if $popup_title}
				<h2>
					{$popup_title|escape:'htmlall':'UTF-8'}
				</h2>
			{/if}
			<p class="text-1 text-uppercase">{l s="Sign up & get 15% off" d='Shop.Theme.Global'}</p>
			<p class="text-2">{l s="For Your Next Purchase!" d='Shop.Theme.Global'}</p>
			<a class="popup-close">
				<img src="{$urls.theme_assets}img/icons/close.png" />
			</a>
			<input type="hidden" name="width_default" id="width-default" value="{$popup_width|escape:'htmlall':'UTF-8'}" />
			<input type="hidden" name="height_default" id="height-default" value="{$popup_height|escape:'htmlall':'UTF-8'}" />
			<input type="hidden" name="loadtime" id="loadtime" value="{$loadtime|escape:'htmlall':'UTF-8'}" />
			<div class="jms-popup-content">
				{$popup_content nofilter}
			</div>
			{include file='_partials/socials.tpl'}
			<div class="dontshow">
				<input type="checkbox" name="dontshowagain" value="1" id="dontshowagain" />
				<label>{l s="Don’t show this popup again" d='Shop.Theme.Global'}</label>
				<span class="checkmark"></span>
			</div>
		</div>
	</div>
</div>
