<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 20:19:30
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/NoComments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7ed9a22099c7_14025360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ed2921d9e21a98fdc531ca423d401f878b5d07' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/NoComments.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7ed9a22099c7_14025360 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-NoComments js-no-comments-msg-container summaryWidgetContainer p-md-2 p-1" data-js="container"><p class="textAlignCenter"> <?php echo \App\Language::translate('LBL_NO_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div>
<?php }
}
