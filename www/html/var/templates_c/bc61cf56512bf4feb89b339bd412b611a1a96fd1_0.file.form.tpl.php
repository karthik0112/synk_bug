<?php
/* Smarty version 3.1.33, created on 2022-10-26 06:55:08
  from '/var/www/html/modules/sec_fb_admin/themes/default/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6359120c0b1216_04912138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc61cf56512bf4feb89b339bd412b611a1a96fd1' => 
    array (
      0 => '/var/www/html/modules/sec_fb_admin/themes/default/form.tpl',
      1 => 1637758153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6359120c0b1216_04912138 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
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
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['name']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value != "view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['name']->value['INPUT'];?>
</td>
    </tr>
    <tr <?php echo $_smarty_tpl->tpl_vars['type_style']->value;?>
 class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['maxretry']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value != "view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['maxretry']->value['INPUT'];?>
</td>
    </tr>
    <tr <?php echo $_smarty_tpl->tpl_vars['type_style']->value;?>
 class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['bantime']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value != "view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['bantime']->value['INPUT'];?>
</td>
    </tr>
    <tr <?php echo $_smarty_tpl->tpl_vars['type_style']->value;?>
 class="letra12" >
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['ignoreip']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value != "view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['ignoreip']->value['INPUT'];?>
</td>
    </tr>
    <tr <?php echo $_smarty_tpl->tpl_vars['type_style']->value;?>
 class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['enabled']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['MODE']->value != "view") {?><span  class="required">*</span><?php }?></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['enabled']->value['INPUT'];?>
</td>
    </tr>
</table>
<input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
">
<input type="hidden" name="idtemp" value="<?php echo $_smarty_tpl->tpl_vars['IDTEMP']->value;?>
">

<?php }
}
