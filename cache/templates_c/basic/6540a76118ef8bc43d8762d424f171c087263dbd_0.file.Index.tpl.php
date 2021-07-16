<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-20 16:49:16
  from '/var/www/html/yeti/layouts/basic/modules/Settings/Updates/Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3e1cec541b22_74528025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6540a76118ef8bc43d8762d424f171c087263dbd' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Settings/Updates/Index.tpl',
      1 => 1584117276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3e1cec541b22_74528025 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-Updates-Index">
	<div class="o-breadcrumb widget_header row">
		<div class="col-md-7">
			<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		</div>
		<div class="col-md-5 align-items-center d-flex justify-content-end">
			<a class="btn btn-success btn-sm addMenu" role="button" href="<?php echo Settings_ModuleManager_Module_Model::getUserModuleImportUrl();?>
">
				<span class="fa fa-plus u-mr-5px" title="<?php echo \App\Language::translate('LBL_IMPORT_UPDATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span>
				<span class="sr-only"><?php echo \App\Language::translate('LBL_IMPORT_UPDATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
				<strong><?php echo \App\Language::translate('LBL_IMPORT_UPDATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>
			</a>
		</div>
	</div>
	<hr class="mt-1 mb-2">
	<?php if ($_smarty_tpl->tpl_vars['TO_INSTALL']->value) {?>
		<table class="table tableRWD table-bordered table-sm themeTableColor">
			<thead>
				<tr>
					<th colspan="5" class="text-center"><?php echo \App\Language::translate('LBL_AVAILABLE_UPGRADE_PACKAGES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th>
				</tr>
				<tr>
					<th><?php echo \App\Language::translate('LBL_NAME_PACKAGES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th>
					<th><?php echo \App\Language::translate('LBL_FROM_VERSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th>
					<th><?php echo \App\Language::translate('LBL_TO_VERSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th>
					<th><?php echo \App\Language::translate('LBL_PACKAGE_VERSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TO_INSTALL']->value, 'ITEM');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
?>
				<tr>
					<td><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ITEM']->value['label']);?>
</td>
					<td><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ITEM']->value['fromVersion']);?>
</td>
					<td><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ITEM']->value['toVersion']);?>
</td>
					<td><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ITEM']->value['version']);?>
</td>
					<td class="text-center">
						<?php if (\App\YetiForce\Updater::isDownloaded($_smarty_tpl->tpl_vars['ITEM']->value)) {?>
							<a class="btn btn-success btn-sm addMenu" role="button" href="index.php?module=ModuleManager&parent=Settings&view=ModuleImport&mode=importUserModuleStep2&upgradePackage=<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ITEM']->value['hash']);?>
">
								<span class="fas fa-download u-mr-5px" title="<?php echo \App\Language::translate('LBL_INSTALL_PACKAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span>
								<span class="sr-only"><?php echo \App\Language::translate('LBL_INSTALL_PACKAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
								<strong><?php echo \App\Language::translate('LBL_INSTALL_PACKAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>
							</a>
						<?php } else { ?>
							<a class="btn btn-primary btn-sm addMenu" role="button" href="index.php?parent=Settings&module=Updates&view=Index&download=<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ITEM']->value['hash']);?>
">
								<span class="fas fa-download u-mr-5px" title="<?php echo \App\Language::translate('LBL_DOWNLOAD_PACKAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span>
								<span class="sr-only"><?php echo \App\Language::translate('LBL_DOWNLOAD_PACKAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
								<strong><?php echo \App\Language::translate('LBL_DOWNLOAD_PACKAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>
							</a>
						<?php }?>
					</td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
		<hr class="mt-1 mb-2">
	<?php }?>
	<table class="table tableRWD table-bordered table-sm themeTableColor">
		<thead>
			<tr>
				<th colspan="6" class="text-center"><?php echo \App\Language::translate('LBL_INSTALLED_PACKAGES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th>
			</tr>
			<tr class="blockHeader">
				<th colspan="1" class="mediumWidthType">
					<span><?php echo \App\Language::translate('LBL_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
				</th>
				<th colspan="1" class="mediumWidthType">
					<span><?php echo \App\Language::translate('LBL_USER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
				</th>
				<th colspan="1" class="mediumWidthType">
					<span><?php echo \App\Language::translate('LBL_NAME_PACKAGES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
				</th>
				<th colspan="1" class="mediumWidthType">
					<span><?php echo \App\Language::translate('LBL_FROM_VERSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
				</th>
				<th colspan="1" class="mediumWidthType">
					<span><?php echo \App\Language::translate('LBL_TO_VERSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
				</th>
				<th colspan="1" class="mediumWidthType">
					<span><?php echo \App\Language::translate('LBL_RESULT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INSTALLED']->value, 'foo', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['foo']->value) {
?>
			<tr>
				<td width="16%">
					<label class="marginRight5px"><?php echo $_smarty_tpl->tpl_vars['foo']->value['time'];?>
</label>
				</td>
				<td width="16%">
					<label class="marginRight5px"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['foo']->value['user']);?>
</label>
				</td>
				<td width="16%">
					<label class="marginRight5px"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['foo']->value['name']);?>
</label>
				</td>
				<td width="16%">
					<label class="marginRight5px"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['foo']->value['from_version']);?>
</label>
				</td>
				<td width="16%">
					<label class="marginRight5px"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['foo']->value['to_version']);?>
</label>
				</td>
				<td width="16%">
					<label class="marginRight5px">
						<?php if ($_smarty_tpl->tpl_vars['foo']->value['result'] == 1) {?>
							<?php echo \App\Language::translate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						<?php } else { ?>
							<?php echo \App\Language::translate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						<?php }?>
					</label>
				</td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>
</div>
<?php }
}
