<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:33:59
  from '/var/www/html/cs_cart-crud/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e47bba188_78642803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '935992ede60f8644af9aa7c1ed3d538f42ec601b' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl',
      1 => 1665485477,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635f5e47bba188_78642803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cs_cart-crud/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value && $_smarty_tpl->tpl_vars['shipping']->value['company_id'] == 0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }
}
}
