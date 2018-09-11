<?php /* Smarty version Smarty-3.1.19, created on 2018-07-18 09:33:44
         compiled from "/home/wwwzaon/public_html/modules/ph_simpleblog/views/templates/front/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17379039855b4f4fc846ceb4-91678887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe06c615cc1bfa4df4c26b54d3526a55094e0f46' => 
    array (
      0 => '/home/wwwzaon/public_html/modules/ph_simpleblog/views/templates/front/list.tpl',
      1 => 1494190149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17379039855b4f4fc846ceb4-91678887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent_category' => 0,
    'is_category' => 0,
    'link' => 0,
    'navigationPipe' => 0,
    'blogCategory' => 0,
    'is_16' => 0,
    'blogMainTitle' => 0,
    'posts' => 0,
    'post' => 0,
    'blogLayout' => 0,
    'columns' => 0,
    'post_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4f4fc89f6c95_28551075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4f4fc89f6c95_28551075')) {function content_5b4f4fc89f6c95_28551075($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/wwwzaon/public_html/tools/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/wwwzaon/public_html/tools/smarty/plugins/modifier.date_format.php';
?>
<?php if (Configuration::get('PH_BLOG_DISPLAY_BREADCRUMBS')) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
		<?php if (isset($_smarty_tpl->tpl_vars['parent_category']->value)||$_smarty_tpl->tpl_vars['is_category']->value==true) {?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ph_simpleblog','list'), ENT_QUOTES, 'UTF-8', true);?>
">
			<?php echo smartyTranslate(array('s'=>'Blog','mod'=>'ph_simpleblog'),$_smarty_tpl);?>

		</a>
		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'Blog','mod'=>'ph_simpleblog'),$_smarty_tpl);?>

		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['parent_category']->value)) {?>
			<span class="navigation-pipe">
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigationPipe']->value, ENT_QUOTES, 'UTF-8', true);?>

			</span>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ph_simpleblog','category',array('sb_category'=>$_smarty_tpl->tpl_vars['parent_category']->value->link_rewrite)), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['is_category']->value==true) {?>
			<span class="navigation-pipe">
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigationPipe']->value, ENT_QUOTES, 'UTF-8', true);?>

			</span>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blogCategory']->value->name, ENT_QUOTES, 'UTF-8', true);?>

		<?php }?>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if (!$_smarty_tpl->tpl_vars['is_16']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php }?>

<div class="ph_simpleblog simpleblog-<?php if ($_smarty_tpl->tpl_vars['is_category']->value) {?>category<?php } else { ?>home<?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['is_category']->value==true) {?>
		<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blogCategory']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>

		<?php if (Configuration::get('PH_BLOG_DISPLAY_CATEGORY_IMAGE')&&isset($_smarty_tpl->tpl_vars['blogCategory']->value->image)) {?>
		<div class="simpleblog-category-image">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blogCategory']->value->image, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blogCategory']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" />
		</div>
		<?php }?>

		<?php if (!empty($_smarty_tpl->tpl_vars['blogCategory']->value->description)&&Configuration::get('PH_BLOG_DISPLAY_CAT_DESC')) {?>
		<div class="ph_cat_description rte">
			<?php echo $_smarty_tpl->tpl_vars['blogCategory']->value->description;?>

		</div>
		<?php }?>
	<?php } else { ?>
		<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blogMainTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)) {?>
		<div class="row simpleblog-posts" itemscope="itemscope" itemtype="http://schema.org/Blog">
			<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>

				<div class="simpleblog-post-item simpleblog-post-type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_type'], ENT_QUOTES, 'UTF-8', true);?>

				<?php if ($_smarty_tpl->tpl_vars['blogLayout']->value=='grid'&&$_smarty_tpl->tpl_vars['columns']->value=='3') {?>
					col-md-4 col-sm-6 col-xs-12 col-ms-12 <?php echo smarty_function_cycle(array('values'=>"first-in-line,second-in-line,last-in-line"),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['blogLayout']->value=='grid'&&$_smarty_tpl->tpl_vars['columns']->value=='4') {?>
					col-md-3 col-sm-6 col-xs-12 col-ms-12 <?php echo smarty_function_cycle(array('values'=>"first-in-line,second-in-line,third-in-line,last-in-line"),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['blogLayout']->value=='grid'&&$_smarty_tpl->tpl_vars['columns']->value=='2') {?>
					col-md-6 col-sm-6 col-xs-12 col-ms-12 <?php echo smarty_function_cycle(array('values'=>"first-in-line,last-in-line"),$_smarty_tpl);?>

				<?php } else { ?>
				col-md-12
				<?php }?>" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

					<div class="post-item">
						<?php $_smarty_tpl->tpl_vars['post_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['post_type'], null, 0);?>

						
						

						<?php if ($_smarty_tpl->tpl_vars['post_type']->value!='post'&&file_exists(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/thumbnail.tpl")) {?>
							<?php echo $_smarty_tpl->getSubTemplate ("./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<?php } else { ?>
							<?php if (isset($_smarty_tpl->tpl_vars['post']->value['banner'])&&Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL')) {?>
							<div class="post-thumbnail" itemscope itemtype="http://schema.org/ImageObject">
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Permalink to','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="contentUrl">
									<?php if ($_smarty_tpl->tpl_vars['blogLayout']->value=='full') {?>
										<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_wide'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" itemprop="thumbnailUrl" />
									<?php } else { ?>
										<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_thumb'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" itemprop="thumbnailUrl"/>
									<?php }?>
								</a>
							</div><!-- .post-thumbnail -->
							<?php }?>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['post_type']->value!='post'&&file_exists(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/title.tpl")) {?>
							<?php echo $_smarty_tpl->getSubTemplate ("./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<?php } else { ?>
							<div class="post-title">
								<h2 itemprop="headline">
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Permalink to','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
">
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

									</a>
								</h2>
							</div><!-- .post-title -->
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['post_type']->value!='post'&&file_exists(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/description.tpl")) {?>
							<?php echo $_smarty_tpl->getSubTemplate ("./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/description.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<?php } else { ?>
							<?php if (Configuration::get('PH_BLOG_DISPLAY_DESCRIPTION')) {?>
							<div class="post-content" itemprop="text">
								<?php echo strip_tags($_smarty_tpl->tpl_vars['post']->value['short_content']);?>


								<?php if (Configuration::get('PH_BLOG_DISPLAY_MORE')) {?>
								<div class="post-read-more">
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Read more','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
">
										<?php echo smartyTranslate(array('s'=>'Ver más','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <i class="fa fa-chevron-right"></i>
									</a>
								</div><!-- .post-read-more -->
								<?php }?>
							</div><!-- .post-content -->	
							<?php }?>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['post_type']->value!='post'&&file_exists(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/meta.tpl")) {?>
							<?php echo $_smarty_tpl->getSubTemplate ("./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<?php } else { ?>
							<div class="post-additional-info post-meta-info">
								<?php if (Configuration::get('PH_BLOG_DISPLAY_DATE')) {?>
									<span class="post-date">
										<i class="fa fa-calendar"></i> <time itemprop="datePublished" datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_add'],'c');?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_add'],Configuration::get('PH_BLOG_DATEFORMAT'));?>
</time>
									</span>
								<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['is_category']->value==false&&Configuration::get('PH_BLOG_DISPLAY_CATEGORY')) {?>
									<span class="post-category">
										<i class="fa fa-tags"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['category_url'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category'], ENT_QUOTES, 'UTF-8', true);?>
" rel="category"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category'], ENT_QUOTES, 'UTF-8', true);?>
</a>
									</span>
								<?php }?>

								<?php if (isset($_smarty_tpl->tpl_vars['post']->value['author'])&&!empty($_smarty_tpl->tpl_vars['post']->value['author'])&&Configuration::get('PH_BLOG_DISPLAY_AUTHOR')) {?>
									<span class="post-author">
										<i class="fa fa-user"></i> <span itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['author'], ENT_QUOTES, 'UTF-8', true);?>
</span>
									</span>
								<?php }?>
							</div><!-- .post-additional-info post-meta-info -->
						<?php }?>
					</div><!-- .post-item -->
				</div><!-- .simpleblog-post-item -->

			<?php } ?>
		</div><!-- .row -->
		
		<?php if ($_smarty_tpl->tpl_vars['is_category']->value) {?>
			<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rewrite'=>$_smarty_tpl->tpl_vars['blogCategory']->value->link_rewrite,'type'=>'category'), 0);?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rewrite'=>false,'type'=>false), 0);?>

		<?php }?>
	<?php } else { ?>
		<p class="warning alert alert-warning"><?php echo smartyTranslate(array('s'=>'There are no posts','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</p>
	<?php }?>
</div><!-- .ph_simpleblog -->
<script>
var currentBlog = '<?php if ($_smarty_tpl->tpl_vars['is_category']->value) {?>category<?php } else { ?>home<?php }?>';
$(window).load(function() {
	$('body').addClass('simpleblog simpleblog-'+currentBlog);
});
</script><?php }} ?>
