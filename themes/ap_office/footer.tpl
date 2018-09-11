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
{if !isset($content_only) || !$content_only}
						{include file="$tpl_dir./layout/{$LEO_LAYOUT_DIRECTION}/footer.tpl"  }
                	</div>
				</div>
            </section>
<!-- Footer -->
            {if isset($HOOK_BOTTOM) && !empty($HOOK_BOTTOM)}
			
				<section id="bottom">
					<div class="container">
							{$HOOK_BOTTOM}
					</div>
				</section>
			{/if}
			
			<div id="nuestras-cetificaciones">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<h2>Nuestras Certificaciones</h2>
						</div>
						<div class="col-lg-9">
							{hook h='displayCertificaciones'}
						</div>
					</div>
				</div>
			</div>
			<footer id="footer" class="footer-container">
                {if isset($HOOK_FOOTERTOP) && !empty($HOOK_FOOTERTOP)}
					<section id="leo-footer-top" class="footer-top"> 
						<div class="container"> 
							<div class="inner">			  
									{$HOOK_FOOTERTOP}
							</div>
						</div> 
					</section><!-- #footertop -->
                {/if}
                <section id="leo-footer-center" class="footer-center">
					<div class="container"> 
						<div class="inner">			
							
								{$HOOK_FOOTER}
							
						</div> 
					</div>
				</section><!-- #footercenter -->
                {if isset($HOOK_FOOTERBOTTOM)&&!empty($HOOK_FOOTERBOTTOM)}
					<section id="leo-footer-bottom" class="footer-bottom">
						<div class="container">
							<div class="inner">			
								
									{$HOOK_FOOTERBOTTOM}
								
							</div>
						</div>
					</section><!-- #footerbottom -->
                {/if}
				<section id="footernav" class="footer-nav">
					<div class="container">
						<div class="inner">							
							{if isset($ENABLE_COPYRIGHT) && $ENABLE_COPYRIGHT == 1}
								<div id="powered">
									{if isset($CUSTOM_COPYRIGHT)&&!empty($CUSTOM_COPYRIGHT)}
										{$CUSTOM_COPYRIGHT}
									{else}
										&copy; 2014 {l s='Powered by PrestaShop. All Rights Reserved.'} 
									{/if}
										<br/>{l s='Developed By'}<span> ApolloTheme</span>
								</div><!-- #poweredby -->
							{/if}
							{if isset($HOOK_FOOTNAV)&&!empty($HOOK_FOOTNAV)}
								<div id="footnav">
										{$HOOK_FOOTNAV}
								</div>
							{/if}							
						</div>
					</div>
				</section>
				
				<div class="container">
					<div class="metodos-pago">
						<img src="http://www.zaomakeup.com.co/themes/ap_office/img/medios-de-pago.png">
						<img src="http://www.zaomakeup.com.co/themes/ap_office/img/medios-de-pago-responsive.png" style="display:none">
						<img src="http://www.zaomakeup.com.co/themes/ap_office/img/Logo_Servientrega.png" style="width:230px;padding:14px 0;">
					</div>
				</div>
            </footer><!-- .footer-container -->
		</section><!-- #page -->
{/if}
{include file="$tpl_dir./global.tpl"}
{if isset($LEO_PANELTOOL) && $LEO_PANELTOOL}
    {include file="$tpl_dir./info/paneltool.tpl"}
{/if}

{literal}
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-100983421-1', 'auto');
  ga('send', 'pageview');
</script>


<!-- Google Code para etiquetas de remarketing -->
<!--------------------------------------------------
Es posible que las etiquetas de remarketing todavía no estén asociadas a la información de identificación personal o que estén en páginas relacionadas con las categorías delicadas. Para obtener más información e instrucciones sobre cómo configurar la etiqueta, consulte http://google.com/ads/remarketingsetup.
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 837152750;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/837152750/?guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Start of cosmticavillarosas Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="cosmticavillarosas.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
/*]]>*/</script>
<!-- End of cosmticavillarosas Zendesk Widget script -->

{/literal}

	</body>
</html>