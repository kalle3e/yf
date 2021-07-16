<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 12:08:24
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/Field/UserRole.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f73e898a3e332_07427701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54285f921a4474246df933e0fd445891da0957d1' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/Field/UserRole.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73e898a3e332_07427701 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Detail-Field-UserRole u-paragraph-m-0">
	<?php $_smarty_tpl->_assignInScope('ROLE_LABEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value));?>
	<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser() && !empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'))) {?>
		<a href="<?php echo Settings_Roles_Record_Model::getInstanceById($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'))->getEditViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['ROLE_LABEL']->value;?>
</a>
	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['ROLE_LABEL']->value;?>

	<?php }?>
</div><?php }
}
