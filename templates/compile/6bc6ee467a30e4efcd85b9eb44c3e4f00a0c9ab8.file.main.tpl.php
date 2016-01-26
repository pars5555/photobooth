<?php /* Smarty version Smarty-3.1.11, created on 2016-01-20 17:35:07
         compiled from "D:\xampp\htdocs\photobooth\templates\main\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7465569f8d0b6afe57-69529364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bc6ee467a30e4efcd85b9eb44c3e4f00a0c9ab8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\photobooth\\templates\\main\\main.tpl',
      1 => 1453273530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7465569f8d0b6afe57-69529364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_569f8d0b6f3bd4_62020090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569f8d0b6f3bd4_62020090')) {function content_569f8d0b6f3bd4_62020090($_smarty_tpl) {?><?php if (!is_callable('smarty_function_nest')) include 'D:/xampp/htdocs/photobooth/classes/lib/smarty/plugins\\function.nest.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/main/util/headerControls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </head>
    <body>
        <header>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/main/util/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
        </header>
        <div class="wrapper">
            <input type="hidden" id="initialLoad" name="initialLoad" value="main" />		
            <input type="hidden" id="contentLoad" value="<?php echo $_smarty_tpl->tpl_vars['ns']->value['contentLoad'];?>
" />
            <div id="main_content">
                <?php echo smarty_function_nest(array('ns'=>'content'),$_smarty_tpl);?>

            </div>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/main/set_device_passcode_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/main/set_device_prices_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        <footer>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/main/util/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
        </footer>
    </body>
</html><?php }} ?>