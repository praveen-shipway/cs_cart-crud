<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:34:03
  from '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_debt_payout/hooks/index/alert_block.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e4b2cc284_75087960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c01d5903d9506a2bc739957e1d3b144f8aee53b' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_debt_payout/hooks/index/alert_block.override.tpl',
      1 => 1665485477,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635f5e4b2cc284_75087960 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dashboard_alert']->value) {?>
    <div class="alert alert-block <?php if ($_smarty_tpl->tpl_vars['is_block_alert']->value) {?>alert-error debt-notification<?php }?>">
        <div class="debt-notification__text">
            <?php echo $_smarty_tpl->tpl_vars['dashboard_alert']->value;?>

        </div>
    </div>
<?php }
}
}
