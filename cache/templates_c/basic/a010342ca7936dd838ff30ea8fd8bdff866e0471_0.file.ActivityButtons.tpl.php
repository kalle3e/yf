<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-23 14:06:08
  from '/var/www/html/yeti/layouts/basic/modules/Calendar/Extended/ActivityButtons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9248a008cef5_79437603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a010342ca7936dd838ff30ea8fd8bdff866e0471' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Calendar/Extended/ActivityButtons.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9248a008cef5_79437603 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Calendar-Extended-ActivityButtons --><?php if (!empty($_smarty_tpl->tpl_vars['RECORD']->value)) {?><div class="js-activity-buttons d-flex justify-content-center flex-wrap mb-2" data-js="container"><?php $_smarty_tpl->_assignInScope('ID', $_smarty_tpl->tpl_vars['RECORD']->value->getId());
if ($_smarty_tpl->tpl_vars['RECORD']->value->isEditable()) {
$_smarty_tpl->_assignInScope('ACTIVITY_STATE_LABEL', Calendar_Module_Model::getComponentActivityStateLabel());
$_smarty_tpl->_assignInScope('ACTIVITY_STATE', $_smarty_tpl->tpl_vars['RECORD']->value->get('activitystatus'));
$_smarty_tpl->_assignInScope('EMPTY', !in_array($_smarty_tpl->tpl_vars['ACTIVITY_STATE']->value,array($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['cancelled'],$_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['completed'])));
$_smarty_tpl->_assignInScope('SHOW_QUICK_CREATE', App\Config::module('Calendar','SHOW_QUICK_CREATE_BY_STATUS'));
if ($_smarty_tpl->tpl_vars['EMPTY']->value && \App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'ActivityCancel',$_smarty_tpl->tpl_vars['ID']->value)) {?><button type="button" class="mr-1 mt-1 btn btn-sm btn-warning <?php if (in_array($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['cancelled'],$_smarty_tpl->tpl_vars['SHOW_QUICK_CREATE']->value)) {?>showQuickCreate<?php }?>"data-state="<?php echo $_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['cancelled'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"data-type="1" data-js="click"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['cancelled'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-ban"></span><span class="ml-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['cancelled'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button><?php }
if ($_smarty_tpl->tpl_vars['EMPTY']->value && \App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'ActivityComplete',$_smarty_tpl->tpl_vars['ID']->value)) {?><button type="button" class="mr-1 mt-1 btn btn-sm c-btn-done <?php if (in_array($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['completed'],$_smarty_tpl->tpl_vars['SHOW_QUICK_CREATE']->value)) {?>showQuickCreate<?php }?>"data-state="<?php echo $_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['completed'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"data-type="1" data-js="click"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['completed'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="far fa-check-square fa-lg"></span><span class="ml-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['completed'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button><?php }
if ($_smarty_tpl->tpl_vars['EMPTY']->value && \App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'ActivityPostponed',$_smarty_tpl->tpl_vars['ID']->value)) {?><button type="button" class="mr-1 mt-1 btn btn-sm btn-primary showQuickCreate" data-state="<?php echo $_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['postponed'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"data-type="0"data-dismiss="modal"data-js="click"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['postponed'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-angle-double-right"></span><span class="ml-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['postponed'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button><?php }
}?></div><?php }?><!-- /tpl-Calendar-Extended-ActivityButtons -->
<?php }
}
