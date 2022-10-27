<?php
/* Smarty version 3.1.33, created on 2022-07-08 01:24:55
  from '/var/www/html/modules/billing_setup/themes/default/default_rate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62c7bfa74f2815_27289392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9626dd1d7ea1953931328d9627355a2fc650034' => 
    array (
      0 => '/var/www/html/modules/billing_setup/themes/default/default_rate.tpl',
      1 => 1638825550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c7bfa74f2815_27289392 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">

<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>
          <input class="button" type="submit" name="save_default" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td>
	  <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
          <?php } else { ?>
          <img src="images/1x1.gif" border="0" align="absmiddle">&nbsp;&nbsp;
          <input class="button" type="submit" name="edit_default" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
"></td>
          <?php }?>          
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['default_rate']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?><span  class="required">*</span><?php }?></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['default_rate']->value['INPUT'];?>
</td>
      </tr>
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['default_rate_offset']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?><span  class="required">*</span><?php }?></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['default_rate_offset']->value['INPUT'];?>
</td>
      </tr>
    </table>
  </td>
</tr>
</table>
</form><?php }
}
