<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 21:15:34
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/BreadCrumbs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e2d56a89397_10601756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43c8740fda49584f6fb3efb641ecbc3edf3f09de' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/BreadCrumbs.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e2d56a89397_10601756 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-BreadCrumbs --><?php if (App\Config::main('breadcrumbs') == 'true') {
if (isset($_smarty_tpl->tpl_vars['BREADCRUMB_TITLE']->value)) {
$_smarty_tpl->_assignInScope('BREADCRUMBS', Vtiger_Menu_Model::getBreadcrumbs($_smarty_tpl->tpl_vars['BREADCRUMB_TITLE']->value));
$_smarty_tpl->_assignInScope('BREADCRUMBS_POPOVER', Vtiger_Menu_Model::getBreadcrumbs());
} else {
$_smarty_tpl->_assignInScope('BREADCRUMBS', Vtiger_Menu_Model::getBreadcrumbs());
$_smarty_tpl->_assignInScope('BREADCRUMBS_POPOVER', $_smarty_tpl->tpl_vars['BREADCRUMBS']->value);
}
$_smarty_tpl->_assignInScope('HOMEICON', 'fas fa-home');
if ($_smarty_tpl->tpl_vars['BREADCRUMBS']->value) {
$_smarty_tpl->_assignInScope('BREADCRUMBS_TEXT', "<a href='`App\Config::main('site_URL')`'><span class='".((string)$_smarty_tpl->tpl_vars['HOMEICON']->value)."' aria-hidden='true'></span></a>");
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BREADCRUMBS_POPOVER']->value, 'item', true, 'key');
$_smarty_tpl->tpl_vars['item']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_14_saved = $_smarty_tpl->tpl_vars['item'];
$_smarty_tpl->_assignInScope('BREADCRUMBS_ITEM', $_smarty_tpl->tpl_vars['item']->value['name']);
if (isset($_smarty_tpl->tpl_vars['item']->value['url'])) {
$_smarty_tpl->_assignInScope('BREADCRUMBS_ITEM', "<a href='".((string)$_smarty_tpl->tpl_vars['item']->value['url'])."'>".((string)$_smarty_tpl->tpl_vars['item']->value['name'])."</a>");
}
$_smarty_tpl->_assignInScope('BREADCRUMBS_TEXT', ((string)$_smarty_tpl->tpl_vars['BREADCRUMBS_TEXT']->value)." / ".((string)$_smarty_tpl->tpl_vars['BREADCRUMBS_ITEM']->value));
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_14_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><ol class="breadcrumb breadcrumbsContainer my-0 py-auto pl-2 pr-0 js-popover-tooltip--ellipsis-icon" data-content="<?php echo \App\Purifier::encodeHTML($_smarty_tpl->tpl_vars['BREADCRUMBS_TEXT']->value);?>
"data-toggle="popover" data-js="popover | mouseenter"><li class="breadcrumb-item"><a href="<?php echo App\Config::main('site_URL');?>
"><span class="<?php echo $_smarty_tpl->tpl_vars['HOMEICON']->value;?>
" aria-hidden="true"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_HOME');?>
</span></a></li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BREADCRUMBS']->value, 'item', true, 'key', 'breadcrumbs', array (
));
$_smarty_tpl->tpl_vars['item']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_15_saved = $_smarty_tpl->tpl_vars['item'];
if (isset($_smarty_tpl->tpl_vars['item']->value['url'])) {?><li class="breadcrumb-item u-text-ellipsis"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li><?php } elseif ($_smarty_tpl->tpl_vars['item']->last) {?><li class="breadcrumb-item active js-text-content u-text-ellipsis" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</li><li class="js-popover-icon d-none mr-1" data-js="class: d-none"><span class="fas fa-info-circle fa-sm"></span></li><?php } else { ?><li class="breadcrumb-item u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</li><?php }
$_smarty_tpl->_assignInScope('ITEM_PREV', $_smarty_tpl->tpl_vars['item']->value['name']);
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_15_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ol><?php if (isset($_smarty_tpl->tpl_vars['SELECTED_PAGE']->value)) {
$_smarty_tpl->_assignInScope('TRANSLATED_DESCRIPTION', \App\Language::translate($_smarty_tpl->tpl_vars['SELECTED_PAGE']->value->get('description'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));
if (!empty(trim($_smarty_tpl->tpl_vars['TRANSLATED_DESCRIPTION']->value)) && $_smarty_tpl->tpl_vars['SELECTED_PAGE']->value->get('description') !== $_smarty_tpl->tpl_vars['TRANSLATED_DESCRIPTION']->value) {?><div class="js-popover-tooltip ml-2 d-inline my-auto u-h-fit u-cursor-pointer" data-js="popover" data-content="<?php echo $_smarty_tpl->tpl_vars['TRANSLATED_DESCRIPTION']->value;?>
"><span class="fas fa-info-circle"></span></div><?php }
}
}
}?><!-- /tpl-Base-BreadCrumbs -->
<?php }
}
