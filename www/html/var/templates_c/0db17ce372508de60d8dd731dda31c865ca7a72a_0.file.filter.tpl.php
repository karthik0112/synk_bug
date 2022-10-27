<?php
/* Smarty version 3.1.33, created on 2022-07-07 08:16:48
  from '/var/www/html/modules/calls_per_agent/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62c6ceb04e88c4_40082744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0db17ce372508de60d8dd731dda31c865ca7a72a' => 
    array (
      0 => '/var/www/html/modules/calls_per_agent/themes/default/filter.tpl',
      1 => 1575212159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c6ceb04e88c4_40082744 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
      <tr class="letra12">
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
        <td colspan="3">&nbsp;</td>
     </tr>
      <tr class="letra12">
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['type']->value['LABEL'];?>
</td>
        <td align="left" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['type']->value['INPUT'];?>
</td>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['queue']->value['LABEL'];?>
</td>
        <td align="left" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['queue']->value['INPUT'];?>
</td>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['number']->value['LABEL'];?>
</td>
        <td align="left" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['number']->value['INPUT'];?>
</td>
        <td align="center"><input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" /></td>
      </tr>
</table><?php }
}
