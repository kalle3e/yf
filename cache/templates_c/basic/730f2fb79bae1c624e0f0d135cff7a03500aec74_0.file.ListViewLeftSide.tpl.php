<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 21:44:04
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/ListViewLeftSide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f8584da3b86_88539703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '730f2fb79bae1c624e0f0d135cff7a03500aec74' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/ListViewLeftSide.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f8584da3b86_88539703 (Smarty_Internal_Template $_smarty_tpl) {
?><div><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" class="listViewEntriesCheckBox" title="<?php echo \App\Language::translate('LBL_SELECT_SINGLE_ROW');?>
" /></div><?php $_smarty_tpl->_assignInScope('LINKS', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordListViewLinksLeftSide());
if (count($_smarty_tpl->tpl_vars['LINKS']->value) > 0) {
$_smarty_tpl->_assignInScope('ONLY_ONE', count($_smarty_tpl->tpl_vars['LINKS']->value) == 1);?><div class="actions"><?php if ($_smarty_tpl->tpl_vars['ONLY_ONE']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewBasic'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><div class="dropright u-remove-dropdown-icon"><button class="btn btn-sm btn-light toolsAction dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-wrench" title="<?php echo \App\Language::translate('LBL_ACTIONS');?>
"></span></button><div class="dropdown-menu" aria-label="<?php echo \App\Language::translate('LBL_ACTIONS');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewBasic'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }?></div><?php }?><div><?php if (in_array($_smarty_tpl->tpl_vars['MODULE_NAME']->value,\App\Config::module('ModTracker','SHOW_TIMELINE_IN_LISTVIEW',array())) && $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isPermitted('TimeLineList')) {?><a data-url="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getTimeLineUrl();?>
" class="c-badge__icon fa-fw timeLineIconList d-none"></a><?php }
if (\App\Config::module('ModTracker','UNREVIEWED_COUNT') && $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isPermitted('ReviewingUpdates') && $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isTrackingEnabled() && $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->isViewable()) {?><a href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getUpdatesUrl();?>
" class="unreviewed d-none" aria-label="<?php echo \App\Language::translate('LBL_NOTIFICATIONS');?>
"><span class="badge badge-danger c-badge--md all" title="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_CHANGES','ModTracker');?>
" aria-label="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_CHANGES','ModTracker');?>
"></span><span class="badge badge-primary c-badge--md mail" title="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_MAILS','ModTracker');?>
" aria-label="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_MAILS','ModTracker');?>
"></span></a><?php }?></div>
<?php }
}
