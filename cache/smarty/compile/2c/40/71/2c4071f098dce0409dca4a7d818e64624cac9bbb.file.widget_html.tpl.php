<?php /* Smarty version Smarty-3.1.19, created on 2018-07-18 09:08:13
         compiled from "/home/wwwzaon/public_html/modules/leomanagewidgets/views/widgets/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4627296765b4f49cdcd03d5-06136552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c4071f098dce0409dca4a7d818e64624cac9bbb' => 
    array (
      0 => '/home/wwwzaon/public_html/modules/leomanagewidgets/views/widgets/widget_html.tpl',
      1 => 1488991103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4627296765b4f49cdcd03d5-06136552',
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
  'unifunc' => 'content_5b4f49cdd48c56_33444383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4f49cdd48c56_33444383')) {function content_5b4f49cdd48c56_33444383($_smarty_tpl) {?>
 
 <?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
