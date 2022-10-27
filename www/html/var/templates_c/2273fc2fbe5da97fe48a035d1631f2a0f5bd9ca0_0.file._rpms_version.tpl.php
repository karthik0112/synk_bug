<?php
/* Smarty version 3.1.33, created on 2022-07-18 05:09:47
  from '/var/www/html/modules/_issabelutils/themes/default/_rpms_version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62d5235b743ca1_88456628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2273fc2fbe5da97fe48a035d1631f2a0f5bd9ca0' => 
    array (
      0 => '/var/www/html/modules/_issabelutils/themes/default/_rpms_version.tpl',
      1 => 1638368363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d5235b743ca1_88456628 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel='stylesheet' href='modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/themes/default/css/rpms_version.css' />
<?php echo '<script'; ?>
 type='text/javascript' src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/themes/default/js/rpms_version.js"><?php echo '</script'; ?>
>
<div id="rpminfo_changemode">
    (<span id="rpms_textmode"><?php echo $_smarty_tpl->tpl_vars['textMode']->value;?>
</span>
    <span id="rpms_htmlmode"><?php echo $_smarty_tpl->tpl_vars['htmlMode']->value;?>
</span>)
</div>
<div id="rpminfo_loading">
    <img src="images/loading.gif" alt="loading" />
</div>
<div id="rpminfo_htmlmode" class="letra12">
	<table>
        <thead>
	        <tr>
	            <th>Name</th>
	            <th>Package Name</th>
	            <th>Version</th>
	            <th>Release</th>
	        </tr>
        </thead>
        <tbody>
                        <tr class='tdRPMDetail'><td colspan='4' align='left'></td></tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
	    </tbody>
	</table>
</div>
<div id="rpminfo_textmode">
    <textarea readonly="readonly"></textarea>
</div>
<?php }
}
