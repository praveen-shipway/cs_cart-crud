<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:34:00
  from '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/profile_menu_extra_item.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e48bdbd04_28468351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '997acd4317d987dbcb3b8ce7f2cac92069a470ed' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/profile_menu_extra_item.pre.tpl',
      1 => 1665485477,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635f5e48bdbd04_28468351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cs_cart-crud/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_panel_configurator.seller_info'));
if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php if (fn_check_view_permissions("companies.update","GET")) {?>  
        <li><a href="<?php echo htmlspecialchars(fn_url("companies.update&company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_panel_configurator.seller_info");?>
</a></li>
    <?php }
}
}
}
