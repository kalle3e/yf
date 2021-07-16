<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 22:58:23
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/ButtonLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e456fb22317_34614098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff0013831a0f0da0212cdb848233b7031f5a321d' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/ButtonLink.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e456fb22317_34614098 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-ButtonLink --><?php if (empty($_smarty_tpl->tpl_vars['CLASS']->value)) {
$_smarty_tpl->_assignInScope('CLASS', '');
}
if (!isset($_smarty_tpl->tpl_vars['BUTTON_VIEW']->value)) {
$_smarty_tpl->_assignInScope('BUTTON_VIEW', '');
}?><div class="c-btn-link btn-group <?php if (strrpos($_smarty_tpl->tpl_vars['BUTTON_VIEW']->value,'listView') !== false && $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight') == 'narrow') {?>btn-group-sm<?php }?> <?php echo $_smarty_tpl->tpl_vars['CLASS']->value;?>
"><?php $_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['LINK']->value->getLabel());
$_smarty_tpl->_assignInScope('ACTION_NAME', $_smarty_tpl->tpl_vars['LABEL']->value);
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkhint') != '') {
$_smarty_tpl->_assignInScope('ACTION_NAME', $_smarty_tpl->tpl_vars['LINK']->value->get('linkhint'));
$_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['LINK']->value->get('linkhint'));
}
$_smarty_tpl->_assignInScope('LINK_URL', $_smarty_tpl->tpl_vars['LINK']->value->getUrl());
$_smarty_tpl->_assignInScope('BTN_MODULE', $_smarty_tpl->tpl_vars['LINK']->value->getRelatedModuleName($_smarty_tpl->tpl_vars['MODULE']->value));
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkhref')) {?><a role="button"<?php } else { ?><button type="button"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['LINK']->value->isActive()) {
echo ' ';?>
disabled<?php }
echo ' ';
if (isset($_smarty_tpl->tpl_vars['TABINDEX']->value)) {?>tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
"<?php }?>class="<?php if (isset($_smarty_tpl->tpl_vars['BTN_CLASS']->value)) {
echo $_smarty_tpl->tpl_vars['BTN_CLASS']->value;?>
 <?php }?>btn <?php if ($_smarty_tpl->tpl_vars['LINK']->value->getClassName() != '') {
if (strrpos($_smarty_tpl->tpl_vars['LINK']->value->getClassName(),"btn-") === false) {?>btn-outline-dark <?php }
echo $_smarty_tpl->tpl_vars['LINK']->value->getClassName();
} else { ?>btn-outline-dark<?php }?>  <?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('modalView')) {?>showModal<?php }?> <?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['BUTTON_VIEW']->value;?>
_action_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['ACTION_NAME']->value);?>
 <?php if ($_smarty_tpl->tpl_vars['LABEL']->value != '' && $_smarty_tpl->tpl_vars['LINK']->value->get('showLabel') != '1') {?> js-popover-tooltip"data-js="popover<?php }?>"<?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkdata') != '' && is_array($_smarty_tpl->tpl_vars['LINK']->value->get('linkdata'))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINK']->value->get('linkdata'), 'DATA', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['DATA']->value) {
echo ' ';?>
data-<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['DATA']->value);?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['LABEL']->value != '' && $_smarty_tpl->tpl_vars['LINK']->value->get('showLabel') != 1) {
echo ' ';?>
data-placement="top"<?php echo ' ';?>
data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['BTN_MODULE']->value);?>
"data-target="focus hover"<?php }
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkhref')) {
echo ' ';?>
href="<?php echo $_smarty_tpl->tpl_vars['LINK_URL']->value;?>
"<?php }
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linktarget')) {
echo ' ';?>
target="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('linktarget');?>
"<?php }
if ($_smarty_tpl->tpl_vars['LINK']->value->get('style')) {
echo ' ';?>
style="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('style');?>
"<?php }
if ($_smarty_tpl->tpl_vars['LINK']->value->get('dataUrl')) {
echo ' ';?>
data-url="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('dataUrl');?>
"<?php }
echo ' ';
if ($_smarty_tpl->tpl_vars['LINK']->value->get('modalView')) {?>data-url="<?php echo $_smarty_tpl->tpl_vars['LINK_URL']->value;?>
"<?php } else {
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkPopup')) {?>onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['LINK_URL']->value;?>
', '<?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('linktarget')) {
echo $_smarty_tpl->tpl_vars['LINK']->value->get('linktarget');
} else { ?>_self<?php }?>'<?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkPopup')) {?>, 'resizable=yes,location=no,scrollbars=yes,toolbar=no,menubar=no,status=no'<?php }?>)"<?php } else {
if ($_smarty_tpl->tpl_vars['LINK_URL']->value != '' && !$_smarty_tpl->tpl_vars['LINK']->value->get('linkhref')) {
if (stripos($_smarty_tpl->tpl_vars['LINK_URL']->value,'javascript:') === 0) {?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['LINK_URL']->value,strlen("javascript:"));?>
;'<?php } else { ?>onclick='app.openUrl("<?php echo $_smarty_tpl->tpl_vars['LINK_URL']->value;?>
")'<?php }
}
}
}?>><?php if (!empty($_smarty_tpl->tpl_vars['LINK']->value->get('linkicon'))) {?><span class="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('linkicon');?>
 <?php if (!empty($_smarty_tpl->tpl_vars['LINK']->value->get('linkimg')) || !empty($_smarty_tpl->tpl_vars['LINK']->value->get('linkicon')) && $_smarty_tpl->tpl_vars['LINK']->value->get('showLabel') != null && $_smarty_tpl->tpl_vars['BUTTON_VIEW']->value != 'detailViewBasic') {?>mr-1<?php }?>"></span><?php }
if (!empty($_smarty_tpl->tpl_vars['LINK']->value->get('linksecondicon'))) {?><span class="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('linksecondicon');?>
 <?php if (!empty($_smarty_tpl->tpl_vars['LINK']->value->get('linkimg')) || !empty($_smarty_tpl->tpl_vars['LINK']->value->get('linksecondicon')) && $_smarty_tpl->tpl_vars['LINK']->value->get('showLabel') != null && $_smarty_tpl->tpl_vars['BUTTON_VIEW']->value != 'detailViewBasic') {?>mr-1<?php }?>"></span><?php }
if (!empty($_smarty_tpl->tpl_vars['LINK']->value->get('vueId'))) {?><div id="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('vueId');?>
"></div><?php }
if (!empty($_smarty_tpl->tpl_vars['LABEL']->value) && $_smarty_tpl->tpl_vars['LINK']->value->get('showLabel') == 1) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['BTN_MODULE']->value);
} elseif (!empty($_smarty_tpl->tpl_vars['LABEL']->value) && !empty($_smarty_tpl->tpl_vars['CLASS']->value) && $_smarty_tpl->tpl_vars['CLASS']->value == 'c-btn-link--responsive') {?><span class="d-<?php if (isset($_smarty_tpl->tpl_vars['BREAKPOINT']->value)) {
echo $_smarty_tpl->tpl_vars['BREAKPOINT']->value;
} else { ?>sm<?php }?>-none ml-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['BTN_MODULE']->value);?>
</span><?php }
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkhref')) {?></a><?php } else { ?></button><?php }?></div><!-- /tpl-Base-ButtonLink -->
<?php }
}
