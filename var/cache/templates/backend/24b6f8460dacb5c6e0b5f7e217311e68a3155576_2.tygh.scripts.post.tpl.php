<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:34:00
  from '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_communication/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e48d41ff8_43396923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24b6f8460dacb5c6e0b5f7e217311e68a3155576' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_communication/hooks/index/scripts.post.tpl',
      1 => 1665485477,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635f5e48d41ff8_43396923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cs_cart-crud/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/vendor_communication/backend/vendor_communication.js"),$_smarty_tpl);
}
}
