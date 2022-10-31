<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:33:53
  from '/var/www/html/cs_cart-crud/design/backend/templates/addons/call_requests/settings/info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e4143ce86_80034583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf43d156fb45834c276418711ee63beac962fb29' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/addons/call_requests/settings/info.tpl',
      1 => 1665485477,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635f5e4143ce86_80034583 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.phone_from_settings'));
?>
<div class="control-group setting-wide call_requests">

    <label for="addon_option_call_requests_phone" class="control-label "><?php echo $_smarty_tpl->__("call_requests.phone_from_settings");?>
:</label>

    <div class="controls">
        <p><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></p>
    </div>

</div><?php }
}
