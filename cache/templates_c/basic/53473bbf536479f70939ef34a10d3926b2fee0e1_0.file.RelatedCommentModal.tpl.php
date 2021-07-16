<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-24 00:04:49
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/RelatedCommentModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f92d4f1c58436_94935238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53473bbf536479f70939ef34a10d3926b2fee0e1' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/RelatedCommentModal.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f92d4f1c58436_94935238 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-RelatedCommentModal --><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_EDIT_RELATED_COMMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><input type="hidden" class="relatedRecord" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value;?>
"/><input type="hidden" class="relatedModuleName" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value;?>
"/><textarea class="form-control comment" rows="4"><?php echo $_smarty_tpl->tpl_vars['COMMENT']->value;?>
</textarea></div><div class="modal-footer"><div class="float-right"><button class="btn btn-success mr-1" type="submit" name="saveButton"><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-danger" type="reset" data-dismiss="modal"><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div><!-- /tpl-Base-RelatedCommentModal -->
<?php }
}
