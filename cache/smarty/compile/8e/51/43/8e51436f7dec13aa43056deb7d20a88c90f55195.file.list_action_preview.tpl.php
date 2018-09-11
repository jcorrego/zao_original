<?php /* Smarty version Smarty-3.1.19, created on 2018-07-18 09:31:09
         compiled from "/home/wwwzaon/public_html/admincmswebpage/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17276929865b4f4f2d4ef863-59539897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e51436f7dec13aa43056deb7d20a88c90f55195' => 
    array (
      0 => '/home/wwwzaon/public_html/admincmswebpage/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1460131476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17276929865b4f4f2d4ef863-59539897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4f4f2d51b189_28754598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4f4f2d51b189_28754598')) {function content_5b4f4f2d51b189_28754598($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
