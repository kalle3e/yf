<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 21:44:52
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f85b45414b6_26175216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '863baba0e8f75e4a57ebb7b00c5c98aa4662a90f' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Comments.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f85b45414b6_26175216 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Comments --><ul class="Comments px-0 mb-0"><?php if ($_smarty_tpl->tpl_vars['CURRENT_COMMENT']->value) {
$_smarty_tpl->_assignInScope('CHILDS_ROOT_PARENT_MODEL', $_smarty_tpl->tpl_vars['CURRENT_COMMENT']->value);
$_smarty_tpl->_assignInScope('CURRENT_COMMENT_PARENT_MODEL', $_smarty_tpl->tpl_vars['CURRENT_COMMENT']->value->getParentCommentModel());
while ($_smarty_tpl->tpl_vars['CURRENT_COMMENT_PARENT_MODEL']->value != false) {
$_smarty_tpl->_assignInScope('TEMP_COMMENT', $_smarty_tpl->tpl_vars['CURRENT_COMMENT_PARENT_MODEL']->value);
$_smarty_tpl->_assignInScope('CURRENT_COMMENT_PARENT_MODEL', $_smarty_tpl->tpl_vars['CURRENT_COMMENT_PARENT_MODEL']->value->getParentCommentModel());
if ($_smarty_tpl->tpl_vars['CURRENT_COMMENT_PARENT_MODEL']->value == false) {
$_smarty_tpl->_assignInScope('CHILDS_ROOT_PARENT_MODEL', $_smarty_tpl->tpl_vars['TEMP_COMMENT']->value);
}
}
}
if (!empty($_smarty_tpl->tpl_vars['SHOW_CHILD_COMMENTS']->value) && !empty($_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value)) {?><li class="js-comment-details commentDetails" data-js="container|append"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Comment.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('COMMENT'=>$_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value,'COMMENT_MODULE_MODEL'=>$_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value), 0, true);
if (!empty($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value)) {
if ($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value->getId() == $_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value->getId()) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('CommentsListIteration.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('CHILD_COMMENTS_MODEL'=>$_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value->getChildComments()), 0, true);
}
}?></li><?php } else {
if (is_array($_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value, 'COMMENT', false, 'Index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Index']->value => $_smarty_tpl->tpl_vars['COMMENT']->value) {
?><li class="js-comment-details commentDetails" data-js="container|append"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Comment.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('COMMENT'=>$_smarty_tpl->tpl_vars['COMMENT']->value,'COMMENT_MODULE_MODEL'=>$_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value,'PARENT_COMMENT_ID'=>$_smarty_tpl->tpl_vars['COMMENT']->value->getId()), 0, true);
?></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Comment.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('COMMENT'=>$_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value), 0, true);
}
}?></ul><!-- /tpl-Base-Comments -->
<?php }
}
