<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 11:36:22
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/Modals/Footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8648067765c2_69487298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff1a240c17b888e666dc62e4f78dccc7a92ebd3b' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/Modals/Footer.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8648067765c2_69487298 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Modals-Footer --><div class=" modal-footer<?php if (isset($_smarty_tpl->tpl_vars['FOOTER_CLASS']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['FOOTER_CLASS']->value;
}?>"><?php if (!empty($_smarty_tpl->tpl_vars['BTN_SUCCESS']->value)) {?><button class="js-modal__save btn btn-success" type="submit" name="saveButton" data-js="click"><span class="<?php if (isset($_smarty_tpl->tpl_vars['BTN_SUCCESS_ICON']->value)) {
echo $_smarty_tpl->tpl_vars['BTN_SUCCESS_ICON']->value;
} else { ?>fas fa-check<?php }?> mr-1"></span><?php if (!empty($_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value)) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['BTN_SUCCESS']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['BTN_SUCCESS']->value);
}?></button><?php }
if (!empty($_smarty_tpl->tpl_vars['BTN_DANGER']->value) && empty($_smarty_tpl->tpl_vars['LOCK_EXIT']->value)) {?><button class="btn btn-danger" type="reset" data-dismiss="modal"><span class="fas fa-times mr-1"></span><?php if (!empty($_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value)) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['BTN_DANGER']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['BTN_DANGER']->value);
}?></button><?php }?></div><!-- /tpl-Base-Modals-Footer -->
<?php }
}
