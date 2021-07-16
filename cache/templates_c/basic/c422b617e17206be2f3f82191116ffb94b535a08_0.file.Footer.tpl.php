<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 21:15:34
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e2d56b67260_40908521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c422b617e17206be2f3f82191116ffb94b535a08' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Footer.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e2d56b67260_40908521 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Footer --></div></div></div></div></div></div></div><input class="tpl-Footer d-none noprint" type="hidden" id="activityReminder" value="<?php echo $_smarty_tpl->tpl_vars['ACTIVITY_REMINDER']->value;?>
"/><?php if ($_smarty_tpl->tpl_vars['SHOW_FOOTER_BAR']->value) {
$_smarty_tpl->_assignInScope('DISABLE_BRANDING', \App\YetiForce\Shop::check('YetiForceDisableBranding'));
if ($_smarty_tpl->tpl_vars['DISABLE_BRANDING']->value) {
$_smarty_tpl->_assignInScope('URL_LINKEDIN', \App\Config::component('Branding','urlLinkedIn'));
$_smarty_tpl->_assignInScope('URL_TWITTER', \App\Config::component('Branding','urlTwitter'));
$_smarty_tpl->_assignInScope('URL_FACEBOOK', \App\Config::component('Branding','urlFacebook'));
$_smarty_tpl->_assignInScope('URL_GITHUB', null);
$_smarty_tpl->_assignInScope('FOOTER_NAME', \App\Config::component('Branding','footerName'));
} else {
$_smarty_tpl->_assignInScope('URL_LINKEDIN', 'https://www.linkedin.com/groups/8177576');
$_smarty_tpl->_assignInScope('URL_TWITTER', 'https://twitter.com/YetiForceEN');
$_smarty_tpl->_assignInScope('URL_FACEBOOK', 'https://www.facebook.com/YetiForce-CRM-158646854306054/');
$_smarty_tpl->_assignInScope('URL_GITHUB', 'https://github.com/YetiForceCompany/YetiForceCRM');
}?><footer class="c-footer fixed-bottom js-footer<?php if (App\Config::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?> c-footer--user-info-active<?php }?> <?php if ($_smarty_tpl->tpl_vars['DISABLE_BRANDING']->value) {?> c-footer--limited <?php }?>" data-js="height"><?php if (App\Config::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?><div class="js-footer__user-info c-footer__user-info"><p><span class="mr-1"> <?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</span>(<span><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('email1');?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('phone_crm_extension'))) {?>,<span class="ml-1"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('phone_crm_extension');?>
</span><?php }?>)</p></div><?php }?><div class="container-fluid px-0 px-md-1"><ul class="float-left pagination border-0"><?php if (!empty($_smarty_tpl->tpl_vars['URL_LINKEDIN']->value)) {?><li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['URL_LINKEDIN']->value;?>
" target="_blank" rel="noreferrer noopener"><span class="fab fa-linkedin fa-2x" title="Linkedin"></span></a></li><?php }
if (!empty($_smarty_tpl->tpl_vars['URL_TWITTER']->value)) {?><li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['URL_TWITTER']->value;?>
" target="_blank" rel="noreferrer noopener"><span class="fab fa-twitter-square fa-2x" title="Twitter"></span></a></li><?php }
if (!empty($_smarty_tpl->tpl_vars['URL_FACEBOOK']->value)) {?><li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['URL_FACEBOOK']->value;?>
" target="_blank" rel="noreferrer noopener"><span class="fab fa-facebook-square fa-2x" title="Facebook"></span></a></li><?php }
if (!empty($_smarty_tpl->tpl_vars['URL_GITHUB']->value)) {?><li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['URL_GITHUB']->value;?>
" target="_blank" rel="noreferrer noopener"><span class="fab fa-github-square fa-2x" title="Github"></span></a></li><?php }?></ul><div class="float-right p-0"><ul class="pagination"><?php if (!\App\YetiForce\Register::verify(true)) {
if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {
ob_start();
echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION_CHECK_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_assignInScope('INFO_REGISTRATION_ERROR', "<a href='index.php?module=Companies&parent=Settings&view=List&displayModal=online'>".$_prefixVariable6."</a>");
} else {
$_smarty_tpl->_assignInScope('INFO_REGISTRATION_ERROR', \App\Language::translate('LBL_YETIFORCE_REGISTRATION_CHECK_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
}?><a class="d-flex align-items-center text-center text-warning p-0 mr-2 text-danger js-popover-tooltip c-header__btn" role="button" data-content="<?php echo \App\Language::translateArgs('LBL_YETIFORCE_REGISTRATION_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['INFO_REGISTRATION_ERROR']->value);?>
"title="<?php echo \App\Purifier::encodeHtml('<span class="yfi yfi-yeti-register-alert mr-1"></span>');
echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?>href="index.php?parent=Settings&module=Companies&view=List&displayModal=online"<?php } else { ?>href="#"<?php }?> ><span class="yfi yfi-yeti-register-alert fa-2x"></span></a><?php }
if (!\App\YetiForce\Shop::verify()) {?><a class="d-flex align-items-center text-warning mr-2 js-popover-tooltip flash infinite slower" role="button" data-content="<?php echo \App\Language::translate('LBL_YETIFORCE_SHOP_PRODUCT_CANCELED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<hr><?php echo \App\YetiForce\Shop::$verifyProduct;?>
" title="<?php echo \App\Purifier::encodeHtml('<span class="yfi yfi-shop-alert mr-1"></span>');
echo \App\Language::translate('LBL_YETIFORCE_SHOP');?>
"<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?>href="index.php?module=YetiForce&parent=Settings&view=Shop"<?php } else { ?>href="#"<?php }?> ><span class="yfi yfi-shop-alert fa-2x"></span></a><?php }
if (!$_smarty_tpl->tpl_vars['DISABLE_BRANDING']->value) {?><li class="page-item"><a class="page-link mr-md-1" href="https://yetiforce.shop" rel="noreferrer noopener"><span class="fas fa-shopping-cart fa-2x" title="yetiforce.shop"></span></a></li><li class="page-item u-cursor-pointer"><a class="page-link" data-toggle="modal" href="#" role="button" data-target="#yetiforceDetails"><span class="fas fa-info-circle fa-2x" title="YetiForceCRM"></span></a></li><?php }?></ul></div><div class="mx-auto w-75"><?php $_smarty_tpl->_assignInScope('SCRIPT_TIME', round(microtime(true)-\App\Process::$startTime,3));
$_smarty_tpl->_assignInScope('FOOTVR', (((((('[ver. ').($_smarty_tpl->tpl_vars['YETIFORCE_VERSION']->value)).('] [')).(\App\Language::translate('WEBLOADTIME'))).(': ')).($_smarty_tpl->tpl_vars['SCRIPT_TIME']->value)).('s.]'));
if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {
$_smarty_tpl->_assignInScope('FOOTVRM', (('[').($_smarty_tpl->tpl_vars['SCRIPT_TIME']->value)).('s.]'));
$_smarty_tpl->_assignInScope('FOOTOSP', '<em><a class="u-text-underline" href="index.php?module=Vtiger&view=Credits&parent=Settings">open source project</a></em>');?><p class="text-center text-center"><?php if (!$_smarty_tpl->tpl_vars['DISABLE_BRANDING']->value) {?><span class="d-none d-sm-inline ">Copyright &copy; YetiForce.com All rights reserved. <?php echo $_smarty_tpl->tpl_vars['FOOTVR']->value;?>
<br/><?php echo \App\Language::translateArgs('LBL_FOOTER_CONTENT','_Base',$_smarty_tpl->tpl_vars['FOOTOSP']->value);?>
</span><span class="d-inline d-sm-none text-center">&copy; YetiForce.com All rights reserved.</span><?php } else {
echo $_smarty_tpl->tpl_vars['FOOTER_NAME']->value;?>
 [<?php echo \App\Language::translate('WEBLOADTIME');?>
: <?php echo $_smarty_tpl->tpl_vars['SCRIPT_TIME']->value;?>
s.]<?php }?></p><?php } else { ?><p class="text-center"><?php if (!$_smarty_tpl->tpl_vars['DISABLE_BRANDING']->value) {?><span class="d-none d-sm-inline">Copyright &copy; YetiForce.com All rights reserved.[<?php echo \App\Language::translate('WEBLOADTIME');?>
: <?php echo $_smarty_tpl->tpl_vars['SCRIPT_TIME']->value;?>
s.]<br/><?php echo \App\Language::translateArgs('LBL_FOOTER_CONTENT','_Base','open source project');?>
</span><span class="d-inline d-sm-none text-center">&copy; YetiForce.com All rights reserved.</span><?php } else {
echo $_smarty_tpl->tpl_vars['FOOTER_NAME']->value;?>
 [<?php echo \App\Language::translate('WEBLOADTIME');?>
: <?php echo $_smarty_tpl->tpl_vars['SCRIPT_TIME']->value;?>
s.]<?php }?></p><?php }?></div></div></footer><div class="modal fade" id="yetiforceDetails" tabindex="-1" role="dialog" aria-labelledby="yetiforceDetails"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="myModalLabel">YetiForceCRM <?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?>v<?php echo $_smarty_tpl->tpl_vars['YETIFORCE_VERSION']->value;
}?> - The best opensystem in the world</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><p class="text-center"><img class="u-h-120px" src="<?php echo App\Layout::getPublicUrl('layouts/resources/Logo/blue_yetiforce_logo.png');?>
"title="YetiForceCRM" alt="YetiForceCRM"/></p><p>Copyright © YetiForce.com All rights reserved.</p><p>The Program is provided AS IS, without warranty. Licensed under <a href="https://github.com/YetiForceCompany/YetiForceCRM/blob/developer/licenses/LicenseEN.txt" target="_blank" rel="noreferrer noopener"><strong>YetiForce Public License3.0</strong></a>.</p><p>YetiForce is based on two systems - <strong>VtigerCRM</strong> and <strong>SugarCRM</strong>.<br/><br/></p><div class="u-word-break"><p><span class="badge badge-secondary">License:</span> <a href="https://github.com/YetiForceCompany/YetiForceCRM/blob/developer/licenses/LicenseEN.txt" target="_blank" rel="noreferrer noopener"><strong>YetiForce Public License3.0</strong></a></p><p><span class="badge badge-primary">WWW:</span> <a href="https://yetiforce.com" target="_blank" rel="noreferrer noopener"><strong>https://yetiforce.com</strong></a></p><p><span class="badge badge-success">Code:</span> <a href="https://github.com/YetiForceCompany/YetiForceCRM" target="_blank" rel="noreferrer noopener"><strong>https://github.com/YetiForceCompany/YetiForceCRM</strong></a></p><p><span class="badge badge-info">Documentation:</span> <a href="https://yetiforce.com/en/knowledge-base/documentation" target="_blank" rel="noreferrer noopener"><strong>https://yetiforce.com/en/documentation.html</strong></a></p><p><span class="badge badge-warning">Issues:</span> <a href="https://github.com/YetiForceCompany/YetiForceCRM/issues" target="_blank" rel="noreferrer noopener"><strong>https://github.com/YetiForceCompany/YetiForceCRM/issues</strong></a></p><p><span class="badge badge-primary">Shop:</span> <a href="https://yetiforce.shop/" target="_blank" rel="noreferrer noopener"><strong>https://yetiforce.shop/</strong></a></p></div><ul class="text-center list-inline"><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer noopener" href="https://www.linkedin.com/groups/8177576"><span class="fab fa-linkedin" title="LinkendIn"></span></a></li><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer noopener" href="https://twitter.com/YetiForceEN"><span class="fab fa-twitter-square" title="Twitter"></span></a></li><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer noopener" href="https://www.facebook.com/YetiForce-CRM-158646854306054/"><span class="fab fa-facebook-square" title="Facebook"></span></a></li><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer noopener" href="https://github.com/YetiForceCompany/YetiForceCRM"><span class="fab fa-github-square" title="Github"></span></a></li></ul></div><div class="modal-footer"><button class="btn btn-danger" type="reset" data-dismiss="modal"><span class="fa fa-times u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button></div></div></div></div><?php }?><!-- /tpl-Base-Footer -->
<?php }
}
