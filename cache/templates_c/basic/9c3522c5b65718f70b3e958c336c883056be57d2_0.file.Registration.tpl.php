<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 10:15:23
  from '/var/www/html/yeti/layouts/basic/modules/Settings/SystemWarnings/YetiForce/Registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f79060b0815c9_11896866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c3522c5b65718f70b3e958c336c883056be57d2' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Settings/SystemWarnings/YetiForce/Registration.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f79060b0815c9_11896866 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-SystemWarnings-YetiForce-Registration -->
<h6 class="h3"><?php echo App\Language::translate('LBL_REGISTRATION','Settings:SystemWarnings');?>
</h6><p><?php ob_start();
echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION_CHECK_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_prefixVariable5=ob_get_clean();
echo \App\Language::translateArgs('LBL_YETIFORCE_REGISTRATION_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,"<a href=\"index.php?module=Companies&parent=Settings&view=List&displayModal=online\">".$_prefixVariable5."</a>");?>
</p><form class="validateForm" method="post" action="index.php"><div class="float-right mr-2"><a href="index.php?module=Companies&parent=Settings&view=List&displayModal=online" target="_blank" class="btn btn-success mr-1"><span class="fas fa-check mr-1"></span><?php echo App\Language::translate('LBL_COMPANY_DATA','Settings:SystemWarnings');?>
</a><button type="button" class="btn btn-danger cancel"><span class="fas fa-ban mr-1"></span><?php echo App\Language::translate('LBL_REMIND_LATER','Settings:SystemWarnings');?>
</button></div></form>
<!-- /tpl-Settings-SystemWarnings-YetiForce-Registration --><?php }
}
