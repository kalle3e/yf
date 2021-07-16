<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 12:09:45
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/ShowAllComments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f73e8e9f34d67_25174179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f71e9a92e632e5e83ad7078f302294d60f0236c' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/ShowAllComments.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73e8e9f34d67_25174179 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-ShowAllComments -->	<?php $_smarty_tpl->_assignInScope('COMMENT_TEXTAREA_DEFAULT_ROWS', "2");?><div class="js-completions__container" data-js="container"><?php if ($_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value->isPermitted('CreateView')) {?><div class="js-add-comment-block addCommentBlock mb-2" data-js="container"><div class="input-group"><span class="input-group-prepend"><div class="input-group-text"><span class="fas fa-comments"></span></div></span><div name="commentcontent" contenteditable="true" class="js-comment-content commentcontent form-control js-chat-message js-completions" title="<?php echo \App\Language::translate('LBL_ADD_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"placeholder="<?php echo \App\Language::translate('LBL_ADD_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"data-js="html | tribute.js"></div><div class="input-group-append"><button class="btn btn-success js-save-comment" type="button" data-mode="add" data-js="click|data-mode"><span class="visible-xs-inline fas fa-plus"></span><span class="d-none d-md-inline ml-1"><?php echo \App\Language::translate('LBL_POST',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button></div></div></div><?php }?><input type="hidden" id="currentComment" value="<?php if (!empty($_smarty_tpl->tpl_vars['CURRENT_COMMENT']->value)) {
echo $_smarty_tpl->tpl_vars['CURRENT_COMMENT']->value->getId();
}?>"><div class="commentsHeader d-flex flex-wrap justify-content-center justify-content-md-between alidng-items-center"><div class="input-group u-max-w-250px"><input type="text" class="js-comment-search form-control" placeholder="<?php echo \App\Language::translate('LBL_COMMENTS_SEARCH','ModComments');?>
"aria-describedby="commentSearchAddon" data-js="keypress|data"><div class="input-group-append bg-white rounded-right"><button class="btn btn-light h-100 js-search-icon searchIcon" type="button" data-js="click"><span class="fas fa-search fa-fw" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span></button></div></div><?php if ($_smarty_tpl->tpl_vars['HIERARCHY']->value !== false && $_smarty_tpl->tpl_vars['HIERARCHY']->value < 2) {?><div data-toggle="buttons"><div class="btn-group btn-group-toggle detailCommentsHierarchy" data-toggle="buttons"><label class="js-detail-hierarchy-comments-btn u-text-ellipsis c-btn-block-sm-down mt-1 mt-sm-0 btn btn-outline-primary <?php if (in_array('current',$_smarty_tpl->tpl_vars['HIERARCHY_VALUE']->value)) {?>active<?php }?>"title="<?php echo \App\Language::translate('LBL_COMMENTS_0','ModComments');?>
" data-js="click"><input name="options" type="checkbox" class="js-detail-hierarchy-comments" data-js="val" value="current"<?php if (in_array('current',$_smarty_tpl->tpl_vars['HIERARCHY_VALUE']->value)) {?> checked="checked"<?php }?>autocomplete="off"/><?php echo \App\Language::translate('LBL_COMMENTS_0','ModComments');?>
</label><label class="js-detail-hierarchy-comments-btn u-text-ellipsis c-btn-block-sm-down mt-1 mt-sm-0 btn btn-outline-primary <?php if (in_array('related',$_smarty_tpl->tpl_vars['HIERARCHY_VALUE']->value)) {?>active<?php }?>"title="<?php echo \App\Language::translate('LBL_ALL_RECORDS','ModComments');?>
" data-js="click"><input name="options" type="checkbox" class="js-detail-hierarchy-comments" data-js="val" value="related"<?php if (in_array('related',$_smarty_tpl->tpl_vars['HIERARCHY_VALUE']->value)) {?> checked="checked"<?php }?>autocomplete="off"/><?php echo \App\Language::translate('LBL_ALL_RECORDS','ModComments');?>
</label></div></div><?php }?></div><div class="commentContainer"><div class="js-completions__messages commentsList col-md-12 px-0" data-js="click"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('CommentsList.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('COMMENT_MODULE_MODEL'=>$_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value), 0, true);
?></div></div></div><!-- /tpl-ShowAllComments -->
<?php }
}
