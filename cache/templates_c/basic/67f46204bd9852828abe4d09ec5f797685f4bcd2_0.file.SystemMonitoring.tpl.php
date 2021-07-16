<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 10:15:23
  from '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/DashBoard/SystemMonitoring.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f79060b139f08_81019854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67f46204bd9852828abe4d09ec5f797685f4bcd2' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/DashBoard/SystemMonitoring.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f79060b139f08_81019854 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Base-DashBoard-SystemMonitoring  --><div class="mb-3 d-flex flex-wrap mr-n3"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SYSTEM_MONITORING']->value, 'ITEM');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->_assignInScope('TRANSLATION', \App\Language::translatePluralized($_smarty_tpl->tpl_vars['ITEM']->value['LABEL'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,$_smarty_tpl->tpl_vars['ITEM']->value['VALUE']));?><div class="dashboardWidget px-1 pt-1 pb-4 mt-3 mr-3 flex-grow-1"><div class="pl-3 d-flex flex-nowrap justify-content-center"><div class="d-flex u-font-size-50px pb-1 mr-2"><span class="mt-auto mb-2 <?php echo $_smarty_tpl->tpl_vars['ITEM']->value['ICON'];?>
"></span></div><div class="display-3 u-font-weight-350" <?php if (strlen($_smarty_tpl->tpl_vars['ITEM']->value['VALUE']) > 3) {?>title="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['VALUE'];?>
">999+<?php } else { ?>><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['VALUE'];
}?></div></div><div class="px-3"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/WidgetTitle.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('CLASS'=>'text-center','TITLE'=>$_smarty_tpl->tpl_vars['TRANSLATION']->value), 0, true);
if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['HREF'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['HREF'];?>
" class="btn btn-dark btn-block mt-2"><?php echo \App\Language::translate('LBL_MORE');?>
</a><?php }?></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><!-- /tpl-Settings-Base-DashBoard-SystemMonitoring  -->
<?php }
}
