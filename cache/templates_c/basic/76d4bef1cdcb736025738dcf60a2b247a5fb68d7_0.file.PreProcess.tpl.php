<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-03 11:49:50
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Calendar/PreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f504bbe3fb712_36199785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76d4bef1cdcb736025738dcf60a2b247a5fb68d7' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Calendar/PreProcess.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f504bbe3fb712_36199785 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Calendar-PreProcess --><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PageHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="c-calendar-view js-calendar--scroll h-100"><div class="mainContainer pt-md-0 pt-1"><div class="o-breadcrumb widget_header d-flex justify-content-between align-items-center px-2 flex-column flex-sm-row" data-js="height"><div class="mr-auto"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div id="centerPanel" class="contentsDiv js-contents-div" data-js="css"><!-- /tpl-Base-Calendar-PreProcess -->
<?php }
}
