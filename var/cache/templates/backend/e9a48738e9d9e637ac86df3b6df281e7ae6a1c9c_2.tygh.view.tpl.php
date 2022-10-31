<?php
/* Smarty version 4.1.0, created on 2022-10-31 08:34:31
  from '/var/www/html/cs_cart-crud/design/backend/templates/views/settings_wizard/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635f5e67348ea8_07847903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9a48738e9d9e637ac86df3b6df281e7ae6a1c9c' => 
    array (
      0 => '/var/www/html/cs_cart-crud/design/backend/templates/views/settings_wizard/view.tpl',
      1 => 1665485476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_635f5e67348ea8_07847903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cs_cart-crud/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),1=>array('file'=>'/var/www/html/cs_cart-crud/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('install','settings_wizard_close_tooltip','close','finish','next_step','settings_wizard'));
if (!defined("AJAX_REQUEST")) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);
}?>

<form name="settings_wizard_form" method="post" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="cm-ajax cm-ajax-force form-edit form-setting" data-ca-target-id="settings_wizard">
    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
">

    <div id="settings_wizard">
        <input type="hidden" name="current_step" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_step']->value, ENT_QUOTES, 'UTF-8');?>
">

        <div class="form-horizontal">
            <?php $_smarty_tpl->_assignInScope('_settings', array());?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['step_data']->value['items'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == "header") {?>
                    <h4><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['item']->value['text'],$_smarty_tpl->tpl_vars['item']->value['placeholders']);?>
</h4>

                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == "text") {?>
                    <p><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['item']->value['text'],$_smarty_tpl->tpl_vars['item']->value['placeholders']);?>
</p>

                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == "template") {?>
                    <p><?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['item']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></p>

                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == "setting") {?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['_settings']) ? $_smarty_tpl->tpl_vars['_settings']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['item']->value['setting_data']['object_id']] = $_smarty_tpl->tpl_vars['item']->value['setting_data'];
$_smarty_tpl->_assignInScope('_settings', $_tmp_array);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == "addon") {?>
                    <?php $_smarty_tpl->_assignInScope('addon', $_smarty_tpl->tpl_vars['wizard_addons']->value[$_smarty_tpl->tpl_vars['item']->value['addon_name']]);?>
                    <div class="table-responsive-wrapper">
                    <table class="table table-addons table-wizard table--relative table-responsive table-responsive-w-titles">
                        <tr>
                            <td class="addon-icon" data-th="&nbsp;">
                                <div class="bg-icon">
                                    <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_icon']) {?>
                                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
/icon.png" width="38" height="38" border="0" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" >
                                    <?php }?>
                                </div>
                            </td>
                            <td width="95%" data-th="&nbsp;">
                                <div class="object-group-link-wrap">
                                    <span class="unedited-element block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span><br>
                                    <span class="row-status object-group-details"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </div>
                            </td>
                            <td width="5%" data-th="&nbsp;">
                                <input type="hidden" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="N">
                                <label for="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
                                    <input id="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="Y" checked="checked">
                                    <?php echo $_smarty_tpl->__("install");?>

                                </label>
                            </td>
                        </tr>
                    </table>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"settings.settings_section",'subsection'=>$_smarty_tpl->tpl_vars['_settings']->value,'section'=>"wizard",'html_id_prefix'=>"field_",'html_name'=>"settings",'class'=>"setting-wide"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"settings.settings_section",'subsection'=>$_smarty_tpl->tpl_vars['_settings']->value,'section'=>"wizard",'html_id_prefix'=>"field_",'html_name'=>"settings",'class'=>"setting-wide"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"settings.settings_section",'subsection'=>$_smarty_tpl->tpl_vars['_settings']->value,'section'=>"wizard",'html_id_prefix'=>"field_",'html_name'=>"settings",'class'=>"setting-wide"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
            <?php if (!$_smarty_tpl->tpl_vars['step_data']->value['next_step']) {?>
                Tygh.$('#settings_wizard_next_step').hide();
                Tygh.$('#settings_wizard_finish').addClass('btn-primary');
            <?php } else { ?>
                Tygh.$('#settings_wizard_next_step').show();
                Tygh.$('#settings_wizard_finish').removeClass('btn-primary');
            <?php }?>

            Tygh.$('#settings_wizard').appear(function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
Tygh.$.ceDialog('get_last').ceDialog('change_title', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['popup_title']->value, ENT_QUOTES, 'UTF-8');?>
')<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
        <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <!--settings_wizard--></div>

    <?php if (!defined("AJAX_REQUEST")) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php }?>

    <?php if (defined("AJAX_REQUEST")) {?>
        <div class="buttons-container">
        <a class="btn pull-left cm-dialog-closer cm-tooltip" title="<?php echo $_smarty_tpl->__("settings_wizard_close_tooltip");?>
"><?php echo $_smarty_tpl->__("close");?>
</a>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"settings_wizard_finish",'but_text'=>$_smarty_tpl->__("finish"),'but_name'=>"dispatch[settings_wizard.next_step.finish]",'but_role'=>"action",'but_meta'=>"cm-no-ajax cm-submit",'but_target_form'=>"settings_wizard_form"), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"settings_wizard_next_step",'but_text'=>$_smarty_tpl->__("next_step"),'but_name'=>"dispatch[settings_wizard.next_step]",'but_role'=>"submit-link",'but_target_form'=>"settings_wizard_form",'but_meta'=>"btn btn-primary"), 0, true);
?>

    <?php if (defined("AJAX_REQUEST")) {?>
        </div>
    <?php }?>
    <?php if (!defined("AJAX_REQUEST")) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>
</form>

<?php if (!defined("AJAX_REQUEST")) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("settings_wizard"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar_position'=>"left"), 0, false);
}
}
}
