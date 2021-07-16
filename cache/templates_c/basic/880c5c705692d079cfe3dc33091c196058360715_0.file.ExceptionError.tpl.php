<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 23:05:53
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/ExceptionError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4ba431ec31c8_76739308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '880c5c705692d079cfe3dc33091c196058360715' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/ExceptionError.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ba431ec31c8_76739308 (Smarty_Internal_Template $_smarty_tpl) {
if ('test' === \App\Config::main('systemMode')) {?>
	<?php echo $_smarty_tpl->tpl_vars['HEADER_MESSAGE']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['MESSAGE_EXPANDED']->value) {?>
		<?php if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value['message'])) {
echo $_smarty_tpl->tpl_vars['MESSAGE']->value['message'];
}?>
		<?php if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value['query'])) {
echo $_smarty_tpl->tpl_vars['MESSAGE']->value['query'];
}?>
		<?php if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value['params'])) {?>
			<?php echo implode(',',$_smarty_tpl->tpl_vars['MESSAGE']->value['params']);?>

		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value['trace'])) {?>
			<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MESSAGE']->value['trace']);?>

		<?php }?>
	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

	<?php }
} else { ?>
	<!DOCTYPE html>
	<html><head><title>Yetiforce: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['HEADER_MESSAGE']->value);?>
</title><?php if (!empty($_smarty_tpl->tpl_vars['IS_IE']->value)) {?><meta http-equiv="x-ua-compatible" content="IE=11,edge" ><?php }?><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" href="<?php echo \App\Layout::getPublicUrl('layouts/basic/styles/Main.css');?>
"><link rel="stylesheet" href="<?php echo \App\Layout::getPublicUrl('libraries/@fortawesome/fontawesome-free/css/all.css');?>
"></head><body class="h-auto bg-color-amber-50 overflow-auto"><div class="o-exception-fixed-block container u-white-space-n u-word-break"><div class="card mx-auto mt-5 u-w-fit shadow" role="alert"><div class="card-header d-flex color-red-a200 bg-color-red-50 justify-content-center flex-wrap"><span class="display-1"><i class="fas fa-exclamation-triangle mr-3"></i></span><h3 class="align-items-center card-title d-flex justify-content-center"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['HEADER_MESSAGE']->value);?>
</h3></div><div class="card-body text-black rd-body bg-color-grey-50 js-exception-error"><p class="card-text u-font-size-19px"><?php if ($_smarty_tpl->tpl_vars['MESSAGE_EXPANDED']->value) {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MESSAGE']->value['message']);?>
.<?php } else {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MESSAGE']->value);
}?></p></div><div class="card-footer text-black d-flex flex-wrap flex-sm-nowrap"><a class="btn btn-lg btn-default mr-sm-2 mb-1 mb-sm-0 w-100" role="button" href="javascript:window.history.back();"><i class="fas fa-chevron-left mr-2"></i><?php echo \App\Language::translate('LBL_GO_BACK');?>
</a><a class="btn btn-lg btn-default w-100" role="button" href="index.php"><i class="fas fa-home mr-2"></i><?php echo \App\Language::translate('LBL_MAIN_PAGE');?>
</a></div></div><?php if ($_smarty_tpl->tpl_vars['MESSAGE_EXPANDED']->value) {
if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value['query'])) {?><div class="my-5 mx-auto card u-w-fit shadow"><div class="card-header"><h5><?php echo \App\Language::translate('LBL_SQL_QUERY');?>
</h5></div><div class="card-body text-black"><pre class="u-white-space-n u-word-break text-black"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value['query'];?>
</pre></div></div><?php }
if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value['params'])) {?><div class="my-5 mx-auto card u-w-fit shadow"><div class="card-header"><h5><?php echo \App\Language::translate('LBL_SQL_PARAMS');?>
</h5></div><div class="card-body text-black"><pre class="u-white-space-n u-word-break"><?php echo implode(',',$_smarty_tpl->tpl_vars['MESSAGE']->value['params']);?>
</pre></div></div><?php }
if (!empty($_smarty_tpl->tpl_vars['MESSAGE']->value['trace'])) {?><div class="my-5 mx-auto card u-w-fit shadow"><div class="card-header"><h5><?php echo \App\Language::translate('LBL_BACKTRACE');?>
</h5></div><div class="card-body text-black"><pre class="u-white-space-n u-word-break"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MESSAGE']->value['trace']);?>
</pre></div></div><?php }
}?></div><div class="my-5 mx-auto card p-3 u-w-fit shadow"><pre class="js-backtrace-content" data-js="html"></pre></div><?php echo '<script'; ?>
 type="text/javascript" <?php if (\App\Session::get('CSP_TOKEN')) {?>nonce="<?php echo \App\Session::get('CSP_TOKEN');?>
"<?php }?>>function errorLog() {console.error(document.querySelector('.js-exception-error').textContent);var html = '';var backtrace = document.querySelector('.js-exception-backtrace');var logs = document.querySelector('.js-exception-logs');if(backtrace){html += backtrace.textContent;backtrace.remove()}if(logs){html += logs.textContent;logs.remove()}document.querySelector('.js-backtrace-content').textContent = html;}if (document.readyState === 'loading') {document.addEventListener('DOMContentLoaded', errorLog);} else {errorLog();}<?php echo '</script'; ?>
></body></html>
<?php }
}
}
