<?php /* Smarty version Smarty-3.1.19, created on 2018-07-18 09:34:21
         compiled from "/home/wwwzaon/public_html/themes/ap_office/modules/productcomments//tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2444587515b4f4fed524273-00436112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d4eb9216c0c2add841accae9223a0d5a7537d00' => 
    array (
      0 => '/home/wwwzaon/public_html/themes/ap_office/modules/productcomments//tab.tpl',
      1 => 1490542628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2444587515b4f4fed524273-00436112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USE_PTABS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b4f4fed5b8283_52443380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4f4fed5b8283_52443380')) {function content_5b4f4fed5b8283_52443380($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value) {?>
    <li><a id="link_idTab5" href="#idTab5" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Comentarios','mod'=>'productcomments'),$_smarty_tpl);?>
</a></li>
<?php } else { ?>
    <h3 id="#idTab5" class="idTabHrefShort page-subheading"><?php echo smartyTranslate(array('s'=>'Comentarios','mod'=>'productcomments'),$_smarty_tpl);?>
</h3>
<?php }?><?php }} ?>
