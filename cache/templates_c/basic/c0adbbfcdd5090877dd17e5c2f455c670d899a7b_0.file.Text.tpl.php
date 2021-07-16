<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 21:44:50
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/Field/Text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f85b2a0c1b8_19800803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0adbbfcdd5090877dd17e5c2f455c670d899a7b' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/Field/Text.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f85b2a0c1b8_19800803 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Detail-Field-Text --><?php $_smarty_tpl->_assignInScope('SIZE', 'mini');
if ($_smarty_tpl->tpl_vars['SOURCE_TPL']->value == 'BlockView') {
$_smarty_tpl->_assignInScope('SIZE', 'medium');
}?><div class="u-paragraph-m-0 u-word-break"><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value,false,$_smarty_tpl->tpl_vars['SIZE']->value);?>
</div><!-- /tpl-Detail-Field-Text -->
<?php }
}
