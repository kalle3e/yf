<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 21:15:34
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/menu/Module.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e2d568393c1_55371456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fa1640923d31a5a0f78c1fd561007960b0a3950' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/menu/Module.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e2d568393c1_55371456 (Smarty_Internal_Template $_smarty_tpl) {
?>	<?php if (\App\Module::isModuleActive($_smarty_tpl->tpl_vars['MENU']->value['mod']) && ($_smarty_tpl->tpl_vars['PRIVILEGESMODEL']->value->isAdminUser() || $_smarty_tpl->tpl_vars['PRIVILEGESMODEL']->value->hasGlobalReadPermission() || $_smarty_tpl->tpl_vars['PRIVILEGESMODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['MENU']->value['tabid']))) {
$_smarty_tpl->_assignInScope('ICON', Vtiger_Menu_Model::getMenuIcon($_smarty_tpl->tpl_vars['MENU']->value,Vtiger_Menu_Model::vtranslateMenu($_smarty_tpl->tpl_vars['MENU']->value['name'],$_smarty_tpl->tpl_vars['MENU']->value['mod'])));
if ($_smarty_tpl->tpl_vars['MENU']->value['name'] == $_smarty_tpl->tpl_vars['MODULE']->value) {
$_smarty_tpl->_assignInScope('ACTIVE', 'true');
} else {
$_smarty_tpl->_assignInScope('ACTIVE', 'false');
}?><li class="tpl-menu-Module c-menu__item js-menu__item nav-item modCT_<?php echo $_smarty_tpl->tpl_vars['MENU']->value['mod'];?>
 <?php if (!$_smarty_tpl->tpl_vars['HASCHILDS']->value) {?>hasParentMenu<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
" data-js="mouseenter mouseleave"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == 'true') {?> active<?php } else { ?> collapsed<?php }
if ($_smarty_tpl->tpl_vars['ICON']->value) {?> hasIcon<?php }
if (isset($_smarty_tpl->tpl_vars['MENU']->value['hotkey'])) {?> hotKey<?php }
if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?> js-submenu-toggler is-submenu-toggler<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['MENU']->value['hotkey'])) {?> data-hotkeys="<?php echo $_smarty_tpl->tpl_vars['MENU']->value['hotkey'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?> data-toggle="collapse" data-target="#submenu-<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
" role="button"<?php }?>href="<?php echo $_smarty_tpl->tpl_vars['MENU']->value['dataurl'];?>
"<?php if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?> aria-haspopup="true" aria-expanded="<?php echo $_smarty_tpl->tpl_vars['ACTIVE']->value;?>
" aria-controls="submenu-<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['MENU']->value['newwindow'] == 1) {?>target="_blank" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ICON']->value;?>
<span class="c-menu__item__text js-menu__item__text" title="<?php echo Vtiger_Menu_Model::vtranslateMenu($_smarty_tpl->tpl_vars['MENU']->value['name'],$_smarty_tpl->tpl_vars['MENU']->value['mod']);?>
" data-js="class: u-white-space-n"><?php echo Vtiger_Menu_Model::vtranslateMenu($_smarty_tpl->tpl_vars['MENU']->value['name'],$_smarty_tpl->tpl_vars['MENU']->value['mod']);?>
</span><?php if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?><span class="toggler" aria-hidden="true"><span class="fas fa-plus-circle"></span><span class="fas fa-minus-circle"></span></span><?php }?></a><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('menu/SubMenu.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></li><?php }
}
}