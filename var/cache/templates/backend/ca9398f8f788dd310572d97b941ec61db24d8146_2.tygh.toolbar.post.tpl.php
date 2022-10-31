<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:34:00
  from '/var/www/html/cs_cart-crud/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e48a3ca56_87385037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca9398f8f788dd310572d97b941ec61db24d8146' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl',
      1 => 1665485477,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635f5e48a3ca56_87385037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cs_cart-crud/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign help-center__show-help-center--icon"),$_smarty_tpl);?>

        </a>
    </div>
<?php }
}
}
