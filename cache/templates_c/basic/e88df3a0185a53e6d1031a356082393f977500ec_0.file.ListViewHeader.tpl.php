<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 12:41:48
  from '/var/www/html/yeti/layouts/basic/modules/Portal/ListViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f066c53e978_56570014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e88df3a0185a53e6d1031a356082393f977500ec' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Portal/ListViewHeader.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f066c53e978_56570014 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='widget_header row mb-2'><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="listViewPageDiv" id="portalListViewPage"><div class="listViewTopMenuDiv noprint"><div class="listViewActionsDiv d-inline-flex w-100 flex-wrap justify-content-between mb-2"><div class="btn-toolbar u-w-sm-down-100 d-flex flex-wrap flex-sm-nowrap mb-1 mb-md-0"><div class="btn-group listViewMassActions mr-sm-1 c-btn-block-sm-down mb-1 mb-sm-0"><button class="btn btn-light dropdown-toggle" data-toggle="dropdown"><span class="fa fa-list mr-1"></span><?php echo \App\Language::translate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><ul class="dropdown-menu"><li id="massDelete"><a class="dropdown-item" href="javascript:void(0);" onclick="Portal_List_Js.massDeleteRecords();"><?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li></ul></div><div class="btn-group mr-md-1 c-btn-block-sm-down"><button class="btn btn-light addButton addBookmark"><span class="fas fa-plus mr-1"></span><?php echo \App\Language::translate('LBL_ADD_BOOKMARK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div><div class="paginationDiv"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Pagination.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div><div class="listViewContentDiv" id="listViewContents">
<?php }
}
