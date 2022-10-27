<?php
/* Smarty version 3.1.33, created on 2022-08-08 03:56:34
  from '/var/www/html/modules/network_parameters/themes/default/network.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62f0c1b2806ff0_87190642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'def0b4d7f31a20977201b1d4d60ac72bbcdd5423' => 
    array (
      0 => '/var/www/html/modules/network_parameters/themes/default/network.tpl',
      1 => 1637330690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f0c1b2806ff0_87190642 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>
          <input class="button" type="submit" name="save_network_changes" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td>
          <?php } else { ?>
          <input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT_PARAMETERS']->value;?>
"></td>
          <?php }?>          
        <td align="right" nowrap> <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?> <span class="letra12"> <span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span> <?php }?></td>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['host']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?> <span  class="required">*</span> <?php }?></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['host']->value['INPUT'];?>
</td>
	<td width="20%"><?php echo $_smarty_tpl->tpl_vars['dns1']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?> <span  class="required">*</span> <?php }?></td>
	<td width="30%"><?php echo $_smarty_tpl->tpl_vars['dns1']->value['INPUT'];?>
</td>
      </tr>
      <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['gateway']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?> <span  class="required">*</span><?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['gateway']->value['INPUT'];?>
</td>
	<td width="20%"><?php echo $_smarty_tpl->tpl_vars['dns2']->value['LABEL'];?>
: </td>
	<td width="30%"><?php echo $_smarty_tpl->tpl_vars['dns2']->value['INPUT'];?>
</td>
      </tr>
      <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['gateway_dev']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?> <span  class="required">*</span><?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['gateway_dev']->value['INPUT'];?>
</td>
        <td colspan=2></td>
      </tr>
    </table>
  </td>
</tr>
</table>
</form>
<?php echo $_smarty_tpl->tpl_vars['ETHERNET_INTERFASES_LIST']->value;?>

<?php }
}
