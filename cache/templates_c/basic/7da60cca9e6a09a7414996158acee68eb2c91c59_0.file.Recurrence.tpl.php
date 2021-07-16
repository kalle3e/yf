<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-21 00:03:26
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/Field/Recurrence.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8ee01e53cb79_11902591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7da60cca9e6a09a7414996158acee68eb2c91c59' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/Field/Recurrence.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8ee01e53cb79_11902591 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Detail-Field-Recurrence typeRemoveModal" tabindex="-1"><div class="modal fade"><div class="modal-dialog modal-lg "><div class="modal-content"><div class="modal-header row no-margin"><div class="col-12"><h5 class="modal-title"><?php echo App\Language::translate('LBL_TITLE_TYPE_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div></div><div class="modal-body row"><div class="col-12"><div class="col-12 paddingLRZero marginBottom10px"><div class="col-4"><button class="btn btn-primary btn-sm typeSavingBtn" data-value="2"><?php echo App\Language::translate('LBL_DELETE_THIS_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div><div class="col-8"><?php echo App\Language::translate('LBL_DELETE_THIS_EVENT_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><div class="col-12 paddingLRZero marginBottom10px"><div class="col-4"><button class="btn btn-primary btn-sm typeSavingBtn" data-value="3"><?php echo App\Language::translate('LBL_DELETE_FUTURE_EVENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div><div class="col-8"><?php echo App\Language::translate('LBL_DELETE_FUTURE_EVENTS_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><div class="col-12 paddingLRZero marginBottom10px"><div class="col-4"><button class="btn btn-primary btn-sm typeSavingBtn" data-value="1"><?php echo App\Language::translate('LBL_DELETE_ALL_EVENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div><div class="col-8"><?php echo App\Language::translate('LBL_DELETE_ALL_EVENTS_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div></div></div></div></div></div></div><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>

<?php }
}
