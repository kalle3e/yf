<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 20:34:25
  from '/var/www/html/yeti/layouts/basic/modules/Calendar/Edit/Field/Time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7997211a01f5_21052450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdda52e53e31ac6ff1e5e83a0e9e6938e1fcd836' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Calendar/Edit/Field/Time.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7997211a01f5_21052450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('TIME_FORMAT', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('hour_format'));
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());?><div class="tpl-Edit-Field-Time input-group time <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value != 'time_end') {?><div class="input-group-prepend"><span class="input-group-text js-autofill__icon u-cursor-pointer" data-js="click|addClass|removeClass"><span class="notEvent js-help-info" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_AUTO_FILL_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><input type="checkbox" class="js-autofill d-none" data-js="prop|change"/><i class="fas fa-user-clock"></i></span></span></div><?php }?><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" type="text" data-format="<?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
" class="clockPicker form-control" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
"tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?>data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?>autocomplete="off"/><div class="input-group-append"><span class="input-group-text u-cursor-pointer js-clock__btn" data-js="click"><span class="far fa-clock"></span></span></div></div>
<?php }
}
