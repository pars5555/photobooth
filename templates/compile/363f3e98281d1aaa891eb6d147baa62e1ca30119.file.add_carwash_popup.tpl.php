<?php /* Smarty version Smarty-3.1.11, created on 2016-01-20 17:38:01
         compiled from "D:\xampp\htdocs\photobooth\templates\admin\add_carwash_popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21294569f8db93ff4f9-83523387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '363f3e98281d1aaa891eb6d147baa62e1ca30119' => 
    array (
      0 => 'D:\\xampp\\htdocs\\photobooth\\templates\\admin\\add_carwash_popup.tpl',
      1 => 1453273530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21294569f8db93ff4f9-83523387',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_569f8db94036e8_32288513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569f8db94036e8_32288513')) {function content_569f8db94036e8_32288513($_smarty_tpl) {?><div class="modal hide" id="adminAddCarwashPopupModal">
    <div class="overlay"></div>
    <div class="modal-content f_modal_content active">
        <button class="close_button"></button>
        <div class="modal-body">
            <form autocomplete="off" action="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/admin/do_add_edit_carwash">
                <input type="hidden" id="editing_carwash_id" name="carwash_id"/>

                <div class="form-group">
                    <label class="input_label label inline-block">Carwash Title</label>
                    <input class="text" type="text" name="title"/>
                </div>
                <div class="form-group">
                    <label class="input_label label inline-block" >Login</label>
                    <input class="text" type="text" name="login"/>
                </div>
                <div class="form-group">
                    <label class="input_label label inline-block">Password</label>
                    <input class="text" type="text" name="password"/>
                </div>
                <button type="submit" class="button blue inline-block">Save</button>
            </form>
        </div>
    </div>
</div><?php }} ?>