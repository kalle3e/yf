<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 10:15:23
  from '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/DashBoard/WidgetDescription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f79060b0d9ef4_94794636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e09e382ea101dc83422f64c0987834e8ed37f02' => 
    array (
      0 => '/var/www/html/yeti/layouts/basic/modules/Settings/Vtiger/DashBoard/WidgetDescription.tpl',
      1 => 1597983671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f79060b0d9ef4_94794636 (Smarty_Internal_Template $_smarty_tpl) {
?><p class="font-small u-font-weight-450 ellipsis-2-lines <?php if (isset($_smarty_tpl->tpl_vars['CLASS']->value)) {
echo $_smarty_tpl->tpl_vars['CLASS']->value;
}?>" title="<?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
</p>
<?php }
}
