<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:34:00
  from '/var/www/html/cs_cart-crud/design/backend/templates/views/companies/components/picker/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e48bcd1f7_03183130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd10f551509768face89a2d9ab1a03160b2003e5c' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/views/companies/components/picker/item.tpl',
      1 => 1665485476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635f5e48bcd1f7_03183130 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="object-picker__companies-main">
    <div class="object-picker__companies-name">
        <div class="object-picker__companies-name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 <span>${data.name}</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }
}
