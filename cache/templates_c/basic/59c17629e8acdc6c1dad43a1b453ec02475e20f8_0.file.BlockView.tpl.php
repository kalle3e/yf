<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-21 00:03:26
  from '/var/www/html/yeti/layouts/basic/modules/Calendar/Detail/BlockView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8ee01e49a503_13708340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59c17629e8acdc6c1dad43a1b453ec02475e20f8' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Calendar/Detail/BlockView.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8ee01e49a503_13708340 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Calendar-Detail-BlockView --><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/BlockView.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
$_smarty_tpl->_assignInScope('IS_HIDDEN', false);?><div class="detailViewTable"><div class="js-toggle-panel c-panel" data-js="click" data-label="LBL_INVITE_RECORDS"><div class="blockHeader c-panel__header"><span class="js-block-toggle fas fa-angle-right m-2 <?php if (!($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)) {?>d-none<?php }?>" data-js="click" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
" data-mode="hide" data-id='inviteParticipantBlockId'></span><span class="js-block-toggle fas fa-angle-down m-2 <?php if ($_smarty_tpl->tpl_vars['IS_HIDDEN']->value) {?>d-none<?php }?>" data-js="click" alt="<?php echo \App\Language::translate('LBL_COLLAPSE_BLOCK');?>
" data-mode="show" data-id='inviteParticipantBlockId'></span><h5><?php echo \App\Language::translate('LBL_INVITE_RECORDS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="blockContent c-panel__body <?php if ($_smarty_tpl->tpl_vars['IS_HIDDEN']->value) {?> d-none<?php }?>"><div class="w-100"><div class="form-row border-right"><div class="fieldLabel u-border-bottom-label-md u-border-right-0-md c-panel__label col-lg-3 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-right"><label class="u-text-small-bold"><?php echo \App\Language::translate('LBL_INVITE_RECORDS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></td></div><div class="fieldValue col-sm-12 col-lg-9 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 d-flex flex-wrap flex-row justify-content-start align-items-left"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVITIES_SELECTED']->value, 'INVITIE', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['INVITIE']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('InviteRow.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('IS_VIEW'=>true), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div></div></div><!-- /tpl-Calendar-Detail-BlockView -->
<?php }
}
