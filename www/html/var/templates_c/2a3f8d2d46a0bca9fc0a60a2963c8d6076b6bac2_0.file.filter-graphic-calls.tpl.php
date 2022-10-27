<?php
/* Smarty version 3.1.33, created on 2022-09-06 01:15:21
  from '/var/www/html/modules/graphic_calls/themes/default/filter-graphic-calls.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6316d769bab841_15302969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a3f8d2d46a0bca9fc0a60a2963c8d6076b6bac2' => 
    array (
      0 => '/var/www/html/modules/graphic_calls/themes/default/filter-graphic-calls.tpl',
      1 => 1575212159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6316d769bab841_15302969 (Smarty_Internal_Template $_smarty_tpl) {
?>    <table width='100%' border='0'>
        <tr>
            <td align='left'>
                <table>
                <tr>
                    <td class='letra12'><?php echo $_smarty_tpl->tpl_vars['fecha_ini']->value['LABEL'];?>
<span  class='required'>*</span></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fecha_ini']->value['INPUT'];?>
</td>
                    <td class='letra12'><?php echo $_smarty_tpl->tpl_vars['fecha_fin']->value['LABEL'];?>
<span  class='required'>*</span></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fecha_fin']->value['INPUT'];?>
</td>
                    <td class='letra12' colspan="2">&nbsp;</td>
                    <td><input type='submit' name='submit_fecha' value='<?php echo $_smarty_tpl->tpl_vars['LABEL_FIND']->value;?>
' class='button' /></td>
                </tr>
                <tr>
                    <td class='letra12' align='left'><?php echo $_smarty_tpl->tpl_vars['tipo']->value['LABEL'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tipo']->value['INPUT'];?>
</td>
                    <td class='letra12' align='left'><?php echo $_smarty_tpl->tpl_vars['estado']->value['LABEL'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['estado']->value['INPUT'];?>
</td>
                    <td class='letra12' align='left'><?php echo $_smarty_tpl->tpl_vars['queue']->value['LABEL'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['queue']->value['INPUT'];?>
</td>
                    <td class='letra12'>&nbsp;</td>
                </tr>
                </table>
            </td>
        </tr>
        <tr align='left'>
            <td>
                <img src='?menu=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&amp;rawmode=yes&amp;action=graph_histogram&amp;tipo=<?php echo $_smarty_tpl->tpl_vars['TIPO']->value;?>
&amp;estado=<?php echo $_smarty_tpl->tpl_vars['ESTADO']->value;?>
&amp;queue=<?php echo $_smarty_tpl->tpl_vars['QUEUE']->value;?>
&amp;fecha_ini=<?php echo $_smarty_tpl->tpl_vars['FECHA_INI']->value;?>
&amp;fecha_fin=<?php echo $_smarty_tpl->tpl_vars['FECHA_FIN']->value;?>
' />
            </td>
        </tr>
    </table>

<?php }
}
