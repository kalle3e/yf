<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-22 19:02:37
  from '/var/www/html/yeti/layouts/basic/modules/Contacts/DetailViewHeaderTitle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f913c9d34fd81_33548586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7028bb38f3344033dc9a20f7d4d614185be37cb8' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Contacts/DetailViewHeaderTitle.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f913c9d34fd81_33548586 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex flex-wrap flex-md-nowrap px-md-3 px-1 w-100"><div class="u-min-w-md-70 w-100"><div><div class="float-left spanModuleIcon moduleIcon<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php $_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['RECORD']->value->getImage());?><span class="moduleIcon<?php if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?> o-detail__record-img mr-1<?php }?>"><?php if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><img class="js-detail-hierarchy" data-js="click" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
" src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
"><?php } else { ?><span class="pl-0 o-detail__icon js-detail__icon js-detail-hierarchy yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" data-js="click"></span><?php }
if (App\Config::module($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'COUNT_IN_HIERARCHY')) {?><span class="hierarchy"><span class="badge bgGreen"></span></span><?php }?></span></div><?php $_smarty_tpl->_assignInScope('SALUTATION', '');
if ($_smarty_tpl->tpl_vars['RECORD']->value->getField('salutationtype')->isViewable()) {
$_smarty_tpl->_assignInScope('SALUTATION', $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype'));
}?><div class="d-flex flex-nowrap align-items-center js-popover-tooltip--ellipsis-icon" data-content="<?php if ($_smarty_tpl->tpl_vars['SALUTATION']->value) {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['SALUTATION']->value);?>
 <?php }
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getName());?>
"data-toggle="popover" data-js="popover | mouseenter"><h4 class="recordLabel h6 mb-0 js-popover-text" data-js="clone"><?php if ($_smarty_tpl->tpl_vars['SALUTATION']->value) {?><span class="salutation mr-1"><?php echo $_smarty_tpl->tpl_vars['SALUTATION']->value;?>
</span><?php }?><span class="modCT_<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
</span></h4><span class="fas fa-info-circle fa-sm js-popover-icon d-none" data-js="class: d-none"></span><?php $_smarty_tpl->_assignInScope('RECORD_STATE', \App\Record::getState($_smarty_tpl->tpl_vars['RECORD']->value->getId()));
if ($_smarty_tpl->tpl_vars['RECORD_STATE']->value !== 'Active') {
$_smarty_tpl->_assignInScope('COLOR', App\Config::search('LIST_ENTITY_STATE_COLOR'));?><span class="badge badge-secondary ml-1" <?php if ($_smarty_tpl->tpl_vars['COLOR']->value[$_smarty_tpl->tpl_vars['RECORD_STATE']->value]) {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value[$_smarty_tpl->tpl_vars['RECORD_STATE']->value];?>
;"<?php }?>><?php if (\App\Record::getState($_smarty_tpl->tpl_vars['RECORD']->value->getId()) === 'Trash') {
echo \App\Language::translate('LBL_ENTITY_STATE_TRASH');
} else {
echo \App\Language::translate('LBL_ENTITY_STATE_ARCHIVED');
}?></span><?php }?></div></div><div class="pl-1"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('parent_id');?>
<div class="js-popover-tooltip--ellipsis-icon d-flex flex-nowrap align-items-center" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('assigned_user_id'));?>
" data-toggle="popover" data-js="popover | mouseenter"><span class="mr-1 text-muted u-white-space-nowrap"><?php echo \App\Language::translate('Assigned To',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</span><span class="js-popover-text" data-js="clone"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('assigned_user_id');?>
</span><span class="fas fa-info-circle fa-sm js-popover-icon d-none" data-js="class: d-none"></span></div><?php $_smarty_tpl->_assignInScope('SHOWNERS', $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('shownerid'));
if ($_smarty_tpl->tpl_vars['SHOWNERS']->value != '') {?><div class="js-popover-tooltip--ellipsis-icon d-flex flex-nowrap align-items-center" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['SHOWNERS']->value);?>
" data-toggle="popover" data-js="popover | mouseenter"><span class="mr-1 text-muted u-white-space-nowrap"><?php echo \App\Language::translate('Share with users',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</span><span class="js-popover-text" data-js="clone"><?php echo $_smarty_tpl->tpl_vars['SHOWNERS']->value;?>
</span><span class="fas fa-info-circle fa-sm js-popover-icon d-none" data-js="class: d-none"></span></div><?php }?></div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/HeaderFields.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/HeaderProgress.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
