<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 18:31:47
  from '/var/www/html/yeti/layouts/basic/modules/Calendar/Extended/QuickCreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8d40e3dfaec9_67215100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56fd0a0f1eb2b820f5e4841f363638a1a1c54be6' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Calendar/Extended/QuickCreate.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8d40e3dfaec9_67215100 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="c-calendar-quickcreate quick-calendar-modal"><input value="<?php echo App\Config::module($_smarty_tpl->tpl_vars['MODULE']->value,'CALENDAR_VIEW');?>
" type="hidden" class="js-calendar-type" data-js="value"><input type="hidden" id="showType" value="current"/><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STYLES']->value, 'cssModel', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['cssModel']->value) {
?><link rel="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getRel();?>
" href="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getHref();?>
"/><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="modelContainer modal quickCreateContainer" tabindex="-1" role="dialog"><div class="modal-dialog modal-fullscreen modal-full" role="document"><div class="modal-content"><div class="modal-header col-12 m-0 align-items-center form-row d-flex justify-content-between py-2 js-modal-header" data-js="height"><div class="col-xl-6 col-12"><h5 class="modal-title form-row text-center text-xl-left mb-2 mb-xl-0"><div class="js-modal-title__container col-12"><div class="js-modal-title--add <?php if ($_smarty_tpl->tpl_vars['RECORD']->value) {?> d-none<?php }?>"><span class="fas fa-plus mr-1"></span><strong class="mr-1"><?php echo \App\Language::translate('LBL_QUICK_CREATE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</strong><strong class="text-uppercase"><span class="yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
 mx-1"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SINGLE_MODULE']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></div><div class="js-modal-title--status d-none"><span class="fas fa-question-circle mr-1"></span><strong class="mr-1"><?php echo \App\Language::translate('LBL_SET_RECORD_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></div><div class="js-modal-title--edit<?php if (!$_smarty_tpl->tpl_vars['RECORD']->value) {?> d-none<?php }?>"><span class="yfi yfi-full-editing-view mr-1"></span><strong class="mr-1"><?php echo \App\Language::translate('LBL_EDIT_EVENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></div></div></h5></div><div class="col-xl-6 col-12 text-center text-xl-right"><button class="cancelLink btn btn-danger col-12 col-md-1 ml-0 ml-md-1" aria-hidden="true" data-dismiss="modal" type="button" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span class="fas fa-times"></span></button></div></div><div class="modal-body row no-gutters m-0 pt-0"><div class="col col-lg-8 pt-2"><input type="hidden" id="hiddenDays" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(App\Config::module('Calendar','HIDDEN_DAYS_IN_CALENDAR_VIEW')));?>
"/><input value="<?php echo $_smarty_tpl->tpl_vars['WEEK_COUNT']->value;?>
" type="hidden" id="weekCount"/><input value="<?php echo $_smarty_tpl->tpl_vars['WEEK_VIEW']->value;?>
" type="hidden" id="weekView"/><input value="<?php echo $_smarty_tpl->tpl_vars['DAY_VIEW']->value;?>
" type="hidden" id="dayView"/><input value="<?php echo $_smarty_tpl->tpl_vars['ALL_DAY_SLOT']->value;?>
" type="hidden" id="allDaySlot"/><div class="c-calendar-view"><div class="o-calendar__container"><div class="js-calendar__container" data-js="fullcalendar | offset"></div></div></div></div><div class="js-calendar-right-panel col col-lg-4 pl-3" data-js="container | html"><div class="js-qc-form" ><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Extended/EventForm.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div></div></div></div></div>
<?php }
}
