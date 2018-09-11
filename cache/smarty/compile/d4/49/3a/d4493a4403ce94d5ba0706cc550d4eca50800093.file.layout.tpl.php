<?php /* Smarty version Smarty-3.1.19, created on 2018-07-19 02:07:44
         compiled from "/home/wwwzaon/public_html/modules/ph_simpleblog/views/templates/front/comments/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8253383535b5038c0f1df83-79024154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4493a4403ce94d5ba0706cc550d4eca50800093' => 
    array (
      0 => '/home/wwwzaon/public_html/modules/ph_simpleblog/views/templates/front/comments/layout.tpl',
      1 => 1494193515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8253383535b5038c0f1df83-79024154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b5038c1027a86_93542714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5038c1027a86_93542714')) {function content_5b5038c1027a86_93542714($_smarty_tpl) {?>
<div id="simpleblog-post-comments" class="post-block">
	<h3 class="block-title"><?php echo smartyTranslate(array('s'=>'Comentarios','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->comments, ENT_QUOTES, 'UTF-8', true);?>
)</h3>

	<div class="post-comments-list">
		<?php if ($_smarty_tpl->tpl_vars['post']->value->comments) {?>
			<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
			<div class="post-comment post-comment-<?php echo intval($_smarty_tpl->tpl_vars['comment']->value['id']);?>
">
				<div class="post-comment-meta">
					<i class="fa fa-pencil"></i>
					<?php echo smartyTranslate(array('s'=>'Posted by','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <span class="post-comment-author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span> <?php echo smartyTranslate(array('s'=>'on','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <span class="post-comment-date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['date_add'], ENT_QUOTES, 'UTF-8', true);?>
</span>
				</div><!-- .post-comment-meta -->
				<div class="post-comment-content">
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>

				</div><!-- .post-comment-content -->
			</div><!-- .post-comment -->
			<?php } ?>
		<?php } else { ?>
			<div class="warning alert alert-warning">
				<?php echo smartyTranslate(array('s'=>'No hay comentarios en este momento','mod'=>'ph_simpleblog'),$_smarty_tpl);?>

			</div><!-- .warning -->
		<?php }?>
	</div><!-- .post-comments-list -->

	
	<?php echo $_smarty_tpl->getSubTemplate ("./form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- #post-comments --><?php }} ?>
