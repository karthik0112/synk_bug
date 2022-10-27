<?php
/* Smarty version 3.1.33, created on 2022-10-10 03:04:25
  from '/var/www/html/modules/file_editor/themes/default/new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6343c3f93a68b1_35582890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cff9524a1331f886c5df01ba378728c6601d61a' => 
    array (
      0 => '/var/www/html/modules/file_editor/themes/default/new.tpl',
      1 => 1638714136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6343c3f93a68b1_35582890 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Comentario:  He agregado variables para que se muestre la misma vista de la 160-->
<table width="99%" border="0" cellspacing="0" cellpadding="2" align="center" >
    <tr>
        <td width="8%" align="right"><?php echo $_smarty_tpl->tpl_vars['file']->value['LABEL'];?>
: </td>
        <td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['file']->value['INPUT'];?>
</td>
        <td width="80%" align="left"><input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" /></td>
    </tr>
    <tr width="99%" border="0" cellspacing="0" cellpadding="0" >
        <!--Mensaje de error si no es un directorio válido-->
        <td class="mb_message"><b><?php echo $_smarty_tpl->tpl_vars['msj_err']->value;?>
</b></td>
        </tr>
</table>


<?php }
}
