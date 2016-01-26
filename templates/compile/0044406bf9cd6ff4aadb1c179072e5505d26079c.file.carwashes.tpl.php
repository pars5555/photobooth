<?php /* Smarty version Smarty-3.1.11, created on 2016-01-20 17:38:01
         compiled from "D:\xampp\htdocs\photobooth\templates\admin\carwashes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12713569f8db937ae52-61077273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0044406bf9cd6ff4aadb1c179072e5505d26079c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\photobooth\\templates\\admin\\carwashes.tpl',
      1 => 1453273530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12713569f8db937ae52-61077273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ns' => 0,
    'carwashDto' => 0,
    'devicesId' => 0,
    'deviceDto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_569f8db93f1eb9_47934114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569f8db93f1eb9_47934114')) {function content_569f8db93f1eb9_47934114($_smarty_tpl) {?><h2 class="main_title">Devices</h2>
<div class="main_content">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/admin/left_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
    <div class="right-content">
        <a class="button grey" id="admin_add_carwash_btn">Add Carwash</a>
        <?php  $_smarty_tpl->tpl_vars['carwashDto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carwashDto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ns']->value['carwashDtos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['carwashDto']->key => $_smarty_tpl->tpl_vars['carwashDto']->value){
$_smarty_tpl->tpl_vars['carwashDto']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>            
            <a class="f_admin_edit_carwash blue" href="javascript:void(0);" carwash_id="<?php echo $_smarty_tpl->tpl_vars['carwashDto']->value->getId();?>
" carwash_title="<?php echo $_smarty_tpl->tpl_vars['carwashDto']->value->getTitle();?>
" carwash_login="<?php echo $_smarty_tpl->tpl_vars['carwashDto']->value->getLogin();?>
" carwash_password="<?php echo $_smarty_tpl->tpl_vars['carwashDto']->value->getPassword();?>
">
            edit
            </a>
                <?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>

                <span >
                    <?php echo $_smarty_tpl->tpl_vars['carwashDto']->value->getTitle();?>

                </span>               
                <span >
                    <?php echo $_smarty_tpl->tpl_vars['carwashDto']->value->getLogin();?>

                </span>
                <span >
                    <?php echo $_smarty_tpl->tpl_vars['carwashDto']->value->getPassword();?>

                </span>
                <span >
                   ( id: <?php echo $_smarty_tpl->tpl_vars['carwashDto']->value->getId();?>
)
                </span>               
            <div style="padding-left: 30px;">
                <?php  $_smarty_tpl->tpl_vars['devicesId'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['devicesId']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ns']->value['carwashDeviceIdsArray'][$_smarty_tpl->tpl_vars['carwashDto']->value->getId()]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['devicesId']->key => $_smarty_tpl->tpl_vars['devicesId']->value){
$_smarty_tpl->tpl_vars['devicesId']->_loop = true;
?>
                    <?php if (isset($_smarty_tpl->tpl_vars['ns']->value['allDevicesMappedById'][$_smarty_tpl->tpl_vars['devicesId']->value])){?>
                        <?php $_smarty_tpl->tpl_vars["deviceDto"] = new Smarty_variable($_smarty_tpl->tpl_vars['ns']->value['allDevicesMappedById'][$_smarty_tpl->tpl_vars['devicesId']->value], null, 0);?>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['deviceDto']->value)){?>
                        <?php echo $_smarty_tpl->tpl_vars['deviceDto']->value->getTitle();?>
 <?php echo $_smarty_tpl->tpl_vars['deviceDto']->value->getSerialNumber();?>

                    <?php }?>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/admin/add_carwash_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>