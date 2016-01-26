<?php /* Smarty version Smarty-3.1.11, created on 2016-01-20 17:37:13
         compiled from "D:\xampp\htdocs\photobooth\templates\admin\left_panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7698569f8d89557a23-94326412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa5a832b53c490e155515433218f0965d61a36c0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\photobooth\\templates\\admin\\left_panel.tpl',
      1 => 1453273530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7698569f8d89557a23-94326412',
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
  'unifunc' => 'content_569f8d89564698_09219361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569f8d89564698_09219361')) {function content_569f8d89564698_09219361($_smarty_tpl) {?><div id="mainLeftPanel"  class="left-panel">
    <div class="left-panel_content">    
        <h1 class="any_categories"><span class="glyphicon"></span> Menu</h1>            
        <ul>
            <li>
                <a class="<?php if ($_smarty_tpl->tpl_vars['ns']->value['page_name']=='devices'){?>selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/admin">All Devices</a>
            </li>
            <li>
                <a class="<?php if ($_smarty_tpl->tpl_vars['ns']->value['page_name']=='carwashes'){?>selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/admin/carwashes">Carwashes</a>
            </li>
        </ul>
    </div>
</div><?php }} ?>