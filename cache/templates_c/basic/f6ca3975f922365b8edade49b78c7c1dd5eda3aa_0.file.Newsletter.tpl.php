<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 10:15:23
  from '/var/www/html/yeti/layouts/basic/modules/Settings/SystemWarnings/YetiForce/Newsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f79060b08ce91_20032078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6ca3975f922365b8edade49b78c7c1dd5eda3aa' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Settings/SystemWarnings/YetiForce/Newsletter.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f79060b08ce91_20032078 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-SystemWarnings-YetiForce-Newsletter -->
<h6 class="h3"><?php echo App\Language::translate('LBL_NEWSLETTER','Settings:SystemWarnings');?>
</h6><p><strong><?php echo App\Language::translate('LBL_NEWSLETTER_NO_COMPANY_DATA','Settings:SystemWarnings');?>
</strong></p><p><?php echo App\Language::translate('LBL_EMAIL_NEWSLETTER_INFO','Settings:Companies');?>
</p><form class="validateForm" method="post" action="index.php"><div class="float-right mr-2"><a href="index.php?module=Companies&parent=Settings&view=List&displayModal=online" target="_blank" class="btn btn-success mr-1"><span class="fas fa-check mr-1"></span><?php echo App\Language::translate('LBL_COMPANY_DATA','Settings:SystemWarnings');?>
</a><button type="button" class="btn btn-danger cancel"><span class="fas fa-ban mr-1"></span><?php echo App\Language::translate('LBL_REMIND_LATER','Settings:SystemWarnings');?>
</button></div></form>
<!-- /tpl-Settings-SystemWarnings-YetiForce-Newsletter --><?php }
}
