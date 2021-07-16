<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 22:58:23
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/ListViewActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e456fc02dd8_64658906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8884eb268f7a57a92ae8bca0df534c5e3c890ac6' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/ListViewActions.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e456fc02dd8_64658906 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="listViewActions paginationDiv pl-1 d-flex justify-content-end"><?php if ((method_exists($_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'isPagingSupported') && ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isPagingSupported() == true)) || !method_exists($_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'isPagingSupported')) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Pagination.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></div><?php if ($_smarty_tpl->tpl_vars['PARENT_MODULE']->value !== 'Settings' && $_smarty_tpl->tpl_vars['VIEW_MODEL']->value) {?><div class="pl-1"><?php $_smarty_tpl->_assignInScope('COLOR', App\Config::search('LIST_ENTITY_STATE_COLOR'));?><input type="hidden" id="entityState" value="<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->has('entityState')) {
echo $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState');
} else { ?>Active<?php }?>"><div class="dropdown dropdownEntityState u-remove-dropdown-icon"><button class="btn btn-light dropdown-toggle" type="button" id="dropdownEntityState" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Archived') {?><span class="js-icon fas fa-archive" data-js="click | attr"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_ENTITY_STATE_ARCHIVED');?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Trash') {?><span class="js-icon fas fa-trash-alt" data-js="click | attr"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_ENTITY_STATE_TRASH');?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'All') {?><span class="js-icon fas fa-bars" data-js="click | attr"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_ALL');?>
</span><?php } else { ?><span class="js-icon fas fa-undo-alt" data-js="click | attr"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_ENTITY_STATE_ACTIVE');?>
</span><?php }?></button><ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownEntityState"><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Active']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Active'];?>
;"<?php }?>><a class="dropdown-item<?php if (!$_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') || $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Active') {?> active<?php }?>" href="#" data-value="Active"><span class="fas fa-undo-alt js-icon" data-js="click | attr"></span><span class="ml-2"><?php echo \App\Language::translate('LBL_ENTITY_STATE_ACTIVE');?>
</span></a></li><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Archived']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Archived'];?>
;"<?php }?>><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Archived') {?> active<?php }?>" href="#" data-value="Archived"><span class="fas fa-archive js-icon" data-js="click | attr"></span><span class="ml-2"><?php echo \App\Language::translate('LBL_ENTITY_STATE_ARCHIVED');?>
</span></a></li><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Trash']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Trash'];?>
;"<?php }?>><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Trash') {?> active<?php }?>" href="#" data-value="Trash"><span class="fas fa-trash-alt js-icon" data-js="click | attr"></span><span class="ml-2"><?php echo \App\Language::translate('LBL_ENTITY_STATE_TRASH');?>
</span></a></li><li><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'All') {?> active<?php }?>" href="#" data-value="All"><span class="fas fa-bars js-icon" data-js="click | attr"></span><span class="ml-2"><?php echo \App\Language::translate('LBL_ALL');?>
</span></a></li></ul></div></div><?php }?><input type="hidden" id="recordsCount" value=""/><input type="hidden" id="selectedIds" name="selectedIds"/><input type="hidden" id="excludedIds" name="excludedIds"/>
<?php }
}
