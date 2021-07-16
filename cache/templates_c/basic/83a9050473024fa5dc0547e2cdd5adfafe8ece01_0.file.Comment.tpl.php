<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 21:44:52
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Comment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f85b45a58b2_57611780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83a9050473024fa5dc0547e2cdd5adfafe8ece01' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Comment.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f85b45a58b2_57611780 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Comment --><?php $_smarty_tpl->_assignInScope('HIERARCHY', isset($_smarty_tpl->tpl_vars['PARENT_RECORD']->value) && $_smarty_tpl->tpl_vars['PARENT_RECORD']->value != $_smarty_tpl->tpl_vars['COMMENT']->value->get('related_to'));?><div class="Comment comment-div js-comment-div" data-js="container"><div class="js-comment-single singleComment" data-js="append"><div class="js-comment-info-header commentInfoHeader m-0 row" data-commentid="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->getId();?>
"data-parentcommentid="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('parent_comments');?>
"data-js="data-commentid|data-parentcommentid"><?php $_smarty_tpl->_assignInScope('IS_CURRENT_USER', $_smarty_tpl->tpl_vars['CURRENTUSER']->value->getId() == $_smarty_tpl->tpl_vars['COMMENT']->value->get('userid'));?><div class="quasar-reset q-message q-message-<?php if ($_smarty_tpl->tpl_vars['IS_CURRENT_USER']->value) {?>sent<?php } else { ?>received<?php }?> full-width" id="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->getId();?>
"><?php $_smarty_tpl->_assignInScope('PARENT_COMMENT_MODEL', $_smarty_tpl->tpl_vars['COMMENT']->value->getParentCommentModel());
$_smarty_tpl->_assignInScope('CHILD_COMMENTS_MODEL', $_smarty_tpl->tpl_vars['COMMENT']->value->getChildComments());?><div class="q-message-container row items-end no-wrap"><?php $_smarty_tpl->_assignInScope('COMMENTOR', $_smarty_tpl->tpl_vars['COMMENT']->value->getCommentedByModel());
$_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['COMMENT']->value->getImage());
if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><img class="q-message-avatar gt-sm" alt="userImage" src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
"><?php } else { ?><div class="q-message-avatar gt-sm visible u-font-size-26 flex flex-center"><span class="fas fa-user"></span></div><?php }?><div class="full-width"><span class="q-message-name"><?php echo $_smarty_tpl->tpl_vars['COMMENTOR']->value->getName();?>
</span><div class="q-message-text q-py-xs"><?php if ($_smarty_tpl->tpl_vars['HIERARCHY']->value) {
$_smarty_tpl->_assignInScope('RELATED_TO', $_smarty_tpl->tpl_vars['COMMENT']->value->get('related_to'));?><input hidden="" class="related_to" name="related_to" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_TO']->value;?>
"/><?php $_smarty_tpl->_assignInScope('RELATED_MODULE', \App\Record::getType($_smarty_tpl->tpl_vars['RELATED_TO']->value));?><a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value;?>
&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RELATED_TO']->value;?>
"><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_MODULE']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE']->value);?>
:&nbsp;&nbsp;</strong><strong><?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->getDisplayValue('related_to');?>
</strong></a><?php }?><span class="q-message-text-content"><div class="js-comment-info" data-js="html"><?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->getDisplayValue('commentcontent');?>
</div><div class="u-w-fit q-message-stamp ml-auto"><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['COMMENT']->value->getCommentedTime());?>
</div></span></div></div><div class="row inline justify-center js-hb__container ml-auto"><button type="button" tabindex="0" class="btn js-hb__btn u-hidden-block-btn text-grey-6 py-0 px-1"><div class="text-center col items-center justify-center row"><i aria-hidden="true" class="mdi mdi-wrench q-icon"></i></div></button><div class="u-hidden-block items-center js-comment-actions"><?php $_smarty_tpl->_assignInScope('COMMENTS_MODULE_MODEL', Vtiger_Module_Model::getInstance('ModComments'));
if (!empty($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value)) {
$_smarty_tpl->_assignInScope('CHILDS_ROOT_PARENT_ID', $_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value->getId());
}
if ($_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value->isPermitted('CreateView')) {?><button type="button" class="btn btn-success js-reply-comment mr-1" title="<?php echo \App\Language::translate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-js="click"><span class="fas fa-share"></span></button><?php }
if (\App\Privilege::isPermitted('ModComments','EditableComments') && $_smarty_tpl->tpl_vars['CURRENTUSER']->value->getId() == $_smarty_tpl->tpl_vars['COMMENT']->value->get('userid')) {?><button type="button" class="btn btn-primary js-edit-comment feedback mr-1" data-js="click" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="yfi yfi-full-editing-view"></span></button><?php }
$_smarty_tpl->_assignInScope('LINKS', $_smarty_tpl->tpl_vars['COMMENT']->value->getCommentLinks());
if (count($_smarty_tpl->tpl_vars['LINKS']->value) > 0) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'comment','MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value,'CLASS'=>"mr-1"), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->_assignInScope('CHILD_COMMENTS_COUNT', $_smarty_tpl->tpl_vars['COMMENT']->value->getChildCommentsCount());
if (!empty($_smarty_tpl->tpl_vars['CHILD_COMMENTS_MODEL']->value) && !empty($_smarty_tpl->tpl_vars['PARENT_COMMENT_ID']->value) && (empty($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_ID']->value) || $_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_ID']->value != $_smarty_tpl->tpl_vars['PARENT_COMMENT_ID']->value) && empty($_smarty_tpl->tpl_vars['SHOW_CHILD_COMMENTS']->value)) {?><span class="js-view-thread-block viewThreadBlock" data-child-comments-count="<?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
"data-js="data-child-comments-count"><button type="button" class="btn btn-info viewThread u-text-ellipsis" title="<?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value == 1) {
echo \App\Language::translate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
} else {
echo \App\Language::translate('LBL_REPLIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?>"data-js="click"><span class="js-child-comments-count"><?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
</span>&nbsp;<span class="fas fa-share"></span></button></span><span class="d-none hideThreadBlock" data-child-comments-count="<?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
"><a class="u-cursor-pointer hideThread"><span class="js-child-comments-count" data-js="text"><?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
</span>&nbsp;<?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value == 1) {
echo \App\Language::translate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
} else {
echo \App\Language::translate('LBL_REPLIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?>&nbsp;<img class="alignMiddle" src="<?php echo \App\Layout::getImagePath('downArrowSmall.png');?>
"/></a></span><?php } elseif (!empty($_smarty_tpl->tpl_vars['CHILD_COMMENTS']->value) && !empty($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_ID']->value) && ($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_ID']->value == $_smarty_tpl->tpl_vars['PARENT_COMMENT_ID']->value)) {?><span class="js-view-thread-block viewThreadBlock" data-child-comments-count="<?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
"data-js="data-child-comments-count"><button type="button" class="btn btn-info viewThread" title="<?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value == 1) {
echo \App\Language::translate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
} else {
echo \App\Language::translate('LBL_REPLIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?>"data-js="click"><span class="js-child-comments-count" data-js="text"><?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
</span>&nbsp;<span class="fas fa-share"></span></button></span><span class="hideThreadBlock" data-child-comments-count="<?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
"><a class="u-cursor-pointer hideThread"><span class="js-child-comments-count" data-js="text"><?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
</span>&nbsp;<?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value == 1) {
echo \App\Language::translate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
} else {
echo \App\Language::translate('LBL_REPLIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?>&nbsp;<img class="alignMiddle" src="<?php echo \App\Layout::getImagePath('downArrowSmall.png');?>
"/></a></span><?php }
if (!empty($_smarty_tpl->tpl_vars['BUTTON_SHOW_PARENT']->value) && !empty($_smarty_tpl->tpl_vars['COMMENT']->value->get('parents'))) {?><span class="view-parent-thread-block"><button type="button" class="btn btn-secondary js-view-parent-thread" data-js="click" title="<?php echo \App\Language::translate('LBL_THREAD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-share"></span></button></span><?php }?></div></div></div></div></div><div class="js-comment-container  d-flex flex-wrap justify-content-between align-items-center m-0 mt-n2" data-js="hide|show"><?php $_smarty_tpl->_assignInScope('REASON_TO_EDIT', $_smarty_tpl->tpl_vars['COMMENT']->value->getDisplayValue('reasontoedit'));?><div class="js-edited-status edited-status w-100" name="editStatus" data-js="class: d-none"><span class="<?php if (empty($_smarty_tpl->tpl_vars['REASON_TO_EDIT']->value)) {?>d-none<?php }?> js-edit-reason text-muted" data-js="class: d-none"><p class="d-flex flex-wrap small"><span>[ <?php echo \App\Language::translate('LBL_EDIT_REASON',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 ] :<span name="editReason" class="js-edit-reason-span ml-1" data-js="text"><?php echo nl2br($_smarty_tpl->tpl_vars['REASON_TO_EDIT']->value);?>
</span></span><?php if ($_smarty_tpl->tpl_vars['COMMENT']->value->getCommentedTime() != $_smarty_tpl->tpl_vars['COMMENT']->value->getModifiedTime()) {?><span class="ml-auto"><em class="mr-1"><?php echo \App\Language::translate('LBL_MODIFIED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</em><span class="js-comment-modified-time commentModifiedTime" data-js="html"><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['COMMENT']->value->getModifiedTime());?>
</span></span><?php }?></p></span></div></div></div><div><!-- /tpl-Base-Comment -->
<?php }
}
