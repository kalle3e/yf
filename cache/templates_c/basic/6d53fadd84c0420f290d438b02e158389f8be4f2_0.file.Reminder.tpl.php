<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-21 00:03:26
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/Field/Reminder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8ee01e50ed34_82773104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d53fadd84c0420f290d438b02e158389f8be4f2' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/Field/Reminder.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8ee01e50ed34_82773104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('REMINDER_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value));?><div class="tpl-Detail-Field-Reminder"><?php if ($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value == '') {
echo \App\Language::translate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);
} else {
echo $_smarty_tpl->tpl_vars['REMINDER_VALUES']->value;
echo \App\Language::translate('LBL_BEFORE_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);
}?></div>
<?php }
}
