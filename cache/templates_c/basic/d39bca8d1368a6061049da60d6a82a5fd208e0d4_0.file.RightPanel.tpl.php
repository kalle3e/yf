<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-03 11:49:51
  from '/var/www/html/yeti/layouts/basic/modules/OSSTimeControl/Calendar/RightPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f504bbf17add7_31786295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd39bca8d1368a6061049da60d6a82a5fd208e0d4' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/OSSTimeControl/Calendar/RightPanel.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f504bbf17add7_31786295 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Calendar-Extended-RightPanel --><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Calendar/RightPanel.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if (!empty($_smarty_tpl->tpl_vars['ALL_ACTIVETYPES_LIST']->value)) {?><div class="card"><div class="card-header p-1 pl-2"><?php echo \App\Language::translate('LBL_TYPE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><div class="card-body row p-1"><div class="col-12"><select class="select2 form-control col-12 js-calendar__filter__select" name="types" data-cache="calendar-types" data-name="type" multiple="multiple" data-js="data | value"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIVETYPES_LIST']->value, 'ITEM', false, 'ITEM_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM_ID']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM_ID']->value;?>
" class="mb-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><?php }?><!-- /tpl-Calendar-Extended-RightPanel -->
<?php }
}
