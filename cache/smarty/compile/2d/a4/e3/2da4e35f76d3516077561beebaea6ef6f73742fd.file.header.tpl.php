<?php /* Smarty version Smarty-3.1.19, created on 2018-07-18 09:08:21
         compiled from "/home/wwwzaon/public_html/themes/ap_office/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6968227855b4f49d5006c79-10721745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2da4e35f76d3516077561beebaea6ef6f73742fd' => 
    array (
      0 => '/home/wwwzaon/public_html/themes/ap_office/header.tpl',
      1 => 1523977419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6968227855b4f49d5006c79-10721745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_code' => 0,
    'IS_RTL' => 0,
    'LEO_DEFAULT_SKIN' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'ENABLE_RESPONSIVE' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'css_uriie9' => 0,
    'mediaie9' => 0,
    'media' => 0,
    'js_defer' => 0,
    'js_files' => 0,
    'js_def' => 0,
    'js_uri' => 0,
    'HOOK_HEADER' => 0,
    'LOAD_CSS_TYPE' => 0,
    'content_dir' => 0,
    'LEO_THEMENAME' => 0,
    'LEO_CSS' => 0,
    'LEO_SKIN_CSS' => 0,
    'linkCss' => 0,
    'CUSTOM_FONT' => 0,
    'LAYOUT_WIDTH' => 0,
    'page_name' => 0,
    'body_classes' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'content_only' => 0,
    'lang_iso' => 0,
    'LEO_LAYOUT_MODE' => 0,
    'USE_FHEADER' => 0,
    'LEO_HEADER_STYLE' => 0,
    'LEO_SIDEBAR_MENU' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'colValue' => 0,
    'LISTING_GRIG_MODE' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'logged' => 0,
    'link' => 0,
    'cookie' => 0,
    'HOOK_TOP' => 0,
    'HOOK_TOPNAVIGATION' => 0,
    'HOOK_SLIDESHOW' => 0,
    'LEO_LAYOUT_DIRECTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4f49d5794431_00871926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4f49d5794431_00871926')) {function content_5b4f49d5794431_00871926($_smarty_tpl) {?><?php if (!is_callable('smarty_function_implode')) include '/home/wwwzaon/public_html/tools/smarty/plugins/function.implode.php';
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<html<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['IS_RTL']->value)&&$_smarty_tpl->tpl_vars['IS_RTL']->value) {?> dir="rtl" class="rtl<?php if (isset($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value;?>
<?php }?>" <?php } else { ?> class="<?php if (isset($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value)) {?><?php echo $_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value;?>
<?php }?>" <?php }?>>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/setting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<head>
		<meta charset="utf-8" />
		<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
		<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value) {?>
			<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value) {?>
			<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php }?>
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value) {?>no<?php }?>follow" />
		<?php if ($_smarty_tpl->tpl_vars['ENABLE_RESPONSIVE']->value) {?><meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" /><?php }?>
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['css_uri']->value=='lteIE9') {?>
					<!--[if lte IE 9]>
					<?php  $_smarty_tpl->tpl_vars['mediaie9'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mediaie9']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uriie9'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value[$_smarty_tpl->tpl_vars['css_uri']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mediaie9']->key => $_smarty_tpl->tpl_vars['mediaie9']->value) {
$_smarty_tpl->tpl_vars['mediaie9']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uriie9']->value = $_smarty_tpl->tpl_vars['mediaie9']->key;
?>
					<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['css_uriie9']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mediaie9']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
					<?php } ?>
					<![endif]-->
				<?php } else { ?>
					<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['css_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['media']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
				<?php }?>
			<?php } ?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['js_defer']->value)&&!$_smarty_tpl->tpl_vars['js_defer']->value&&isset($_smarty_tpl->tpl_vars['js_files']->value)&&isset($_smarty_tpl->tpl_vars['js_def']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['js_def']->value;?>

			<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"></script>
			<?php } ?>
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

		<?php if (!$_smarty_tpl->tpl_vars['LOAD_CSS_TYPE']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['ENABLE_RESPONSIVE']->value) {?>
			<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/css/responsive.css"/>
			<?php } else { ?>
			<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/css/non-responsive.css"/>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['LEO_CSS']->value)) {?><?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LEO_CSS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
			<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
			<?php } ?><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['LEO_SKIN_CSS']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['linkCss'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linkCss']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LEO_SKIN_CSS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linkCss']->key => $_smarty_tpl->tpl_vars['linkCss']->value) {
$_smarty_tpl->tpl_vars['linkCss']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['linkCss']->value;?>

				<?php } ?>
			<?php }?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['CUSTOM_FONT']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['CUSTOM_FONT']->value;?>

		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['LAYOUT_WIDTH']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['LAYOUT_WIDTH']->value;?>

		<?php }?>
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Exo+2:400,300,500,400italic,500italic,600,600italic,700,700italic,800" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<!--[if IE 8]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500" rel="stylesheet">
		
		
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
		
	</head>
	<body<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['body_classes']->value)&&count($_smarty_tpl->tpl_vars['body_classes']->value)) {?> <?php echo smarty_function_implode(array('value'=>$_smarty_tpl->tpl_vars['body_classes']->value,'separator'=>' '),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value) {?> hide-left-column<?php } else { ?> show-left-column<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value) {?> hide-right-column<?php } else { ?> show-right-column<?php }?><?php if (isset($_smarty_tpl->tpl_vars['content_only']->value)&&$_smarty_tpl->tpl_vars['content_only']->value) {?> content_only<?php }?> lang_<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
  <?php if (isset($_smarty_tpl->tpl_vars['LEO_LAYOUT_MODE']->value)) {?><?php echo $_smarty_tpl->tpl_vars['LEO_LAYOUT_MODE']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['USE_FHEADER']->value)&&$_smarty_tpl->tpl_vars['USE_FHEADER']->value) {?> keep-header<?php }?><?php if (isset($_smarty_tpl->tpl_vars['LEO_HEADER_STYLE']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['LEO_HEADER_STYLE']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['LEO_HEADER_STYLE']->value!="header-hide-topmenu"&&$_smarty_tpl->tpl_vars['LEO_SIDEBAR_MENU']->value!="sidebar-hide") {?> double-menu<?php }?>">
	<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value) {?>
			<section id="restricted-country">
				<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['geolocation_country']->value)&&$_smarty_tpl->tpl_vars['geolocation_country']->value) {?> <span class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['geolocation_country']->value, ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></p>
			</section>
		<?php }?>
		
		<div class="texto-cabecera"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTextoCabecera'),$_smarty_tpl);?>
</div>
		
		<section id="page" data-column="<?php echo $_smarty_tpl->tpl_vars['colValue']->value;?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['LISTING_GRIG_MODE']->value;?>
">
			<!-- Header -->
			<header id="header">
				<section class="header-container">
					
					<div id="topbar">
						<div class="container">
							<div class="row">
								<div id="header_logo" class="col-lg-2">
									<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
										<img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>
									</a>
								</div>
								<div class="col-lg-4 datosContacto">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayDatosContactoCabecera'),$_smarty_tpl);?>

								</div>
								<div class="col-lg-3 redesSociales">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayRedesSociales'),$_smarty_tpl);?>

								</div>
								<div class="col-lg-2 entrarRegistrarme <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>logueado<?php }?>">
									<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="logout" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Cerrar sesión','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a> &nbsp;
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
</span></a>										
									<?php } else { ?>
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="login" rel="nofollow"><i class="icon-user"></i> Entrar</a>
									<?php }?>
								</div>
								<div class="col-lg-1 buscadorCarro">
									<?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOP']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>
<?php }?> 
								</div>
							</div>
						</div>
					</div>
					
					<div id="header-main">
						<div class="container">
							<div class="inner">
								<div class="row">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav'),$_smarty_tpl);?>

                                    
								</div>
							</div>
						</div>
					</div>
				</section>
			</header>
			
			<div class='banner-principal'>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTopColumn'),$_smarty_tpl);?>

			</div>
			
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOPNAVIGATION']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_TOPNAVIGATION']->value)) {?>
				<div id="leo-megamenu" class="clearfix">
					<div class="container">
					<div class="inner">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_TOPNAVIGATION']->value;?>

					</div>
					</div>
				</div>
			<?php }?> 
			
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_SLIDESHOW']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_SLIDESHOW']->value)&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))) {?>
				<div id="slideshow" class="clearfix"> 
					<div class="container">
						<?php echo $_smarty_tpl->tpl_vars['HOOK_SLIDESHOW']->value;?>

					</div>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='pagenotfound') {?>
				<div id="breadcrumb" class="clearfix">	
					<div class="container">		
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
				</div>
			<?php }?>
			<!-- Content -->
			
			<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
				<div id="productos-destacados">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductosDestacados'),$_smarty_tpl);?>

							</div>
						</div>
					</div>
				</div>
				
                <div id="productos-mejores-vendidos">
                    <div class="hidden-lg hidden-md titulo"><a href="">Best Sellers</a></div>
                    <div class="container ">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMejorVendidos'),$_smarty_tpl);?>

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
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductosNuevos'),$_smarty_tpl);?>

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
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductosRecomendados'),$_smarty_tpl);?>

                            </div>
                            <div class="col-lg-12 c-btn-vtlp">
                                <a class="ver-todos-los-productos" href="http://www.zaomakeup.com.co/12-recomendados">Ver todos los productos</a>
                            </div>
                        </div>
                    </div>
                </div>
			<?php }?>
			
			<section id="columns" class="columns-container">
				<div class="container">
				
					
					
					<div class="row">
                                                
                         
                                                <?php if (!isset($_smarty_tpl->tpl_vars['LEO_LAYOUT_DIRECTION']->value)) {?> <?php $_smarty_tpl->tpl_vars["LEO_LAYOUT_DIRECTION"] = new Smarty_variable("default", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LEO_LAYOUT_DIRECTION"] = clone $_smarty_tpl->tpl_vars["LEO_LAYOUT_DIRECTION"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LEO_LAYOUT_DIRECTION"] = clone $_smarty_tpl->tpl_vars["LEO_LAYOUT_DIRECTION"];?> <?php }?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/".((string)$_smarty_tpl->tpl_vars['LEO_LAYOUT_DIRECTION']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
	<?php }?>    

      	<?php if ($_SERVER['REQUEST_URI']=="/preguntas-frecuentes.12") {?>
      		<div class="preguntas-frecuentes">
			<h3>Preguntas generales</h3>
		        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayPreguntasFrecuentes'),$_smarty_tpl);?>

				
				<h3>Acerca de certificación orgánica</h3>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayPreguntasFrecuentesCertificacionOrganica'),$_smarty_tpl);?>

		</div>
     	<?php }?>   
     
    <?php }} ?>
