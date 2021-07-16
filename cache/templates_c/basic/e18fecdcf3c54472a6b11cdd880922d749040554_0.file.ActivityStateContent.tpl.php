<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-20 23:58:41
  from '/var/www/html/yeti/layouts/basic/modules/Calendar/ActivityStateContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8edf015aa8d7_27077769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e18fecdcf3c54472a6b11cdd880922d749040554' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Calendar/ActivityStateContent.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8edf015aa8d7_27077769 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Calendar-ActivityStateContent --><?php $_smarty_tpl->_assignInScope('START_DATE', $_smarty_tpl->tpl_vars['RECORD']->value->get('date_start'));
$_smarty_tpl->_assignInScope('START_TIME', $_smarty_tpl->tpl_vars['RECORD']->value->get('time_start'));
$_smarty_tpl->_assignInScope('END_DATE', $_smarty_tpl->tpl_vars['RECORD']->value->get('due_date'));
$_smarty_tpl->_assignInScope('END_TIME', $_smarty_tpl->tpl_vars['RECORD']->value->get('time_end'));?><div class="o-calendar__form__wrapper js-calendar__form__wrapper form-horizontal modalSummaryValues" data-js="perfectscrollbar"><div class="form-group row"><label class="col-4 mt-2 u-font-weight-500"><?php echo \App\Language::translate('Subject',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</label><div class="col-8 mt-2 u-text-ellipsis fieldVal" data-subject="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('subject',false,false,true);?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('subject',false,false,100);?>
</div></div><div class=""><div class="form-group row"><label class="col-4 mt-2 u-font-weight-500"><?php echo \App\Language::translate('Start Date & Time',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</label><div class="col-8 mt-2"><?php echo \App\Fields\DateTime::formatToDay(((string)$_smarty_tpl->tpl_vars['START_DATE']->value)." ".((string)$_smarty_tpl->tpl_vars['START_TIME']->value),$_smarty_tpl->tpl_vars['RECORD']->value->get('allday'));?>
</div></div><div class="form-group row"><label class="col-4 mt-2 u-font-weight-500"><?php echo \App\Language::translate('Due Date',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</label><div class="col-8 mt-2"><?php echo \App\Fields\DateTime::formatToDay(((string)$_smarty_tpl->tpl_vars['END_DATE']->value)." ".((string)$_smarty_tpl->tpl_vars['END_TIME']->value),$_smarty_tpl->tpl_vars['RECORD']->value->get('allday'));?>
</div></div><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('activitystatus') != '') {?><div class="form-group row"><label class="col-4 mt-2 u-font-weight-500"><?php echo \App\Language::translate('Status',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</label><div class="col-8 mt-2"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('activitystatus',false,false,true);?>
</div></div><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('linkextend') != '') {?><div class="form-group row"><label class="col-4 mt-2 u-font-weight-500"><?php echo \App\Language::translate('FL_RELATION_EXTEND',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</label><div class="col-8 mt-2 u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('linkextend',false,false,true);?>
</div></div><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('link') != '') {?><div class="form-group row"><label class="col-4 mt-2 col-form-label"><?php echo \App\Language::translate('FL_RELATION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</label><div class="col-8 mt-2 u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('link',false,false,true);?>
</div></div><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('process') != '') {?><div class="form-group row"><label class="col-4 mt-2 u-font-weight-500"><?php echo \App\Language::translate('Process',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</label><div class="col-8 mt-2 u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('process',false,false,true);?>
</div></div><?php }?><hr/><div class="form-group row"><label class="col-4 mt-2 u-font-weight-500"><?php echo \App\Language::translate('Description',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</label><div class="col-8 mt-2"><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('description') != '') {
echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('description',false,false,200);
} else { ?><span class="muted"><?php echo \App\Language::translate('LBL_NO_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span><?php }?></div></div><hr/><div class="form-group row"><label class="col-4 mt-2 u-font-weight-500"><?php echo \App\Language::translate('Created By',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</label><div class="col-8 mt-2 u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('created_user_id',false,false,true);?>
</div></div><div class="form-group row"><label class="col-4 mt-2 u-font-weight-500"><?php echo \App\Language::translate('Assigned To',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</label><div class="col-8 mt-2 u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('assigned_user_id',false,false,true);?>
</div></div><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('shownerid')) {?><div class="form-group row"><label class="col-4 mt-2 u-font-weight-500"><?php echo \App\Language::translate('Share with users',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</label><div class="col-8 mt-2"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('shownerid',false,false,true);?>
</div></div><?php }?></div></div><!-- /tpl-Calendar-ActivityStateContent -->
<?php }
}
