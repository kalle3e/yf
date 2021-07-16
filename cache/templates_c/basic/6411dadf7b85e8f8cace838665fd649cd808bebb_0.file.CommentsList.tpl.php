<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 12:09:46
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/CommentsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f73e8ea01e1c8_41328540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6411dadf7b85e8f8cace838665fd649cd808bebb' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/CommentsList.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73e8ea01e1c8_41328540 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-CommentsList --><?php if (!empty($_smarty_tpl->tpl_vars['CHILD_COMMENTS']->value)) {?><div class="ml-4"><?php }?><div class="js-comments-body commentsBody" data-js="html"><?php if (!empty($_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value) && !empty($_smarty_tpl->tpl_vars['SHOW_CHILD_COMMENTS']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value, 'CURRENT_COMMENT', false, 'CURRENT_COMMENT_KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CURRENT_COMMENT_KEY']->value => $_smarty_tpl->tpl_vars['CURRENT_COMMENT']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Comments.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PARENT_COMMENTS'=>$_smarty_tpl->tpl_vars['CURRENT_COMMENT']->value,'CURRENT_COMMENT'=>$_smarty_tpl->tpl_vars['CURRENT_COMMENT']->value), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Comments.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PARENT_COMMENTS'=>$_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value,'CURRENT_COMMENT'=>$_smarty_tpl->tpl_vars['CURRENT_COMMENT']->value), 0, true);
}?><div class="js-no-comments-msg-container summaryWidgetContainer <?php if (!empty($_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value)) {?>d-none<?php }?>"data-js="container"><p class="textAlignCenter"> <?php echo \App\Language::translate('LBL_NO_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div></div><?php if (!empty($_smarty_tpl->tpl_vars['CHILD_COMMENTS']->value)) {?></div><?php }
if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value && empty($_smarty_tpl->tpl_vars['NO_COMMENT_FORM']->value)) {?><div class="d-none basicAddCommentBlock my-2"><div class="row"><div class="col-md-12"><div class="input-group"><span class="input-group-prepend"><span class="input-group-text"><span class="fas fa-comments"></span></span></span><div contenteditable="true" class="form-control commentcontenthidden fullWidthAlways js-comment-content js-completions" name="commentcontent" title="<?php echo \App\Language::translate('LBL_ADD_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"placeholder="<?php echo \App\Language::translate('LBL_ADD_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-js="html | tribute.js"></div></div><button class="u-cursor-pointer js-close-comment-block mt-3 btn btn-warning float-right ml-1 cancel" type="reset"><span class="visible-xs-inline fas fa-times"></span><span class="d-none d-sm-none d-md-inline ml-1"><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button><button class="btn btn-success js-save-comment mt-3 float-right" type="button" data-mode="add" data-js="click|data-mode"><span class="visible-xs-inline fas fa-check"></span><span class="d-none d-sm-none d-md-inline ml-1"><?php echo \App\Language::translate('LBL_POST',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button></div></div><div class="clearfix"></div></div><div class="d-none basicEditCommentBlock"><div class="row"><div class="col-md-12 my-2"><input type="text" name="reasonToEdit" title="<?php echo \App\Language::translate('LBL_REASON_FOR_CHANGING_COMMENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"placeholder="<?php echo \App\Language::translate('LBL_REASON_FOR_CHANGING_COMMENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"class="js-reason-to-edit input-block-level form-control" data-js="value" ></div></div><div class="row"><div class="col-md-12 mb-2"><div class="input-group"><span class="input-group-prepend"><span class="input-group-text"><span class="fas fa-comments"></span></span></span><div contenteditable="true" class="form-control commentcontenthidden fullWidthAlways js-comment-content js-completions" name="commentcontent" title="<?php echo \App\Language::translate('LBL_ADD_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"placeholder="<?php echo \App\Language::translate('LBL_ADD_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"data-js="html | tribute.js"></div></div><button class="u-cursor-pointer js-close-comment-block mt-3 btn btn-warning float-right ml-1 cancel" type="reset"><span class="visible-xs-inline fas fa-times"></span><span class="d-none d-sm-none d-md-inline ml-1"><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button><button class="btn btn-success js-save-comment mt-3 float-right" type="button" data-mode="edit" data-js="click|data-mode"><span class="visible-xs-inline fas fa-check"></span><span class="d-none d-sm-none d-md-inline ml-1"><?php echo \App\Language::translate('LBL_POST',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button></div></div><div class="clearfix"></div></div><?php }?><!-- /tpl-Base-CommentsList -->
<?php }
}
