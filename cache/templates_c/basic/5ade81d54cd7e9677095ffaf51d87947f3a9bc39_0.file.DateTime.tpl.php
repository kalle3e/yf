<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 20:34:25
  from '/var/www/html/yeti/layouts/basic/modules/Calendar/Edit/Field/DateTime.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7997211516c9_28583600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ade81d54cd7e9677095ffaf51d87947f3a9bc39' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Calendar/Edit/Field/DateTime.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7997211516c9_28583600 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Calendar-Edit-Field-DateTime --><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() == 'date_start') {
$_smarty_tpl->_assignInScope('DATE_FIELD', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value);
$_smarty_tpl->_assignInScope('MODULE_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule());
$_smarty_tpl->_assignInScope('TIME_FIELD', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField('time_start'));
$_smarty_tpl->_assignInScope('TIME_NAME', 'time_start');
} elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() == 'due_date') {
$_smarty_tpl->_assignInScope('DATE_FIELD', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value);
$_smarty_tpl->_assignInScope('MODULE_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule());
$_smarty_tpl->_assignInScope('TIME_FIELD', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField('time_end'));
$_smarty_tpl->_assignInScope('TIME_NAME', 'time_end');
}
if (empty($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value)) {
$_smarty_tpl->_assignInScope('BLOCK_FIELDS', false);
}
$_smarty_tpl->_assignInScope('DATE_TIME_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));
$_smarty_tpl->_assignInScope('DATE_TIME_COMPONENTS', explode(' ',$_smarty_tpl->tpl_vars['DATE_TIME_VALUE']->value));
if (count($_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value) == 2) {
$_smarty_tpl->_assignInScope('TIME_FIELD', $_smarty_tpl->tpl_vars['TIME_FIELD']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[1]));
} elseif (!empty($_smarty_tpl->tpl_vars['RECORD']->value)) {
$_smarty_tpl->_assignInScope('TIME_FIELD', $_smarty_tpl->tpl_vars['TIME_FIELD']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['TIME_NAME']->value)));
}?>	<?php $_smarty_tpl->_assignInScope('DATE_TIME_CONVERTED_VALUE', DateTimeField::convertToUserTimeZone($_smarty_tpl->tpl_vars['DATE_TIME_VALUE']->value)->format('Y-m-d H:i:s'));
$_smarty_tpl->_assignInScope('DATE_TIME_COMPONENTS', explode(' ',$_smarty_tpl->tpl_vars['DATE_TIME_CONVERTED_VALUE']->value));
$_smarty_tpl->_assignInScope('DATE_FIELD', $_smarty_tpl->tpl_vars['DATE_FIELD']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[0]));?><div class="tpl-Edit-Field-DateTime form-row"><div class="col-12 col-sm-6 col-md-5 mb-3 mb-sm-0 px-1"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/Field/Date.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value,'FIELD_MODEL'=>$_smarty_tpl->tpl_vars['DATE_FIELD']->value), 0, true);
?></div><div class="col-12 col-sm-6 col-md-7 px-1"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/Field/Time.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value,'FIELD_MODEL'=>$_smarty_tpl->tpl_vars['TIME_FIELD']->value), 0, true);
?></div></div><!-- /tpl-Calendar-Edit-Field-DateTime -->
<?php }
}
