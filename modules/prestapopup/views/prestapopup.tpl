{*
* 2007-2014 PrestaShop
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
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700);
	#parallax-wrapper{
		position:relative;
		min-height:250px;
		width:100%;
		text-align: center;
	}
	.img-holder
	{
		padding-top: {if $padding_top}{$padding_top}px{/if};
		padding-bottom: {if $padding_bottom}{$padding_bottom}px{/if};
		position:relative;
		text-align: center;
	}
	#modulesden_popup{
		background: url("{$modules_dir}prestapopup/img/{$prestapopup_cover}") center center no-repeat;
		min-width: {$prestapopup_width}px;
		min-height: {$prestapopup_BOX_HEIGHT}px;
		padding: 15px 18px;
		background-size: 100% 100%;
	}
	.fancybox-skin{
		-webkit-border-radius: 0px;
		-moz-border-radius: 0px;
		border-radius: 0px;
	}
	.modulesden-newsletter{
		max-width: 400px;
	}
	.modulesden-newsletter .modulesden-email {
		height: 50px;
		line-height: 50px;
		width: 100%;
		color: #c8c8c8;
		font-size: 100.67%;
		border: none;
		padding-top: 0px;
		padding-bottom: 0px;
		padding-left: 10px;
		max-width: 260px;
	}
	.modulesden-newsletter label{
		font-family: 'Roboto Condensed', sans-serif;
		font-weight: 300;
		margin-bottom: 12px;
		color: white;
	}
	.modulesden-newsletter h2 {
		margin-top: 50px;
		font-weight: 300;
		text-transform: uppercase;
		font-family: 'Roboto Condensed', sans-serif;
		color: #BD1E30;
		font-size: 35px;
		font-weight: bold;
		color: white;
	}
	.modulesden-newsletter h3 {
		font-size: 166.67%;
		font-weight: 300;
		text-transform: uppercase;
		font-family: 'Roboto Condensed', sans-serif;
		color: white;
	}
	.modulesden-btn-newsletter{
		background-color: {$prestapopup_BTN_COLOR};
		color: white;
		border: none;
		font-family: 'Roboto Condensed', sans-serif;
		font-size: 16px;
		padding: 13px;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		-o-border-radius: 3px;
		-ms-border-radius: 3px;
		border-radius: 3px;
		-webkit-transition: .5s;
		-moz-transition: .4s;
		-o-transition: .5s;
		-ms-transition: .5s;
		transition: .5s;
		margin-top: 10px;
		display: block;
	}	
	

</style>

<div style="display: none;">
{if $prestapopup_paragraph}
	{$prestapopup_paragraph}
{/if}
</div>
<a href="http://www.modulesden.com/blog/" style="display:block;width:0px;height:0px;color:rgba(0,0,0,0);">Prestashop Modules</a>
<script>
$(document).ready(function () {
	
	if(getCookie_popup("prestaPopupCookie") != 1){
		$('html').append('<a class="fancybox" style="display:none" href="#modulesden_popup"></a>');
		setTimeout(function(){
			$('.fancybox').fancybox({
				padding: 0,
				afterClose: function () {
					$('a[href="#modulesden_popup"]').remove();
				}
			});
			$('a[href="#modulesden_popup"]').trigger('click');
		},{$prestapopup_SHOW_TIME} * 1000);
	}
    
	
	$('.modulesden-btn-newsletter').on('click',function(){
		//$('.modulesden-btn-newsletter').module_path
		$.ajax({
			method: "POST",
			url: "{$module_path}subscribe.php",
			data: { action: 0, email: $('.modulesden-email').val(), }
		})
		  .done(function( msg ) {
			var obj = $.parseJSON(msg);
			if(obj.code != 1){
				if(obj.message){
					$('.modulesden-email').val(obj.message);
				}
				$('.modulesden-email').css('background-color', 'red');
				
			}else{
				if(obj.message){
					$('.modulesden-email').val(obj.message);
				}
				cookieSession_popup();
				$.fancybox.close();
			};
		});
		return false;
	})
	

	
	function cookieSession_popup() {
			var session_name = 'prestaPopupCookie';
			var session_val = '1';
			var expire_date = new Date();
			expire_date.setMonth(expire_date.getMonth()+3);
			document.cookie = session_name + "=" + escape(session_val) +";path=/;" + ((expire_date==null)?"" : ("; expires=" + expire_date.toGMTString()))
		}
		
	function getCookie_popup(cname) {
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i=0; i<ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1);
			if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
		}
		return "";
	}
});
</script>
