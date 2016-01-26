<?php /* Smarty version Smarty-3.1.11, created on 2016-01-20 17:35:07
         compiled from "D:\xampp\htdocs\photobooth\templates\main\set_device_prices_popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4538569f8d0b75c4d7-19799345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '425bd5182b5d21e6811a337737d4c86196dc95a7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\photobooth\\templates\\main\\set_device_prices_popup.tpl',
      1 => 1453273530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4538569f8d0b75c4d7-19799345',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_569f8d0b75ded4_70940107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569f8d0b75ded4_70940107')) {function content_569f8d0b75ded4_70940107($_smarty_tpl) {?><div class="modal hide" id="devicePricesModal" tabindex="-1">
    <div class="overlay"></div>
    <input type="hidden" id="set_price_device_id"/>
    <div class="modal-content f_modal_content">
        <button class="close_button"></button>
        <div class="modal-body">
            <div class="form-group">
                <div class="f_passcode">
                    <label class="input_label label" for="amd100_charge_seconds">100 AMD seconds</label>
                    <input type="text" id="amd100_charge_seconds"/>
                    <label class="input_label label" for="amd200_charge_seconds">200 AMD seconds</label>
                    <input type="text" id="amd200_charge_seconds"/>
                    <label class="input_label label" for="amd500_charge_seconds">500 AMD seconds</label>
                    <input type="text" id="amd500_charge_seconds"/>
                </div>
                <button class="save_pass button blue" id="savePricesBtn">
                    Save
                </button>

            </div>
        </div>
    </div>
</div><?php }} ?>