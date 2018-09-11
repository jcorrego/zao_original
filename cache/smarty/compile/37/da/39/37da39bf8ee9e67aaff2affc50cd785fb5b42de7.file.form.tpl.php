<?php /* Smarty version Smarty-3.1.19, created on 2018-07-19 02:07:45
         compiled from "/home/wwwzaon/public_html/modules/ph_simpleblog/views/templates/front/comments/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8018275825b5038c102ce42-86585954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37da39bf8ee9e67aaff2affc50cd785fb5b42de7' => 
    array (
      0 => '/home/wwwzaon/public_html/modules/ph_simpleblog/views/templates/front/comments/form.tpl',
      1 => 1494189000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8018275825b5038c102ce42-86585954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'post' => 0,
    'customerName' => 0,
    'is_16' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b5038c10c7603_96253849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5038c10c7603_96253849')) {function content_5b5038c10c7603_96253849($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['logged']->value)&&$_smarty_tpl->tpl_vars['logged']->value||Configuration::get('PH_BLOG_COMMENT_ALLOW_GUEST')) {?>
<form class="std clearfix" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" method="post">
	<fieldset>
		<div class="box">
			<h3 class="page-heading bottom-indent"><?php echo smartyTranslate(array('s'=>'Enviar Comentario','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</h3>
			<div class="form-group">
				<label for="customer_name"><?php echo smartyTranslate(array('s'=>'Nombre Completo','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</label>
				<input type="text" class="form-control" name="customer_name" id="customer_name" value="<?php if (isset($_smarty_tpl->tpl_vars['logged']->value)&&$_smarty_tpl->tpl_vars['logged']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php if (isset($_POST['comment_content'])) {?><?php echo mb_convert_encoding(htmlspecialchars($_POST['customer_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?><?php }?>" />
			</div>
			<div class="form-group">
				<label for="comment_content"><?php echo smartyTranslate(array('s'=>'Su comentario','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</label>
				<textarea class="form-control"id="comment_content" name="comment_content" cols="26" rows="5"><?php if (isset($_POST['comment_content'])) {?><?php echo mb_convert_encoding(htmlspecialchars($_POST['comment_content'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></textarea>
			</div>
			<?php if (Configuration::get('PH_BLOG_COMMENTS_RECAPTCHA')) {?>
			<div class="form-group">
				<div class="g-recaptcha" data-sitekey="<?php echo Configuration::get('PH_BLOG_COMMENTS_RECAPTCHA_SITE_KEY');?>
" data-theme="<?php echo Configuration::get('PH_BLOG_COMMENTS_RECAPTCHA_THEME');?>
"></div>
				<script src='https://www.google.com/recaptcha/api.js'></script>
			</div>
			<?php }?>
		</div>
		<p class="cart_navigation required submit clearfix">
			<input type="hidden" name="id_simpleblog_post" value="<?php echo intval($_smarty_tpl->tpl_vars['post']->value->id_simpleblog_post);?>
" />
			<input type="hidden" name="id_parent" id="id_parent" value="0" />
			<?php if ($_smarty_tpl->tpl_vars['is_16']->value) {?>
			<button type="submit" class="button btn btn-default button-medium" name="submitNewComment" id="submitNewComment">
				<span>
					<?php echo smartyTranslate(array('s'=>'Agregar un comentario','mod'=>'ph_simpleblog'),$_smarty_tpl);?>

					<i class="fa fa-chevron-right right"></i>
				</span>
			</button>
			<?php } else { ?>
			<input type="submit" class="button" name="submitNewComment" value="<?php echo smartyTranslate(array('s'=>'Agregar un comentario','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
" />
			<?php }?>
		</p>
	</fieldset>
</form>
<?php } else { ?>
	<div class="warning alert alert-warning">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true,null,array('back'=>$_smarty_tpl->tpl_vars['post']->value->url)), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Only registered and logged customers can add comments','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</a>
	</div><!-- .warning -->
<?php }?>
<?php }} ?>
