<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-22 21:03:34
  from '/var/www/html/yeti/layouts/basic/modules/OSSTimeControl/RelatedSummary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600aa2f6206447_02087670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45944aa498403408605c38e1aaa770f5d13556cf' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/OSSTimeControl/RelatedSummary.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600aa2f6206447_02087670 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sumaryRelatedTimeControl"><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo \App\Layout::getPublicUrl('libraries/chart.js/dist/Chart.js');?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo \App\Layout::getPublicUrl('libraries/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.js');?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo \App\Layout::getLayoutFile('modules/OSSTimeControl/resources/InRelation.js');?>
"><?php echo '</script'; ?>
><?php if (count($_smarty_tpl->tpl_vars['RELATED_SUMMARY']->value['userTime']['datasets'][0]['data']) > 0) {?><div class="row"><div class="col-md-12"><button class="btn btn-sm btn-default float-left mr-2 switchChartContainer" type="button"><span class="fa fa-chevron-up"></span></button><h5><?php echo \App\Language::translate('LBL_SUM_OF_WORKING_TIME_DIVIDED_INTO_USERS',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
:</h5></div></div><div class="row chartContainer"><div class="col-md-12"><input class="widgetData" type="hidden" value='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['RELATED_SUMMARY']->value['userTime']));?>
' /><div class="chartBlock chart-container" style="position: relative; height:200px; width:100%"><canvas id="related-summary-chart-canvas"></canvas></div></div></div><hr /><?php }?></div>
<?php }
}
