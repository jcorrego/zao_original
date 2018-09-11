<?php /* Smarty version Smarty-3.1.19, created on 2018-08-28 15:12:32
         compiled from "/home/wwwzaon/public_html/modules/payulatam/views/templates/front/response.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8326542025b85acb052ed76-51388376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff2dc2bbfa194ad127ba937b7d4045d346c05300' => 
    array (
      0 => '/home/wwwzaon/public_html/modules/payulatam/views/templates/front/response.tpl',
      1 => 1490649464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8326542025b85acb052ed76-51388376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css_dir' => 0,
    'css' => 0,
    'module_dir' => 0,
    'valid' => 0,
    'estadoTx' => 0,
    'transactionId' => 0,
    'reference_pol' => 0,
    'referenceCode' => 0,
    'pseBank' => 0,
    'cus' => 0,
    'value' => 0,
    'currency' => 0,
    'description' => 0,
    'lapPaymentMethod' => 0,
    'messageApproved' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b85acb077f498_80758262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b85acb077f498_80758262')) {function content_5b85acb077f498_80758262($_smarty_tpl) {?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
global.css" type="text/css" media="all">
<!--<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
payu.css" rel="stylesheet" type="text/css">-->
<link href="http://www.pawecom.com<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/css/payu.css" rel="stylesheet" type="text/css">

<?php if ($_smarty_tpl->tpl_vars['valid']->value) {?>
	<center>
		<table class="table-response table table-striped table-bordered table-hover">
			<tr align="center">
				<th colspan="2"><h1 class="md-h1"><?php echo smartyTranslate(array('s'=>'Detalles de la compra','mod'=>'payulatam'),$_smarty_tpl);?>
</h1></th>
			</tr>
			<tr align="left">
				<td><?php echo smartyTranslate(array('s'=>'Estado transacción','mod'=>'payulatam'),$_smarty_tpl);?>
</td>
				<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['estadoTx']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			</tr>
			<tr align="left">
				<td><?php echo smartyTranslate(array('s'=>'ID transacción','mod'=>'payulatam'),$_smarty_tpl);?>
</td>
				<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['transactionId']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			</tr>		
			<tr align="left">
				<td><?php echo smartyTranslate(array('s'=>'Referencia de compra','mod'=>'payulatam'),$_smarty_tpl);?>
</td>
				<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['reference_pol']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			</tr>		
			<tr align="left">
				<td><?php echo smartyTranslate(array('s'=>'Referencia del pedido','mod'=>'payulatam'),$_smarty_tpl);?>
</td>
				<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['referenceCode']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			</tr>	
			<?php if ($_smarty_tpl->tpl_vars['pseBank']->value!=null) {?>
				<tr align="left">
					<td>CUS</td>
					<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cus']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
				</tr>
				<tr align="left">
					<td><?php echo smartyTranslate(array('s'=>'Banco','mod'=>'payulatam'),$_smarty_tpl);?>
</td>
					<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pseBank']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
				</tr>
			<?php }?>
			<tr align="left">
				<td><?php echo smartyTranslate(array('s'=>'Valor total','mod'=>'payulatam'),$_smarty_tpl);?>
</td>
				<td>$<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			</tr>
			<tr align="left">
				<td><?php echo smartyTranslate(array('s'=>'Moneda','mod'=>'payulatam'),$_smarty_tpl);?>
</td>
				<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			</tr>
			<tr align="left">
				<td><?php echo smartyTranslate(array('s'=>'Descripción del pedido','mod'=>'payulatam'),$_smarty_tpl);?>
</td>
				<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			</tr>
			<tr align="left">
				<td><?php echo smartyTranslate(array('s'=>'Entidad','mod'=>'payulatam'),$_smarty_tpl);?>
</td>
				<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lapPaymentMethod']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			</tr>
		</table>
		<p/>
		<h1><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['messageApproved']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1>
	</center>
<?php } else { ?>
	<h1><center><?php echo smartyTranslate(array('s'=>'¡La solicitud es incorrecta! Hay un error en la firma digital.','mod'=>'payulatam'),$_smarty_tpl);?>
</center></h1>
<?php }?><?php }} ?>
