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
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="email_subscription">
	<h3 class="block-title">
		{l s='Follow Us' d='Modules.Emailsubscription.Shop'}
		<i class="fal fa-plus" aria-hidden="true"></i>
	</h3>
	<div class="block-content">
		{if $conditions}
			<p class="newsletter-desc">{$conditions}</p>
		{/if}
		{if $msg}
			<p class="alert {if $nw_error}alert-error{else}alert-success{/if}">{$msg}</p>
		{/if}
		<form action="{$urls.pages.index}" method="post">	
			<div class="newsletter-input-group">
				<input type="text" name="email" value="{$value}" class="form-control" required placeholder="{l s='Email@example.com' d='Modules.Emailsubscription.Shop'}" />
				<button type="submit" class="btn btn-default btn-text" name="submitNewsletter">
					{l s='Subscribe' d='Modules.Emailsubscription.Shop'}
				</button>
				<button type="submit" class="btn-icon" name="submitNewsletter">
					<i class="fal fa-location-arrow"></i>
				</button>
			</div>
			{hook h='displayGDPRConsent' id_module=$id_module}
			<input type="hidden" name="action" value="0" />
		</form>
	</div>
</div>
