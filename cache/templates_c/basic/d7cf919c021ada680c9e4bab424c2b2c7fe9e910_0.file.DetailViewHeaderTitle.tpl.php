<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-22 21:04:33
  from '/var/www/html/yeti/layouts/basic/modules/MultiCompany/DetailViewHeaderTitle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600aa3319574d4_86150980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7cf919c021ada680c9e4bab424c2b2c7fe9e910' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/MultiCompany/DetailViewHeaderTitle.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600aa3319574d4_86150980 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex flex-wrap flex-md-nowrap px-md-3 px-1 w-100"><div class="u-min-w-md-70 w-100"><div class="moduleIcon"><span class="o-detail__icon js-detail__icon u-cursor-pointer yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"></span><?php if (App\Config::module($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'COUNT_IN_HIERARCHY')) {?><span class="hierarchy"><span class="badge <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('active')) {?> bgGreen <?php } else { ?> bgOrange <?php }?>"></span></span><?php }?></div><div class="pl-1"><div class="d-flex flex-nowrap align-items-center js-popover-tooltip--ellipsis-icon" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getName());?>
" data-toggle="popover" data-js="popover | mouseenter"><h4 class="recordLabel h6 mb-0 js-popover-text" data-js="clone"><span class="modCT_<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
</span></h4><span class="fas fa-info-circle fa-sm js-popover-icon d-none" data-js="class: d-none"></span><?php $_smarty_tpl->_assignInScope('RECORD_STATE', \App\Record::getState($_smarty_tpl->tpl_vars['RECORD']->value->getId()));
if ($_smarty_tpl->tpl_vars['RECORD_STATE']->value !== 'Active') {
$_smarty_tpl->_assignInScope('COLOR', App\Config::search('LIST_ENTITY_STATE_COLOR'));?><div class="badge badge-secondary ml-1" <?php if ($_smarty_tpl->tpl_vars['COLOR']->value[$_smarty_tpl->tpl_vars['RECORD_STATE']->value]) {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value[$_smarty_tpl->tpl_vars['RECORD_STATE']->value];?>
;"<?php }?>><?php if (\App\Record::getState($_smarty_tpl->tpl_vars['RECORD']->value->getId()) === 'Trash') {
echo \App\Language::translate('LBL_ENTITY_STATE_TRASH');
} else {
echo \App\Language::translate('LBL_ENTITY_STATE_ARCHIVED');
}?></div><?php }?></div><?php $_smarty_tpl->_assignInScope('PARENTID', $_smarty_tpl->tpl_vars['RECORD']->value->get('parent_id'));
if (!empty($_smarty_tpl->tpl_vars['PARENTID']->value)) {?><div class="d-flex flex-nowrap align-items-center js-popover-tooltip--ellipsis-icon" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('parent_id'));?>
" data-toggle="popover" data-js="popover | mouseenter"><span class="mr-1 text-muted u-white-space-nowrap"><?php echo \App\Language::translate('FL_PARENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</span><span class="js-popover-text" data-js="clone"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('parent_id');?>
</span><span class="fas fa-info-circle fa-sm js-popover-icon d-none" data-js="class: d-none"></span></div><?php }?><div class="js-popover-tooltip--ellipsis-icon d-flex flex-nowrap align-items-center" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('assigned_user_id'));?>
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