<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 13:46:43
  from '/var/www/html/yeti/layouts/basic/modules/HelpDesk/QuickCreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb33993518870_78844180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '845dffb3242ab62749e03d9b8827048b1c91deb6' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/HelpDesk/QuickCreate.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb33993518870_78844180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('QuickCreate.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><input value="<?php echo \App\Config::module($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'CHECK_IF_RECORDS_HAS_TIME_CONTROL');?>
" type="hidden" id="checkIfRecordHasTimeControl"><input value="<?php echo \App\Config::module($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'CHECK_IF_RELATED_TICKETS_ARE_CLOSED');?>
" type="hidden" id="checkIfRelatedTicketsAreClosed"><input value='<?php echo \App\Purifier::encodeHtml(\App\Json::encode(array_flip(\App\RecordStatus::getStates($_smarty_tpl->tpl_vars['MODULE_NAME']->value,\App\RecordStatus::RECORD_STATE_CLOSED))));?>
' type="hidden" id="closeTicketForStatus">
<?php }
}
