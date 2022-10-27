<?php
/* Smarty version 3.1.33, created on 2022-09-01 02:45:14
  from '/var/www/html/modules/sec_ports/themes/default/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_631054fa289811_42552424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f59b83a7e6df2bad384d3a0407a550feda42a57' => 
    array (
      0 => '/var/www/html/modules/sec_ports/themes/default/form.tpl',
      1 => 1637758153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631054fa289811_42552424 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <td align="left">
        <?php if ($_smarty_tpl->tpl_vars['MODE']->value == "new") {?>
            <input class="button" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['MODE']->value == "edit") {?>
            <input class="button" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['MODE']->value == "view") {?>
            <input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
">&nbsp;
        <?php }?>
            <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td>
	<?php if ($_smarty_tpl->tpl_vars['MODE']->value != "view") {?>
	    <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
	<?php }?>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="99%" >
    <tr class="letra12" id="name">
        <td align="left" width="8%"><b><?php echo $_smarty_tpl->tpl_vars['name']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value != "view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['name']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['protocol']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value != "view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['protocol']->value['INPUT'];?>
</td>
    </tr>
    <tr <?php echo $_smarty_tpl->tpl_vars['port_style']->value;?>
 class="letra12" id="port">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['port']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value != "view") {?><span  class="required">*</span><?php }?></b></td>
        <?php if ($_smarty_tpl->tpl_vars['MODE']->value == "new") {?>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['port']->value['INPUT'];?>
&nbsp;:&nbsp;<?php echo $_smarty_tpl->tpl_vars['port2']->value['INPUT'];?>
</td>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['MODE']->value == "edit") {?>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['port']->value['INPUT'];?>
&nbsp;:&nbsp;<?php echo $_smarty_tpl->tpl_vars['port2']->value['INPUT'];?>
</td>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['MODE']->value == "view") {?>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['port']->value['INPUT'];?>
&nbsp; <?php if ($_smarty_tpl->tpl_vars['HAS']->value == "yes") {?>:<?php }?> &nbsp;<?php echo $_smarty_tpl->tpl_vars['port2']->value['INPUT'];?>
</td>
        <?php }?>
    </tr>
    <tr <?php echo $_smarty_tpl->tpl_vars['type_style']->value;?>
 class="letra12" id="type">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['type']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value != "view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['type']->value['INPUT'];?>
</td>
    </tr>
    <tr <?php echo $_smarty_tpl->tpl_vars['code_style']->value;?>
 class="letra12" id="code">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['code']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value != "view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['code']->value['INPUT'];?>
</td>
    </tr>
    <tr <?php echo $_smarty_tpl->tpl_vars['protocol_style']->value;?>
 class="letra12" id="protocol_number">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['protocol_number']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value != "view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['protocol_number']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['comment']->value['LABEL'];?>
:</b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['comment']->value['INPUT'];?>
</td>
    </tr>
</table>
<input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
">
<input type="hidden" name="idtemp" value="<?php echo $_smarty_tpl->tpl_vars['IDTEMP']->value;?>
">
<?php }
}
