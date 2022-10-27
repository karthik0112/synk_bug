<?php
/* Smarty version 3.1.33, created on 2022-09-01 02:44:39
  from '/var/www/html/modules/sec_rules/themes/default/datatables.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_631054d7f28cb0_73761787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec8a228c6756bf94e2cc22004edd6b7d48a90f1a' => 
    array (
      0 => '/var/www/html/modules/sec_rules/themes/default/datatables.tpl',
      1 => 1637758153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631054d7f28cb0_73761787 (Smarty_Internal_Template $_smarty_tpl) {
?><input type='hidden' id='firewall_desactivado' value='<?php echo $_smarty_tpl->tpl_vars['FIRSTTIME']->value;?>
'>
<input type='hidden' id='changes_pending' value='<?php echo $_smarty_tpl->tpl_vars['EXECUTED']->value;?>
'>
<input type='hidden' id='hasgeoip' value='<?php echo $_smarty_tpl->tpl_vars['HASGEOIP']->value;?>
'>

<?php echo '<script'; ?>
>
var lang={};
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANG']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
    lang["<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"]="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
";
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>

<table id='geoiptable' class='table' width="100%" >
  <thead>
    <tr>
      <th><input type='checkbox' name='selectallgeo' id='selectallgeo' /></th>
      <th></th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['Traffic'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['Target'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['Interface'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['IP Source'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['IP Destiny'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['Protocol'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['Details'];?>
</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

<table id='rulestable' class='table' width="100%" >
  <thead>
    <tr>
      <th><input type='checkbox' name='selectall' id='selectall' /></th>
      <th></th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['Traffic'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['Target'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['Interface'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['IP Source'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['IP Destiny'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['Protocol'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['Details'];?>
</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

<div class="modal fade" id="editRule">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" >
      <div class="modal-body" id='ruleedit'>
      </div>
    </div>
  </div>
</div>
<?php }
}
