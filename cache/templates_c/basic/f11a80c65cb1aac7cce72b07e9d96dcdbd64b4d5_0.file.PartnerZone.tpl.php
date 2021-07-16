<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 10:15:23
  from '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/DashBoard/PartnerZone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f79060b0f0bc2_71473260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f11a80c65cb1aac7cce72b07e9d96dcdbd64b4d5' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/DashBoard/PartnerZone.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f79060b0f0bc2_71473260 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Base-DashBoard-PartnerZone --><?php $_smarty_tpl->_assignInScope('QUALIFIED_MODULE', 'Settings:YetiForce');
if (isset($_smarty_tpl->tpl_vars['PRODUCTS_PARTNER']->value)) {?><div class="d-flex flex-wrap mb-3 justify-content-center mr-n3"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCTS_PARTNER']->value, 'PRODUCT');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PRODUCT']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Shop/ProductPartner.tpl','Settings:YetiForce'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
if (isset($_smarty_tpl->tpl_vars['PARTNERS']->value)) {?><div class="d-flex flex-wrap"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PARTNERS']->value, 'PARTNER');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PARTNER']->value) {
?><img src=<?php echo $_smarty_tpl->tpl_vars['PARTNER']->value['src'];?>
 alt="<?php echo $_smarty_tpl->tpl_vars['PARTNER']->value['name'];?>
" /><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?><!-- /tpl-Settings-Base-DashBoard-PartnerZone -->
<?php }
}
