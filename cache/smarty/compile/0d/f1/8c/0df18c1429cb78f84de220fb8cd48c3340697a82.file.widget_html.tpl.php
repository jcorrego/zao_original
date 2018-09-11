<?php /* Smarty version Smarty-3.1.19, created on 2018-07-18 09:08:16
         compiled from "/home/wwwzaon/public_html/themes/ap_office/modules/leomanagewidgets/views/widgets/displayfooter/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21342772185b4f49d0d88ee3-54476141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0df18c1429cb78f84de220fb8cd48c3340697a82' => 
    array (
      0 => '/home/wwwzaon/public_html/themes/ap_office/modules/leomanagewidgets/views/widgets/displayfooter/widget_html.tpl',
      1 => 1488991107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21342772185b4f49d0d88ee3-54476141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4f49d0e05951_66510379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4f49d0e05951_66510379')) {function content_5b4f49d0e05951_66510379($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block footer-block block nopadding">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content toggle-footer">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
