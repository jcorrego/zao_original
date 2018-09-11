<?php /* Smarty version Smarty-3.1.19, created on 2018-07-18 09:08:22
         compiled from "/home/wwwzaon/public_html/themes/ap_office/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5564416775b4f49d6370318-70551575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42b7d676fa8472e0d96b31b982e00d34d6568c02' => 
    array (
      0 => '/home/wwwzaon/public_html/themes/ap_office/footer.tpl',
      1 => 1504643681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5564416775b4f49d6370318-70551575',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'LEO_LAYOUT_DIRECTION' => 0,
    'HOOK_BOTTOM' => 0,
    'HOOK_FOOTERTOP' => 0,
    'HOOK_FOOTER' => 0,
    'HOOK_FOOTERBOTTOM' => 0,
    'ENABLE_COPYRIGHT' => 0,
    'CUSTOM_COPYRIGHT' => 0,
    'HOOK_FOOTNAV' => 0,
    'LEO_PANELTOOL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4f49d658ab12_43075734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4f49d658ab12_43075734')) {function content_5b4f49d658ab12_43075734($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/".((string)$_smarty_tpl->tpl_vars['LEO_LAYOUT_DIRECTION']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                	</div>
				</div>
            </section>
<!-- Footer -->
            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value)) {?>
			
				<section id="bottom">
					<div class="container">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value;?>

					</div>
				</section>
			<?php }?>
			
			<div id="nuestras-cetificaciones">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<h2>Nuestras Certificaciones</h2>
						</div>
						<div class="col-lg-9">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCertificaciones'),$_smarty_tpl);?>

						</div>
					</div>
				</div>
			</div>
			<footer id="footer" class="footer-container">
                <?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTERTOP']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_FOOTERTOP']->value)) {?>
					<section id="leo-footer-top" class="footer-top"> 
						<div class="container"> 
							<div class="inner">			  
									<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTERTOP']->value;?>

							</div>
						</div> 
					</section><!-- #footertop -->
                <?php }?>
                <section id="leo-footer-center" class="footer-center">
					<div class="container"> 
						<div class="inner">			
							
								<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

							
						</div> 
					</div>
				</section><!-- #footercenter -->
                <?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTERBOTTOM']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_FOOTERBOTTOM']->value)) {?>
					<section id="leo-footer-bottom" class="footer-bottom">
						<div class="container">
							<div class="inner">			
								
									<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTERBOTTOM']->value;?>

								
							</div>
						</div>
					</section><!-- #footerbottom -->
                <?php }?>
				<section id="footernav" class="footer-nav">
					<div class="container">
						<div class="inner">							
							<?php if (isset($_smarty_tpl->tpl_vars['ENABLE_COPYRIGHT']->value)&&$_smarty_tpl->tpl_vars['ENABLE_COPYRIGHT']->value==1) {?>
								<div id="powered">
									<?php if (isset($_smarty_tpl->tpl_vars['CUSTOM_COPYRIGHT']->value)&&!empty($_smarty_tpl->tpl_vars['CUSTOM_COPYRIGHT']->value)) {?>
										<?php echo $_smarty_tpl->tpl_vars['CUSTOM_COPYRIGHT']->value;?>

									<?php } else { ?>
										&copy; 2014 <?php echo smartyTranslate(array('s'=>'Powered by PrestaShop. All Rights Reserved.'),$_smarty_tpl);?>
 
									<?php }?>
										<br/><?php echo smartyTranslate(array('s'=>'Developed By'),$_smarty_tpl);?>
<span> ApolloTheme</span>
								</div><!-- #poweredby -->
							<?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value)) {?>
								<div id="footnav">
										<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value;?>

								</div>
							<?php }?>							
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
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value)&&$_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>


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



	</body>
</html><?php }} ?>
