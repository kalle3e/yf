<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 17:12:29
  from '/var/www/html/yeti/layouts/basic/modules/Users/Modals/PasswordModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f75815d7c41a9_69783055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b58690354dc83bde43fa3c2974063858b8e4e46f' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Users/Modals/PasswordModal.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f75815d7c41a9_69783055 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-PasswordModal --><form name="PasswordUsersForm" class="form-horizontal sendByAjax validateForm" action="index.php" method="post" autocomplete="off"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="Password" /><input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
" /><?php if ($_smarty_tpl->tpl_vars['MODE']->value === 'massReset') {?><input type="hidden" name="selected_ids" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value));?>
"><input type="hidden" name="excluded_ids" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value));?>
"><input type="hidden" name="search_params" value='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value));?>
' /><?php }?><div class="modal-body"><?php if ($_smarty_tpl->tpl_vars['MODE']->value === 'reset' || $_smarty_tpl->tpl_vars['MODE']->value === 'massReset') {
if ($_smarty_tpl->tpl_vars['ACTIVE_SMTP']->value) {?><div class="alert alert-warning" role="alert"><?php echo \App\Language::translate('LBL_RESET_PASSWORD_DESC',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><?php } else { ?><div class="alert alert-danger" role="alert"><?php echo \App\Language::translate('LBL_RESET_PASSWORD_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><?php }
} elseif ($_smarty_tpl->tpl_vars['MODE']->value === 'change') {
if ($_smarty_tpl->tpl_vars['WARNING']->value) {?><div class="alert alert-danger" role="alert"><span class="fas fa-exclamation-circle u-font-size-2x float-left mr-2"></span><?php echo $_smarty_tpl->tpl_vars['WARNING']->value;?>
</div><?php }
if (App\User::getCurrentUserId() == $_smarty_tpl->tpl_vars['RECORD']->value) {?><div class="form-group"><label class="col-form-label col-sm-4"><?php echo \App\Language::translate('LBL_OLD_PASSWORD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label><div class="controls col-sm-6 input-group"><input type="password" name="oldPassword" class="form-control" data-validation-engine="validate[required]" autocomplete="off" /><span class="input-group-btn"><button class="btn btn-light js-popover-tooltip" data-content="<?php echo \App\Language::translate('LBL_SHOW_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" type="button" onmousedown="oldPassword.type = 'text';" onmouseup="oldPassword.type = 'password';" onmouseout="oldPassword.type = 'password';" data-js="popover"><span class="fas fa-eye"></span></button></span></div></div><?php }?><div class="form-group"><label class="col-sm-4 col-form-label"><?php echo \App\Language::translate('LBL_NEW_PASSWORD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label><div class="col-sm-6 controls input-group"><input type="password" name="password" id="passwordUsersFormPassword" title="<?php echo \App\Language::translate('LBL_NEW_PASSWORD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" class="form-control" data-validation-engine="validate[required]]" autocomplete="off" /><span class="input-group-btn"><button class="btn btn-light js-popover-tooltip js-validate-password" data-content="<?php echo \App\Language::translate('LBL_VALIDATE_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" type="button" data-field="password" data-js="popover|click"><span class="mdi mdi-lock-question"></span></button><button class="btn btn-light js-popover-tooltip" data-content="<?php echo \App\Language::translate('LBL_SHOW_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" type="button" onmousedown="password.type = 'text';" onmouseup="password.type = 'password';" onmouseout="password.type = 'password';" data-js="popover"><span class="fas fa-eye"></span></button></span></div></div><div class="form-group"><label class="col-sm-4 col-form-label"><?php echo \App\Language::translate('LBL_CONFIRM_PASSWORD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label><div class="col-sm-6 controls input-group"><input type="password" name="confirmPassword" id="confirmPasswordUsersFormPassword" title="<?php echo \App\Language::translate('LBL_CONFIRM_PASSWORD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" class="form-control" data-validation-engine="validate[required,equals[passwordUsersFormPassword]]" autocomplete="off" /><span class="input-group-btn"><button class="btn btn-light js-popover-tooltip" data-content="<?php echo \App\Language::translate('LBL_SHOW_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" type="button" onmousedown="confirmPassword.type = 'text';" onmouseup="confirmPassword.type = 'password';" onmouseout="confirmPassword.type = 'password';" data-js="popover"><span class="fas fa-eye"></span></button></span></div></div><div class="alert alert-info alert-dismissible mb-0" role="alert"><strong><?php echo \App\Language::translate('LBL_NEW_PASSWORD_CRITERIA',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong><br /><ul class="mb-0"><li><?php echo \App\Language::translate('Minimum password length','Settings::Password');?>
: <?php echo $_smarty_tpl->tpl_vars['PASS_CONFIG']->value['min_length'];?>
</li><li><?php echo \App\Language::translate('Maximum password length','Settings::Password');?>
: <?php echo $_smarty_tpl->tpl_vars['PASS_CONFIG']->value['max_length'];?>
</li><?php if ($_smarty_tpl->tpl_vars['PASS_CONFIG']->value['big_letters'] == 'true') {?><li><?php echo \App\Language::translate('Uppercase letters from A to Z','Settings::Password');?>
</li><?php }
if ($_smarty_tpl->tpl_vars['PASS_CONFIG']->value['small_letters'] == 'true') {?><li><?php echo \App\Language::translate('Lowercase letters a to z','Settings::Password');?>
</li><?php }
if ($_smarty_tpl->tpl_vars['PASS_CONFIG']->value['numbers'] == 'true') {?><li><?php echo \App\Language::translate('Password should contain numbers','Settings::Password');?>
</li><?php }
if ($_smarty_tpl->tpl_vars['PASS_CONFIG']->value['special'] == 'true') {?><li><?php echo \App\Language::translate('Password should contain special characters','Settings::Password');?>
</li><?php }
if ($_smarty_tpl->tpl_vars['PASS_CONFIG']->value['pwned'] == 'true') {?><li><?php echo \App\Language::translate('LBL_CHECK_PWNED_PASSWORD','Settings::Password');?>
</li><?php }?></ul></div><?php }?></div><!-- /tpl-Users-PasswordModal -->
<?php }
}
