<?php /* Smarty version Smarty-3.1.19, created on 2018-07-19 19:13:02
         compiled from "/home/wwwzaon/public_html/modules/leomanagewidgets/views/widgets/widget_accordion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12260027815b51290e51b7a8-66057885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bee311153462801e7ae805d74fc9b0d758c1516c' => 
    array (
      0 => '/home/wwwzaon/public_html/modules/leomanagewidgets/views/widgets/widget_accordion.tpl',
      1 => 1490568067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12260027815b51290e51b7a8-66057885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accordions' => 0,
    'widget_heading' => 0,
    'id' => 0,
    'key' => 0,
    'ac' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b51290e7e4877_89122847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51290e7e4877_89122847')) {function content_5b51290e7e4877_89122847($_smarty_tpl) {?> 
 
 <?php if (isset($_smarty_tpl->tpl_vars['accordions']->value)) {?>
<div class="widget-accordion block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">	<div id="accordion<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel-group">
	 	<?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['accordions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value) {
$_smarty_tpl->tpl_vars['ac']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['ac']->key;
?>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h4 class="panel-title">
				      <a href="#collapseAc<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-parent="#accordion<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-toggle="collapse" class="accordion-toggle collapsed">
				       	<?php echo $_smarty_tpl->tpl_vars['ac']->value['header'];?>
  
				      </a>
				    </h4>
				  </div>
				  <div class="panel-collapse collapse <?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?> in <?php } else { ?> out<?php }?>" id="collapseAc<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"  >
				    <div class="panel-body">
				      <?php echo $_smarty_tpl->tpl_vars['ac']->value['content'];?>

				    </div>
				  </div>
				</div>
			
	 	<?php } ?>
	</div>	</div>
</div>
<?php }?>


<?php }} ?>
