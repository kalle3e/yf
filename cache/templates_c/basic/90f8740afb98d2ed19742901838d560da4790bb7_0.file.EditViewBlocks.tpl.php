<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-20 23:58:54
  from '/var/www/html/yeti/layouts/basic/modules/Calendar/EditViewBlocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8edf0e43bd28_13241440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90f8740afb98d2ed19742901838d560da4790bb7' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Calendar/EditViewBlocks.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8edf0e43bd28_13241440 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Calendar-EditViewBlocks --><input type="hidden" id="extendModules" value="Calendar"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewBlocks.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><input type="hidden" name="userChangedEndDateTime" value="<?php echo $_smarty_tpl->tpl_vars['USER_CHANGED_END_DATE_TIME']->value;?>
"/><?php $_smarty_tpl->_assignInScope('IS_HIDDEN', false);
$_smarty_tpl->_assignInScope('INVITIES_SELECTED', $_smarty_tpl->tpl_vars['RECORD']->value->getInvities());?><div class="js-toggle-panel c-panel c-panel--edit row mx-1 mb-3" data-js="click" data-label="LBL_INVITE_RECORDS"><div class="blockHeader c-panel__header align-items-center"><div class="col-md-7 form-row pl-1"><span class="u-cursor-pointer js-block-toggle fas fa-angle-right m-2 <?php if (!($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)) {?>d-none<?php }?>" data-js="click" data-mode="hide"></span><span class="u-cursor-pointer js-block-toggle fas fa-angle-down m-2 <?php if (($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)) {?>d-none<?php }?>" data-js="click" data-mode="show"></span><h5><?php echo \App\Language::translate('LBL_INVITE_RECORDS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="col-md-5 input-group js-popover-tooltip" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_SELECT_INVITE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><div class="input-group-prepend"><span class="input-group-text u-cursor-pointer"><span class="fas fa-search"></span></span></div><input type="text" class="form-control js-participants-search" title="<?php echo \App\Language::translate('LBL_SELECT_INVITE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"placeholder="<?php echo \App\Language::translate('LBL_SELECT_INVITE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-js="click" /><div class="input-group-append"><button type="button" class="js-btn-add-invitation btn btn-light" title="<?php echo \App\Language::translate('LBL_ADD_PARTICIPANT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fa fa-plus mr-2" title="<?php echo \App\Language::translate('LBL_ADD_PARTICIPANT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button></div></div></div><div class="c-panel__body c-panel__body--edit blockContent js-block-content <?php if ($_smarty_tpl->tpl_vars['IS_HIDDEN']->value) {?>d-none<?php }?>" data-js="display"><div class="js-participants-content d-flex flex-wrap flex-row justify-content-start align-items-left" data-js="container"><div class="d-none"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('InviteRow.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php if (!empty($_smarty_tpl->tpl_vars['INVITIES_SELECTED']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVITIES_SELECTED']->value, 'INVITIE', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['INVITIE']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('InviteRow.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div></div></div><!-- /tpl-Calendar-EditViewBlocks -->
<?php }
}
