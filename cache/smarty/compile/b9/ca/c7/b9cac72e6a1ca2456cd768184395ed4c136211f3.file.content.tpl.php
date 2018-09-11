<?php /* Smarty version Smarty-3.1.19, created on 2018-07-18 09:04:55
         compiled from "/home/wwwzaon/public_html/admincmswebpage/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15747009275b4f49071957f3-23528610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9cac72e6a1ca2456cd768184395ed4c136211f3' => 
    array (
      0 => '/home/wwwzaon/public_html/admincmswebpage/themes/default/template/content.tpl',
      1 => 1460131476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15747009275b4f49071957f3-23528610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4f49071b6f30_98646608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4f49071b6f30_98646608')) {function content_5b4f49071b6f30_98646608($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
