<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:34:00
  from '/var/www/html/cs_cart-crud/design/backend/templates/addons/product_reviews/hooks/index/actions.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e4882e096_22343466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce696aea7aa64d24ae73f57075b6d68bbda8da86' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/addons/product_reviews/hooks/index/actions.pre.tpl',
      1 => 1665485477,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635f5e4882e096_22343466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cs_cart-crud/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
?>

<?php if (fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['runtime']->value['controller'] === 'reviews' && ($_smarty_tpl->tpl_vars['runtime']->value['mode'] === 'manage' && $_smarty_tpl->tpl_vars['addons']->value['product_reviews']['split_reviews_by_storefronts'] !== smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['runtime']->value['mode'] === 'update')) {?>
    <?php $_smarty_tpl->_assignInScope('select_storefront', false ,false ,2);
}
}
}
