<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 20:34:25
  from '/var/www/html/yeti/layouts/basic/modules/Calendar/Edit/Field/ActivityType.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f79972120c7f9_89150293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c13c23f2fcdf83ec286d1376042949456986aa5' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Calendar/Edit/Field/ActivityType.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f79972120c7f9_89150293 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Calendar-Edit-Field-ActivityType --><div class="text-center"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, App\Fields\Picklist::getValues('activitytype'), 'ACTIVITYTYPE_VALUE', false, 'ACTIVITYTYPE_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ACTIVITYTYPE_NAME']->value => $_smarty_tpl->tpl_vars['ACTIVITYTYPE_VALUE']->value) {
if (!empty($_smarty_tpl->tpl_vars['ACTIVITYTYPE_VALUE']->value['icon'])) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['ACTIVITYTYPE_ICON']) ? $_smarty_tpl->tpl_vars['ACTIVITYTYPE_ICON']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['ACTIVITYTYPE_VALUE']->value['activitytype']] = $_smarty_tpl->tpl_vars['ACTIVITYTYPE_VALUE']->value['icon'];
$_smarty_tpl->_assignInScope('ACTIVITYTYPE_ICON', $_tmp_array);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="btn-group-toggle" data-toggle="buttons"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues(), 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->_assignInScope('CHECK', trim($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value)) == trim($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value));?><label class="btn u-border-bottom-5px c-btn-outline-done mr-1 mb-1 picklistCBr_Calendar_activitytype_<?php echo $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['CHECK']->value) {?>active<?php }?>" title="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
"><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"id="option_<?php echo $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value;?>
"value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo htmlspecialchars(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), ENT_QUOTES, 'UTF-8', true);?>
'<?php if ($_smarty_tpl->tpl_vars['CHECK']->value) {?> checked <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['ACTIVITYTYPE_ICON']->value[$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value])) {?><span class="<?php echo $_smarty_tpl->tpl_vars['ACTIVITYTYPE_ICON']->value[$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value];?>
 align-middle"title="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
"></span><?php }?><span>&nbsp;<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
</span></label><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><!-- /tpl-Calendar-Edit-Field-ActivityType -->
<?php }
}
