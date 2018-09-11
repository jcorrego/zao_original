<?php /* Smarty version Smarty-3.1.19, created on 2018-07-18 09:08:16
         compiled from "/home/wwwzaon/public_html/themes/ap_office/modules/leomanagewidgets/views/widgets/displayfooter/widget_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20514991075b4f49d0cb23c8-65107785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '028546066492928402adb1ddf891afc2523d2a96' => 
    array (
      0 => '/home/wwwzaon/public_html/themes/ap_office/modules/leomanagewidgets/views/widgets/displayfooter/widget_links.tpl',
      1 => 1488991108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20514991075b4f49d0cb23c8-65107785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
    'widget_heading' => 0,
    'id' => 0,
    'ac' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4f49d0d62e89_57342845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4f49d0d62e89_57342845')) {function content_5b4f49d0d62e89_57342845($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['links']->value)) {?>
<div class="widget-links block block nopadding footer-block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content toggle-footer">	
		<div id="tabs<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel-group">
			<ul class="nav-links" >
			  <?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value) {
$_smarty_tpl->tpl_vars['ac']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['ac']->key;
?>  
			  <li ><a href="<?php echo $_smarty_tpl->tpl_vars['ac']->value['link'];?>
" ><?php echo $_smarty_tpl->tpl_vars['ac']->value['text'];?>
</a></li>
			  <?php } ?>
			</ul>


	</div></div>
</div>
<?php }?>


<?php }} ?>
