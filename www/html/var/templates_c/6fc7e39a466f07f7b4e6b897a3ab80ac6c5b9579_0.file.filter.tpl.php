<?php
/* Smarty version 3.1.33, created on 2022-07-27 02:32:51
  from '/var/www/html/modules/rep_trunks_used_per_hour/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62e0dc135694a1_17170943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fc7e39a466f07f7b4e6b897a3ab80ac6c5b9579' => 
    array (
      0 => '/var/www/html/modules/rep_trunks_used_per_hour/themes/default/filter.tpl',
      1 => 1575212159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e0dc135694a1_17170943 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
        <td width="30%" align="left"><?php echo $_smarty_tpl->tpl_vars['date_from']->value['LABEL'];?>
:&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['date_from']->value['INPUT'];?>
</td>
        <td width="70%" align="left">
            <?php echo $_smarty_tpl->tpl_vars['filter_field']->value['LABEL'];?>
:&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['filter_field']->value['INPUT'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['filter_value']->value['INPUT'];?>

            <input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
" />
        </td>
    </tr>
    <tr class="letra12">
        <td width="30%" align="left"><?php echo $_smarty_tpl->tpl_vars['date_to']->value['LABEL'];?>
:&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['date_to']->value['INPUT'];?>
</td>
        <td width="70%" align="left">&nbsp;</td>
    </tr>
</table><?php }
}
