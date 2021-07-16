<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 18:32:03
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Edit/Field/MultiCurrency.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa4fbf37e14f3_54711672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e238500fea4f9af6667962f5b4a66f03b611d5f1' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Edit/Field/MultiCurrency.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa4fbf37e14f3_54711672 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'FUNC_CURRENCY_SYMBOL_PLACEMENT' => 
  array (
    'compiled_filepath' => '/var/www/html/yeti/cache/templates_c/basic/e238500fea4f9af6667962f5b4a66f03b611d5f1_0.file.MultiCurrency.tpl.php',
    'uid' => 'e238500fea4f9af6667962f5b4a66f03b611d5f1',
    'call_name' => 'smarty_template_function_FUNC_CURRENCY_SYMBOL_PLACEMENT_11992323615fa4fbf37692b3_01538137',
  ),
));
?><!-- tpl-Base-Edit-Field-MultiCurrency --><?php $_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName());
$_smarty_tpl->_assignInScope('SYMBOL_PLACEMENT_ON_RIGHT', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol_placement') == '1.0$');
$_smarty_tpl->_assignInScope('CURRENCY_SYMBOL', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol'));
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getEditViewFormatData($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')));
$_smarty_tpl->_assignInScope('TABINDEX', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex());
if (isset($_smarty_tpl->tpl_vars['FIELD_VALUE']->value['currencyId'])) {
$_smarty_tpl->_assignInScope('CURRENCY', \App\Fields\Currency::getById($_smarty_tpl->tpl_vars['FIELD_VALUE']->value['currencyId']));
$_smarty_tpl->_assignInScope('CURRENCY_SYMBOL', $_smarty_tpl->tpl_vars['CURRENCY']->value['currency_symbol']);
}?><div class="js-multicurrency-container"><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_VALUE']->value));?>
" class="js-multicurrency-field-to-save"<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?> disabled="disabled"<?php }?> tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
"><div class="input-group <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><?php if (!$_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT_ON_RIGHT']->value) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'FUNC_CURRENCY_SYMBOL_PLACEMENT', array('CURRENCY_SYMBOL'=>$_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value), true);
}?><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
-editview-fieldname-<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value);?>
"class="col-md-12 js-multicurrency-field js-format-numer form-control<?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT_ON_RIGHT']->value) {?> textAlignRight<?php }?>"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>disabled="disabled"<?php } else { ?>data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"<?php }?>><?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT_ON_RIGHT']->value) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'FUNC_CURRENCY_SYMBOL_PLACEMENT', array('CURRENCY_SYMBOL'=>$_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value), true);
}
if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?><div class="input-group-append"><div class="hide js-currencies-container" data-js="container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/CurrenciesModal.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PRICE_DETAILS'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getCurrencies()), 0, true);
?></div><button type="button" class="btn btn-light js-multicurrency-event js-popover-tooltip" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" data-content="<?php echo \App\Language::translate('LBL_MORE_CURRENCIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-js="click"><span class="adminIcon-currencies" title=""></span></button></div><?php }?></div></div><!-- /tpl-Base-Edit-Field-MultiCurrency -->
<?php }
/* smarty_template_function_FUNC_CURRENCY_SYMBOL_PLACEMENT_11992323615fa4fbf37692b3_01538137 */
if (!function_exists('smarty_template_function_FUNC_CURRENCY_SYMBOL_PLACEMENT_11992323615fa4fbf37692b3_01538137')) {
function smarty_template_function_FUNC_CURRENCY_SYMBOL_PLACEMENT_11992323615fa4fbf37692b3_01538137(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('CURRENCY_SYMBOL'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>
<span class="input-group-append"><span class="input-group-text js-currency" data-js="text"><?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
</span></span><?php
}}
/*/ smarty_template_function_FUNC_CURRENCY_SYMBOL_PLACEMENT_11992323615fa4fbf37692b3_01538137 */
}
