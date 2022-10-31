<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:34:03
  from '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_plans/hooks/index/order_by_statuses.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e4b3adf68_52695991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e11e7628c070c9974b1cfc7d44d39bf8373d5afc' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_plans/hooks/index/order_by_statuses.post.tpl',
      1 => 1665485477,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_635f5e4b3adf68_52695991 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.current_plan_usage','vendor_plans.plan_name','vendor_plans.unlimited'));
if ($_smarty_tpl->tpl_vars['plan_usage']->value) {?>
    <div class="dashboard-table dashboard-table-plan-usage">
        <h4><?php echo $_smarty_tpl->__("vendor_plans.current_plan_usage");?>
</h4>
        <div class="table-responsive-wrapper">
            <table class="table table--relative table-responsive table-responsive-w-titles" width="100%">
                <tr>
                    <td data-th="&nbsp;">
                        <?php echo $_smarty_tpl->__("vendor_plans.plan_name");?>
:
                    </td>
                    <td data-th="&nbsp;">
                        <a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])."&selected_section=plan"), ENT_QUOTES, 'UTF-8');?>
">
                            <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan_data']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</strong>
                        </a>
                    </td>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plan_usage']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <tr>
                    <td width="30%" data-th="&nbsp;">
                        <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong><br />
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['is_price']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['item']->value['current']), 0, true);
?>/<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['current'], ENT_QUOTES, 'UTF-8');?>
&nbsp;/&nbsp;<?php }
if (!$_smarty_tpl->tpl_vars['item']->value['limit']) {
echo $_smarty_tpl->__("vendor_plans.unlimited");
} elseif ($_smarty_tpl->tpl_vars['item']->value['is_price']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['item']->value['limit']), 0, true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['limit'], ENT_QUOTES, 'UTF-8');
}?>
                    </td>
                    <td width="70%" valign="middle" data-th="&nbsp;">
                        <div class="progress <?php if ($_smarty_tpl->tpl_vars['item']->value['current'] == $_smarty_tpl->tpl_vars['item']->value['limit']) {?>progress-info<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['current'] > $_smarty_tpl->tpl_vars['item']->value['limit']) {?>progress-danger<?php }?>">
                            <div class="bar" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['percentage'], ENT_QUOTES, 'UTF-8');?>
%;"></div>
                        </div>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    </div>
<?php }
}
}
