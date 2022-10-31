<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:34:51
  from '/var/www/html/cs_cart-crud/design/backend/templates/views/settings_wizard/components/default_currency.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e7bb64f35_64097861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '108ef72fb0effb86120061f5f7bf88b397e3432a' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/views/settings_wizard/components/default_currency.tpl',
      1 => 1665485476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635f5e7bb64f35_64097861 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('primary_currency'));
?>
<div class="control-group setting-wide">
    <label for="" class="control-label"><?php echo $_smarty_tpl->__("primary_currency");?>
:</label>
    <div class="controls">
        <select name="default_currency">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['currency_code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((defined('CART_PRIMARY_CURRENCY') ? constant('CART_PRIMARY_CURRENCY') : null) == $_smarty_tpl->tpl_vars['currency']->value['currency_code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
</div><?php }
}
