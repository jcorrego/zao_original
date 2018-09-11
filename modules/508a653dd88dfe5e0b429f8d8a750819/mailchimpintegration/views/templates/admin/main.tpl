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
*	@author PrestaShop SA <contact@prestashop.com>
*	@copyright	2007-2017 PrestaShop SA
*	@license		http://opensource.org/licenses/afl-3.0.php	Academic Free License (AFL 3.0)
*	International Registered Trademark & Property of PrestaShop SA
*}
<div class="row">
  <div class="col-xs-12">
    <div class="well">
      <div class="text-center">
        <img class="mail-chimp" src="{$module_dir|escape:'htmlall':'UTF-8'}/views/img/mail-chimp.png">
        <h1>MailChimp for PrestaShop</h1>
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1">
            <h4>Use your customer data to personalize your marketing, sell more stuff, and grow your business.</h4>
          </div>
        </div>
        <br></br>
        {if isset($login_url)}
          <a href={$login_url|escape:'htmlall':'UTF-8'} class="btn btn-default btn-lg">Connect to MailChimp</a>
        {/if}
        {if isset($list_name)}
          <span class="label label-success" style="font-size: 16px">Connected to list {$list_name|escape:'htmlall':'UTF-8'}</span>
        {/if}
      </div>
    </div>
  </div>
</div>