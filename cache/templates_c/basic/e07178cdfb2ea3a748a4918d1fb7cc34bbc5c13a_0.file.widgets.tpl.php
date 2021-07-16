<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 21:44:52
  from '/var/www/html/yeti/layouts/basic/modules/OSSMailView/widgets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f85b43b42a9_52127815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e07178cdfb2ea3a748a4918d1fb7cc34bbc5c13a' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/OSSMailView/widgets.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f85b43b42a9_52127815 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-OSSMailView-widgets container-fluid pl-1 pr-1"><?php $_smarty_tpl->_assignInScope('COUNT', count($_smarty_tpl->tpl_vars['RECOLDLIST']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECOLDLIST']->value, 'ROW', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ROW']->value) {
?><div class="row<?php if ($_smarty_tpl->tpl_vars['KEY']->value%2 != 0) {?> even<?php }?> mb-1 px-0"><?php if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'DetailView',$_smarty_tpl->tpl_vars['ROW']->value['id'])) {?><div class="col-12 mailActions d-flex justify-content-between mb-1 px-sm-3 px-2"><div><a class="js-toggle-icon__container showMailBody btn btn-sm btn-outline-secondary mr-1" role="button" data-js="click"><span class="js-toggle-icon body-icon fas fa-caret-down" data-active="fa-caret-up" data-inactive="fa-caret-down" data-js="click" aria-label="<?php echo \App\Language::translate('LBL_SHOW_PREVIEW_EMAIL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></a><div class="btn-group" role="group"><button type="button" class="btn btn-sm btn-outline-secondary showMailModal" data-url="<?php echo $_smarty_tpl->tpl_vars['ROW']->value['url'];?>
"><span class="body-icon fas fa-search" aria-label="<?php echo \App\Language::translate('LBL_SHOW_PREVIEW_EMAIL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button><?php if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['SMODULENAME']->value,'RemoveRelation')) {
if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'MoveToTrash',$_smarty_tpl->tpl_vars['ROW']->value['id'])) {
$_smarty_tpl->_assignInScope('LINK', Vtiger_Link_Model::getInstanceFromValues(array('linklabel'=>'LBL_REMOVE_RELATION','linkicon'=>'fas fa-unlink','linkclass'=>'btn-sm btn-secondary relationDelete entityStateBtn','linkdata'=>array('content'=>\App\Language::translate('LBL_REMOVE_RELATION'),'confirm'=>\App\Language::translate('LBL_REMOVE_RELATION_CONFIRMATION'),'id'=>$_smarty_tpl->tpl_vars['ROW']->value['id']))));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
}
if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'Delete',$_smarty_tpl->tpl_vars['ROW']->value['id'])) {
$_smarty_tpl->_assignInScope('LINK', Vtiger_Link_Model::getInstanceFromValues(array('linktype'=>'LIST_VIEW_ACTIONS_RECORD_LEFT_SIDE','linklabel'=>'LBL_DELETE_RECORD_COMPLETELY','linkicon'=>'fas fa-eraser','dataUrl'=>"index.php?module=".((string)$_smarty_tpl->tpl_vars['MODULE_NAME']->value)."&action=Delete&record=".((string)$_smarty_tpl->tpl_vars['ROW']->value['id']),'linkdata'=>array('confirm'=>\App\Language::translate('LBL_DELETE_RECORD_COMPLETELY_DESC')),'linkclass'=>'btn-sm btn-dark relationDelete entityStateBtn')));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
}
}?></div></div><div><?php if (App\Config::main('isActiveSendingMails') && \App\Privilege::isPermitted('OSSMail')) {
if ($_smarty_tpl->tpl_vars['PRIVILEGESMODEL']->value->internal_mailer == 1) {
$_smarty_tpl->_assignInScope('COMPOSE_URL', OSSMail_Module_Model::getComposeUrl($_smarty_tpl->tpl_vars['SMODULENAME']->value,$_smarty_tpl->tpl_vars['SRECORD']->value,'Detail'));?><button type="button" class="btn btn-sm btn-light sendMailBtn ml-1" data-url="<?php echo $_smarty_tpl->tpl_vars['COMPOSE_URL']->value;?>
&mid=<?php echo $_smarty_tpl->tpl_vars['ROW']->value['id'];?>
&type=reply" data-popup="<?php echo $_smarty_tpl->tpl_vars['POPUP']->value;?>
"><span class="fas fa-reply" title="<?php echo \App\Language::translate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button><button type="button" class="btn btn-sm btn-light sendMailBtn ml-1" data-url="<?php echo $_smarty_tpl->tpl_vars['COMPOSE_URL']->value;?>
&mid=<?php echo $_smarty_tpl->tpl_vars['ROW']->value['id'];?>
&type=replyAll"data-popup="<?php echo $_smarty_tpl->tpl_vars['POPUP']->value;?>
"><span class="fas fa-reply-all" title="<?php echo \App\Language::translate('LBL_REPLYALLL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button><button type="button" class="btn btn-sm btn-light sendMailBtn ml-1" data-url="<?php echo $_smarty_tpl->tpl_vars['COMPOSE_URL']->value;?>
&mid=<?php echo $_smarty_tpl->tpl_vars['ROW']->value['id'];?>
&type=forward"data-popup="<?php echo $_smarty_tpl->tpl_vars['POPUP']->value;?>
"><span class="fas fa-share" title="<?php echo \App\Language::translate('LBL_FORWARD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button><?php } else { ?><a class="btn btn-sm btn-light ml-1" role="button" href="<?php echo OSSMail_Module_Model::getExternalUrlForWidget($_smarty_tpl->tpl_vars['ROW']->value,'reply',$_smarty_tpl->tpl_vars['SRECORD']->value,$_smarty_tpl->tpl_vars['SMODULENAME']->value);?>
"rel="noreferrer noopener"><span class="fas fa-reply" title="<?php echo \App\Language::translate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></a><a class="btn btn-sm btn-light ml-1" role="button" href="<?php echo OSSMail_Module_Model::getExternalUrlForWidget($_smarty_tpl->tpl_vars['ROW']->value,'replyAll',$_smarty_tpl->tpl_vars['SRECORD']->value,$_smarty_tpl->tpl_vars['SMODULENAME']->value);?>
"rel="noreferrer noopener"><span class="fas fa-reply-all" title="<?php echo \App\Language::translate('LBL_REPLYALLL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></a><a class="btn btn-sm btn-light ml-1" role="button" href="<?php echo OSSMail_Module_Model::getExternalUrlForWidget($_smarty_tpl->tpl_vars['ROW']->value,'forward',$_smarty_tpl->tpl_vars['SRECORD']->value,$_smarty_tpl->tpl_vars['SMODULENAME']->value);?>
"rel="noreferrer noopener"><span class="fas fa-share" title="<?php echo \App\Language::translate('LBL_FORWARD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></a><?php }
}?></div></div><div class="col-12 px-sm-3 px-2"><hr class="mb-sm-1 mb-0"></div><?php }?><div class="col-12 d-flex justify-content-between px-sm-3 px-2"><?php if ($_smarty_tpl->tpl_vars['ROW']->value['type'] == 0) {
$_smarty_tpl->_assignInScope('FIRST_LETTER_CLASS', 'bgGreen');
} elseif ($_smarty_tpl->tpl_vars['ROW']->value['type'] == 1) {
$_smarty_tpl->_assignInScope('FIRST_LETTER_CLASS', 'bgDanger');
} elseif ($_smarty_tpl->tpl_vars['ROW']->value['type'] == 2) {
$_smarty_tpl->_assignInScope('FIRST_LETTER_CLASS', 'bgBlue');
}?><div class="d-inline-flex w-100 col-10 pr-0 pl-0"><div class="firstLetter <?php echo $_smarty_tpl->tpl_vars['FIRST_LETTER_CLASS']->value;?>
 d-sm-block d-none"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['firstLetter'];?>
</div><div class="w-100"><h5 class="u-text-ellipsis h6 mb-0"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['from'];?>
</h5><h6 class="font-small font-weight-bold mb-0 text-truncate mb-0"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['subject'];?>
</h6></div></div><div class="d-inline-flex w-100 justify-content-end col-2 pr-0 pl-0"><?php if ($_smarty_tpl->tpl_vars['ROW']->value['attachments'] == 1) {?><span class="fas mt-1 fa-xs fa-paperclip mr-1"></span><?php }
if ($_smarty_tpl->tpl_vars['ROW']->value['type'] == 0) {?><span class="fas mt-1 fa-xs fa-arrow-up text-success"></span><?php } elseif ($_smarty_tpl->tpl_vars['ROW']->value['type'] == 1) {?><span class="fas mt-1 fa-xs fa-arrow-down text-danger"></span><?php } elseif ($_smarty_tpl->tpl_vars['ROW']->value['type'] == 2) {?><span class="fas mt-1 fa-xs fa-retweet text-primary"></span><?php }?><small class="text-muted ml-1 text-truncate"><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['ROW']->value['date']);?>
</small></div></div><div class="col-12 px-sm-3 px-2"><hr class="mb-sm-1 mb-0"/></div><div class="col-12 px-sm-3 px-2"><div class="mailTeaser"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['teaser'];?>
</div></div><div class="col-12 mailBody d-none"><div class="mailBodyContent"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['body'];?>
</div></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['COUNT']->value == 0) {?><p class="textAlignCenter"><?php echo \App\Language::translate('LBL_NO_MAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p><?php }?></div>
<?php }
}
