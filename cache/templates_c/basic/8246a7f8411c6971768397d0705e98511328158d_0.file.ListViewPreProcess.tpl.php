<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 22:58:23
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/ListViewPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e456f9c9585_92001728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8246a7f8411c6971768397d0705e98511328158d' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/ListViewPreProcess.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e456f9c9585_92001728 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-ListViewPreProcess --><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PageHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="bodyContents"><div class="mainContainer pt-md-0 pt-1"><?php $_smarty_tpl->_assignInScope('BREADCRUMBS_ACTIVE', App\Config::main('breadcrumbs') == 'true');
if ($_smarty_tpl->tpl_vars['BREADCRUMBS_ACTIVE']->value || $_smarty_tpl->tpl_vars['HEADER_LINKS']->value['LIST_VIEW_HEADER']) {?><div class="o-breadcrumb widget_header mb-2 d-flex justify-content-between px-2" data-js="container"><div class="o-breadcrumb__container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="my-auto o-header-toggle__actions js-header-toggle__actions" id="o-view-actions__container"><div class="btn-toolbar btn-group flex-md-nowrap"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEADER_LINKS']->value['LIST_VIEW_HEADER'], 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewHeader','BREAKPOINT'=>'md','CLASS'=>'c-btn-link--responsive'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php }?><div class="contentsDiv<?php if (!$_smarty_tpl->tpl_vars['BREADCRUMBS_ACTIVE']->value || !$_smarty_tpl->tpl_vars['HEADER_LINKS']->value['LIST_VIEW_HEADER']) {?> pt-2<?php }?>"><a class="btn btn-outline-dark d-md-none o-header-toggle__actions-btn js-header-toggle__actions-btn mb-1" href="#" data-js="click" role="button" aria-expanded="false" aria-controls="o-view-actions__container"><span class="fas fa-ellipsis-h fa-fw" title="<?php echo \App\Language::translate('LBL_ACTION_MENU');?>
"></span></a><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewHeader.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><!-- /tpl-Base-ListViewPreProcess -->
<?php }
}
