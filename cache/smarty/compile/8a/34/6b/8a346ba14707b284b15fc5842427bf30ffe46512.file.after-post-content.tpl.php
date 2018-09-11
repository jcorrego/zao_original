<?php /* Smarty version Smarty-3.1.19, created on 2018-07-19 02:07:44
         compiled from "/home/wwwzaon/public_html/modules/ph_simpleblog/views/templates/hook/after-post-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17887776405b5038c0ee7ce1-11444558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a346ba14707b284b15fc5842427bf30ffe46512' => 
    array (
      0 => '/home/wwwzaon/public_html/modules/ph_simpleblog/views/templates/hook/after-post-content.tpl',
      1 => 1494006461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17887776405b5038c0ee7ce1-11444558',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b5038c0f0e548_74393994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5038c0f0e548_74393994')) {function content_5b5038c0f0e548_74393994($_smarty_tpl) {?><?php if (Configuration::get('PH_BLOG_DISPLAY_SHARER')) {?>
<div class="post-block simpleblog-socialshare">
	<h3 class="block-title"><?php echo smartyTranslate(array('s'=>'Share this post','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</h3>

	<div class="simpleblog-socialshare-icons">
		<button data-type="twitter" type="button" class="btn btn-default btn-twitter">
			<i class="fa fa-twitter"></i> <?php echo smartyTranslate(array('s'=>"Tweet",'mod'=>'ph_simpleblog'),$_smarty_tpl);?>

		</button>
		<button data-type="facebook" type="button" class="btn btn-default btn-facebook">
			<i class="fa fa-facebook"></i> <?php echo smartyTranslate(array('s'=>"Share",'mod'=>'ph_simpleblog'),$_smarty_tpl);?>

		</button>
		<button data-type="google-plus" type="button" class="btn btn-default btn-google-plus">
			<i class="fa fa-google-plus"></i> <?php echo smartyTranslate(array('s'=>"Google+",'mod'=>'ph_simpleblog'),$_smarty_tpl);?>

		</button>
		<button data-type="pinterest" type="button" class="btn btn-default btn-pinterest">
			<i class="fa fa-pinterest"></i> <?php echo smartyTranslate(array('s'=>"Pinterest",'mod'=>'ph_simpleblog'),$_smarty_tpl);?>

		</button>
	</div><!-- simpleblog-socialshare-icons. -->
</div><!-- .simpleblog-socialshare -->
<?php }?><?php }} ?>
