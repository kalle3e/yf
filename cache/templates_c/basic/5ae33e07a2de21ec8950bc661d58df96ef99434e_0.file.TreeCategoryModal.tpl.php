<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-24 00:00:51
  from '/var/www/html/yeti/layouts/basic/modules/Vtiger/TreeCategoryModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f92d403c12b60_14044686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ae33e07a2de21ec8950bc661d58df96ef99434e' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Vtiger/TreeCategoryModal.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f92d403c12b60_14044686 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header d-block"><div class="d-flex"><h5 class="modal-title"><span class="fas fa-search-plus mr-1"></span><?php echo \App\Language::translate('LBL_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="input-group pt-2"><input id="valueSearchTree" type="text" class="form-control" placeholder="<?php echo \App\Language::translate('LBL_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 ..."><div class="input-group-append"><button id="btnSearchTree" class="btn btn-danger" type="button"><?php echo \App\Language::translate('LBL_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></div><div id="treePopupContainer" class="modal-body col-md-12"><input type="hidden" id="relationType" value="<?php echo $_smarty_tpl->tpl_vars['RELATION_TYPE']->value;?>
"/><input type="hidden" id="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" name="tree" id="treePopupValues" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['TREE']->value);?>
"/><?php if ($_smarty_tpl->tpl_vars['TREE']->value) {?><div class="col-md-12 mb-2"><div class="col-md-12" id="treePopupContents"></div></div><?php } else { ?><h4 class="textAlignCenter "><?php echo \App\Language::translate('LBL_RECORDS_NO_FOUND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4><?php }?></div><div class="modal-footer d-block"><div class="float-left pt-2 counterSelected"></div><div class="float-right"><button class="btn btn-success mr-1" type="submit" name="saveButton"><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-danger" type="reset" data-dismiss="modal"><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div>
<?php }
}
