<?php /* Smarty version Smarty-3.1.19, created on 2018-07-19 00:08:04
         compiled from "/home/wwwzaon/public_html/themes/ap_office/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12018699995b501cb46b4e57-19842544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6539b84f8cc426dda7569f3adbb48a1886335bbf' => 
    array (
      0 => '/home/wwwzaon/public_html/themes/ap_office/modules/blocksearch/blocksearch-top.tpl',
      1 => 1489095658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12018699995b501cb46b4e57-19842544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b501cb49d0636_96946960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b501cb49d0636_96946960')) {function content_5b501cb49d0636_96946960($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top" class="col-lg-6">
	<div class="icono-buscador-top" data-accion="abrir"></div>
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" class="form-buscador-top">
		<div class="input-group">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
			<span class="input-group-btn">
				<button type="submit" name="submit_search" class="btn btn-outline-inverse">
				<span class="button-search fa fa-search"><span class="unvisible"><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span></span>
			</button></span>
		</div>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
