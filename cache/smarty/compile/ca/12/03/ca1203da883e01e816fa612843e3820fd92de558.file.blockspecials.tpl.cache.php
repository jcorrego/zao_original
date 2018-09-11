<?php /* Smarty version Smarty-3.1.19, created on 2018-07-18 09:30:38
         compiled from "/home/wwwzaon/public_html/themes/ap_office/modules/blockspecials/blockspecials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19762444465b4f4f0e05f8e4-07777458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca1203da883e01e816fa612843e3820fd92de558' => 
    array (
      0 => '/home/wwwzaon/public_html/themes/ap_office/modules/blockspecials/blockspecials.tpl',
      1 => 1490210217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19762444465b4f4f0e05f8e4-07777458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4f4f0e12e9c8_41596735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4f4f0e12e9c8_41596735')) {function content_5b4f4f0e12e9c8_41596735($_smarty_tpl) {?>

<!-- MODULE Block specials -->
<div id="special_block_right" class="block block-danger nopadding">
	<h4 class="title_block">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>
">
            <?php echo smartyTranslate(array('s'=>'Sales','mod'=>'blockspecials'),$_smarty_tpl);?>

        </a>
    </h4>
	<div class="block_content products-block">
    <?php if ($_smarty_tpl->tpl_vars['special']->value) {?>
        <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['special']->value), null, 0);?> 
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'mod'=>'blockspecials'), 0);?>
  
		<div class="lnk">
			<a 
            class="btn btn-outline button btn-sm" 
            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" 
            title="<?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
">
                <span><?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
</span>
            </a>
		</div>
    <?php } else { ?>
		<div><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</div>
    <?php }?>
	</div>
</div>
<!-- /MODULE Block specials --><?php }} ?>
