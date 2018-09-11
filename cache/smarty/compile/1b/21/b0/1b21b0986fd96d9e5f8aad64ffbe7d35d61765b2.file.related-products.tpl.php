<?php /* Smarty version Smarty-3.1.19, created on 2018-07-19 02:13:44
         compiled from "/home/wwwzaon/public_html/modules/ph_simpleblog/views/templates/front/related-products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18741219585b503a2879f678-21438258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b21b0986fd96d9e5f8aad64ffbe7d35d61765b2' => 
    array (
      0 => '/home/wwwzaon/public_html/modules/ph_simpleblog/views/templates/front/related-products.tpl',
      1 => 1494193420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18741219585b503a2879f678-21438258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'related_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b503a28855739_96165599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b503a28855739_96165599')) {function content_5b503a28855739_96165599($_smarty_tpl) {?><div class="post-block simpleblog-related-products">
	<h3 class="block-title"><?php echo smartyTranslate(array('s'=>'Productos relacionados','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</h3>

	<div class="simpleblog-related-products-wrapper">
		<?php if (Configuration::get('PH_BLOG_RELATED_PRODUCTS_USE_DEFAULT_LIST')) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['related_products']->value,'is_blog'=>true), 0);?>

		<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['related_products']->value,'is_blog'=>true), 0);?>

		<?php }?>
	</div><!-- .simpleblog-related-products-wrapper -->
</div><!-- .simpleblog-related-products --><?php }} ?>
