<?php /* Smarty version Smarty-3.1.19, created on 2018-07-23 10:43:17
         compiled from "/home/wwwzaon/public_html/modules/payulatam/views/templates/hook/payulatam_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4522523735b55f795818ad0-32040815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78e47a8afbee425de04caa263c0a259cb49da2ce' => 
    array (
      0 => '/home/wwwzaon/public_html/modules/payulatam/views/templates/hook/payulatam_payment.tpl',
      1 => 1491089336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4522523735b55f795818ad0-32040815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b55f795a05082_40615788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b55f795a05082_40615788')) {function content_5b55f795a05082_40615788($_smarty_tpl) {?>
<!--<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
payu.css" rel="stylesheet" type="text/css">-->
<!--<link href="http://www.pawecom.com<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/css/payu.css" rel="stylesheet" type="text/css">-->
<div class="row">
	<div class="col-xs-12 col-md-6">
		<p class="payment_module">
			<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
validation.php" class="link-redirect">
				<?php echo smartyTranslate(array('s'=>'Pagar con PayU','mod'=>'payulatam'),$_smarty_tpl);?>

			</a>
		</p>
	</div>
</div><?php }} ?>
