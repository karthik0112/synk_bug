<?php
/* Smarty version 3.1.33, created on 2022-10-10 03:04:07
  from '/var/www/html/modules/text_to_wav/themes/default/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6343c3e75739c1_24931357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8caf5a9d2bfcaa64bf78b78e3d1cf72b0f1de17a' => 
    array (
      0 => '/var/www/html/modules/text_to_wav/themes/default/form.tpl',
      1 => 1638714136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6343c3e75739c1_24931357 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
     <?php if ($_smarty_tpl->tpl_vars['FILENAME']->value) {?>
     <td align="left"><input class="button" type="submit" name="back" value="<?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
"></td>
     <?php } else { ?>
     <td align="left"><input class="button" type="submit" name="generate" value="<?php echo $_smarty_tpl->tpl_vars['GENERATE']->value;?>
"></td>
     
        <td align="right" nowrap><span class="letra12"></td><?php }?>
    </tr>
</table>
<table>
    <tr><?php if (!$_smarty_tpl->tpl_vars['FILENAME']->value) {?>
        <table class="tabForm" style="font-size: 16px;" width="99%" >
            <tr class="letra12">
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['message']->value['LABEL'];?>
:</b></td>
                <td align="left"><?php echo $_smarty_tpl->tpl_vars['message']->value['INPUT'];?>
</td>
                <td width="40%"></td>
            </tr>
            <tr class="letra12">
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['format']->value['LABEL'];?>
:</b></td>
                <td align="left"><?php echo $_smarty_tpl->tpl_vars['format']->value['INPUT'];?>
</td>
                <td align="left"></td>
            </tr>
            <tr class="letra12">
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['language']->value['LABEL'];?>
:</b></td>
                <td align="left"><?php echo $_smarty_tpl->tpl_vars['language']->value['INPUT'];?>
</td>
                <td align="left"></td>
            </tr>
 
        </table>
	<?php } else { ?>
	<table class="tabForm" style="font-size: 16px;" width="99%" >
            <tr class="letra12">
                <td align="left"><b> <?php if ($_smarty_tpl->tpl_vars['EXECUTE']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['FILENAME']->value;
echo $_smarty_tpl->tpl_vars['EXTENSION']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DOWNLOAD']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value;?>
</a><?php }?></b></td>
            </tr>
        </table>
	
	<?php }?>
   <tr>
</table>
<?php }
}
