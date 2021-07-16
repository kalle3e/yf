<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-20 23:58:54
  from '/var/www/html/yeti/layouts/basic/modules/Calendar/EditViewActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8edf0e6c36f6_72651708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcf9fa873a5c42c53ce43b7019ee37895b27e5b3' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Calendar/EditViewActions.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8edf0e6c36f6_72651708 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-EditViewActions c-form__action-panel d-flex justify-content-center"><div class="btn-group-toggle mr-1" data-toggle="buttons"><label class="btn c-btn-checkbox c-btn-outline-done js-btn--mark-as-completed" data-js="click"><strong><span class="far fa-square fa-lg mr-1 c-btn-checkbox--unchecked"></span><span class="far fa-check-square fa-lg mr-1 c-btn-checkbox--checked"></span><input type="checkbox" checkedautocomplete="off"><?php echo \App\Language::translate('LBL_MARK_AS_HELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></label></div><button class="btn btn-success mr-1 js-form-submit-btn" type="submit" disabled="disabled" data-js="disabled"><span class="fas fa-check mr-1"></span><strong class="d-none d-sm-inline-block"><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-danger mr-1" type="reset" onclick="javascript:window.history.back();"><span class="fas fa-times mr-1"></span><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EDITVIEW_LINKS']->value['EDIT_VIEW_HEADER'], 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'editViewHeader'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></form></div></div>
<?php }
}
