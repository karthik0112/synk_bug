<?php
/* Smarty version 3.1.33, created on 2022-06-17 00:25:25
  from '/var/www/html/modules/eccp_users/themes/default/edit-users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62ac02353efd56_55044965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c32573aee98d1ef8aa5bfee5ad9a6fb723c05407' => 
    array (
      0 => '/var/www/html/modules/eccp_users/themes/default/edit-users.tpl',
      1 => 1575212159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ac02353efd56_55044965 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post">
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
          <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>
          <input class="button" type="submit" name="submit_save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" />
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"/>
          <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?>
          <input class="button" type="submit" name="submit_apply_changes" value="<?php echo $_smarty_tpl->tpl_vars['APPLY_CHANGES']->value;?>
" />
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"/>
          <?php } else { ?>
          <input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
"/>
          <input class="button" type="submit" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
"  onClick="return confirmSubmit('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_CONTINUE']->value;?>
')" />
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"/>
          <?php }?>
        </td>
        <td align="right" nowrap><span  class="required">*</span> <span class="letra12"><?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['username']->value['LABEL'];?>
: <span  class="required">*</span></td>
	<td><?php echo $_smarty_tpl->tpl_vars['username']->value['INPUT'];?>
</td>
      </tr>
<?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?>
      <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['password1']->value['LABEL'];?>
: <span  class="required">*</span></td>
	<td><?php echo $_smarty_tpl->tpl_vars['password1']->value['INPUT'];?>
</td>
       </tr>
       <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['password2']->value['LABEL'];?>
: <span class="required">*</span></td>
	<td><?php echo $_smarty_tpl->tpl_vars['password2']->value['INPUT'];?>
</td>
      </tr>
<?php }?>
    </table>
  </td>
</tr>
</table>
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id_user']->value;?>
" />
</form>




<?php }
}
