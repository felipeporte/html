{*
* 2007-2017 PrestaShop
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
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="brands-sort dropdown">
  <a
          class="select-title expand-more form-control"
          rel="nofollow"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false">
    {l s='All brands' d='Shop.Theme.Catalog'}
      <i class="fa fa-angle-down" aria-hidden="true"></i>
  </a>
  <div class="dropdown-menu">
    {foreach from=$brands item=brand}
      <a
              rel="nofollow"
              href="{$brand['link']}"
              class="select-list dropdown-item"
      >
        {$brand['name']}
      </a>
    {/foreach}
  </div>
</div>



