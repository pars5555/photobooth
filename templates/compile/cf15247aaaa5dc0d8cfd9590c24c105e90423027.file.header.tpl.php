<?php /* Smarty version Smarty-3.1.11, created on 2016-01-20 17:37:11
         compiled from "D:\xampp\htdocs\photobooth\templates\admin\util\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3974569f8d87639246-36743615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf15247aaaa5dc0d8cfd9590c24c105e90423027' => 
    array (
      0 => 'D:\\xampp\\htdocs\\photobooth\\templates\\admin\\util\\header.tpl',
      1 => 1429688898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3974569f8d87639246-36743615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_PATH' => 0,
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_569f8d876477c2_74507965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569f8d876477c2_74507965')) {function content_569f8d876477c2_74507965($_smarty_tpl) {?><a class="main_logo" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
">Admin Panel</a>
<?php if ($_smarty_tpl->tpl_vars['ns']->value['userLevel']===$_smarty_tpl->tpl_vars['ns']->value['userGroupsAdmin']){?>
    <a class="logout button grey" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/admin/do_logout">Logout</a>
<?php }?>
<div class="clear"></div>

<?php }} ?>