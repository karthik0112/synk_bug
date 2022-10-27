<?php
/* Smarty version 3.1.33, created on 2022-07-08 01:24:44
  from '/var/www/html/modules/cdrreport/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62c7bf9c716ee1_49962983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64516487f084a20a3115895439d7812c9443e2c2' => 
    array (
      0 => '/var/www/html/modules/cdrreport/themes/default/filter.tpl',
      1 => 1638825550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c7bf9c716ee1_49962983 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="btn btn-primary" data-toggle="collapse" href="#filters" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="filters">
<?php echo $_smarty_tpl->tpl_vars['FILTER_SHOW']->value;?>

<span class="caret"></span>
</a>

<div class="collapse multi-collapse" id="filters">
</br>
<form id=formFilter method="POST" action="">
   <table width="99%" cellpadding="4" cellspacing="0" border="0" align="center">
      <tr class="letra12">
        <td width="7%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
:</td>
        <td width="10%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
        <td width="11%" align="right"><?php echo $_smarty_tpl->tpl_vars['field_pattern']->value['LABEL'];?>
: </td>
        <td width="14%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['field_name']->value['INPUT'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['field_pattern']->value['INPUT'];?>
</td>
        <td align="left"><input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" /></td>
      </tr>
      <tr class="letra12">
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
:</td>
        <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['status']->value['LABEL'];?>
: </td>
        <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['status']->value['INPUT'];?>
</td>
      </tr>
      <tr class="letra12">
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['limit']->value['LABEL'];?>
: </td>
        <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['limit']->value['INPUT'];?>
</td>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['ringgroup']->value['LABEL'];?>
: </td>
        <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['ringgroup']->value['INPUT'];?>
</td>
      </tr>
      <tr class="letra12">
        <td align="right" nowrap><?php echo $_smarty_tpl->tpl_vars['timeInSecs']->value['LABEL'];?>
: </td>
        <td  align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['timeInSecs']->value['INPUT'];?>
</td>
      </tr>
   </table>
</form>
</div>
</br>
<?php echo '<script'; ?>
>
function timeInSecscheck()
{
  if (document.getElementsByName("chkoldtimeInSecs")[0].checked) {
    document.getElementById("timeInSecs").value="on";
  } else {
    document.getElementById("timeInSecs").value="off";
  }
}
<?php echo '</script'; ?>
>
<?php }
}
