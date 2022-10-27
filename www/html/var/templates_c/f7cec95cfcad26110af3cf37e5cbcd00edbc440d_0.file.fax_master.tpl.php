<?php
/* Smarty version 3.1.33, created on 2022-10-14 04:34:20
  from '/var/www/html/modules/faxmaster/themes/default/fax_master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63491f0c8a1579_50754469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7cec95cfcad26110af3cf37e5cbcd00edbc440d' => 
    array (
      0 => '/var/www/html/modules/faxmaster/themes/default/fax_master.tpl',
      1 => 1626122724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63491f0c8a1579_50754469 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
        <input class='button' type='submit' name='save_default' value='<?php echo $_smarty_tpl->tpl_vars['APPLY_CHANGES']->value;?>
'></td>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="55%"><i><?php echo $_smarty_tpl->tpl_vars['FAXMASTER_MSG']->value;?>
</i></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['fax_master']->value['INPUT'];?>
</td>
      </tr>
    </table>
  </td>
</tr>
</table>
</form>
<?php }
}
