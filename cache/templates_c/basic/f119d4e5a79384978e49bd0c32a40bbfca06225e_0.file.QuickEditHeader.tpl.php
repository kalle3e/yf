<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 13:41:46
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Modals/QuickEditHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f86656a89bf49_26340114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f119d4e5a79384978e49bd0c32a40bbfca06225e' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Modals/QuickEditHeader.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f86656a89bf49_26340114 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Modals-QuickEditHeader --><div class=" modal js-modal-data <?php if ($_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?>static<?php }?>" tabindex="-1" data-js="data"role="dialog" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalData, 'VALUE', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
?> data-<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><div class="modal-dialog <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalSize;?>
" role="document"><div class="modal-content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_CSS']->value, 'MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
?><link rel="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getRel();?>
" href="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getHref();?>
"/><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_SCRIPTS']->value, 'MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '<script'; ?>
 type="text/javascript">app.registerModalController();<?php echo '</script'; ?>
><form class="form-horizontal recordEditView" name="QuickEdit" method="post" action="index.php" data-module-name="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><div class="modal-header align-items-center form-row d-flex justify-content-between py-2<?php if (isset($_smarty_tpl->tpl_vars['MODAL_VIEW']->value->headerClass)) {?> <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->headerClass;
}?>"><div class="col-xl-9 col-12"><h5 class="modal-title form-row text-center text-xl-left mb-2 mb-xl-0"><span class="col-12"><span class="yfi yfi-quick-creation mx-1"></span><strong class="mr-1"><?php echo \App\Language::translate('LBL_QUICK_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</strong><span class="yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
 mx-1"></span><strong class="text-uppercase"><?php echo \App\Language::translate("SINGLE_".((string)$_smarty_tpl->tpl_vars['MODULE_NAME']->value),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></span></h5></div><div class="col-xl-3 col-12 text-center text-xl-right"><button class="btn btn-success mr-1" type="submit" tabindex="<?php echo Vtiger_Field_Model::$tabIndexLastSeq;?>
" title="<?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><strong><span class="fas fa-check"></span></strong></button><button class="cancelLink btn btn-danger" tabindex="<?php echo Vtiger_Field_Model::$tabIndexLastSeq;?>
" data-dismiss="modal" type="button" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span class="fas fa-times"></span></button></div></div><!-- /tpl-Base-Modals-QuickEditHeader -->
<?php }
}
