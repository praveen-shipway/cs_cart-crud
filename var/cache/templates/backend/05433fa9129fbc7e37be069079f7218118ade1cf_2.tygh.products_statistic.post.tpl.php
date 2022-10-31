<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:34:03
  from '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_data_premoderation/hooks/index/products_statistic.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e4b3153b5_29831048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05433fa9129fbc7e37be069079f7218118ade1cf' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_data_premoderation/hooks/index/products_statistic.post.tpl',
      1 => 1665485477,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635f5e4b3153b5_29831048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cs_cart-crud/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.require_approval','vendor_data_premoderation.disapproved'));
if ((isset($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['require_approval_count']))) {?>
<div class="dashboard-card">
    <div class="dashboard-card-title">
        <?php echo $_smarty_tpl->__("vendor_data_premoderation.require_approval");?>

    </div>
    <div class="dashboard-card-content">
        <h3>
            <a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars(fn_url("products.manage?status=".$_prefixVariable2), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['require_approval_count']), ENT_QUOTES, 'UTF-8');?>

            </a>
        </h3>
    </div>
</div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['disapproved_count']))) {?>
<div class="dashboard-card">
    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("vendor_data_premoderation.disapproved");?>
</div>
    <div class="dashboard-card-content">
        <h3>
            <a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
echo htmlspecialchars(fn_url("products.manage?status=".$_prefixVariable3), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['disapproved_count']), ENT_QUOTES, 'UTF-8');?>

            </a>
        </h3>
    </div>
</div>
<?php }
}
}
