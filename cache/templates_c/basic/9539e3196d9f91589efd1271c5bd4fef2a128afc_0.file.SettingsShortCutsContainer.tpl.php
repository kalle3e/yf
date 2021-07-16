<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 10:15:23
  from '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/DashBoard/SettingsShortCutsContainer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f79060b144593_67738931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9539e3196d9f91589efd1271c5bd4fef2a128afc' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/DashBoard/SettingsShortCutsContainer.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f79060b144593_67738931 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Base-DashBoard-SettingsShortCutsContainer --><div class="js-shortcuts pt-0 px-0 pb-3 d-flex flex-wrap" data-js="container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUTS']->value, 'SETTINGS_SHORTCUT');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/SettingsShortCut.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><!-- /tpl-Settings-Base-DashBoard-SettingsShortCutsContainer -->
<?php }
}
