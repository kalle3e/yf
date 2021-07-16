<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-23 14:06:08
  from '/var/www/html/yeti/layouts/basic/modules/Calendar/Extended/ActivityState.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9248a00516a6_25978323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fd143489c86ab06ff491bb4c73403140c12f010' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Calendar/Extended/ActivityState.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9248a00516a6_25978323 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Calendar-Extended-ActivityState js-activity-state modalEditStatus" data-js="container" tabindex="-1"><?php $_smarty_tpl->_assignInScope('ID', $_smarty_tpl->tpl_vars['RECORD']->value->getId());?><div class="o-calendar__form w-100 d-flex flex-column"><h6 class="boxEventTitle text-muted text-center my-1"><?php echo \App\Language::translate('LBL_SET_RECORD_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h6><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Extended/ActivityButtons.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ActivityStateContent.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="o-calendar__form__actions"><div class="d-flex flex-wrap"><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('link') != '' && $_smarty_tpl->tpl_vars['PERMISSION_TO_SENDE_MAIL']->value) {
if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('internal_mailer') == 1) {
$_smarty_tpl->_assignInScope('COMPOSE_URL', OSSMail_Module_Model::getComposeUrl(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('link')),$_smarty_tpl->tpl_vars['RECORD']->value->get('link'),'Detail','new'));?><a target="_blank" class="btn mt-1 btn-default mr-1" role="button" href="<?php echo $_smarty_tpl->tpl_vars['COMPOSE_URL']->value;?>
" rel="noreferrer noopener"title="<?php echo \App\Language::translate('LBL_SEND_EMAIL');?>
"><span class="fas fa-envelope"></span></a><?php } else {
$_smarty_tpl->_assignInScope('URLDATA', OSSMail_Module_Model::getExternalUrl(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('link')),$_smarty_tpl->tpl_vars['RECORD']->value->get('link'),'Detail','new'));
if ($_smarty_tpl->tpl_vars['URLDATA']->value && $_smarty_tpl->tpl_vars['URLDATA']->value != 'mailto:?') {?><a class="btn mt-1 btn-default mr-1" role="button" href="<?php echo $_smarty_tpl->tpl_vars['URLDATA']->value;?>
"title="<?php echo \App\Language::translate('LBL_CREATEMAIL','OSSMailView');?>
"><span class="fas fa-envelope"></span></a><?php }
}
}
if ($_smarty_tpl->tpl_vars['RECORD']->value->isEditable()) {?><a href="#" data-url="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getEditViewUrl();?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"class="editRecord btn mt-1 btn-default mr-1"title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="yfi yfi-full-editing-view summaryViewEdit"></span><span class="ml-1"><?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></a><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value->isViewable()) {?><a href="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDetailViewUrl();?>
" class="btn mt-1 btn-default mr-1"title="<?php echo \App\Language::translate('LBL_SHOW_COMPLETE_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-list summaryViewEdit"></span><span class="ml-1"><?php echo \App\Language::translate('LBL_SHOW_COMPLETE_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></a><?php }?><a href="#" class="btn mt-1 btn-danger js-summary-close-edit ml-auto" title="<?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-times" title="<?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span><span class="ml-1 d-none<?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('link') != '' && $_smarty_tpl->tpl_vars['PERMISSION_TO_SENDE_MAIL']->value) {?> d-xl-inline<?php } else { ?> d-xxl-inline<?php }?>"><?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></a></div></div></div></div><?php
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
