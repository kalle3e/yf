<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 21:44:50
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/Widget/Activities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f85b2c09059_97180257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74a5706aff859cb8c3f8e0a59165b1f865c47a49' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/Widget/Activities.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f85b2c09059_97180257 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-Widget-Activities --><?php ob_start();
echo \App\Layout::getUniqueId(\App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->_assignInScope('WIDGET_UID', "id-".$_prefixVariable8);?><div class="c-detail-widget js-detail-widget activityWidgetContainer" data-js="container"><div class="widgetContainer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 widgetContentBlock" data-url="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['url']);?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
"><div class="c-detail-widget__header js-detail-widget-header collapsed" data-js="container|value"><div class="c-detail-widget__header__container d-flex w-100 align-items-center py-1"><div class="c-detail-widget__toggle collapsed" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-toggle="collapse"data-target="#<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse" aria-expanded="false" aria-controls="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse"><span class="mdi mdi-chevron-up" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span></div><div class="c-detail-widget__header__title"><h5 class="mb-0 modCT_<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['label'] == '') {
echo App\Language::translate('LBL_ACTIVITIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
} else {
echo App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?></h5></div><div class="row inline justify-center js-hb__container ml-auto"><button type="button" tabindex="0" class="btn js-hb__btn u-hidden-block-btn text-grey-6 py-0 px-1"><div class="text-center col items-center justify-center row"><i aria-hidden="true" class="mdi mdi-wrench q-icon"></i></div></button><div class="u-hidden-block items-center js-comment-actions"><?php if (isset($_smarty_tpl->tpl_vars['WIDGET']->value['switchTypeInHeader'])) {?><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary active"><input class="js-switch" type="radio" name="options" id="options-option1" data-js="change" data-on-text="<?php echo App\Language::translate('LBL_CURRENT');?>
"data-on-val="<?php if (isset($_smarty_tpl->tpl_vars['WIDGET']->value['switchTypeInHeader']['on'])) {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['switchTypeInHeader']['on']);
}?>"data-basic-text="<?php echo App\Language::translate('LBL_CURRENT');?>
" autocomplete="off" checked="checked" data-urlparams="search_params"><?php echo App\Language::translate('LBL_CURRENT');?>
</label><label class="btn btn-sm btn-outline-primary"><input class="js-switch" type="radio" name="options" id="options-option2" data-js="change" data-basic-text="<?php echo App\Language::translate('LBL_HISTORY');?>
"data-off-text="data-off-text <?php echo App\Language::translate('LBL_HISTORY');?>
"data-off-val="<?php if (isset($_smarty_tpl->tpl_vars['WIDGET']->value['switchTypeInHeader']['off'])) {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['switchTypeInHeader']['off']);
}?>"autocomplete="off" data-urlparams="search_params"> <?php echo App\Language::translate('LBL_HISTORY');?>
</label></div><?php }?><button class="btn btn-sm btn-light addButton createActivity" data-url="sourceModule=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
&sourceRecord=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
&relationOperation=true"type="button" title="<?php echo App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-plus"></span></button></div></div></div></div><div class="c-detail-widget__content js-detail-widget-collapse js-detail-widget-content collapse multi-collapse" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse"data-storage-key="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['id'];?>
" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-js="container|value"></div></div></div><!-- /tpl-Base-Detail-Widget-Activities -->
<?php }
}
