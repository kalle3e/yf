<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 21:44:50
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/Widget/BasicComments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f85b2c66a03_52107295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22ebd27a2b6f8e7de4484b74d20784b0fe43b93f' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/Widget/BasicComments.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f85b2c66a03_52107295 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo \App\Layout::getUniqueId(\App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
$_prefixVariable10=ob_get_clean();
$_smarty_tpl->_assignInScope('WIDGET_UID', "id-".$_prefixVariable10);?><div class="tpl-Detail-Widget-BasicComments c-detail-widget js-detail-widget BasicComments updatesWidgetContainer" data-js=”container”><div class="widgetContainer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 widgetContentBlock" data-url="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['url']);?>
"data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['type'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['id'];?>
"data-limit="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['limit'];?>
" data-js="data-url|data-type|data-limit"><div class="c-detail-widget__header js-detail-widget-header collapsed" data-js="container|value"><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['data']['relatedmodule'];?>
" /><div class="c-detail-widget__header__container d-flex align-items-center my-1"><div class="c-detail-widget__toggle collapsed" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-toggle="collapse"data-target="#<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse" aria-expanded="false" aria-controls="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse"><span class="mdi mdi-chevron-up" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span></div><div class="c-detail-widget__header__title"><h5 class="mb-0 modCT_<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
"><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['label'] == '') {
echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['data']['relatedmodule'],$_smarty_tpl->tpl_vars['WIDGET']->value['data']['relatedmodule']);
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?></h5></div><div class="row inline justify-center js-hb__container ml-auto"><button type="button" tabindex="0" class="btn js-hb__btn u-hidden-block-btn text-grey-6 py-0 px-1"><div class="text-center col items-center justify-center row"><i aria-hidden="true" class="mdi mdi-wrench q-icon"></i></div></button><div class="u-hidden-block items-center js-comment-actions"><div class="input-group input-group-sm"><input type="text" class="js-comment-search form-control" placeholder="<?php echo \App\Language::translate('LBL_COMMENTS_SEARCH','ModComments');?>
"aria-describedby="commentSearchAddon" data-container="widget" data-js="keypress|data"><div class="input-group-append"><button class="btn btn-light js-search-icon" type="button" data-js="click"><span class="fas fa-search fa-fw" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span></button></div></div></div></div></div></div><div class="c-detail-widget__content js-detail-widget-collapse js-detail-widget-content collapse multi-collapse" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse"data-storage-key="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['id'];?>
" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-js="container|value"></div></div></div>
<?php }
}
