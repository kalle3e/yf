<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 18:29:28
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/SummaryWidgetsContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8d4058931420_24083371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0df36e159081090cb956c8985c767bffe5d5698' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/SummaryWidgetsContent.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8d4058931420_24083371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/yeti/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_assignInScope('IS_INVENTORY', ($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isInventory() && !empty($_smarty_tpl->tpl_vars['INVENTORY_FIELDS']->value)));
if (!$_smarty_tpl->tpl_vars['TYPE_VIEW']->value || $_smarty_tpl->tpl_vars['TYPE_VIEW']->value == 'List') {?><input type="hidden" class="relatedView" value="List"><div class="listViewEntriesDiv relatedContents table-responsive"><table class="table c-detail-widget__table listViewEntriesTable"><thead><tr class="text-left"><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) {?><th class="noWrap p-1"></th><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
?><th nowrap class="p-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getModuleName());?>
</th><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><th class="p-1"><?php echo \App\Language::translate('LBL_RELATION_CREATED_TIME',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><th class="p-1"><?php echo \App\Language::translate('LBL_RELATION_CREATED_USER',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><th class="p-1"><?php echo \App\Language::translate('LBL_RELATION_COMMENT',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><?php }
if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?><th class="noWrap p-1"></th><?php }?></tr></thead><?php $_smarty_tpl->_assignInScope('COUNT', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value, 'RELATED_RECORD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->value) {
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?>data-recordUrl='<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
'<?php }?>><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) {?><td class="noWrap leftRecordActions listButtons <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('RelatedListLeftSide.tpl',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></td><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);
$_smarty_tpl->_assignInScope('RELATED_HEADERNAME', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldName());?><td class="text-left <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldDataType();?>
"nowrap><?php if (($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isNameField() == true || $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getUIType() == '4') && $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?><a class="modCT_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"title="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
"href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value),50);?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('fromOutsideList') == true) {
echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value));
} else {
echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);
}?></td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-left" data-field-type="rel_created_time"nowrap><?php echo App\Fields\DateTime::formatToDisplay($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_created_time'));?>
</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-left" data-field-type="rel_created_user"nowrap><?php echo \App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_created_user'));?>
</td><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-left" data-field-type="rel_comment" nowrap><?php if (strlen($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment')) > App\Config::relation('COMMENT_MAX_LENGTH')) {?><a class="js-popover-tooltip" data-js="popover" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment');?>
"><?php echo App\TextParser::textTruncate($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment'),App\Config::relation('COMMENT_MAX_LENGTH'));?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment');
}?>&nbsp;&nbsp;<span class="actionImages"><a class="showModal" data-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['PARENT_RECORD']->value->getModuleName();?>
&view=RelatedCommentModal&record=<?php echo $_smarty_tpl->tpl_vars['PARENT_RECORD']->value->getId();?>
&relid=<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
&relmodule=<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name');?>
"><span class="yfi yfi-full-editing-view" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></a></span></td><?php }
if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);?><td nowrap><button type="button" class="btn btn-sm btn-info js-popover-tooltip showInventoryRow" data-js="popover" data-placement="left" data-content="<?php echo \App\Language::translate('LBL_SHOW_INVENTORY_ROW');?>
"><span class="fas fa-arrows-alt-v"></span></button></td><?php }?></tr><?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {
$_smarty_tpl->_assignInScope('INVENTORY_DATA', $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getInventoryData());
$_smarty_tpl->_assignInScope('INVENTORY_MODEL', Vtiger_Inventory_Model::getInstance($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getModuleName()));?><tr class="listViewInventoryEntries d-none"><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isQuickSearchEnabled()) {
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);
}?><td colspan="<?php echo $_smarty_tpl->tpl_vars['COUNT']->value+1;?>
" class="backgroundWhiteSmoke"><table class="table table-sm no-margin"><thead><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_FIELDS']->value, 'FIELD', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
?><th class="medium" nowrap><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</th><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_DATA']->value, 'INVENTORY_ROW');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['INVENTORY_ROW']->value) {
?><tr><?php if ($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['name']) {
$_smarty_tpl->_assignInScope('ROW_MODULE', \App\Record::getType($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['name']));
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_FIELDS']->value, 'FIELD', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->_assignInScope('FIELD_TPL_NAME', ("inventoryfields/").($_smarty_tpl->tpl_vars['FIELD']->value->getTemplateName('DetailView',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value)));?><td><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_TPL_NAME']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ITEM_VALUE'=>$_smarty_tpl->tpl_vars['INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['FIELD']->value->getColumnName()]), 0, true);
?></td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></td></tr><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table></div><?php } elseif ($_smarty_tpl->tpl_vars['TYPE_VIEW']->value == 'Summary') {?><div class="listViewEntriesDiv relatedContents table-responsive"><div class="carousel slide" data-interval="false" data-ride="carousel"><div class="carousel-inner" role="listbox"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value, 'RELATED_RECORD', false, NULL, 'recordlist', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['index'];
?><div class="carousel-item  js-carousel-item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['first'] : null)) {?>active<?php }?>"data-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
" data-js="click"><table class="c-detail-widget__table u-table-fixed"><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
?><tr class="c-table__row--hover border-bottom"><td class="u-w-40per <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 px-0"><label class="font-weight-bold mb-0"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</label></td><?php $_smarty_tpl->_assignInScope('RELATED_HEADERNAME', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldName());?><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 px-0"><div class="value u-word-break pr-0"><?php if (($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isNameField() == true) && $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?><a class="modCT_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"title="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
"href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);
}?></div></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><div class="float-right py-1"><?php if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?><a class="addButton" href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getFullDetailViewUrl();?>
"><button class="btn btn-sm btn-light js-popover-tooltip" data-js="popover" type="button"><span title="<?php echo \App\Language::translate('LBL_SHOW_COMPLETE_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="fas fa-th-list"></span></button></a><?php }
if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isEditable()) {?><a class="addButton" href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getEditViewUrl();?>
"><button class="btn btn-sm btn-light js-popover-tooltip" data-js="popover" type="button"><span title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="yfi yfi-full-editing-view"></span></button></a><?php }?></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php } else { ?><div class="listViewEntriesDiv relatedContents table-responsive"><table class="table c-detail-widget__table listViewEntriesTable"><thead><tr class="text-center"><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) {?><th class="noWrap p-1">&nbsp;</th><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
?><th nowrap class="p-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><th class="p-1"><?php echo \App\Language::translate('LBL_RELATION_CREATED_TIME',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><th class="p-1"><?php echo \App\Language::translate('LBL_RELATION_CREATED_USER',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><th class="p-1"><?php echo \App\Language::translate('LBL_RELATION_COMMENT',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><?php }?></tr></thead><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value, 'RELATED_RECORD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->value) {
?><tr class="listViewEntries showSummaryRelRecord" data-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?>data-recordUrl='<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
'<?php }?>><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) {?><td class="noWrap leftRecordActions listButtons <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('RelatedListLeftSide.tpl',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></td><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->_assignInScope('RELATED_HEADERNAME', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldName());?><td class="text-center <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldDataType();?>
"nowrap><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
</td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center" data-field-type="rel_created_time"nowrap><?php echo App\Fields\DateTime::formatToDisplay($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_created_time'));?>
</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center" data-field-type="rel_created_user"nowrap><?php echo \App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_created_user'));?>
</td><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center" data-field-type="rel_comment" nowrap><?php if (strlen($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment')) > App\Config::relation('COMMENT_MAX_LENGTH')) {?><a class="js-popover-tooltip" data-js="popover" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment');?>
"><?php echo vtlib\Functions::textLength($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment'),App\Config::relation('COMMENT_MAX_LENGTH'));?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment');
}?>&nbsp;&nbsp;<span class="actionImages"><a class="showModal" data-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['PARENT_RECORD']->value->getModuleName();?>
&view=RelatedCommentModal&record=<?php echo $_smarty_tpl->tpl_vars['PARENT_RECORD']->value->getId();?>
&relid=<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
&relmodule=<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name');?>
"><span class="yfi yfi-full-editing-view" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></a></span></td><?php }?></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value, 'RELATED_RECORD', false, NULL, 'recordlist', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['index'];
$_smarty_tpl->_assignInScope('ID', $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId());?><div class="hide summaryRelRecordView summaryRelRecordView<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"><table class="c-detail-widget__table u-table-fixed"><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_SUMMARY_HEADERS']->value, 'HEADER_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
?><tr class="c-table__row--hover border-bottom"><td class="u-w-40per <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 px-0"><label class="font-weight-bold mb-0"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</label></td><?php $_smarty_tpl->_assignInScope('RELATED_HEADERNAME', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldName());?><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 px-0"><div class="value u-word-break pr-0"><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
</div></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><div class="float-right py-1"><?php if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?><a class="addButton" href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
"><button type="button" class="btn btn-sm btn-light js-popover-tooltip" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_SHOW_COMPLETE_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span title="<?php echo \App\Language::translate('LBL_SHOW_COMPLETE_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="fas fa-th-list"></span></button></a><?php }
if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isEditable()) {?><a class="addButton" href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getEditViewUrl();?>
"><button type="button" class="btn btn-sm btn-light js-popover-tooltip" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="far fa-edit"></span></button></a><?php }?><button type="button" class="btn btn-sm btn-light js-popover-tooltip"><span class="far fa-times-circle hideSummaryRelRecordView u-cursor-pointer"></span></button></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
}
