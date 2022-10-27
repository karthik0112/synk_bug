<?php
/* Smarty version 3.1.33, created on 2022-10-26 06:10:20
  from '/var/www/html/modules/file_editor/themes/default/file_editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6359078c934f26_80722707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdc2383835f27023e3e035e6409c84c7a92bb230' => 
    array (
      0 => '/var/www/html/modules/file_editor/themes/default/file_editor.tpl',
      1 => 1638714136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6359078c934f26_80722707 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Comentario:  He agregado variables para que se muestre la misma vista de la 160-->
<form method="POST" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['url_edit']->value;?>
">
<table class="message_board" width="99%" border="0" cellspacing="0" cellpadding="4" >
    <tr>
        <td class="mb_message">
            <font size="2px"><?php echo $_smarty_tpl->tpl_vars['msg_status']->value;?>
</font>
        </td>
    </tr>
    <tr>
        <td>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_back']->value;?>
&file=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" style="text-decoration: none;"><b>&laquo;&nbsp;<?php echo $_smarty_tpl->tpl_vars['LABEL_BACK']->value;?>
</b></a>
        <b><?php echo $_smarty_tpl->tpl_vars['basename']->value['LABEL'];?>
:</b>&nbsp;<?php echo $_smarty_tpl->tpl_vars['basename']->value['INPUT'];
echo $_smarty_tpl->tpl_vars['LABEL_COMPLETADO']->value;?>
&nbsp;&nbsp;
        <input type="submit" class="button" name="Guardar" value="<?php echo $_smarty_tpl->tpl_vars['LABEL_SAVE']->value;?>
" />&nbsp;&nbsp;
        <input type="submit" class="button" name="Reload"  value="<?php echo $_smarty_tpl->tpl_vars['RELOAD_ASTERISK']->value;?>
" />
	</td>
    </tr>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['content']->value['INPUT'];?>
</td>
    </tr>
</table>
</form>
<?php }
}
