<?php
/* Smarty version 3.1.33, created on 2022-07-18 06:45:52
  from '/var/www/html/modules/monitoring/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62d539e0eff089_74651950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d58ed9f3850a8edf6874bee989280b7f47b073d' => 
    array (
      0 => '/var/www/html/modules/monitoring/themes/default/filter.tpl',
      1 => 1638714136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d539e0eff089_74651950 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="btn btn-primary" data-toggle="collapse" href="#filters" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="filters">
<?php echo $_smarty_tpl->tpl_vars['FILTER_SHOW']->value;?>

<span class="caret"></span>
</a>

<div class="collapse multi-collapse" id="filters">
</br>
<form id=formFilter method="POST" action="">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
	<td align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
:</td>
	<td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
	<td align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
:</td>
	<td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
	<td align="right"><?php echo $_smarty_tpl->tpl_vars['filter_field']->value['LABEL'];?>
:</td>
	<td align="left"><?php echo $_smarty_tpl->tpl_vars['filter_field']->value['INPUT'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['filter_value']->value['INPUT'];?>

	  <select id="filter_value_recordingfile" name="filter_value_recordingfile" size="1" style="display:none">
                <option value="incoming" <?php echo $_smarty_tpl->tpl_vars['SELECTED_1']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['INCOMING']->value;?>
</option>
                <option value="outgoing" <?php echo $_smarty_tpl->tpl_vars['SELECTED_2']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['OUTGOING']->value;?>
</option>
                <option value="queue" <?php echo $_smarty_tpl->tpl_vars['SELECTED_3']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['QUEUE']->value;?>
</option>
		<option value="group" <?php echo $_smarty_tpl->tpl_vars['SELECTED_4']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['GROUP']->value;?>
</option>
           </select>
    </td>
	<td align="right"><input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
" /></td>
    </tr>
    <tr class="letra12">
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['limit']->value['LABEL'];?>
: </td>
        <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['limit']->value['INPUT'];?>
</td>
    </tr>
</table>
</form>
</div>

<?php }
}
