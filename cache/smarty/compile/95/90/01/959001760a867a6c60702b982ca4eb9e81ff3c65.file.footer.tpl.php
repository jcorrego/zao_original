<?php /* Smarty version Smarty-3.1.19, created on 2018-07-18 09:08:22
         compiled from "/home/wwwzaon/public_html/themes/ap_office/layout/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12635229545b4f49d6591ed7-41176855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '959001760a867a6c60702b982ca4eb9e81ff3c65' => 
    array (
      0 => '/home/wwwzaon/public_html/themes/ap_office/layout/default/footer.tpl',
      1 => 1488990728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12635229545b4f49d6591ed7-41176855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_CONTENTBOTTOM' => 0,
    'page_name' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4f49d664b2e4_81722591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4f49d664b2e4_81722591')) {function content_5b4f49d664b2e4_81722591($_smarty_tpl) {?>		<?php if ($_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))) {?>
			<div id="contentbottom" class="clearfix block">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value;?>

			</div>
		<?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
<!-- Right -->
<section id="right_column" class="column sidebar col-md-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</section>
<?php }?>

<?php }} ?>
