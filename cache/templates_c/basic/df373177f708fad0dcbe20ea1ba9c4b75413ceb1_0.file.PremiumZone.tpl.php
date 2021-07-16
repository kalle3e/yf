<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 10:15:23
  from '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/DashBoard/PremiumZone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f79060b0960a2_93867263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df373177f708fad0dcbe20ea1ba9c4b75413ceb1' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/DashBoard/PremiumZone.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f79060b0960a2_93867263 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Base-DashBoard-PremiumZone --><div class="d-flex flex-wrap mb-3 mr-n3"><?php $_smarty_tpl->_assignInScope('QUALIFIED_MODULE', 'Settings:YetiForce');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCTS_PREMIUM']->value, 'PRODUCT');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PRODUCT']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Shop/ProductPremium.tpl','Settings:YetiForce'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><!-- tpl-Settings-Base-DashBoard-PremiumZone -->
<?php }
}
