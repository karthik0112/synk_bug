<?php
/* Smarty version 3.1.33, created on 2022-07-08 01:24:53
  from '/var/www/html/modules/dest_distribution/themes/default/dest_distribution.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62c7bfa52f1c03_02901917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac74c846a36991737b8d1d5afa6900c7edc7a808' => 
    array (
      0 => '/var/www/html/modules/dest_distribution/themes/default/dest_distribution.tpl',
      1 => 1638825550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c7bfa52f1c03_02901917 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center" class="tabForm">
<tr>
    <td>
        <form method="POST" style="margin-bottom:0;" action="?menu=<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                <tr class="letra12"><?php echo $_smarty_tpl->tpl_vars['contentFilter']->value;?>
</tr>
            </table>
        </form>
    </td>
</tr>
<tr>
<td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
        <p align='center'><img alt="Graphic" src="<?php echo $_smarty_tpl->tpl_vars['URL_GRAPHIC']->value;?>
" /></p>
        </td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['mostrarSumario']->value) {?>
    <tr>
        <td>
        <table class="table_data" align="center" cellspacing="0" cellpadding="0">
        <tr class="table_title_row">
            <td align='center' class="table_title_row borderLeft" style="background:none;"><?php echo $_smarty_tpl->tpl_vars['Rate_Name']->value;?>
</td>
            <td align='center' class="table_title_row"><?php echo $_smarty_tpl->tpl_vars['Title_Criteria']->value;?>
</td>
            <td align='center' class="table_title_row borderRight">%</td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'fila', false, NULL, 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
        <tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fila']->value, 'item', false, 'key', 'data', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
	    <td class="table_data" align="right"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        </td>
    </tr>
    <?php }?>
    </table>
</td>
</tr>
</table><?php }
}
