<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-04 14:16:12
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Edit/Field/MultiDependField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_604050fca5d085_00915418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b82cc2300b7539a3b7bf2c9783fe6bb654cfb097' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Edit/Field/MultiDependField.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604050fca5d085_00915418 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-MultiDependField --><?php $_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('FIELDS_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getFieldsModel());?><div class="d-flex align-items-center js-multi-field" data-js="container"><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')) {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));
}?>"type="hidden" class="js-multi-field-val" data-js="value" data-fields="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(array_keys($_smarty_tpl->tpl_vars['FIELDS_MODEL']->value)));?>
"/><button type="button" class="btn btn-outline-success border mr-2 mb-2 h-100 js-multi-field-add-item" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" data-js="click"><span class="fas fa-plus" title="<?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button><div class="form-inline w-100"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_VALUE']->value, 'VALUE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->value) {
?><div class="form-group mr-1 mb-2 js-multi-field-row w-100" data-js="container|clone"><div class="input-group <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
 w-100"><div class="input-group-prepend"><button type="button" class="btn btn-outline-danger border js-remove-item" data-js="click"><span class="fas fa-times" title="<?php echo \App\Language::translate('LBL_REMOVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button></div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_MODEL']->value, 'FIELD_MODEL_PART', false, 'FIELD_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL_PART']->value) {
?><div class="u-w-xsm-40"><?php if ($_smarty_tpl->tpl_vars['VALUE']->value && isset($_smarty_tpl->tpl_vars['VALUE']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value])) {
$_smarty_tpl->_assignInScope('FIELD_MODEL_PART', $_smarty_tpl->tpl_vars['FIELD_MODEL_PART']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['VALUE']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]));
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL_PART']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL_PART']->value), 0, true);
?></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><!-- /tpl-Base-Edit-Field-MultiDependField -->
<?php }
}
