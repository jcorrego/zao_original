<?php /* Smarty version Smarty-3.1.19, created on 2018-07-18 09:08:16
         compiled from "/home/wwwzaon/public_html/themes/ap_office/modules/blocksocial/blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5311729125b4f49d0e8bd05-84633706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '892103b9ec7a6fc52f467e6f8eea78893291e46e' => 
    array (
      0 => '/home/wwwzaon/public_html/themes/ap_office/modules/blocksocial/blocksocial.tpl',
      1 => 1489150353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5311729125b4f49d0e8bd05-84633706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'instagram_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
    'vimeo_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4f49d11a4393_95193403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4f49d11a4393_95193403')) {function content_5b4f49d11a4393_95193403($_smarty_tpl) {?>

<div id="social_block" class="block">
	<div class="block_content toggle-footer">
		<h4 class="title_block">Síguenos</h4>
		<ul>
			<?php if (isset($_smarty_tpl->tpl_vars['facebook_url']->value)&&$_smarty_tpl->tpl_vars['facebook_url']->value!='') {?>
				<li class="facebook">
					<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebook_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
">
						<span><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['instagram_url']->value)&&$_smarty_tpl->tpl_vars['instagram_url']->value!='') {?>
				<li class="instagram">
					<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instagram_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Instagram','mod'=>'blocksocial'),$_smarty_tpl);?>
">
						<span><?php echo smartyTranslate(array('s'=>'Instagram','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['twitter_url']->value)&&$_smarty_tpl->tpl_vars['twitter_url']->value!='') {?>
				<li class="twitter">
					<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twitter_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
">
						<span><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['rss_url']->value)&&$_smarty_tpl->tpl_vars['rss_url']->value!='') {?>
				<li class="rss">
					<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rss_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
">
						<span><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['youtube_url']->value)&&$_smarty_tpl->tpl_vars['youtube_url']->value!='') {?>
				<li class="youtube">
					<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Youtube','mod'=>'blocksocial'),$_smarty_tpl);?>
">
						<span><?php echo smartyTranslate(array('s'=>'Youtube','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['google_plus_url']->value)&&$_smarty_tpl->tpl_vars['google_plus_url']->value!='') {?>
				<li class="google-plus">
					<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['google_plus_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Google Plus','mod'=>'blocksocial'),$_smarty_tpl);?>
" rel="publisher">
						<span><?php echo smartyTranslate(array('s'=>'Google Plus','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['pinterest_url']->value)&&$_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?>
				<li class="pinterest">
					<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pinterest_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'blocksocial'),$_smarty_tpl);?>
">
						<span><?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['vimeo_url']->value)&&$_smarty_tpl->tpl_vars['vimeo_url']->value!='') {?>
				<li class="vimeo">
					<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vimeo_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Vimeo','mod'=>'blocksocial'),$_smarty_tpl);?>
">
						<span><?php echo smartyTranslate(array('s'=>'Vimeo','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>
			
		</ul>
	</div>
</div>

<?php }} ?>
