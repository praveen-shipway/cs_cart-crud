<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:34:00
  from '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_data_premoderation/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e48d55305_67493245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9fa3f00c72f8a6708a7d6f50c99bd57b3486c80' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/addons/vendor_data_premoderation/hooks/index/scripts.post.tpl',
      1 => 1665485477,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635f5e48d55305_67493245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cs_cart-crud/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/var/www/html/cs_cart-crud/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_vendor_profile_changes_notice'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
	_.tr({
		text_vendor_profile_changes_notice: '<?php echo strtr($_smarty_tpl->__("text_vendor_profile_changes_notice"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
	});
	_.vendor_pre = '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['vendor_pre']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
';
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_data_premoderation/func.js"),$_smarty_tpl);?>


<?php }
}
