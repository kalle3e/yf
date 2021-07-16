<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 10:15:23
  from '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/DashBoard/SettingsShortCut.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f79060b159775_28759889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4858180f734437246e56e876e42345dd68fbab87' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/DashBoard/SettingsShortCut.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f79060b159775_28759889 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="tpl-Settings-Base-DashBoard-SettingsShortCut dashboardWidget text-black js-shortcut c-menu-shortcut bg-white u-bg-white-darken u-cursor-pointer px-1 py-2 mt-3 mr-3 flex-grow-1 u-w-max-320px" id="shortcut_<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" data-actionurl="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getPinUnpinActionUrl();?>
"href="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getUrl();?>
" data-js="container | remove"><div class="d-flex flex-nowrap"><div class="u-font-size-38px my-auto px-1"><span class="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('iconpath');?>
"></span></div><div class="d-flex flex-column px-1 w-100 position-relative"><div class="d-flex position-relative"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/WidgetTitle.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('CLASS'=>'themeTextColor pr-1','TITLE'=>\App\Language::translate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('name'),Vtiger_Menu_Model::getModuleNameFromUrl($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('linkto')))), 0, true);
?><button data-id="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
"title="<?php echo \App\Language::translate('LBL_REMOVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="Close" type="button" class="unpin close position-absolute u-font-weight-550 u-position-r-0 px-0 ml-auto mt-n2 mr-n2"><span>&times;</span></button></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/WidgetDescription.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('CLASS'=>'pr-1','DESCRIPTION'=>\App\Language::translate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description'),Vtiger_Menu_Model::getModuleNameFromUrl($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('linkto')))), 0, true);
?><span class="fas fa-ellipsis-v position-absolute text-muted u-position-r-0 u-cursor-grab mt-4 pl-2 js-drag-handler"></span></div></div></a>
<?php }
}
