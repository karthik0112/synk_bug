<?php
/* Smarty version 3.1.33, created on 2022-07-27 02:31:10
  from '/var/www/html/modules/reports_break/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62e0dbaed608a2_14403891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d5d00c3a01c08ce8caf7df897969a0f7cb6ee25' => 
    array (
      0 => '/var/www/html/modules/reports_break/themes/default/filter.tpl',
      1 => 1575212159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e0dbaed608a2_14403891 (Smarty_Internal_Template $_smarty_tpl) {
?>  <table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
      <tr class="letra12">
        <td width="8%" align="right"><?php echo $_smarty_tpl->tpl_vars['txt_fecha_init']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['txt_fecha_init']->value['INPUT'];?>
</td>
        <td width="8%" align="right"><?php echo $_smarty_tpl->tpl_vars['txt_fecha_end']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['txt_fecha_end']->value['INPUT'];?>
</td>
        <td width="8%" align="center">
            <input class="button" type="submit" name="submit_fecha" value="<?php echo $_smarty_tpl->tpl_vars['btn_consultar']->value;?>
" >
        </td>
      </tr>
   </table>
<?php }
}
