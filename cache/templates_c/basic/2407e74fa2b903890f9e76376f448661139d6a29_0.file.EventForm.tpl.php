<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 20:34:25
  from '/var/www/html/yeti/layouts/basic/modules/Calendar/Extended/EventForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f79972110f768_93637879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2407e74fa2b903890f9e76376f448661139d6a29' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Calendar/Extended/EventForm.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f79972110f768_93637879 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Calendar-Extended-EventForm --><div class="js-edit-form"><input value="<?php echo \App\Purifier::encodeHtml(\App\Config::module('Calendar','AUTOFILL_TIME'));?>
"type="hidden" id="autofillTime"/><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SCRIPTS']->value, 'jsModel', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['jsModel']->value) {
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><form class="form-horizontal recordEditView" id="quickCreate" name="QuickCreate" method="post" action="index.php"><input type="hidden" id="preSaveValidation" value="<?php echo !empty(\App\EventHandler::getByType(\App\EventHandler::EDIT_VIEW_PRE_SAVE,$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
"/><?php if (!empty($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value)) {?><input name="picklistDependency" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value);?>
'type="hidden"/><?php }
if (!empty($_smarty_tpl->tpl_vars['RECORD_ID']->value)) {?><input name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" type="hidden"/><?php }
if (!empty($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value)) {?><input name="mappingRelatedField" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value);?>
'type="hidden"/><?php }
if (!empty($_smarty_tpl->tpl_vars['IS_POSTPONED']->value)) {?><input name="postponed" value="1" type="hidden"/><?php }?><input name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" type="hidden"/><input name="action" value="SaveAjax" type="hidden"/><input name="defaultOtherEventDuration" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('othereventduration'));?>
" type="hidden"/><input name="userChangedEndDateTime" value="0" type="hidden"/><div class="o-calendar__form w-100 d-flex flex-column"><div class="o-calendar__form__wrapper js-calendar__form__wrapper massEditTable no-margin" data-js="perfectscrollbar"><h6 class="boxEventTitle text-muted text-center mt-1"><?php if (!empty($_smarty_tpl->tpl_vars['RECORD_ID']->value)) {?><div class="js-sidebar-title" data-title="edit"><span class="yfi yfi-full-editing-view mr-1"></span><?php echo \App\Language::translate('LBL_EDIT_EVENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><?php } else { ?><div class="js-sidebar-title" data-title="add"><span class="fas fa-plus mr-1"></span><?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><?php }?></h6><?php if (!empty(App\Config::module('Calendar','SHOW_ACTIVITY_BUTTONS_IN_EDIT_FORM')) && empty($_smarty_tpl->tpl_vars['IS_POSTPONED']->value) && !empty($_smarty_tpl->tpl_vars['RECORD_ID']->value)) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Extended/ActivityButtons.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?><div class="fieldRow"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'blockfields', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->_assignInScope('isReferenceField', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType());
$_smarty_tpl->_assignInScope('refrenceList', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getReferenceList());
$_smarty_tpl->_assignInScope('refrenceListCount', count($_smarty_tpl->tpl_vars['refrenceList']->value));?><div class="fieldsLabelValue pl-0 pr-0 mb-2 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><div class="col-12 px-2"><?php $_smarty_tpl->_assignInScope('HELPINFO_LABEL', \App\Language::getTranslateHelpInfo($_smarty_tpl->tpl_vars['FIELD_MODEL']->value,$_smarty_tpl->tpl_vars['VIEW']->value));?><label class="muted mt-0"><?php if ($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value) {?><a href="#" class="js-help-info float-right u-cursor-pointer" title="" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value;?>
"data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></a><?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><div class="fieldValue col-12 px-2"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->name === 'activitytype' && App\Config::module('Calendar','SHOW_ACTIVITYTYPES_AS_BUTTONS')) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/Field/ActivityType.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php if (!empty($_smarty_tpl->tpl_vars['SOURCE_RELATED_FIELD']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOURCE_RELATED_FIELD']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
?><div class="d-none"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><div class="o-calendar__form__actions"><div class="d-flex flex-wrap<?php if (empty($_smarty_tpl->tpl_vars['RECORD_ID']->value)) {?> justify-content-center<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['QUICKCREATE_LINKS']->value['QUICKCREATE_VIEW_HEADER'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUICKCREATE_LINKS']->value['QUICKCREATE_VIEW_HEADER'], 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'quickcreateViewHeader'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><button type="submit" class="js-save-event btn btn-success" title="<?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-js="click"><span title="<?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" class="fas fa-check mr-1"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><?php if (!empty($_smarty_tpl->tpl_vars['RECORD_ID']->value) && $_smarty_tpl->tpl_vars['VIEW']->value === 'EventForm') {?><a href="#" role="button" class="btn btn-danger js-summary-close-edit ml-auto u-h-fit"><span title="<?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"class="fas fa-times"></span></a><?php }?></div></div></div></form></div><!-- /tpl-Calendar-Extended-EventForm -->
<?php }
}
