<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 16:15:35
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c3987d5f9e2_84759361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7326f5cce0d010c90c94c0a561ad2ee90cc2e9e9' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/EditView.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c3987d5f9e2_84759361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewBlocks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewActions.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
