<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 21:44:50
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/HeaderProgress.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f85b27b54b1_98700784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '200800f3876b42fd8b21d78dd95de09863ae15f9' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Detail/HeaderProgress.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f85b27b54b1_98700784 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-HeaderProgress --><?php if (isset($_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['progress'])) {
$_smarty_tpl->_assignInScope('CLOSE_STATES', \App\RecordStatus::getLockStatus($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),false));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['progress'], 'FIELD_MODEL', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if (!$_smarty_tpl->tpl_vars['RECORD']->value->isEmpty($_smarty_tpl->tpl_vars['NAME']->value)) {
$_smarty_tpl->_assignInScope('PICKLIST_OF_FIELD', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues());
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', \App\Fields\Picklist::getValues($_smarty_tpl->tpl_vars['NAME']->value));
$_smarty_tpl->_assignInScope('IS_EDITABLE', $_smarty_tpl->tpl_vars['RECORD']->value->isEditable() && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isAjaxEditable() && !$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly());?><div class="c-progress px-3 w-100"><ul class="c-progress__container js-header-progress-bar list-inline my-0 py-1 js-scrollbar c-scrollbar-x--small" data-picklist-name="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"data-js="container"><?php $_smarty_tpl->_assignInScope('ARROW_CLASS', "before");
$_smarty_tpl->_assignInScope('ICON_CLASS', "fas fa-check");
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'VALUE_DATA', false, NULL, 'picklistValues', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE_DATA']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_picklistValues']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_picklistValues']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_picklistValues']->value['index'];
$_smarty_tpl->_assignInScope('IS_ACTIVE', $_smarty_tpl->tpl_vars['VALUE_DATA']->value['picklistValue'] == $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['NAME']->value));
$_smarty_tpl->_assignInScope('IS_LOCKED', isset($_smarty_tpl->tpl_vars['CLOSE_STATES']->value[$_smarty_tpl->tpl_vars['VALUE_DATA']->value['picklist_valueid']]));
$_smarty_tpl->_assignInScope('PICKLIST_LABEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['VALUE_DATA']->value['picklistValue'],false,false,true));?><li class="c-progress__item list-inline-item mx-0 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_picklistValues']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_picklistValues']->value['first'] : null)) {?>first<?php }?> <?php if ($_smarty_tpl->tpl_vars['IS_ACTIVE']->value) {?>active<?php $_smarty_tpl->_assignInScope('ARROW_CLASS', "after");
} else {
echo $_smarty_tpl->tpl_vars['ARROW_CLASS']->value;
}
if ($_smarty_tpl->tpl_vars['IS_EDITABLE']->value && $_smarty_tpl->tpl_vars['VALUE_DATA']->value['picklistValue'] !== $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['NAME']->value) && isset($_smarty_tpl->tpl_vars['PICKLIST_OF_FIELD']->value[$_smarty_tpl->tpl_vars['VALUE_DATA']->value['picklistValue']])) {?> u-cursor-pointer js-access<?php }?>"data-picklist-value="<?php echo $_smarty_tpl->tpl_vars['VALUE_DATA']->value['picklistValue'];?>
"data-picklist-label="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_LABEL']->value);?>
"data-js="confirm|click|data"><div class="c-progress__icon__container"><span class="<?php if ($_smarty_tpl->tpl_vars['IS_LOCKED']->value) {?>fas fa-lock<?php } elseif ($_smarty_tpl->tpl_vars['IS_ACTIVE']->value) {?>far fa-dot-circle<?php } else {
echo $_smarty_tpl->tpl_vars['ICON_CLASS']->value;
}
if ($_smarty_tpl->tpl_vars['IS_ACTIVE']->value) {
$_smarty_tpl->_assignInScope('ICON_CLASS', "c-progress__icon__dot");
}
echo ' ';?>
c-progress__icon"></span></div><div class="c-progress__link"><?php if (!empty($_smarty_tpl->tpl_vars['VALUE_DATA']->value['description'])) {?><span class="c-progress__icon-info js-popover-tooltip" data-js="popover" data-trigger="hover focus" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['VALUE_DATA']->value['description']);?>
"><span class="fas fa-info-circle"></span></span><?php }?><span class=" js-popover-tooltip--ellipsis" data-toggle="popover" data-content="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_LABEL']->value;?>
" data-js="popover"><span class="c-progress__text"><?php echo $_smarty_tpl->tpl_vars['PICKLIST_LABEL']->value;?>
</span></span></div></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><!-- /tpl-Base-Detail-HeaderProgress -->
<?php }
}
