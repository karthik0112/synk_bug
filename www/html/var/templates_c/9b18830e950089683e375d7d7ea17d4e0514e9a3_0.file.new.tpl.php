<?php
/* Smarty version 3.1.33, created on 2022-10-10 03:04:21
  from '/var/www/html/modules/asterisk_cli/themes/default/new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6343c3f56d1886_52386163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b18830e950089683e375d7d7ea17d4e0514e9a3' => 
    array (
      0 => '/var/www/html/modules/asterisk_cli/themes/default/new.tpl',
      1 => 1638714136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6343c3f56d1886_52386163 (Smarty_Internal_Template $_smarty_tpl) {
?><!--<form method="POST" enctype="multipart/form-data">

Comentario:  He agregado variables para que se muestre la misma vista de la 160

-->

<form method="POST" enctype="multipart/form-data">

<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">

		<tr>
			<td align="right"><?php echo $_smarty_tpl->tpl_vars['command']->value;?>
: </td>
			<td><input name="txtCommand" type="text" size="70" value="<?php echo $_smarty_tpl->tpl_vars['txtCommand']->value;?>
"></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td>
				<input type="submit" class="button" value="<?php echo $_smarty_tpl->tpl_vars['execute']->value;?>
">
			</td>
		</tr>

		<tr>
			<td height="8">&nbsp;</td>
			<td><hr>
<pre style="font-family: monospace;">
<?php echo $_smarty_tpl->tpl_vars['RESPUESTA_SHELL']->value;?>

</pre>
			</td>
		</tr>
</table>
</form>
<?php }
}
