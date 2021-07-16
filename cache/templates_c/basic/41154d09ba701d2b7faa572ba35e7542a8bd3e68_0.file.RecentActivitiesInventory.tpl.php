<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 21:44:51
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/RecentActivitiesInventory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f85b3d10ca9_94537830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41154d09ba701d2b7faa572ba35e7542a8bd3e68' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/RecentActivitiesInventory.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f85b3d10ca9_94537830 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getParent()->getModule()->isInventory() && $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getInventoryChanges()) {
$_smarty_tpl->_assignInScope('INVENTORY', Vtiger_Inventory_Model::getInstance($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getParent()->getModuleName()));
$_smarty_tpl->_assignInScope('FIELD', $_smarty_tpl->tpl_vars['INVENTORY']->value->getField('name'));?><div class='font-x-small updateInfoContainer'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getInventoryChanges(), 'CHANGES', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['CHANGES']->value) {
$_smarty_tpl->_assignInScope('SHOW_NAME', true);
$_smarty_tpl->_assignInScope('ROW', array('name'=>$_smarty_tpl->tpl_vars['CHANGES']->value['item']));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CHANGES']->value['data'], 'CHANGE', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['CHANGE']->value) {
if (!$_smarty_tpl->tpl_vars['CHANGE']->value['field']->isVisible()) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['SHOW_NAME']->value) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['CHANGES']->value['historyState'],'ModTracker');?>
 <?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['CHANGES']->value['item']);
$_smarty_tpl->_assignInScope('SHOW_NAME', false);
}?><div class="ml-2"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CHANGE']->value['field']->get('label'),$_smarty_tpl->tpl_vars['CHANGE']->value['field']->getModuleName());?>
:<?php if (isset($_smarty_tpl->tpl_vars['CHANGE']->value['prevalue'])) {?><strong class="ml-1 mr-1"><?php echo $_smarty_tpl->tpl_vars['CHANGE']->value['field']->getDisplayValue($_smarty_tpl->tpl_vars['CHANGE']->value['prevalue'],$_smarty_tpl->tpl_vars['ROW']->value);?>
</strong><?php }
if ($_smarty_tpl->tpl_vars['CHANGES']->value['historyState'] == 'LBL_INV_UPDATED') {
echo \App\Language::translate('LBL_TO');
}
if (isset($_smarty_tpl->tpl_vars['CHANGE']->value['postvalue'])) {?><strong class="ml-1"><?php echo $_smarty_tpl->tpl_vars['CHANGE']->value['field']->getDisplayValue($_smarty_tpl->tpl_vars['CHANGE']->value['postvalue'],$_smarty_tpl->tpl_vars['ROW']->value);?>
</strong><?php }?></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
}
