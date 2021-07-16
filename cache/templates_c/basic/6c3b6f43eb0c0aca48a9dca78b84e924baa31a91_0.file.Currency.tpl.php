<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-13 11:49:10
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Edit/Field/Currency.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5d7a96e19b70_06446541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c3b6f43eb0c0aca48a9dca78b84e924baa31a91' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Edit/Field/Currency.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d7a96e19b70_06446541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'FUN_CURRENCY_SYMBOL' => 
  array (
    'compiled_filepath' => '/var/www/html/yeti/cache/templates_c/basic/6c3b6f43eb0c0aca48a9dca78b84e924baa31a91_0.file.Currency.tpl.php',
    'uid' => '6c3b6f43eb0c0aca48a9dca78b84e924baa31a91',
    'call_name' => 'smarty_template_function_FUN_CURRENCY_SYMBOL_4679646705f5d7a96dbccb4_29889436',
  ),
));
?><!-- tpl-Base-Edit-Field-Currency --><div><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('SYMBOL_PLACEMENT', $_smarty_tpl->tpl_vars['USER_MODEL']->value->currency_symbol_placement);
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '71') {?><div class="input-group <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
" data-uitype="71"><?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value != '1.0$') {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'FUN_CURRENCY_SYMBOL', array('CURRENCY_SYMBOL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol')), true);
}?><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="currencyField form-control <?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value == '1.0$') {?> textAlignRight <?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?>data-decimal-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_decimal_separator');?>
'data-group-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_separator');?>
'data-number-of-decimal-places='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('no_of_currency_decimals');?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php } else { ?> data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php }?>/><?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value == '1.0$') {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'FUN_CURRENCY_SYMBOL', array('CURRENCY_SYMBOL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol')), true);
}?></div><?php } elseif (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '72')) {?><div class="input-group <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><?php $_smarty_tpl->_assignInScope('DISPLAY_FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_VALUE']->value);
if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value != '1.0$') {
if (!empty($_smarty_tpl->tpl_vars['RECORD_ID']->value) && !empty($_smarty_tpl->tpl_vars['RECORD']->value->get('currency_id'))) {
$_smarty_tpl->_assignInScope('CURRENCY', \App\Fields\Currency::getById($_smarty_tpl->tpl_vars['RECORD']->value->get('currency_id')));
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'FUN_CURRENCY_SYMBOL', array('CURRENCY_SYMBOL'=>$_smarty_tpl->tpl_vars['CURRENCY']->value['currency_symbol']), true);
} else {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'FUN_CURRENCY_SYMBOL', array('CURRENCY_SYMBOL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol')), true);
}
}?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['DISPLAY_FIELD_VALUE']->value;?>
" type="text" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
"class="row-fluid currencyField form-control" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator=<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);
}?> data-decimal-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_decimal_separator');?>
'data-group-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_separator');?>
'<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?> /><?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value == '1.0$') {
if (!empty($_smarty_tpl->tpl_vars['RECORD_ID']->value) && !empty($_smarty_tpl->tpl_vars['RECORD']->value->get('currency_id'))) {
$_smarty_tpl->_assignInScope('CURRENCY', \App\Fields\Currency::getById($_smarty_tpl->tpl_vars['RECORD']->value->get('currency_id')));
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'FUN_CURRENCY_SYMBOL', array('CURRENCY_SYMBOL'=>$_smarty_tpl->tpl_vars['CURRENCY']->value['currency_symbol']), true);
} else {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'FUN_CURRENCY_SYMBOL', array('CURRENCY_SYMBOL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol')), true);
}
}?></div><?php } else { ?><div class="input-group <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><div class="row"><span class="col-md-1 input-group-append"><span class="input-group-text row js-currency" data-js="text"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol');?>
</span></span><?php $_smarty_tpl->_assignInScope('DISPLAY_FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?><span class="col-md-7"><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['DISPLAY_FIELD_VALUE']->value;?>
" type="text" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
"class="row-fluid currencyField form-control" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator=<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);
}?> data-decimal-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_decimal_separator');?>
'data-group-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_separator');?>
'<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?> /></span></div></div><?php }?></div><!-- /tpl-Base-Edit-Field-Currency -->
<?php }
/* smarty_template_function_FUN_CURRENCY_SYMBOL_4679646705f5d7a96dbccb4_29889436 */
if (!function_exists('smarty_template_function_FUN_CURRENCY_SYMBOL_4679646705f5d7a96dbccb4_29889436')) {
function smarty_template_function_FUN_CURRENCY_SYMBOL_4679646705f5d7a96dbccb4_29889436(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('CURRENCY_SYMBOL'=>'','CLASS'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>
<span class="input-group-append <?php echo $_smarty_tpl->tpl_vars['CLASS']->value;?>
"><span class="input-group-text js-currency" data-js="text"><?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
</span></span><?php
}}
/*/ smarty_template_function_FUN_CURRENCY_SYMBOL_4679646705f5d7a96dbccb4_29889436 */
}
