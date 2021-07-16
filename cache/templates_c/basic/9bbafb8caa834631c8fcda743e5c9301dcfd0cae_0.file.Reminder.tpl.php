<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-20 23:58:54
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Edit/Field/Reminder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8edf0e50e262_80700558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bbafb8caa834631c8fcda743e5c9301dcfd0cae' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Edit/Field/Reminder.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8edf0e50e262_80700558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('REMINDER_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')));
$_smarty_tpl->_assignInScope('TABINDEX', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex());
if ($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value == '') {
$_smarty_tpl->_assignInScope('DAYS', 0);
$_smarty_tpl->_assignInScope('DAY', 0);
$_smarty_tpl->_assignInScope('HOURS', 0);
$_smarty_tpl->_assignInScope('HOUR', 0);
$_smarty_tpl->_assignInScope('MINUTES', 1);
$_smarty_tpl->_assignInScope('MINUTE', 1);
} else {
$_smarty_tpl->_assignInScope('DAY', $_smarty_tpl->tpl_vars['REMINDER_VALUES']->value[0]);
$_smarty_tpl->_assignInScope('HOUR', $_smarty_tpl->tpl_vars['REMINDER_VALUES']->value[1]);
$_smarty_tpl->_assignInScope('MINUTE', $_smarty_tpl->tpl_vars['REMINDER_VALUES']->value[2]);
}?><div class="tpl-Edit-Field-Reminder d-flex flex-nowrap js-reminder-field-element" data-js="container"><div class="checkbox"><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" value="0" type="hidden"><label class="d-flex align-items-baseline"><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" value="1" type="checkbox" class="js-reminder-field-checkbox" <?php if ($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value != '') {?>checked="checked"<?php }?> tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
"title="<?php echo \App\Language::translate('Send Reminder',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-js="checked"/>&nbsp;&nbsp;</label></div><div class="<?php if ($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value != '') {?>show<?php } else { ?>d-none<?php }?> row w-100 js-reminder-field-row"data-js="class:d-none"><div class="col-4"><div><select class="select2" name="remdays" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
"	title="<?php echo \App\Language::translate('LBL_REMAIND_DAYS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_smarty_tpl->tpl_vars['DAYS'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['DAYS']->step = 1;$_smarty_tpl->tpl_vars['DAYS']->total = (int) ceil(($_smarty_tpl->tpl_vars['DAYS']->step > 0 ? 31+1 - (0) : 0-(31)+1)/abs($_smarty_tpl->tpl_vars['DAYS']->step));
if ($_smarty_tpl->tpl_vars['DAYS']->total > 0) {
for ($_smarty_tpl->tpl_vars['DAYS']->value = 0, $_smarty_tpl->tpl_vars['DAYS']->iteration = 1;$_smarty_tpl->tpl_vars['DAYS']->iteration <= $_smarty_tpl->tpl_vars['DAYS']->total;$_smarty_tpl->tpl_vars['DAYS']->value += $_smarty_tpl->tpl_vars['DAYS']->step, $_smarty_tpl->tpl_vars['DAYS']->iteration++) {
$_smarty_tpl->tpl_vars['DAYS']->first = $_smarty_tpl->tpl_vars['DAYS']->iteration === 1;$_smarty_tpl->tpl_vars['DAYS']->last = $_smarty_tpl->tpl_vars['DAYS']->iteration === $_smarty_tpl->tpl_vars['DAYS']->total;?><option value="<?php echo $_smarty_tpl->tpl_vars['DAYS']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['DAYS']->value == $_smarty_tpl->tpl_vars['DAY']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DAYS']->value;?>
</option><?php }
}
?></select></div><div class="float-left mt-1 px-1"><?php echo \App\Language::translate('LBL_DAYS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><div class="col-4"><div><select class="select2" name="remhrs" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" title="<?php echo \App\Language::translate('LBL_REMAIND_HOURS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_smarty_tpl->tpl_vars['HOURS'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['HOURS']->step = 1;$_smarty_tpl->tpl_vars['HOURS']->total = (int) ceil(($_smarty_tpl->tpl_vars['HOURS']->step > 0 ? 23+1 - (0) : 0-(23)+1)/abs($_smarty_tpl->tpl_vars['HOURS']->step));
if ($_smarty_tpl->tpl_vars['HOURS']->total > 0) {
for ($_smarty_tpl->tpl_vars['HOURS']->value = 0, $_smarty_tpl->tpl_vars['HOURS']->iteration = 1;$_smarty_tpl->tpl_vars['HOURS']->iteration <= $_smarty_tpl->tpl_vars['HOURS']->total;$_smarty_tpl->tpl_vars['HOURS']->value += $_smarty_tpl->tpl_vars['HOURS']->step, $_smarty_tpl->tpl_vars['HOURS']->iteration++) {
$_smarty_tpl->tpl_vars['HOURS']->first = $_smarty_tpl->tpl_vars['HOURS']->iteration === 1;$_smarty_tpl->tpl_vars['HOURS']->last = $_smarty_tpl->tpl_vars['HOURS']->iteration === $_smarty_tpl->tpl_vars['HOURS']->total;?><option value="<?php echo $_smarty_tpl->tpl_vars['HOURS']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['HOURS']->value == $_smarty_tpl->tpl_vars['HOUR']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['HOURS']->value;?>
</option><?php }
}
?></select></div><div class="float-left mt-1 px-1"><?php echo \App\Language::translate('LBL_HOURS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><div class="col-4"><div><select class="select2" name="remmin" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" title="<?php echo \App\Language::translate('LBL_REMAIND_MINS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_smarty_tpl->tpl_vars['MINUTES'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['MINUTES']->step = 1;$_smarty_tpl->tpl_vars['MINUTES']->total = (int) ceil(($_smarty_tpl->tpl_vars['MINUTES']->step > 0 ? 59+1 - (1) : 1-(59)+1)/abs($_smarty_tpl->tpl_vars['MINUTES']->step));
if ($_smarty_tpl->tpl_vars['MINUTES']->total > 0) {
for ($_smarty_tpl->tpl_vars['MINUTES']->value = 1, $_smarty_tpl->tpl_vars['MINUTES']->iteration = 1;$_smarty_tpl->tpl_vars['MINUTES']->iteration <= $_smarty_tpl->tpl_vars['MINUTES']->total;$_smarty_tpl->tpl_vars['MINUTES']->value += $_smarty_tpl->tpl_vars['MINUTES']->step, $_smarty_tpl->tpl_vars['MINUTES']->iteration++) {
$_smarty_tpl->tpl_vars['MINUTES']->first = $_smarty_tpl->tpl_vars['MINUTES']->iteration === 1;$_smarty_tpl->tpl_vars['MINUTES']->last = $_smarty_tpl->tpl_vars['MINUTES']->iteration === $_smarty_tpl->tpl_vars['MINUTES']->total;?><option value="<?php echo $_smarty_tpl->tpl_vars['MINUTES']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MINUTES']->value == $_smarty_tpl->tpl_vars['MINUTE']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['MINUTES']->value;?>
</option><?php }
}
?></select></div><div class="float-left mt-1 px-1"><?php echo \App\Language::translate('LBL_MINUTES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div></div></div>
<?php }
}
