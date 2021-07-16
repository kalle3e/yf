<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 21:44:50
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Edit/Field/Picklist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f85b28b0ba3_20833090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe6686cac4df352902739c64eff715c764ef66fd' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Edit/Field/Picklist.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f85b28b0ba3_20833090 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-Picklist --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues());
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('PLACE_HOLDER', ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEmptyPicklistOptionAllowed() && !($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true && $_smarty_tpl->tpl_vars['FIELD_VALUE']->value != '')));
$_smarty_tpl->_assignInScope('IS_LAZY', count($_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value) > \App\Config::performance('picklistLimit'));?><div class="w-100"><select name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" class="select2 form-control" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"<?php if ($_smarty_tpl->tpl_vars['IS_LAZY']->value) {?> data-select-lazy="true"<?php }
if (!empty($_smarty_tpl->tpl_vars['PLACE_HOLDER']->value)) {?>data-select="allowClear"data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_OPTION');?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?>data-selected-value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['PLACE_HOLDER']->value)) {?><optgroup class="p-0"><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION');?>
</option></optgroup><?php }
if (!$_smarty_tpl->tpl_vars['IS_LAZY']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" title="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
" <?php if (trim($_smarty_tpl->tpl_vars['FIELD_VALUE']->value) == trim($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value)) {?>selected<?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></select></div><!-- /tpl-Base-Edit-Field-Picklist -->
<?php }
}
