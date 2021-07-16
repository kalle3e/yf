<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 14:47:07
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/BlockHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f740dcb112f33_09639675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0c1623dd9c43adf2673cc72d822b3817daa5ca9' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/BlockHeader.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f740dcb112f33_09639675 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-BlockHeader.tpl --><div class="mb-2 mb-lg-0 mx-2 mx-lg-0"><label class="text-md-right u-text-small-bold pt-1 mb-0"><span class="copyAddressLabel col-form-label mr-2"><?php echo \App\Language::translate('COPY_ADRESS_FROM');?>
</span></label><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromAccount mr-2 mb-1 mb-md-0" type="button" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><strong><?php echo \App\Language::translate('SINGLE_Accounts',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromLead mr-2 mb-1 mb-md-0" type="button" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><strong><?php echo \App\Language::translate('SINGLE_Leads','Contacts');?>
</strong></button><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromVendor mr-2 mb-1 mb-md-0" type="button" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><strong><?php echo \App\Language::translate('SINGLE_Vendors','Contacts');?>
</strong></button><?php ob_start();
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 != 'Contacts') {?><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromContact mr-2 mb-1 mb-md-0" type="button" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><strong><?php echo \App\Language::translate('SINGLE_Contacts',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }
if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value != 'LBL_ADDRESS_INFORMATION' && array_key_exists('LBL_ADDRESS_INFORMATION',$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value) && count($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_ADDRESS_INFORMATION'])) {?><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromMain mr-2 mb-1 mb-md-0" type="button" data-label="LBL_ADDRESS_INFORMATION"><strong><?php echo \App\Language::translate('LBL_ADDRESS_INFORMATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }
if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value != 'LBL_ADDRESS_MAILING_INFORMATION' && array_key_exists('LBL_ADDRESS_MAILING_INFORMATION',$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value) && count($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_ADDRESS_MAILING_INFORMATION'])) {?><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromMailing mr-2 mb-1 mb-md-0" type="button" data-label="LBL_ADDRESS_MAILING_INFORMATION"><strong><?php echo \App\Language::translate('LBL_ADDRESS_MAILING_INFORMATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }
if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value != 'LBL_ADDRESS_DELIVERY_INFORMATION' && array_key_exists('LBL_ADDRESS_DELIVERY_INFORMATION',$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value) && count($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_ADDRESS_DELIVERY_INFORMATION'])) {?><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromDelivery mr-2 mb-1 mb-md-0" type="button" data-label="LBL_ADDRESS_DELIVERY_INFORMATION"><strong><?php echo \App\Language::translate('LBL_ADDRESS_DELIVERY_INFORMATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?></div><?php $_smarty_tpl->_assignInScope('PROVIDER', \App\Map\Address::getActiveProviders());
if ($_smarty_tpl->tpl_vars['SEARCH_ADDRESS']->value && $_smarty_tpl->tpl_vars['PROVIDER']->value) {?><div class="d-flex justify-content-center col-lg-4 mx-1 mx-lg-0"><div class="js-search-address input-group input-group-sm c-btn-block-sm-down" data-js="container"><div class="input-group-prepend<?php if (count($_smarty_tpl->tpl_vars['PROVIDER']->value) == 1) {?> d-none<?php }?>"><select class="select2 js-select-operator" data-dropdown-auto-width="true" data-js="value"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROVIDER']->value, 'ROW');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ROW']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['ROW']->value;?>
" <?php if (\App\Map\Address::getDefaultProvider() == $_smarty_tpl->tpl_vars['ROW']->value) {?>selected<?php }?>><?php echo \App\Language::translate(mb_strtoupper(('LBL_PROVIDER_').($_smarty_tpl->tpl_vars['ROW']->value), 'UTF-8'),'Settings:ApiAddress');?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php $_smarty_tpl->_assignInScope('ADDRESS_FINDER_CONFIG', \App\Map\Address::getConfig());?><input title="<?php echo \App\Language::translate('LBL_ADDRESS_INFORMATION');?>
" type="search"placeholder="<?php echo \App\Language::translate('LBL_ENTER_SEARCHED_ADDRESS');?>
"data-min="<?php echo $_smarty_tpl->tpl_vars['ADDRESS_FINDER_CONFIG']->value['global']['min_length'];?>
"class="js-autoload-address form-control" data-js="autocomplete" /><div class="input-group-append"><span class="input-group-text"><span class="fas fa-search fa-fw"></span><span class="sr-only"><?php echo App\Language::translate('LBL_SEARCH');?>
</span></span></div></div></div><?php }?><!-- /tpl-Base-BlockHeader.tpl -->
<?php }
}
