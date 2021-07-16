<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 10:15:19
  from '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/SettingsMenuStart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f790607aa3a21_73687271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20463c1bac2f8dcafb9793f9724b99f7871d8d95' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/SettingsMenuStart.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f790607aa3a21_73687271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PageHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="bodyContents"><?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser() && !\App\YetiForce\Register::verify(true)) {?><div class="o-register-error bg-danger text-white u-font-weight-700 w-100 pb-1 pt-1 justify-content-center d-flex js-popover-tooltip--ellipsis-icon" data-content="<?php ob_start();
echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION_CHECK_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_prefixVariable1=ob_get_clean();
echo \App\Language::translateArgs('LBL_YETIFORCE_REGISTRATION_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,"<a href='index.php?module=Companies&parent=Settings&view=List&displayModal=online'>".$_prefixVariable1."</a>");?>
"data-toggle="popover" data-js="popover | mouseenter"><div class="text-truncate px-1"><span class="fas fa-exclamation-triangle mr-2" title="<?php echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span><?php ob_start();
echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION_CHECK_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_prefixVariable2=ob_get_clean();
echo \App\Language::translateArgs('LBL_YETIFORCE_REGISTRATION_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,"<a href=\"index.php?module=Companies&parent=Settings&view=List&displayModal=online\">".$_prefixVariable2."</a>");?>
</div><span class="js-popover-icon d-none mr-1" data-js="class: d-none"><span class="fas fa-info-circle fa-sm"></span></span></div><?php }
if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser() && (!\App\YetiForce\Register::verify(true) || !\App\SystemWarnings\YetiForce\Newsletter::emailProvided())) {?><div class="o-register-warning bg-warning text-white u-font-weight-700 w-100 pb-1 pt-1 justify-content-center d-flex js-popover-tooltip--ellipsis-icon" data-content="<?php ob_start();
echo \App\Language::translate('LBL_YETIFORCE_NEWSLETTER_FILL_DATA',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_prefixVariable3=ob_get_clean();
echo \App\Language::translateArgs('LBL_YETIFORCE_NEWSLETTER_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,"<a href='index.php?module=Companies&parent=Settings&view=List&displayModal=online'>".$_prefixVariable3."</a>");?>
"data-toggle="popover" data-js="popover | mouseenter"><div class="text-truncate px-1"><span class="fas fa-exclamation-triangle mr-2" title="<?php echo \App\Language::translate('LBL_YETIFORCE_NEWSLETTER',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span><?php ob_start();
echo \App\Language::translate('LBL_YETIFORCE_NEWSLETTER_FILL_DATA',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_prefixVariable4=ob_get_clean();
echo \App\Language::translateArgs('LBL_YETIFORCE_NEWSLETTER_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,"<a href=\"index.php?module=Companies&parent=Settings&view=List&displayModal=online\">".$_prefixVariable4."</a>");?>
</div><span class="js-popover-icon d-none mr-1" data-js="class: d-none"><span class="fas fa-info-circle fa-sm"></span></span></div><?php }?><div class="mainContainer"><div class="contentsDiv">
<?php }
}
