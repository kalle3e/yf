<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 21:15:34
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/dashboards/DashBoardButtons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e2d56a9e1f1_67601316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '739bb3cb7ff26932a4bfc8af3fbae21f09abfd55' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/dashboards/DashBoardButtons.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e2d56a9e1f1_67601316 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dashboardHeading d-flex ml-auto mb-2 mt-sm-2 pr-sm-1 u-remove-dropdown-icon-down-lg u-w-xs-down-100"><input type="hidden" name="selectedModuleName" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php $_smarty_tpl->_assignInScope('SPECIAL_WIDGETS', Settings_WidgetsManagement_Module_Model::getSpecialWidgets('Home'));
if ($_smarty_tpl->tpl_vars['MODULE_PERMISSION']->value) {?><div class="js-predefined-widgets" data-js="container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardWidgetsList.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php }
if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModuleActionPermission($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId(),'CreateDashboardFilter')) {?><button class="btn btn-outline-secondary c-btn-block-xs-down addFilter ml-1" data-linkid="<?php echo $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Mini List']->get('linkid');?>
" data-block-id="0" data-width="4" data-height="4"><span class="fas fa-filter mr-md-1"></span><span class="d-none d-md-inline"><?php echo \App\Language::translate('LBL_ADD_FILTER');?>
</span></button><?php }
if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModuleActionPermission($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId(),'CreateDashboardChartFilter')) {?><button class="btn btn-outline-secondary c-btn-block-xs-down addChartFilter ml-1" data-linkid="<?php echo $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['ChartFilter']->get('linkid');?>
" data-block-id="0" data-width="4" data-height="4"><span class="fas fa-chart-pie mr-md-1"></span><span class="d-none d-md-inline"><?php echo \App\Language::translate('LBL_ADD_CHART_FILTER');?>
</span></button><?php }?></div>
<?php }
}
