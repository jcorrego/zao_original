<?php /* Smarty version Smarty-3.1.19, created on 2018-07-19 19:58:56
         compiled from "/home/wwwzaon/public_html/themes/ap_office/manufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18097965415b5133d0acb320-55783535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '926d56cc12e9dd7f24d1f5b59bbdecf4529e88fa' => 
    array (
      0 => '/home/wwwzaon/public_html/themes/ap_office/manufacturer.tpl',
      1 => 1488990728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18097965415b5133d0acb320-55783535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'manufacturer' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b5133d0cb6c98_07914542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5133d0cb6c98_07914542')) {function content_5b5133d0cb6c98_07914542($_smarty_tpl) {?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)) {?>
	<h1 class="page-heading product-listing">
		<?php echo smartyTranslate(array('s'=>'List of products by manufacturer'),$_smarty_tpl);?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value->name, ENT_QUOTES, 'UTF-8', true);?>

	</h1>
	<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->description)||!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)) {?>
		<div class="description_box rte">
			<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)) {?>
				<div class="short_desc">
					<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->short_description;?>

				</div>
				<div class="hide_desc">
					<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>

				</div>
				<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->description)) {?>
					<a href="#" class="lnk_more" onclick="$(this).prev().slideDown('slow'); $(this).hide();$(this).prev().prev().hide(); return false;">
						<?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>

					</a>
				<?php }?>
			<?php } else { ?>
				<div>
					<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>

				</div>
			<?php }?>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/product-list-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } else { ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No products for this manufacturer.'),$_smarty_tpl);?>
</p>
	<?php }?>
<?php }?>
<?php }} ?>
