<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 17:12:29
  from '/var/www/html/yeti/layouts/basic/modules/Users/Modals/PasswordModalFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f75815d7d5900_53429104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ccc27b39bebf7315fdd268b8b3ad40eb500cfc1' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Users/Modals/PasswordModalFooter.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f75815d7d5900_53429104 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Modals-Footer modal-footer"><?php if (($_smarty_tpl->tpl_vars['MODE']->value === 'massReset' || $_smarty_tpl->tpl_vars['MODE']->value === 'reset') && $_smarty_tpl->tpl_vars['ACTIVE_SMTP']->value) {?><button class="btn btn-success" type="submit" name="saveButton"<?php if (App\Config::main('systemMode') === 'demo') {?>disabled="disabled"<?php }?>><span class="fas fa-redo-alt mr-2"></span><strong><?php echo \App\Language::translate('BTN_RESET_PASSWORD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php }
if ($_smarty_tpl->tpl_vars['MODE']->value === 'change') {?><button class="btn btn-success" type="submit" name="saveButton"<?php if (App\Config::main('systemMode') === 'demo') {?>disabled="disabled"<?php }?>><span class="fas fa-redo-alt mr-2"></span><strong><?php echo \App\Language::translate('LBL_CHANGE_PASSWORD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php }
if ($_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?><a class="btn btn-danger" role="button" href="index.php?module=Users&amp;parent=Settings&amp;action=Logout"><span class="fas fa-power-off mr-2"></span><strong><?php echo \App\Language::translate('LBL_SIGN_OUT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></a><?php } else { ?><button class="btn btn-danger" type="reset" data-dismiss="modal"><span class="fas fa-times mr-2"></span><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php }?></div></form>
<?php }
}
