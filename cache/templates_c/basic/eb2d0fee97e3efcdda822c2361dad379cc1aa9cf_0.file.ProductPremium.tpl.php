<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 10:15:23
  from '/var/www/html/yeti/layouts/basic/modules/Settings/YetiForce/Shop/ProductPremium.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f79060b0ce7d5_25949998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb2d0fee97e3efcdda822c2361dad379cc1aa9cf' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Settings/YetiForce/Shop/ProductPremium.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f79060b0ce7d5_25949998 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-YetiForce-Shop-ProductPremium --><?php $_smarty_tpl->_assignInScope('PRODUCT_ALERT', $_smarty_tpl->tpl_vars['PRODUCT']->value->showAlert());?><div class="dashboardWidget mt-3 mr-3 flex-grow-1 u-w-max-430px js-product position-relative" data-js="showProductModal | click | container" data-product="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value->getName();?>
"><?php if (!empty($_smarty_tpl->tpl_vars['PRODUCT']->value->expirationDate) && $_smarty_tpl->tpl_vars['PRODUCT_ALERT']->value) {?><span class="text-danger fas fa-exclamation animated flash infinite slow mr-1 mt-1 u-cursor-pointer js-popover-tooltip position-absolute u-position-r-0" data-toggle="popover" data-js="popover | mouseenter" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PRODUCT_ALERT']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span><?php }?><div class="o-small-product pl-2 <?php if (empty($_smarty_tpl->tpl_vars['PRODUCT']->value->expirationDate)) {?>bg-light u-bg-light-darken<?php } elseif ($_smarty_tpl->tpl_vars['PRODUCT_ALERT']->value) {?>bg-danger<?php } else { ?>bg-yellow<?php }?>"><div class="o-small-product__container d-flex u-min-h-120px-rem no-wrap py-2 px-1<?php if (!empty($_smarty_tpl->tpl_vars['PRODUCT']->value->expirationDate)) {?> bg-white u-bg-white-darken<?php }?>"><div class="o-small-product__img d-flex"><?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value->getImage()) {?><img src="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value->getImage();?>
" class="my-auto grow thumbnail-image card-img-top intrinsic-item"alt="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PRODUCT']->value->getLabel());?>
" title="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PRODUCT']->value->getLabel());?>
" /><?php } else { ?><div class="product-no-image m-auto"><span class="fa-stack fa-2x product-no-image"><i class="fas fa-camera fa-stack-1x"></i><i class="fas fa-ban fa-stack-2x"></i></span></div><?php }?></div><div class="py-0 pl-2 pr-3 d-flex flex-wrap justify-between align-items-center w-100"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/WidgetTitle.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_smarty_tpl->tpl_vars['PRODUCT']->value->getLabel(),'CLASS'=>"u-cursor-pointer js-text-search"), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/WidgetDescription.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('DESCRIPTION'=>$_smarty_tpl->tpl_vars['PRODUCT']->value->getIntroduction(),'CLASS'=>"mb-0"), 0, true);
if (empty($_smarty_tpl->tpl_vars['PRODUCT']->value->expirationDate)) {?><button class="btn btn-dark btn-block mt-auto js-buy-modal" data-js="showBuyModal | click" data-product="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value->getName();?>
"><?php if ('manual' === $_smarty_tpl->tpl_vars['PRODUCT']->value->getPriceType()) {
echo \App\Language::translate("LBL_SUPPORT_US",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo $_smarty_tpl->tpl_vars['PRODUCT']->value->getPrice();?>
 <?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value->currencyCode;?>
 / <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PRODUCT']->value->getPeriodLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></button><?php } else {
if ($_smarty_tpl->tpl_vars['PRODUCT_ALERT']->value) {?><button class="btn btn-danger btn-block mt-auto js-buy-modal" data-js="showBuyModal | click" data-product="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value->getName();?>
"><?php echo \App\Language::translate('LBL_SHOP_RENEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php } else { ?><button class="btn btn-block bg-yellow mt-auto js-buy-modal" data-js="showBuyModal | click" data-product="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value->getName();?>
" disabled><?php echo \App\Fields\Date::formatToDisplay($_smarty_tpl->tpl_vars['PRODUCT']->value->expirationDate);?>
</button><?php }
}?></div></div></div></div><!-- /tpl-Settings-YetiForce-Shop-ProductPremium -->
<?php }
}
