<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 21:44:50
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/HeaderFields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f85b27615e6_69103525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b51eee37bae2e4054900b17bc7cf4b0d0065dcba' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/HeaderFields.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f85b27615e6_69103525 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Base-Detail-HeaderFields ml-md-2 pr-md-2 u-min-w-md-30 w-100"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/HeaderButtons.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if (isset($_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['value']) || $_smarty_tpl->tpl_vars['CUSTOM_FIELDS_HEADER']->value) {
if ($_smarty_tpl->tpl_vars['CUSTOM_FIELDS_HEADER']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_FIELDS_HEADER']->value, 'ROW');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ROW']->value) {
?><div class="badge badge-info d-flex flex-nowrap align-items-center justify-content-center my-1 js-popover-tooltip--ellipsis" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ROW']->value['title']);?>
 <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ROW']->value['badge']);?>
" data-toggle="popover"data-js="popover | mouseenter"<?php if (isset($_smarty_tpl->tpl_vars['ROW']->value['action']) && $_smarty_tpl->tpl_vars['ROW']->value['action']) {?>onclick="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ROW']->value['action']);?>
"<?php }?>><div class="c-popover-text"><span class="mr-1"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['title'];?>
</span><?php echo $_smarty_tpl->tpl_vars['ROW']->value['badge'];?>
</div><span class="fas fa-info-circle fa-sm js-popover-icon d-none" data-js="class: d-none"></span></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if (isset($_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['value'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['value'], 'FIELD_MODEL', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if (!$_smarty_tpl->tpl_vars['RECORD']->value->isEmpty($_smarty_tpl->tpl_vars['NAME']->value)) {
$_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['NAME']->value));?><div class="badge <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getHeaderValue('class')) {
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getHeaderValue('class');
} else { ?>badge-info<?php }?> d-flex flex-nowrap align-items-center justify-content-center mt-1 js-popover-tooltip--ellipsis"data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
: <string><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['VALUE']->value);?>
</string>"data-toggle="popover" data-js="popover | mouseenter"><div class="c-popover-text"><span class="mr-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</span><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</div><span class="fas fa-info-circle fa-sm js-popover-icon d-none" data-js="class: d-none"></span></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}?></div>
<?php }
}
