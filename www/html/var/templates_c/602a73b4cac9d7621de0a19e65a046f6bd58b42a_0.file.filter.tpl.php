<?php
/* Smarty version 3.1.33, created on 2022-07-08 04:55:44
  from '/var/www/html/modules/rep_agent_information/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62c7f1101afd75_48883045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '602a73b4cac9d7621de0a19e65a046f6bd58b42a' => 
    array (
      0 => '/var/www/html/modules/rep_agent_information/themes/default/filter.tpl',
      1 => 1575212159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c7f1101afd75_48883045 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr class="letra12">
        <td width="12%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td width="12%" align="left" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
        <td width="12%" align="right"><?php echo $_smarty_tpl->tpl_vars['queue']->value['LABEL'];?>
:<span  class="required">*</span></td>
        <td width="12%"><?php echo $_smarty_tpl->tpl_vars['queue']->value['INPUT'];?>
</td>
		<td>&nbsp;</td>
     </tr>
     <tr class="letra12">
        <td width="12%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td width="12%" align="left" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
        <td width="12%" align="right"><?php echo $_smarty_tpl->tpl_vars['agent']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td width="12%"><?php echo $_smarty_tpl->tpl_vars['agent']->value['INPUT'];?>
</td>
        <td width="10%" align="center"><input class="button" type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" /></td>
      </tr>
   </table>
  </td>
</tr>
</table>

<?php }
}
