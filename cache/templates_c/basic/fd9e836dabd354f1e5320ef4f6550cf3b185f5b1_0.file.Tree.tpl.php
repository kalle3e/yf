<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 00:45:10
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/List/Field/Tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e5e76cc2312_31560541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd9e836dabd354f1e5320ef4f6550cf3b185f5b1' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/List/Field/Tree.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e5e76cc2312_31560541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('ALL_VALUES', $_smarty_tpl->tpl_vars['FIELD_INFO']->value['picklistvalues']);
if (isset($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'])) {
$_smarty_tpl->_assignInScope('SEARCH_VALUES', explode('##',$_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']));
} else {
$_smarty_tpl->_assignInScope('SEARCH_VALUES', array());
}?><div class="tpl-List-Field-Tree picklistSearchField"><select class="select2noactive listSearchContributor tree form-control" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" multiple="multiple"name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" data-fieldinfo='<?php echo htmlspecialchars(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value), ENT_QUOTES, 'UTF-8', true);?>
'<?php if (!empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name'))) {?>data-source-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name');?>
"data-module-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
"<?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_VALUES']->value, 'LABEL', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"data-parent="<?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['KEY']->value,$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value) && ($_smarty_tpl->tpl_vars['KEY']->value != '')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div>
<?php }
}
