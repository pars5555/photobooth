<?php /* Smarty version Smarty-3.1.11, created on 2016-01-20 17:35:08
         compiled from "D:\xampp\htdocs\photobooth\templates\main\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24880569f8d0ca9dff9-77259837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e991133c9e3b3b16e108bdc258f6e3073682e6ec' => 
    array (
      0 => 'D:\\xampp\\htdocs\\photobooth\\templates\\main\\login.tpl',
      1 => 1429688898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24880569f8d0ca9dff9-77259837',
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
  'unifunc' => 'content_569f8d0cae7cd3_68386171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569f8d0cae7cd3_68386171')) {function content_569f8d0cae7cd3_68386171($_smarty_tpl) {?><form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/carwash/do_login">
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