<?php
/* Smarty version 3.1.33, created on 2022-07-08 01:24:51
  from '/var/www/html/modules/billing_report/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62c7bfa368cc22_52055685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b3d251b55f23ef0a4acab9bfe0e133e179b773a' => 
    array (
      0 => '/var/www/html/modules/billing_report/themes/default/filter.tpl',
      1 => 1638825550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c7bfa368cc22_52055685 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
:</td>
        <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
:</td>
        <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['filter_field']->value['LABEL'];?>
:</td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['filter_field']->value['INPUT'];?>
</td>
        <td colspan="2">
            <span id="textfield" <?php echo $_smarty_tpl->tpl_vars['style_text']->value;?>
><?php echo $_smarty_tpl->tpl_vars['filter_value']->value['INPUT'];?>
</span>
            <span id="duration" <?php echo $_smarty_tpl->tpl_vars['style_time']->value;?>
>
                    <?php echo $_smarty_tpl->tpl_vars['horas']->value['INPUT'];?>
&nbsp;H&nbsp;
                    <?php echo $_smarty_tpl->tpl_vars['minutos']->value['INPUT'];?>
&nbsp;M&nbsp;
                    <?php echo $_smarty_tpl->tpl_vars['segundos']->value['INPUT'];?>
&nbsp;S&nbsp;
            </span>
        </td>
        <td align="left"><input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
" /></td>
    </tr>
</table>
<?php }
}
