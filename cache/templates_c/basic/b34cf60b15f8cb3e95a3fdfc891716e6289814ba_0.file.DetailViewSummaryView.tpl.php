<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 21:44:50
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/DetailViewSummaryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f85b2ac6016_80085031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b34cf60b15f8cb3e95a3fdfc891716e6289814ba' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/DetailViewSummaryView.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f85b2ac6016_80085031 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-DetailViewSummaryView -->
<div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewBlockLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TYPE_VIEW'=>'SummaryTop'), 0, true);
?></div><div class="o-detail-widgets row no-gutters mx-n1"><?php if (!empty($_smarty_tpl->tpl_vars['DETAILVIEW_WIDGETS']->value[3])) {
$_smarty_tpl->_assignInScope('span', '4');
} elseif (!empty($_smarty_tpl->tpl_vars['DETAILVIEW_WIDGETS']->value[2])) {
$_smarty_tpl->_assignInScope('span', '6');
} else {
$_smarty_tpl->_assignInScope('span', '12');
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_WIDGETS']->value, 'WIDGETCOLUMN');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['WIDGETCOLUMN']->value) {
?><div class="col-md-<?php echo $_smarty_tpl->tpl_vars['span']->value;?>
 px-1"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETCOLUMN']->value, 'WIDGET', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->_assignInScope('FILE', ('Detail/Widget/').($_smarty_tpl->tpl_vars['WIDGET']->value['tpl']));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FILE']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewBlockLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TYPE_VIEW'=>'SummaryBottom'), 0, true);
?></div><!-- /tpl-Base-DetailViewSummaryView -->
<?php }
}
