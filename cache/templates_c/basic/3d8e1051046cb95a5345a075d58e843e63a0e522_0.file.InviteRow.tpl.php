<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-20 23:58:54
  from '/var/www/html/yeti/layouts/basic/modules/Calendar/InviteRow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8edf0e6b6572_04058704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d8e1051046cb95a5345a075d58e843e63a0e522' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Calendar/InviteRow.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8edf0e6b6572_04058704 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Calendar-InviteRow --><?php if (!isset($_smarty_tpl->tpl_vars['IS_VIEW']->value)) {
$_smarty_tpl->_assignInScope('IS_VIEW', false);
}
if (!isset($_smarty_tpl->tpl_vars['INVITIE']->value)) {
$_smarty_tpl->_assignInScope('INVITIE', array('crmid'=>'','inviteesid'=>'','email'=>'','status'=>'','time'=>''));
}
if ($_smarty_tpl->tpl_vars['INVITIE']->value['crmid']) {
$_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['INVITIE']->value['label']);
$_smarty_tpl->_assignInScope('NAME', $_smarty_tpl->tpl_vars['INVITIE']->value['label']);
$_smarty_tpl->_assignInScope('TITLE', ((((\App\Language::translateSingularModuleName($_smarty_tpl->tpl_vars['INVITIE']->value['setype'])).(': ')).($_smarty_tpl->tpl_vars['LABEL']->value)).(' - ')).($_smarty_tpl->tpl_vars['INVITIE']->value['email']));
$_smarty_tpl->_assignInScope('ICON', ('yfm-').($_smarty_tpl->tpl_vars['INVITIE']->value['setype']));
} elseif (empty($_smarty_tpl->tpl_vars['INVITIE']->value['name'])) {
$_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['INVITIE']->value['email']);
$_smarty_tpl->_assignInScope('NAME', '');
$_smarty_tpl->_assignInScope('TITLE', $_smarty_tpl->tpl_vars['INVITIE']->value['email']);
$_smarty_tpl->_assignInScope('ICON', 'fas fa-envelope');
} else {
$_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['INVITIE']->value['name']);
$_smarty_tpl->_assignInScope('NAME', $_smarty_tpl->tpl_vars['INVITIE']->value['name']);
$_smarty_tpl->_assignInScope('TITLE', (($_smarty_tpl->tpl_vars['INVITIE']->value['name']).(': ')).($_smarty_tpl->tpl_vars['INVITIE']->value['email']));
$_smarty_tpl->_assignInScope('ICON', 'fas fa-envelope');
}?><div class="inviteRow js-participant-row" data-crmid="<?php echo $_smarty_tpl->tpl_vars['INVITIE']->value['crmid'];?>
" data-ivid="<?php echo $_smarty_tpl->tpl_vars['INVITIE']->value['inviteesid'];?>
" data-email="<?php echo $_smarty_tpl->tpl_vars['INVITIE']->value['email'];?>
" data-name="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['NAME']->value);?>
" data-js="clone|edit"><div class="input-group input-group-sm"><span class="input-group-prepend js-participant-icon" data-js="change"><span class="input-group-text"><span class="<?php echo $_smarty_tpl->tpl_vars['ICON']->value;?>
"></span></span><span class="input-group-text u-w-125px u-max-w-150px text-truncate js-participant-name <?php if ($_smarty_tpl->tpl_vars['TITLE']->value) {?>js-popover-tooltip<?php }?>" data-js="popover" data-content="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</span><span class="input-group-text inviteStatus"><?php $_smarty_tpl->_assignInScope('STATUS_LABEL', Calendar_Record_Model::getInvitionStatus($_smarty_tpl->tpl_vars['INVITIE']->value['status']));
if ($_smarty_tpl->tpl_vars['INVITIE']->value['status'] == '1') {?><span class="fas fa-check-circle color-green-a700 js-popover-tooltip" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['STATUS_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php if ($_smarty_tpl->tpl_vars['INVITIE']->value['time']) {?>(<?php echo DateTimeField::convertToUserFormat($_smarty_tpl->tpl_vars['INVITIE']->value['time']);?>
)<?php }?>"></span><?php } elseif ($_smarty_tpl->tpl_vars['INVITIE']->value['status'] == '2') {?><span class="fas fa-minus-circle color-red-a700 js-popover-tooltip" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['STATUS_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php if ($_smarty_tpl->tpl_vars['INVITIE']->value['time']) {?>(<?php echo DateTimeField::convertToUserFormat($_smarty_tpl->tpl_vars['INVITIE']->value['time']);?>
)<?php }?>"></span><?php } else {
$_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['INVITIE']->value['email']);?><span class="fas fa-question-circle color-orange-a700 js-popover-tooltip" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['STATUS_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span><?php }?></span></span><?php if (!$_smarty_tpl->tpl_vars['IS_VIEW']->value) {?><span class="input-group-append"><button class="btn btn-outline-secondary border js-participant-remove" type="button" data-js="click"><span class="fas fa-times"></span></button></span><?php }?></div></div><!-- /tpl-Calendar-InviteRow -->
<?php }
}
