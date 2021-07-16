<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 10:15:23
  from '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f79060b04aed0_96983175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f22e8ef4b4bad04550433916e544c744862b9ef' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/Index.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f79060b04aed0_96983175 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Base-Index --><?php if ($_smarty_tpl->tpl_vars['WARNINGS']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/SystemWarningAletrs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?><div class="o-settings-dashboard js-dashboard-container pt-2 h-100" data-js="container"><div class="container-fluid h-100 px-0"><div class="c-panel c-panel--collapsible c-panel--white"><div class="c-panel__header collapsed" id="marketplace" data-toggle="collapse" data-target="#marketplace-collapse" aria-expanded="false" aria-controls="marketplace-collapse"><span class="mdi mdi-chevron-up mx-2 u-font-size-26" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span><div class="c-mds-input input-group"><input type="text" class="js-shop-search form-control form-control-sm u-max-w-250px ml-auto u-outline-none" aria-label="<?php echo \App\Language::translate('LBL_SEARCH_PLACEHOLDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"placeholder="<?php echo \App\Language::translate('LBL_SEARCH_PLACEHOLDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"aria-describedby="<?php echo \App\Language::translate('LBL_SEARCH_PLACEHOLDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><div class="input-group-append pl-1 d-none d-xsm-flex align-items-center"><span class="fas fa-search fa-sm  " id="<?php echo \App\Language::translate('LBL_SEARCH_PLACEHOLDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></div></div><div class="c-panel__title"><span class="yfi yfi-marketplace"></span><h5><?php echo \App\Language::translate('LBL_SHOP_MARKETPLACE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></div></div><div id="marketplace-collapse" class="js-collapse collapse multi-collapse" aria-labelledby="marketplace"><div class="c-panel__body px-3 js-products-container"><div class="c-text-divider mb-3"><hr class="c-text-divider__line u-text-gray" /></div><nav><div class="o-shop__nav nav nav-under mt-3" role="tablist"><a class="o-shop__nav__item nav-item nav-link active" id="nav-premium-tab" data-toggle="tab" href="#nav-premium" role="tab" aria-controls="nav-premium" aria-selected="true"><span class="yfi yfi-for-admin"></span><?php echo \App\Language::translate('LBL_PREMIUM_ZONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><a class="o-shop__nav__item nav-item nav-link" id="nav-partner-tab" data-toggle="tab" href="#nav-partner" role="tab" aria-controls="nav-partner" aria-selected="false" data-js="data"><span class="yfi yfi-for-partners"></span><?php echo \App\Language::translate('LBL_PARTNER_ZONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></nav><div class="tab-content"><div class="tab-pane fade show active" id="nav-premium" role="tabpanel" aria-labelledby="nav-premium-tab"><div class="alert alert-info alert-dismissible fade show mt-3 mb-0" role="alert"><?php echo \App\Language::translate('LBL_SHOP_INFORMATION','Settings::YetiForce');?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/PremiumZone.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="tab-pane fade js-department" data-department="Partner" id="nav-partner" role="tabpanel" aria-labelledby="nav-partner-tab"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/PartnerZone.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div></div></div><div class="c-panel c-panel--collapsible c-panel--white"><div class="c-panel__header collapsed" id="system-monitoring" data-toggle="collapse" data-target="#system-monitoring-collapse" aria-expanded="false" aria-controls="system-monitoring-collapse"><span class="mdi mdi-chevron-up mx-2 u-font-size-26" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span><div class="c-panel__title"><span class="yfi yfi-system-monitoring"></span><h5><?php echo \App\Language::translate('LBL_SYSTEM_MONITORING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></div></div><div id="system-monitoring-collapse" class="js-collapse collapse multi-collapse" aria-labelledby="system-monitoring"><div class="c-panel__body px-3"><div class="c-text-divider mb-3"><hr class="c-text-divider__line u-text-gray" /></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/SystemMonitoring.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div><div class="c-panel c-panel--collapsible c-panel--white"><div class="c-panel__header collapsed" id="my-shortcuts" data-toggle="collapse" data-target="#my-shortcuts-collapse" aria-expanded="false" aria-controls="my-shortcuts-collapse"><span class="mdi mdi-chevron-up mx-2 u-font-size-26" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span><div class="c-panel__title"><span class="yfi yfi-my-shortcuts"></span><h5><?php echo \App\Language::translate('LBL_SETTINGS_SHORT_CUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></div></div><div id="my-shortcuts-collapse" class="js-collapse collapse multi-collapse" aria-labelledby="my-shortcuts"><div class="c-panel__body px-3"><div class="c-text-divider mb-3"><hr class="c-text-divider__line u-text-gray" /></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/SettingsShortCutsContainer.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div></div></div><!-- /tpl-Settings-Base-Index -->
<?php }
}
