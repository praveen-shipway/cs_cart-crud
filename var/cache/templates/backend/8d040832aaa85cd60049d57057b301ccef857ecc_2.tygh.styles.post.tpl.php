<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:33:59
  from '/var/www/html/cs_cart-crud/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e47ba88b0_11534448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d040832aaa85cd60049d57057b301ccef857ecc' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl',
      1 => 1665485477,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635f5e47ba88b0_11534448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cs_cart-crud/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }
}
}
