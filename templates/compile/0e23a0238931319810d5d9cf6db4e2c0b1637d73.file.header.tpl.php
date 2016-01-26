<?php /* Smarty version Smarty-3.1.11, created on 2016-01-20 17:35:07
         compiled from "D:\xampp\htdocs\photobooth\templates\main\util\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13903569f8d0b72fb91-19092271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e23a0238931319810d5d9cf6db4e2c0b1637d73' => 
    array (
      0 => 'D:\\xampp\\htdocs\\photobooth\\templates\\main\\util\\header.tpl',
      1 => 1429688898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13903569f8d0b72fb91-19092271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ns' => 0,
    'SITE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_569f8d0b73f7d1_73165346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569f8d0b73f7d1_73165346')) {function content_569f8d0b73f7d1_73165346($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['ns']->value['userLevel']===$_smarty_tpl->tpl_vars['ns']->value['userGroupsCarwash']){?>
    <a class="main_logo" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
">Carwash Panel</a>
    <a class="logout button grey" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/carwash/do_logout">Logout</a>
<?php }else{ ?>
    <a class="main_logo" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
">My Carwash</a>
<?php }?>
<div class="clear"></div>

<?php }} ?>