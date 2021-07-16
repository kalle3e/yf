<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 21:44:52
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/RecentComments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f85b451ef78_64549085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '349370b913073b8e33ba0ec8b1a62005df44fe1f' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/RecentComments.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f85b451ef78_64549085 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div class="tpl-Base-RecentComments js-comments-container js-completions__container commentContainer recentComments" data-js="container"><div class="js-comments-body js-completions__messages commentsBody" data-js="html | click"><?php if (!empty($_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value)) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Comments.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PARENT_COMMENTS'=>$_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value,'CURRENT_COMMENT'=>$_smarty_tpl->tpl_vars['CURRENT_COMMENT']->value), 0, true);
} else {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('NoComments.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value && $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists()) {?><a href="javascript:void(0)" class="js-more-recent-comments btn btn-sm btn-link float-right my-1" data-js="click"><?php echo \App\Language::translate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
...</a><?php }?><div class="my-1"><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value && $_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value->isPermitted('CreateView')) {?><div class="js-add-comment-block addCommentBlock" data-js="container|remove"><div class="input-group input-group-sm"><div class="input-group-prepend"><span class="input-group-text"><span class="fas fa-comments"></span></span></div><div name="commentcontent" contenteditable="true" class="js-comment-content js-completions commentcontent form-control" title="<?php echo \App\Language::translate('LBL_ADD_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"placeholder="<?php echo \App\Language::translate('LBL_ADD_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"data-js="html | tribute.js"></div><div class="input-group-append"><button class="btn btn-success js-detail-view-save-comment" type="button" data-mode="add"><span class="fa fa-plus"></span></button></div></div></div><?php }?></div></div><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) {?><div class="d-none basicAddCommentBlock mt-1"><div class="row"><div class="col-md-12"><div class="input-group input-group-sm mb-1"><span class="input-group-prepend"><span class="input-group-text"><span class="fas fa-comments"></span></span></span><div contenteditable="true" class="form-control commentcontenthidden fullWidthAlways js-comment-content js-completions" name="commentcontent" title="<?php echo \App\Language::translate('LBL_ADD_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"placeholder="<?php echo \App\Language::translate('LBL_ADD_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-js="html | tribute.js"></div></div><button class="u-cursor-pointer js-close-comment-block btn btn-warning float-right ml-1 cancel" type="reset"><span class="visible-xs-inline fas fa-times"></span><span class="d-none d-sm-none d-md-inline ml-1"><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button><button class="btn btn-success js-save-comment float-right" type="button" data-mode="add" data-js="click|data-mode"><span class="visible-xs-inline fas fa-check"></span><span class="d-none d-sm-none d-md-inline ml-1"><?php echo \App\Language::translate('LBL_POST',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button></div></div><div class="clearfix"></div></div><div class="d-none basicEditCommentBlock"><div class="row mb-1"><div class="col-md-12"><input type="text" name="reasonToEdit" title="<?php echo \App\Language::translate('LBL_REASON_FOR_CHANGING_COMMENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"placeholder="<?php echo \App\Language::translate('LBL_REASON_FOR_CHANGING_COMMENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"class="js-reason-to-edit input-block-level form-control form-control-sm" data-js="value" ></div></div><div class="row"><div class="col-md-12"><div class="input-group input-group-sm mb-1"><span class="input-group-prepend"><span class="input-group-text"><span class="fas fa-comments"></span></span></span><div contenteditable="true" class="form-control commentcontenthidden fullWidthAlways js-comment-content js-completions" name="commentcontent" title="<?php echo \App\Language::translate('LBL_ADD_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"placeholder="<?php echo \App\Language::translate('LBL_ADD_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-js="html | tribute.js"></div></div><button class="u-cursor-pointer js-close-comment-block btn btn-warning float-right ml-1 cancel" type="reset"><span class="visible-xs-inline fas fa-times"></span><span class="d-none d-sm-none d-md-inline ml-1"><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button><button class="btn btn-success js-save-comment float-right" type="button" data-mode="edit" data-js="click|data-mode"><span class="visible-xs-inline fas fa-check"></span><span class="d-none d-sm-none d-md-inline ml-1"><?php echo \App\Language::translate('LBL_POST',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button></div></div></div><?php }?></div>
<?php }
}
