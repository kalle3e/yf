<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 21:10:40
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Modals/RecordCollector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f842ba08c4db4_14368517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73239ef236d20448f34e4c215000975c5a3dc75c' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Modals/RecordCollector.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f842ba08c4db4_14368517 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Modals-RecordCollector --><div class="modal-body js-modal-body" data-js="container"><form class="form-horizontal js-record-collector__form" data-js="submit"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"/><input type="hidden" name="view" value="RecordCollector"/><input type="hidden" name="mode" value="search"/><input type="hidden" name="collectorType" value="<?php echo $_smarty_tpl->tpl_vars['COLLECTOR_NAME']->value;?>
"/><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_COLLECTOR']->value->getFields(), 'FIELD_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
?><div class="form-group form-row"><label class="col-4 col-form-label"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('labelModule'));
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {?><span class="redColor">*</span><?php }?>:</label><div class="col-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RECORD'=>null), 0, true);
?></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="float-right"><button class="btn btn-success" type="submit" name="saveButton" data-js="click"><span class="fas fa-check mr-1"></span><?php echo \App\Language::translate('LBL_SEARCH',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><button class="btn btn-danger ml-1" type="reset" data-dismiss="modal"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div></form><div class="mt-5 pt-2 js-record-collector__summary" data-js="html"></div></div><!-- /tpl-Base-Modals-RecordCollector -->
<?php }
}
