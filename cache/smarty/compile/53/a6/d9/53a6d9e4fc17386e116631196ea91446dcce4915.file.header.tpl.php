<?php /* Smarty version Smarty-3.1.19, created on 2018-07-19 02:07:44
         compiled from "/home/wwwzaon/public_html/modules/ph_simpleblog/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20588278055b5038c0455273-67235624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53a6d9e4fc17386e116631196ea91446dcce4915' => 
    array (
      0 => '/home/wwwzaon/public_html/modules/ph_simpleblog/views/templates/hook/header.tpl',
      1 => 1494006461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20588278055b5038c0455273-67235624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post_title' => 0,
    'post_description' => 0,
    'post_image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b5038c060fbb2_78011415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5038c060fbb2_78011415')) {function content_5b5038c060fbb2_78011415($_smarty_tpl) {?>
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:type" content="article" />
<meta property="og:site_name" content="<?php echo htmlspecialchars(Configuration::get('PS_SHOP_NAME'), ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['post_image']->value)&&!empty($_smarty_tpl->tpl_vars['post_image']->value)) {?>
<meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_image']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<meta property="fb:admins" content="<?php echo intval(Configuration::get('PH_BLOG_FACEBOOK_MODERATOR'));?>
"/>
<meta property="fb:app_id" content="<?php echo intval(Configuration::get('PH_BLOG_FACEBOOK_APP_ID'));?>
"/><?php }} ?>
