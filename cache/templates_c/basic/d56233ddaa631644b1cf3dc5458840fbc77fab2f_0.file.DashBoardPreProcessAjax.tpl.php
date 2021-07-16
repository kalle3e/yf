<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 21:15:34
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/dashboards/DashBoardPreProcessAjax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e2d56ac56a1_38248495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd56233ddaa631644b1cf3dc5458840fbc77fab2f' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/dashboards/DashBoardPreProcessAjax.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e2d56ac56a1_38248495 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Base-dashboards-DashBoardPreProcessAjax mt-2 mb-2"><ul class="nav nav-tabs massEditTabs selectDashboard<?php if (count($_smarty_tpl->tpl_vars['DASHBOARD_TYPES']->value) === 1) {?> d-none<?php }?> ml-sm-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DASHBOARD_TYPES']->value, 'DASHBOARD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['DASHBOARD']->value) {
?><li class="nav-item" data-id="<?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value['dashboard_id'];?>
" data-js="data-id"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['CURRENT_DASHBOARD']->value == $_smarty_tpl->tpl_vars['DASHBOARD']->value['dashboard_id']) {?> active <?php }?>"href="#" data-toggle="tab"><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['DASHBOARD']->value['name']);?>
</strong></a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php if ($_smarty_tpl->tpl_vars['MODULES_WITH_WIDGET']->value) {?><ul class="nav nav-inverted-tabs massEditTabs selectDashboradView ml-sm-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULES_WITH_WIDGET']->value, 'MODULE_WIDGET');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value) {
?><li class="nav-item" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value;?>
"><a class="nav-link pt-1 pb-1 <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value) {?> active <?php }?>"href="#" data-toggle="tab"><span class="yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value;?>
 mx-1"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_WIDGET']->value,$_smarty_tpl->tpl_vars['MODULE_WIDGET']->value);?>
</a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?></div>
<?php }
}
