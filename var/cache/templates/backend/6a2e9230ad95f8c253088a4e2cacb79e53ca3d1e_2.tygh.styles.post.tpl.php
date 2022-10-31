<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:33:59
  from '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_panel_configurator/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e47bd5e42_91613306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a2e9230ad95f8c253088a4e2cacb79e53ca3d1e' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_panel_configurator/hooks/index/styles.post.tpl',
      1 => 1665485477,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_panel_configurator/config.tpl' => 1,
  ),
),false)) {
function content_635f5e47bd5e42_91613306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cs_cart-crud/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/vendor_panel_configurator/styles.less"),$_smarty_tpl);?>


<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo smarty_function_style(array('src'=>"addons/vendor_panel_configurator/simple_vendor_panel/index.less"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "styles", null, null);?>
        @mainColor: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mainColor']->value, ENT_QUOTES, 'UTF-8');?>
;
        @menuSidebarColor: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuSidebarColor']->value, ENT_QUOTES, 'UTF-8');?>
;
        @menuSidebarBg: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuSidebarBg']->value, ENT_QUOTES, 'UTF-8');?>
;
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php echo smarty_function_style(array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'styles'),'type'=>"less"),$_smarty_tpl);?>

<?php }
}
}
