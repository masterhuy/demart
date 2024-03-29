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
<div class="addon-video">
    {if $addon_title}
        <div class="addon-title">
            <h3>{$addon_title nofilter}</h3>
        </div>
    {/if}
    {if $addon_desc}
        <p class="addon-desc">{$addon_desc nofilter}</p>
    {/if}
    <div class="jms-video">
        <div class="video-image" data-toggle="modal" data-target="#video">
            <i class="lnr lnr-film-play"></i>
        </div>
        <div class="modal" id="video">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <div class="modal-body">
                        {if $src}
                            <iframe width="{$width nofilter}" height="{$height nofilter}" src="{$src nofilter}" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
