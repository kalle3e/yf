<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-20 23:58:54
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Edit/Field/Recurrence.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8edf0e6628d2_73881415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0021682382c2f600a450bf665b229abdc4378260' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Edit/Field/Recurrence.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8edf0e6628d2_73881415 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Edit-Field-Recurrence"><div class="typeSavingModal"><div class="modal fade" tabindex="-1" role="dialog"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header m-0 d-flex align-items-center"><h5 class="modal-title m-0"><span class="fas fa-save mr-2"></span><?php echo App\Language::translate('LBL_TITLE_TYPE_SAVING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><div class="col-12 px-0 mb-3 form-row m-0"><div class="col-12 col-lg-4 px-0"><button class="btn btn-primary btn-sm typeSavingBtn" data-value="2"><?php echo App\Language::translate('LBL_UPDATE_THIS_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div><div class="col-12 col-lg-8 px-0"><?php echo App\Language::translate('LBL_UPDATE_THIS_EVENT_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><div class="col-12 px-0 mb-3 form-row m-0"><div class="col-12 col-lg-4 px-0"><button class="btn btn-primary btn-sm typeSavingBtn" data-value="3"><?php echo App\Language::translate('LBL_UPDATE_FUTURE_EVENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div><div class="col-12 col-lg-8 px-0"><?php echo App\Language::translate('LBL_UPDATE_FUTURE_EVENTS_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><div class="col-12 px-0 mb-3 form-row m-0"><div class="col-12 col-lg-4 px-0"><button class="btn btn-primary btn-sm typeSavingBtn" type="button" data-value="1"><?php echo App\Language::translate('LBL_UPDATE_ALL_EVENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div><div class="col-12 col-lg-8 px-0"><?php echo App\Language::translate('LBL_UPDATE_ALL_EVENTS_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div></div></div></div></div></div><div class="js-repeat-ui" data-js="container"><input type="hidden" name="typeSaving"><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" type="hidden"name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
"/><?php $_smarty_tpl->_assignInScope('RECURRING_INFORMATION', Vtiger_Recurrence_UIType::getRecurringInfo($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')));
if (empty($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value)) {
$_smarty_tpl->_assignInScope('RECURRING_INFORMATION', array('FREQ'=>'','INTERVAL'=>0));
}?><div class="clearfix form-row"><div class="col-4 mb-2"><span class="col-form-label float-left"><?php echo \App\Language::translate('LBL_RECURRING_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div><div class="col-8 mb-2"><select class="select2 form-control recurringType" title="<?php echo \App\Language::translate('LBL_RECURRING_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><option title="<?php echo \App\Language::translate('LBL_DAYS_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"value="DAILY" <?php if ($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['FREQ'] == 'DAILY') {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAYS_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option title="<?php echo \App\Language::translate('LBL_WEEKS_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"value="WEEKLY" <?php if ($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['FREQ'] == 'WEEKLY') {?> selected <?php }?>><?php echo \App\Language::translate('LBL_WEEKS_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option title="<?php echo \App\Language::translate('LBL_MONTHS_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"value="MONTHLY" <?php if ($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['FREQ'] == 'MONTHLY') {?> selected <?php }?>><?php echo \App\Language::translate('LBL_MONTHS_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option title="<?php echo \App\Language::translate('LBL_YEAR_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"value="YEARLY" <?php if ($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['FREQ'] == 'YEARLY') {?> selected <?php }?>><?php echo \App\Language::translate('LBL_YEAR_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></div><div class="col-4 mb-2"><span class="col-form-label float-left"><?php echo \App\Language::translate('LBL_REPEAT_INTERVAL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div><div class="col-8 mb-2"><select class="select2 form-control repeatFrequency" title="<?php echo \App\Language::translate('LBL_REPEAT_FOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_smarty_tpl->tpl_vars['FREQUENCY'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['FREQUENCY']->step = 1;$_smarty_tpl->tpl_vars['FREQUENCY']->total = (int) ceil(($_smarty_tpl->tpl_vars['FREQUENCY']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['FREQUENCY']->step));
if ($_smarty_tpl->tpl_vars['FREQUENCY']->total > 0) {
for ($_smarty_tpl->tpl_vars['FREQUENCY']->value = 1, $_smarty_tpl->tpl_vars['FREQUENCY']->iteration = 1;$_smarty_tpl->tpl_vars['FREQUENCY']->iteration <= $_smarty_tpl->tpl_vars['FREQUENCY']->total;$_smarty_tpl->tpl_vars['FREQUENCY']->value += $_smarty_tpl->tpl_vars['FREQUENCY']->step, $_smarty_tpl->tpl_vars['FREQUENCY']->iteration++) {
$_smarty_tpl->tpl_vars['FREQUENCY']->first = $_smarty_tpl->tpl_vars['FREQUENCY']->iteration === 1;$_smarty_tpl->tpl_vars['FREQUENCY']->last = $_smarty_tpl->tpl_vars['FREQUENCY']->iteration === $_smarty_tpl->tpl_vars['FREQUENCY']->total;?><option value="<?php echo $_smarty_tpl->tpl_vars['FREQUENCY']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['FREQUENCY']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['FREQUENCY']->value == $_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['INTERVAL']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['FREQUENCY']->value;?>
</option><?php }
}
?></select></div><div class="<?php if ($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['FREQ'] != 'WEEKLY') {?>d-none<?php }?> row col-12 form-row repeatWeekUI"><span class="col-md-4 mb-2"><span class="medium"><?php echo \App\Language::translate('LBL_REAPEAT_IN',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span><span class="col-md-8 text-center mb-2"><div class="btn-group btn-group-toggle" data-toggle="buttons"><label title="<?php echo \App\Language::translate('LBL_DAY0',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="btn btn-outline-primary <?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY']) && strpos($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'],'SU') !== false) {?>active<?php }?>"><input type="checkbox" autocomplete="off"<?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY']) && strpos($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'],'SU') !== false) {?>checked<?php }?>value="SU"><?php echo \App\Language::translate('LBL_SM_SUN',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><label title="<?php echo \App\Language::translate('LBL_DAY1',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="btn btn-outline-primary <?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY']) && strpos($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'],'MO') !== false) {?>active<?php }?>"><input type="checkbox" autocomplete="off"<?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY']) && strpos($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'],'MO') !== false) {?>checked<?php }?>value="MO"><?php echo \App\Language::translate('LBL_SM_MON',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><label title="<?php echo \App\Language::translate('LBL_DAY2',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="btn btn-outline-primary <?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY']) && strpos($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'],'TU') !== false) {?>active<?php }?>"><input type="checkbox" autocomplete="off"<?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY']) && strpos($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'],'TU') !== false) {?>checked<?php }?>value="TU"><?php echo \App\Language::translate('LBL_SM_TUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><label title="<?php echo \App\Language::translate('LBL_DAY3',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="btn btn-outline-primary <?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY']) && strpos($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'],'WE') !== false) {?>active<?php }?>"><input type="checkbox" autocomplete="off"<?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY']) && strpos($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'],'WE') !== false) {?>checked<?php }?>value="WE"><?php echo \App\Language::translate('LBL_SM_WED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><label title="<?php echo \App\Language::translate('LBL_DAY4',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="btn btn-outline-primary <?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY']) && strpos($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'],'TH') !== false) {?>active<?php }?>"><input type="checkbox" autocomplete="off"<?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY']) && strpos($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'],'TH') !== false) {?>checked<?php }?>value="TH"><?php echo \App\Language::translate('LBL_SM_THU',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><label title="<?php echo \App\Language::translate('LBL_DAY5',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="btn btn-outline-primary <?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY']) && strpos($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'],'FR') !== false) {?>active<?php }?>"><input type="checkbox" autocomplete="off"<?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY']) && strpos($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'],'FR') !== false) {?>checked<?php }?>value="FR"><?php echo \App\Language::translate('LBL_SM_FRI',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><label title="<?php echo \App\Language::translate('LBL_DAY6',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="btn btn-outline-primary <?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY']) && strpos($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'],'SA') !== false) {?>active<?php }?>"><input type="checkbox" autocomplete="off"<?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY']) && strpos($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'],'SA') !== false) {?>checked<?php }?>value="SA"><?php echo \App\Language::translate('LBL_SM_SAT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div></span></div><div class="<?php if ($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['FREQ'] != 'MONTHLY') {?>d-none<?php }?> row col-12 form-row repeatMonthUI"><span class="col-md-4"><span class="medium"><?php echo \App\Language::translate('LBL_REAPEAT_BY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span><span class="col-md-8 pl-2 pr-0"><div class="input-group mb-2 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><div class="input-group-prepend"><span class="input-group-text"><input type="radio" name="calendarMontlyType" class="calendarMontlyType" value="DATE"<?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYMONTHDAY'])) {?>checked<?php }?>></span></div><input type="text" class="form-control" aria-label="<?php echo \App\Language::translate('LBL_DAY_IN_MONTH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"value="<?php echo \App\Language::translate('LBL_DAY_IN_MONTH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" readonly="readonly"></div><div class="input-group mb-2 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><div class="input-group-prepend"><span class="input-group-text"><input type="radio" name="calendarMontlyType" class="calendarMontlyType" value="DAY"<?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['BYDAY'])) {?>checked<?php }?>></span></div><input type="text" class="form-control" aria-label="<?php echo \App\Language::translate('LBL_DAY_IN_WEEK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"value="<?php echo \App\Language::translate('LBL_DAY_IN_WEEK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" readonly="readonly"></div></span></div><div class="col-4 mb-2"><span class="col-form-label float-left"><?php echo \App\Language::translate('LBL_REPEAT_END',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div><div class="col-8 mb-2"><div class="input-group mb-2 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><div class="input-group-prepend"><span class="input-group-text"><input type="radio" name="calendarEndType" value="never"<?php if (!isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['COUNT']) && !isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['UNTIL'])) {?>checked<?php }?>></span></div><input type="text" class="form-control" aria-label="" value="<?php echo \App\Language::translate('LBL_NEVER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" readonly="readonly"></div><div class="input-group mb-2 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><div class="input-group-prepend"><span class="input-group-text"><input type="radio" name="calendarEndType" value="count"<?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['COUNT'])) {?>checked<?php }?>>&nbsp;<?php echo \App\Language::translate('LBL_COUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div><input type="text" class="form-control countEvents"<?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['COUNT'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['COUNT'];?>
"<?php } else { ?>disabled="disabled" <?php }?>title="<?php echo \App\Language::translate('LBL_COUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"data-validation-engine='validate[required,funcCall[Vtiger_Integer_Validator_Js.invokeValidation]]'/></div><div class="input-group mb-2 date <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><div class="input-group-prepend"><span class="input-group-text"><input type="radio" name="calendarEndType" value="until"<?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['UNTIL'])) {?>checked<?php }?>>&nbsp;<?php echo \App\Language::translate('LBL_UNTIL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div><input type="text" class="dateField form-control calendarUntil datepicker" <?php if (isset($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['UNTIL'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['UNTIL'];?>
" <?php } else { ?> disabled="disabled"<?php }?>name="calendarUntil" data-date-format="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format');?>
"title="<?php echo \App\Language::translate('LBL_UNTIL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"data-validation-engine='validate[required,funcCall[Vtiger_Date_Validator_Js.invokeValidation]]'data-validator='<?php echo \App\Json::encode(array(array('name'=>'greaterThanDependentField','params'=>array('date_start'))));?>
'/><div class=" input-group-append"><span class="input-group-text u-cursor-pointer js-date__btn" data-js="click"><span class="fas fa-calendar-alt"></span></span></div></div></div></div></div></div>
<?php }
}
