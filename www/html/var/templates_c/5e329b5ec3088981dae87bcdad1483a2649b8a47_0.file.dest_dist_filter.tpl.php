<?php
/* Smarty version 3.1.33, created on 2022-07-08 01:24:53
  from '/var/www/html/modules/dest_distribution/themes/default/dest_dist_filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62c7bfa52c1c50_42407041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e329b5ec3088981dae87bcdad1483a2649b8a47' => 
    array (
      0 => '/var/www/html/modules/dest_distribution/themes/default/dest_dist_filter.tpl',
      1 => 1638825550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c7bfa52c1c50_42407041 (Smarty_Internal_Template $_smarty_tpl) {
?><td width="8%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
:</td>
<td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
<td width="12%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
:</td>
<td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
<td width="10%" align="right"><?php echo $_smarty_tpl->tpl_vars['criteria']->value['LABEL'];?>
: </td>
<td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['criteria']->value['INPUT'];?>
</td>
<td width="12%" align="center"><input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" ></td>
<?php }
}
