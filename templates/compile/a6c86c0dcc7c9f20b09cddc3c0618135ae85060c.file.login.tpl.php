<?php /* Smarty version Smarty-3.1.11, created on 2016-01-20 17:37:11
         compiled from "D:\xampp\htdocs\photobooth\templates\admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8263569f8d8764f881-26126615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6c86c0dcc7c9f20b09cddc3c0618135ae85060c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\photobooth\\templates\\admin\\login.tpl',
      1 => 1429688898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8263569f8d8764f881-26126615',
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
  'unifunc' => 'content_569f8d87658767_16312268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569f8d87658767_16312268')) {function content_569f8d87658767_16312268($_smarty_tpl) {?><form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/admin/do_login">
    <div class="login-wrapper">
        <div class="form-group">
            <label class="input_label">Username:</label>
            <input class="text"  type="text" name="login"/>
        </div>
        <div class="form-group">
            <label class="input_label">Password:</label>
            <input class="text" type="password" name="password"/>  
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['ns']->value['error_message'])){?>
            <div class="error" >
                <?php echo $_smarty_tpl->tpl_vars['ns']->value['error_message'];?>

            </div>
        <?php }?>  
        <div class="login_btn">
            <input class="button grey" type="submit" value="Login" />    
        </div>
    </div>
</form><?php }} ?>