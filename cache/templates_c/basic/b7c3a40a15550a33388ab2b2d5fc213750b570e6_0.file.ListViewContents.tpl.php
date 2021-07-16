<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 12:41:48
  from '/var/www/html/yeti/layouts/basic/modules/Portal/ListViewContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4f066c587031_71574602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7c3a40a15550a33388ab2b2d5fc213750b570e6' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Portal/ListViewContents.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f066c587031_71574602 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" id="pageNumber" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_PAGE']->value;?>
" /><input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['recordCount'];?>
" /><input type="hidden" id="totalPageCount" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['pageCount'];?>
" /><input type="hidden" id="recordsCount" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['recordCount'];?>
" /><input type="hidden" id="selectedIds" name="selectedIds" /><input type="hidden" id="excludedIds" name="excludedIds" /><input type="hidden" id="alphabetValue" value="<?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
" /><input type="hidden" id="pageStartRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['startSequence'];?>
" /><input type="hidden" id="pageEndRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['endSequence'];?>
" /><input type="hidden" id="previousPageExist" <?php if ($_smarty_tpl->tpl_vars['CURRENT_PAGE']->value != 1) {?>value="1"<?php }?> /><input type="hidden" id="nextPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['nextPageExists'];?>
" /><input type="hidden" id="pageLimit" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['pageLimit'];?>
" /><input type="hidden" id="noOfEntries" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['recordCount'];?>
" /><div id="selectAllMsgDiv" class="alert-block msgDiv noprint"><strong><a id="selectAllMsg"><?php echo \App\Language::translate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;(<span id="totalRecordsCount"></span>)</a></strong></div><div id="deSelectAllMsgDiv" class="alert-block msgDiv noprint"><strong><a id="deSelectAllMsg"><?php echo \App\Language::translate('LBL_DESELECT_ALL_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></strong></div><div class="listViewContentDiv" id="listViewContents"><div class="listViewEntriesDiv u-overflow-scroll-non-desktop"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['COLUMN_NAME']->value;?>
" id="orderBy" /><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder" /><span class="listViewLoadingImageBlock d-none modal noprint" id="loadingListViewModal"><img class="listViewLoadingImage" src="<?php echo \App\Layout::getImagePath('loading.gif');?>
" alt="no-image" title="<?php echo \App\Language::translate('LBL_LOADING');?>
" /><p class="listViewLoadingMsg"><?php echo \App\Language::translate('LBL_LOADING_LISTVIEW_CONTENTS');?>
........</p></span><table class="table table-bordered listViewEntriesTable js-fixed-thead" data-js="floatThead"><thead><tr class="listViewHeaders"><th width="5%"><input type="checkbox" title="<?php echo \App\Language::translate('LBL_SELECT_ALL');?>
" id="listViewEntriesMainCheckBox" /></th><th nowrap><a href="javascript:void(0);" id="portalname" class="portalListViewHeader" data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == 'portalname') {
echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;
} else { ?>ASC<?php }?>"><?php echo \App\Language::translate('LBL_BOOKMARK_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == 'portalname') {?><img class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
 icon-white"><?php }?></a></th><th nowrap><a href="javascript:void(0);" id="portalurl" class="portalListViewHeader" data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == 'portalurl') {
echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;
} else { ?>ASC<?php }?>"><?php echo \App\Language::translate('LBL_BOOKMARK_URL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == 'portalurl') {?><img class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
 icon-white"><?php }?></a></a></th><th nowrap><a href="javascript:void(0);" id="createdtime" class="portalListViewHeader" data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == 'createdtime') {
echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;
} else { ?>ASC<?php }?>"><?php echo \App\Language::translate('LBL_CREATED_ON',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == 'createdtime') {?><img class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
 icon-white"><?php }?></a></a></th><th nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value, 'LISTVIEW_ENTRY', false, 'RECORD_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD_ID']->value => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value) {
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" data-recordurl="index.php?module=Portal&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
"><td width="5%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" title="<?php echo \App\Language::translate('LBL_SELECT_SINGLE_ROW');?>
" class="listViewEntriesCheckBox" /></td><td class="listViewEntryValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" nowrap><a href="index.php?module=Portal&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" sl-processed="1"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('portalname');?>
</a></td><td class="listViewEntryValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" nowrap><a class="urlField u-cursor-pointer" href="<?php if (substr($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('portalurl'),0,4) != 'http') {?>//<?php }
echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('portalurl');?>
" target="_blank"rel="noreferrer noopener" sl-processed="1"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('portalurl');?>
</a></td><td class="listViewEntryValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" nowrap><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('createdtime');?>
</td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class="actions float-right"><span class="actionImages"><span title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="yfi yfi-full-editing-view editRecord"></span>&nbsp;<span title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fas fa-trash-alt deleteRecord"></span></span></div></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><?php if ($_smarty_tpl->tpl_vars['PAGING_INFO']->value['recordCount'] == '0') {?><table class="emptyRecordsDiv"><tbody><tr><td><button class="addBookmark btn btn-link tdUnderline"> <?php echo \App\Language::translate('LBL_NO');?>
 <?php echo \App\Language::translate('LBL_FOUND');?>
 <?php echo \App\Language::translate('LBL_BOOKMARKS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
. <?php echo \App\Language::translate('LBL_BOOKMARK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></td></tr></tbody></table><?php }?></div></div></div></div>
<?php }
}
