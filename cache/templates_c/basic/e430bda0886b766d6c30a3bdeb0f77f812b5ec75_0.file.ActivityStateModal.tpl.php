<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-20 23:58:41
  from '/var/www/html/yeti/layouts/basic/modules/Calendar/ActivityStateModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8edf01556275_35991586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e430bda0886b766d6c30a3bdeb0f77f812b5ec75' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Calendar/ActivityStateModal.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8edf01556275_35991586 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="activityStateModal" class="js-activity-state modal fade modalEditStatus" tabindex="-1"><?php $_smarty_tpl->_assignInScope('ID', $_smarty_tpl->tpl_vars['RECORD']->value->getId());?><div class="modal-dialog modal-md"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><span class="fas fa-question-circle mr-1"></span><?php echo \App\Language::translate('LBL_SET_RECORD_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5><div class="ml-auto"><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('link') != '' && $_smarty_tpl->tpl_vars['PERMISSION_TO_SENDE_MAIL']->value) {
if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('internal_mailer') == 1) {
$_smarty_tpl->_assignInScope('COMPOSE_URL', OSSMail_Module_Model::getComposeUrl(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('link')),$_smarty_tpl->tpl_vars['RECORD']->value->get('link'),'Detail','new'));?><a target="_blank" class="btn btn-sm btn-light mr-1" role="button" href="<?php echo $_smarty_tpl->tpl_vars['COMPOSE_URL']->value;?>
" rel="noreferrer noopener"><span class="fas fa-envelope" title="<?php echo \App\Language::translate('LBL_SEND_EMAIL');?>
"></span></a><?php } else {
$_smarty_tpl->_assignInScope('URLDATA', OSSMail_Module_Model::getExternalUrl(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('link')),$_smarty_tpl->tpl_vars['RECORD']->value->get('link'),'Detail','new'));
if ($_smarty_tpl->tpl_vars['URLDATA']->value && $_smarty_tpl->tpl_vars['URLDATA']->value != 'mailto:?') {?><a class="btn btn-sm btn-light mr-1" role="button" href="<?php echo $_smarty_tpl->tpl_vars['URLDATA']->value;?>
"><span class="fas fa-envelope" title="<?php echo \App\Language::translate('LBL_CREATEMAIL','OSSMailView');?>
"></span></a><?php }
}
}
if ($_smarty_tpl->tpl_vars['RECORD']->value->isEditable()) {?><a href="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getEditViewUrl();?>
" class="btn btn-sm btn-light mr-1" role="button"><span class="yfi yfi-full-editing-view js-detail-quick-edit" data-js="click" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></a><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value->isViewable()) {?><a href="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDetailViewUrl();?>
" class="btn btn-sm btn-light" role="button"><span class="fas fa-th-list js-detail-quick-edit" title="<?php echo \App\Language::translate('LBL_SHOW_COMPLETE_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></a><?php }?></div><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
">&times;</span></button></div><div class="modal-body"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ActivityStateContent.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="modal-footer"><div class="col-12 p-0"><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->isEditable()) {
$_smarty_tpl->_assignInScope('ACTIVITY_STATE_LABEL', Calendar_Module_Model::getComponentActivityStateLabel());
$_smarty_tpl->_assignInScope('ACTIVITY_STATE', $_smarty_tpl->tpl_vars['RECORD']->value->get('activitystatus'));
$_smarty_tpl->_assignInScope('EMPTY', !in_array($_smarty_tpl->tpl_vars['ACTIVITY_STATE']->value,array($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['cancelled'],$_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['completed'])));?><div class="float-left js-activity-buttons" data-js="container"><?php $_smarty_tpl->_assignInScope('SHOW_QUICK_CREATE', App\Config::module('Calendar','SHOW_QUICK_CREATE_BY_STATUS'));
if ($_smarty_tpl->tpl_vars['EMPTY']->value && \App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'ActivityCancel',$_smarty_tpl->tpl_vars['ID']->value)) {?><button type="button" class="mr-1 btn btn-warning <?php if (in_array($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['cancelled'],$_smarty_tpl->tpl_vars['SHOW_QUICK_CREATE']->value)) {?>showQuickCreate<?php }?>"data-state="<?php echo $_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['cancelled'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"data-type="1"><span class="fas fa-ban mr-1"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['cancelled'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><?php }
if ($_smarty_tpl->tpl_vars['EMPTY']->value && \App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'ActivityComplete',$_smarty_tpl->tpl_vars['ID']->value)) {?><button type="button" class="mr-1 btn c-btn-done <?php if (in_array($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['completed'],$_smarty_tpl->tpl_vars['SHOW_QUICK_CREATE']->value)) {?>showQuickCreate<?php }?>"data-state="<?php echo $_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['completed'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"data-type="1"><span class="far fa-check-square fa-lg mr-1"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['completed'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><?php }
if ($_smarty_tpl->tpl_vars['EMPTY']->value && \App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'ActivityPostponed',$_smarty_tpl->tpl_vars['ID']->value)) {?><button type="button" class="mr-1 btn btn-primary showQuickCreate" data-state="<?php echo $_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['postponed'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"data-type="0"><span class="fas fa-angle-double-right mr-1"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABEL']->value['postponed'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><?php }
if (!$_smarty_tpl->tpl_vars['EMPTY']->value) {
echo \App\Language::translate('LBL_NO_AVAILABLE_ACTIONS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?></div><?php }?><div class="float-right"><a href="#" class="btn btn-danger" role="button" data-dismiss="modal"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></div></div></div></div></div></div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SCRIPTS']->value, 'jsModel', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['jsModel']->value) {
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
?&v=<?php echo $_smarty_tpl->tpl_vars['YETIFORCE_VERSION']->value;?>
"><?php echo '</script'; ?>
><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
