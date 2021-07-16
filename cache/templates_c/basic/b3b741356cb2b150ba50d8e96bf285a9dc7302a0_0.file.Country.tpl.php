<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 12:10:08
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Edit/Field/Country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f73e9007bbc33_31229253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3b741356cb2b150ba50d8e96bf285a9dc7302a0' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Edit/Field/Country.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73e9007bbc33_31229253 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-Country --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues());
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('PLACE_HOLDER', ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEmptyPicklistOptionAllowed() && !($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true && $_smarty_tpl->tpl_vars['FIELD_VALUE']->value != '')));
$_smarty_tpl->_assignInScope('IS_LAZY', count($_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value) > \App\Config::performance('picklistLimit'));?><div><select name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" class="select2 form-control" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
"<?php if ($_smarty_tpl->tpl_vars['IS_LAZY']->value) {?> data-select-lazy="true"<?php }?>title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-template-result="prependDataTemplate" data-template-selection="prependDataTemplate"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"<?php if ($_smarty_tpl->tpl_vars['PLACE_HOLDER']->value) {?>data-select="allowClear" data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_OPTION');?>
"<?php }?> data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?>><?php if ($_smarty_tpl->tpl_vars['PLACE_HOLDER']->value) {?><optgroup class="p-0"><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION');?>
</option></optgroup><?php }
if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value && empty($_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value[$_smarty_tpl->tpl_vars['FIELD_VALUE']->value])) {
$_smarty_tpl->_assignInScope('FIELD_VALUE', \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_VALUE']->value));?><optgroup label="<?php echo \App\Language::translate('LBL_VALUE_NOT_FOUND');?>
"><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
</option></optgroup><?php }?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues(), 'VALUE', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->_assignInScope('TRANSLATE', \App\Language::translateSingleMod($_smarty_tpl->tpl_vars['KEY']->value,'Other.Country'));?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['KEY']->value);?>
" data-code="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value['code'];?>
"title="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['TRANSLATE']->value);?>
" data-template="<span><span class='flag-icon flag-icon-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['VALUE']->value['code'], 'UTF-8');?>
 mr-2'></span><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['TRANSLATE']->value);?>
</span>"<?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value == $_smarty_tpl->tpl_vars['KEY']->value) {?>selected<?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['TRANSLATE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup></select></div><!-- /tpl-Base-Edit-Field-Country -->
<?php }
}
