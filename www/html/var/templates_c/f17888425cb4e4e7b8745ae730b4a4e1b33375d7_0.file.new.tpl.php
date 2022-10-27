<?php
/* Smarty version 3.1.33, created on 2022-06-22 08:46:05
  from '/var/www/html/modules/themes_system/themes/default/new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62b30f0dd25d55_54901277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f17888425cb4e4e7b8745ae730b4a4e1b33375d7' => 
    array (
      0 => '/var/www/html/modules/themes_system/themes/default/new.tpl',
      1 => 1638368363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b30f0dd25d55_54901277 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
	<td>
          <input class="button" type="submit" name="changeTheme" value="<?php echo $_smarty_tpl->tpl_vars['CHANGE']->value;?>
" >
	</td>
    </tr>
</table>
<table class="tabForm" width="99%" >
    <tr class="letra12">
        <td width="9%"><b><?php echo $_smarty_tpl->tpl_vars['themes']->value['LABEL'];?>
:</b></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['themes']->value['INPUT'];?>
</td>
    </tr>
</table>
</form>
<?php }
}
