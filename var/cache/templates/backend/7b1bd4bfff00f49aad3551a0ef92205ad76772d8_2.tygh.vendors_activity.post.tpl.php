<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:34:03
  from '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_debt_payout/hooks/index/vendors_activity.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e4b33c1d2_56188968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b1bd4bfff00f49aad3551a0ef92205ad76772d8' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_debt_payout/hooks/index/vendors_activity.post.tpl',
      1 => 1665485477,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635f5e4b33c1d2_56188968 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.dashboard_suspended_vendors'));
?>
<tr>
    <td class="dashboard-vendors-activity__label">
        <?php $_smarty_tpl->_assignInScope('url', "companies.manage?time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&get_suspended=Y");?>
        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("vendor_debt_payout.dashboard_suspended_vendors");?>

        </a>
    </td>
    <td class="dashboard-vendors-activity__value">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value['suspended_vendors'], ENT_QUOTES, 'UTF-8');?>

    </td>
</tr>
<?php }
}
