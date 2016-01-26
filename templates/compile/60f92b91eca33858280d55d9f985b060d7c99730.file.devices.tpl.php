<?php /* Smarty version Smarty-3.1.11, created on 2016-01-20 17:37:13
         compiled from "D:\xampp\htdocs\photobooth\templates\admin\devices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2461569f8d894f2058-23521738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60f92b91eca33858280d55d9f985b060d7c99730' => 
    array (
      0 => 'D:\\xampp\\htdocs\\photobooth\\templates\\admin\\devices.tpl',
      1 => 1453273530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2461569f8d894f2058-23521738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ns' => 0,
    'device' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_569f8d8954c5e2_89213577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569f8d8954c5e2_89213577')) {function content_569f8d8954c5e2_89213577($_smarty_tpl) {?><h2 class="main_title">Devices</h2>
<div class="main_content">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/admin/left_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
    <div class="right-content">
        <?php  $_smarty_tpl->tpl_vars['device'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['device']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ns']->value['devices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['device']->key => $_smarty_tpl->tpl_vars['device']->value){
$_smarty_tpl->tpl_vars['device']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>            
            <div>
                <?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>

                <span id="device_title_<?php echo $_smarty_tpl->tpl_vars['device']->value->getId();?>
">
                    <?php echo $_smarty_tpl->tpl_vars['device']->value->getTitle();?>

                </span>
                <span id="device_status_<?php echo $_smarty_tpl->tpl_vars['device']->value->getId();?>
">
                    <?php echo $_smarty_tpl->tpl_vars['device']->value->getStatus();?>

                </span>
                (<span id="device_total_amd_<?php echo $_smarty_tpl->tpl_vars['device']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['device']->value->getTotalAmd();?>
</span>դր)
                <div id="device_action_buttons_<?php echo $_smarty_tpl->tpl_vars['device']->value->getId();?>
" style="<?php if ($_smarty_tpl->tpl_vars['device']->value->getStatus()=='off'){?>display:none<?php }?>">
                    <a href="javascript:void(0);" class="button grey inline-block f_device_actions" device_id="<?php echo $_smarty_tpl->tpl_vars['device']->value->getId();?>
">Actions</a>
                    <a href="javascript:void(0);" class="button grey inline-block f_device_update_buttons" device_id="<?php echo $_smarty_tpl->tpl_vars['device']->value->getId();?>
">Update</a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div id="admin_device_actions_container"></div>
<div id="admin_device_update_container"></div>
<?php }} ?>