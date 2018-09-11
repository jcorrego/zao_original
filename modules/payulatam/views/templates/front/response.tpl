{*
* 2014 PAYU LATAM
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
*  @author    PAYU LATAM <sac@payulatam.com>
*  @copyright 2014 PAYU LATAM
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

<link rel="stylesheet" href="{$css_dir}global.css" type="text/css" media="all">
<!--<link href="{$css|escape:'htmlall':'UTF-8'}payu.css" rel="stylesheet" type="text/css">-->
<link href="http://www.pawecom.com{$module_dir|escape:'htmlall':'UTF-8'}/css/payu.css" rel="stylesheet" type="text/css">

{if $valid}
	<center>
		<table class="table-response table table-striped table-bordered table-hover">
			<tr align="center">
				<th colspan="2"><h1 class="md-h1">{l s='Detalles de la compra' mod='payulatam'}</h1></th>
			</tr>
			<tr align="left">
				<td>{l s='Estado transacción' mod='payulatam'}</td>
				<td>{$estadoTx|escape:'htmlall':'UTF-8'}</td>
			</tr>
			<tr align="left">
				<td>{l s='ID transacción' mod='payulatam'}</td>
				<td>{$transactionId|escape:'htmlall':'UTF-8'}</td>
			</tr>		
			<tr align="left">
				<td>{l s='Referencia de compra' mod='payulatam'}</td>
				<td>{$reference_pol|escape:'htmlall':'UTF-8'}</td>
			</tr>		
			<tr align="left">
				<td>{l s='Referencia del pedido' mod='payulatam'}</td>
				<td>{$referenceCode|escape:'htmlall':'UTF-8'}</td>
			</tr>	
			{if $pseBank!=null}
				<tr align="left">
					<td>CUS</td>
					<td>{$cus|escape:'htmlall':'UTF-8'}</td>
				</tr>
				<tr align="left">
					<td>{l s='Banco' mod='payulatam'}</td>
					<td>{$pseBank|escape:'htmlall':'UTF-8'}</td>
				</tr>
			{/if}
			<tr align="left">
				<td>{l s='Valor total' mod='payulatam'}</td>
				<td>${$value|escape:'htmlall':'UTF-8'}</td>
			</tr>
			<tr align="left">
				<td>{l s='Moneda' mod='payulatam'}</td>
				<td>{$currency|escape:'htmlall':'UTF-8'}</td>
			</tr>
			<tr align="left">
				<td>{l s='Descripción del pedido' mod='payulatam'}</td>
				<td>{$description|escape:'htmlall':'UTF-8'}</td>
			</tr>
			<tr align="left">
				<td>{l s='Entidad' mod='payulatam'}</td>
				<td>{$lapPaymentMethod|escape:'htmlall':'UTF-8'}</td>
			</tr>
		</table>
		<p/>
		<h1>{$messageApproved|escape:'htmlall':'UTF-8'}</h1>
	</center>
{else}
	<h1><center>{l s='¡La solicitud es incorrecta! Hay un error en la firma digital.' mod='payulatam'}</center></h1>
{/if}