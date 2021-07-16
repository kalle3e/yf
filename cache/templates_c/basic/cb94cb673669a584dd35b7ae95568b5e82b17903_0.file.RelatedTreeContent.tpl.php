<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 14:44:07
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/RelatedTreeContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f740d17a914c8_73782786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb94cb673669a584dd35b7ae95568b5e82b17903' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/RelatedTreeContent.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f740d17a914c8_73782786 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['RELATED_RECORDS']->value) > 0) {?><div class="listViewEntriesDiv u-overflow-scroll-non-desktop contents-bottomscroll"><table class="table noStyle"><thead><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER']->value) {
?><th nowrap class="p-1 text-center"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADER']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</th><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><th class="p-1 text-center"><?php echo \App\Language::translate('LBL_RELATION_CREATED_TIME',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</th><th class="p-1 text-center"><?php echo \App\Language::translate('LBL_RELATION_CREATED_USER',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</th><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><th class="p-1 text-center"><?php echo \App\Language::translate('LBL_RELATION_COMMENT',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</th><?php }?></tr></thead><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value, 'RECORD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->value) {
?><tr class="listViewEntries"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['HEADER']->value) {
?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center" nowrap><?php echo $_smarty_tpl->tpl_vars['RECORD']->value[$_smarty_tpl->tpl_vars['NAME']->value];?>
</td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center" data-field-type="rel_created_time" nowrap><?php echo $_smarty_tpl->tpl_vars['RECORD']->value['rel_created_time'];?>
</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center" data-field-type="rel_created_user" nowrap><?php echo $_smarty_tpl->tpl_vars['RECORD']->value['rel_created_user'];?>
</td><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center" data-field-type="rel_comment" nowrap><?php if (strlen($_smarty_tpl->tpl_vars['RECORD']->value['rel_comment']) > App\Config::relation('COMMENT_MAX_LENGTH')) {?><a class="js-popover-tooltip" data-js="popover" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value['rel_comment'];?>
"><?php echo App\TextParser::textTruncate($_smarty_tpl->tpl_vars['RECORD']->value['rel_comment'],App\Config::relation('COMMENT_MAX_LENGTH'));?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['RECORD']->value['rel_comment'];
}?>&nbsp;&nbsp;<span class="actionImages"><a class="showModal" data-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=RelatedCommentModal&record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&relid=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value['id'];?>
&relmodule=<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"><span class="yfi yfi-full-editing-view" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></a></span></td><?php }?></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table></div><?php } else { ?><div class="summaryWidgetContainer js-no-comments-msg-container"><p class="textAlignCenter"><?php echo \App\Language::translate('LBL_NO_RECORDS_FOUND',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }
}
}
