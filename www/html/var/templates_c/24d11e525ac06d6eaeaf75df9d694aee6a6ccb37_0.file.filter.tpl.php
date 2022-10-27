<?php
/* Smarty version 3.1.33, created on 2022-09-06 01:23:30
  from '/var/www/html/modules/login_logout/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6316d9525d5ee1_36631898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24d11e525ac06d6eaeaf75df9d694aee6a6ccb37' => 
    array (
      0 => '/var/www/html/modules/login_logout/themes/default/filter.tpl',
      1 => 1575212159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6316d9525d5ee1_36631898 (Smarty_Internal_Template $_smarty_tpl) {
?><table cellpadding="4" cellspacing="0" border="0" align="center">
  <tr class="letra12">
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
:<span  class='required'>*</span></td>
    <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
:<span  class='required'>*</span></td>
    <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['queue']->value['LABEL'];?>
:</td>
    <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['queue']->value['INPUT'];?>
</td>
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['detailtype']->value['LABEL'];?>
:<span  class='required'>*</span></td>
    <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['detailtype']->value['INPUT'];?>
</td>
    <td align="left"><input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" /></td>
  </tr>
</table>
<?php }
}
