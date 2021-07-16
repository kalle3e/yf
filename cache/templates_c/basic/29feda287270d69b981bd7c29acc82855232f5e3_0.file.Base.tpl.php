<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 21:44:50
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/Field/Base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f85b2852a51_05336583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29feda287270d69b981bd7c29acc82855232f5e3' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/Field/Base.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f85b2852a51_05336583 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Detail-Field-Base u-paragraph-m-0 u-word-break">
<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>

</div>
<?php }
}
