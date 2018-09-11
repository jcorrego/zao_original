<?php /* Smarty version Smarty-3.1.19, created on 2018-07-18 09:08:22
         compiled from "/home/wwwzaon/public_html/modules/leomanagewidgets/views/widgets/widget_customercarousel_owl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17952814675b4f49d666a557-06435514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b54598bb4a1f6de5ca89ad1a6202e85ca7691742' => 
    array (
      0 => '/home/wwwzaon/public_html/modules/leomanagewidgets/views/widgets/widget_customercarousel_owl.tpl',
      1 => 1488991101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17952814675b4f49d666a557-06435514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'widget_heading' => 0,
    'random_number' => 0,
    'customercarousel' => 0,
    'startSlide' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4f49d679ec27_30876001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4f49d679ec27_30876001')) {function content_5b4f49d679ec27_30876001($_smarty_tpl) {?>
 
 <div id="custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="block">
    <?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
    <h4 class="title_block">
        <?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

    </h4>
    <?php }?>
	<div class="block_content">
		<div class="carousel slide">
			<div id="custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['random_number']->value;?>
">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customercarousel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mypLoop"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mypLoop"]['index']++;
?>
				<div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['index']==$_smarty_tpl->tpl_vars['startSlide']->value) {?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
			<?php } ?>   
			</div>
		</div>
	</div>
</div>
    
<?php $_smarty_tpl->tpl_vars["call_owl_carousel"] = new Smarty_variable("#custhtmlcarosel".((string)$_smarty_tpl->tpl_vars['random_number']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('./owl_carousel_config.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
