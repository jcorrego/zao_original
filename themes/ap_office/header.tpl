{*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<html{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if} {if isset($IS_RTL) && $IS_RTL} dir="rtl" class="rtl{if isset($LEO_DEFAULT_SKIN)} {$LEO_DEFAULT_SKIN}{/if}" {else} class="{if isset($LEO_DEFAULT_SKIN)}{$LEO_DEFAULT_SKIN}{/if}" {/if}>
	{include file="$tpl_dir./layout/setting.tpl"}
	<head>
		<meta charset="utf-8" />
		<title>{$meta_title|escape:'html':'UTF-8'}</title>
		{if isset($meta_description) AND $meta_description}
			<meta name="description" content="{$meta_description|escape:'html':'UTF-8'}" />
		{/if}
		{if isset($meta_keywords) AND $meta_keywords}
			<meta name="keywords" content="{$meta_keywords|escape:'html':'UTF-8'}" />
		{/if}
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
		{if $ENABLE_RESPONSIVE}<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />{/if}
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
		<link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
		{if isset($css_files)}
			{foreach from=$css_files key=css_uri item=media}
				{if $css_uri == 'lteIE9'}
					<!--[if lte IE 9]>
					{foreach from=$css_files[$css_uri] key=css_uriie9 item=mediaie9}
					<link rel="stylesheet" href="{$css_uriie9|escape:'html':'UTF-8'}" type="text/css" media="{$mediaie9|escape:'html':'UTF-8'}" />
					{/foreach}
					<![endif]-->
				{else}
					<link rel="stylesheet" href="{$css_uri|escape:'html':'UTF-8'}" type="text/css" media="{$media|escape:'html':'UTF-8'}" />
				{/if}
			{/foreach}
		{/if}
		{if isset($js_defer) && !$js_defer && isset($js_files) && isset($js_def)}
			{$js_def}
			{foreach from=$js_files item=js_uri}
			<script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
			{/foreach}
		{/if}
		{$HOOK_HEADER}
		{if !$LOAD_CSS_TYPE}
			{if $ENABLE_RESPONSIVE}
			<link rel="stylesheet" type="text/css" href="{$content_dir}themes/{$LEO_THEMENAME}/css/responsive.css"/>
			{else}
			<link rel="stylesheet" type="text/css" href="{$content_dir}themes/{$LEO_THEMENAME}/css/non-responsive.css"/>
			{/if}
			{if isset($LEO_CSS)}{foreach from=$LEO_CSS key=css_uri item=media}
			<link rel="stylesheet" href="{$css_uri}" type="text/css" media="{$media}" />
			{/foreach}{/if}
			{if isset($LEO_SKIN_CSS)}
				{foreach from=$LEO_SKIN_CSS item=linkCss}
					{$linkCss}
				{/foreach}
			{/if}
		{/if}
		{if isset($CUSTOM_FONT)}
                {$CUSTOM_FONT}
		{/if}
		{if isset($LAYOUT_WIDTH)}
                {$LAYOUT_WIDTH}
		{/if}
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Exo+2:400,300,500,400italic,500italic,600,600italic,700,700italic,800" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<!--[if IE 8]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500" rel="stylesheet">
		
		{literal}
		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		 fbq('init', '1130346853644284'); 
		fbq('track', 'PageView');
		</script>
		<noscript>
		 <img height="1" width="1" 
		src="https://www.facebook.com/tr?id=1130346853644284&ev=PageView
		&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->
		{/literal}
	</head>
	<body{if isset($page_name)} id="{$page_name|escape:'html':'UTF-8'}"{/if} class="{if isset($page_name)}{$page_name|escape:'html':'UTF-8'}{/if}{if isset($body_classes) && $body_classes|@count} {implode value=$body_classes separator=' '}{/if}{if $hide_left_column} hide-left-column{else} show-left-column{/if}{if $hide_right_column} hide-right-column{else} show-right-column{/if}{if isset($content_only) && $content_only} content_only{/if} lang_{$lang_iso}  {if isset($LEO_LAYOUT_MODE)}{$LEO_LAYOUT_MODE}{/if}{if isset($USE_FHEADER) && $USE_FHEADER} keep-header{/if}{if isset($LEO_HEADER_STYLE)} {$LEO_HEADER_STYLE}{/if}{if $LEO_HEADER_STYLE!="header-hide-topmenu" && $LEO_SIDEBAR_MENU!="sidebar-hide"} double-menu{/if}">
	{if !isset($content_only) || !$content_only}
		{if isset($restricted_country_mode) && $restricted_country_mode}
			<section id="restricted-country">
				<p>{l s='You cannot place a new order from your country.'}{if isset($geolocation_country) && $geolocation_country} <span class="bold">{$geolocation_country|escape:'html':'UTF-8'}</span>{/if}</p>
			</section>
		{/if}
		
		<div class="texto-cabecera">{hook h='displayTextoCabecera'}</div>
		
		<section id="page" data-column="{$colValue}" data-type="{$LISTING_GRIG_MODE}">
			<!-- Header -->
			<header id="header">
				<section class="header-container">
					
					<div id="topbar">
						<div class="container">
							<div class="row">
								<div id="header_logo" class="col-lg-2">
									<a href="{$base_dir}" title="{$shop_name|escape:'html':'UTF-8'}">
										<img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/>
									</a>
								</div>
								<div class="col-lg-4 datosContacto">
									{hook h='displayDatosContactoCabecera'}
								</div>
								<div class="col-lg-3 redesSociales">
									{hook h='displayRedesSociales'}
								</div>
								<div class="col-lg-2 entrarRegistrarme {if $logged}logueado{/if}">
									{if $logged}
										<a href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html'}" title="{l s='Log me out' mod='blockuserinfo'}" class="logout" rel="nofollow">{l s='Cerrar sesión' mod='blockuserinfo'}</a> &nbsp;
										<a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span>{$cookie->customer_firstname}</span></a>										
									{else}
										<a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='Log in to your customer account' mod='blockuserinfo'}" class="login" rel="nofollow"><i class="icon-user"></i> Entrar</a>
									{/if}
								</div>
								<div class="col-lg-1 buscadorCarro">
									{if isset($HOOK_TOP)}{$HOOK_TOP}{/if} 
								</div>
							</div>
						</div>
					</div>
					
					<div id="header-main">
						<div class="container">
							<div class="inner">
								<div class="row">
									{hook h='displayNav'}
                                    
								</div>
							</div>
						</div>
					</div>
				</section>
			</header>
			
			<div class='banner-principal'>
				{hook h='displayTopColumn'}
			</div>
			
			{if isset($HOOK_TOPNAVIGATION)&&!empty($HOOK_TOPNAVIGATION)}
				<div id="leo-megamenu" class="clearfix">
					<div class="container">
					<div class="inner">
							{$HOOK_TOPNAVIGATION}
					</div>
					</div>
				</div>
			{/if} 
			
			{if isset($HOOK_SLIDESHOW)&& !empty($HOOK_SLIDESHOW) && in_array($page_name,array('index'))}
				<div id="slideshow" class="clearfix"> 
					<div class="container">
						{$HOOK_SLIDESHOW}
					</div>
				</div>
			{/if}

			{if $page_name !='index' && $page_name !='pagenotfound'}
				<div id="breadcrumb" class="clearfix">	
					<div class="container">		
						{include file="$tpl_dir./breadcrumb.tpl"}
					</div>
				</div>
			{/if}
			<!-- Content -->
			
			{if $page_name =='index'}
				<div id="productos-destacados">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								{hook h='displayProductosDestacados'}
							</div>
						</div>
					</div>
				</div>
				
                <div id="productos-mejores-vendidos">
                    <div class="hidden-lg hidden-md titulo"><a href="">Best Sellers</a></div>
                    <div class="container ">
                        <div class="row">
                            <div class="col-lg-12">
                                {hook h='displayMejorVendidos'}
                            </div>
                            <div class="col-lg-12 c-btn-vtlp">
                                <a class="ver-todos-los-productos" href="http://www.zaomakeup.com.co/mas-vendido">Ver todos los productos</a>
                            </div>
                        </div>
                    </div>
				</div>
                
                <div id="productos-nuevos">
                    <div class="hidden-lg hidden-md titulo"><a href="">Nuevos productos</a></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                {hook h='displayProductosNuevos'}
                            </div>
                            <div class="col-lg-12 c-btn-vtlp">
                                <a class="ver-todos-los-productos" href="http://www.zaomakeup.com.co/nuevos-productos">Ver todos los productos</a>
                            </div>
                        </div>
                    </div>
				</div>
                
                <div id="productos-recomendados">
                    <div class="hidden-lg hidden-md titulo"><a href="">Recomendados</a></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                {hook h='displayProductosRecomendados'}
                            </div>
                            <div class="col-lg-12 c-btn-vtlp">
                                <a class="ver-todos-los-productos" href="http://www.zaomakeup.com.co/12-recomendados">Ver todos los productos</a>
                            </div>
                        </div>
                    </div>
                </div>
			{/if}
			
			<section id="columns" class="columns-container">
				<div class="container">
				
					
					
					<div class="row">
                                                
                         
                                                {if !isset($LEO_LAYOUT_DIRECTION)} {assign var="LEO_LAYOUT_DIRECTION" value="default" scope='global'} {/if}
						{include file="$tpl_dir./layout/{$LEO_LAYOUT_DIRECTION}/header.tpl"}  
	{/if}    

      	{if $smarty.server.REQUEST_URI eq "/preguntas-frecuentes.12"}
      		<div class="preguntas-frecuentes">
			<h3>Preguntas generales</h3>
		        {hook h='displayPreguntasFrecuentes'}
				
				<h3>Acerca de certificación orgánica</h3>
				{hook h='displayPreguntasFrecuentesCertificacionOrganica'}
		</div>
     	{/if}   
     
    