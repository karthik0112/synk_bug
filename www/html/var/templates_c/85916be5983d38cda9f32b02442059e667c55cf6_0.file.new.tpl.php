<?php
/* Smarty version 3.1.33, created on 2022-08-16 02:18:15
  from '/var/www/html/modules/break_administrator/themes/default/new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62fb36a7dae024_08967915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85916be5983d38cda9f32b02442059e667c55cf6' => 
    array (
      0 => '/var/www/html/modules/break_administrator/themes/default/new.tpl',
      1 => 1575212159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb36a7dae024_08967915 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" action="?menu=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&amp;action=<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<?php if (!$_smarty_tpl->tpl_vars['FRAMEWORK_TIENE_TITULO_MODULO']->value) {?>
<tr class="moduleTitle">
  <td class="moduleTitle" valign="middle">&nbsp;&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" border="0" align="absmiddle" />&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</td>
</tr>
<?php }?>
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
            <input class="button" type="submit" name="cancel" value="&laquo;&nbsp;<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
" />
            <input class="button" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" />
        </td>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
        <tr>
		<td width="20%"><?php echo $_smarty_tpl->tpl_vars['nombre']->value['LABEL'];?>
: <span  class="required">*</span></td>
		<td width="80%"><?php echo $_smarty_tpl->tpl_vars['nombre']->value['INPUT'];?>
</td>
        </tr>
        <tr>
		<td width="20%"><?php echo $_smarty_tpl->tpl_vars['descripcion']->value['LABEL'];?>
: <span  class="required">*</span></td>
		<td width="80%"><?php echo $_smarty_tpl->tpl_vars['descripcion']->value['INPUT'];?>
</td>
        </tr> 
      </table>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->tpl_vars['id_break']->value['INPUT'];?>

</form>
<?php }
}
