<?php
/* Smarty version 3.1.33, created on 2022-07-18 07:51:49
  from '/var/www/html/modules/conference/themes/default/new_conference.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62d54955eb6cd9_71897322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e687679751a56f867be83e5c85d4c6a76de390e9' => 
    array (
      0 => '/var/www/html/modules/conference/themes/default/new_conference.tpl',
      1 => 1638714136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d54955eb6cd9_71897322 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
<!-- Original:  Gregor (legreg@legreg.de) -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
var ie4 = (document.all) ? true : false;
var ns4 = (document.layers) ? true : false;
var ns6 = (document.getElementById && !document.all) ? true : false;
function hidelayer(lay) {
if (ie4) {
    document.all[lay].style.visibility = "hidden";
    document.all[lay].style.position = "absolute";
}
if (ns4) {
    document.layers[lay].visibility = "hide";
}
if (ns6) {
    document.getElementById([lay]).style.display = "none";
    document.getElementById([lay]).style.position = "absolute";
}
}
function showlayer(lay) {
if (ie4) {
    document.all[lay].style.visibility = "visible";
    document.all[lay].style.position = "";
}
if (ns4) {
    document.layers[lay].visibility = "show";
}
if (ns6) {
    document.getElementById([lay]).style.display = "";
    document.getElementById([lay]).style.position = "";
}
}
//  End -->
<?php echo '</script'; ?>
>

<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <td align="left">
            <?php if ($_smarty_tpl->tpl_vars['Show']->value) {?>
                <input class="button" type="submit" name="add_conference" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;&nbsp;&nbsp;&nbsp;
            <?php }?>
            <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
        </td>

    <?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?>
	<td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
    <?php }?>
    </tr>
    <tr><td>
        <table width="99%" cellpadding="4" cellspacing="0" border="0" class="tabForm">
            <tr>
                <td align="left" width="20%"><b><?php echo $_smarty_tpl->tpl_vars['conference_name']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></b></td>
                <td class="required" align="left"><?php echo $_smarty_tpl->tpl_vars['conference_name']->value['INPUT'];?>
</td>
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['conference_owner']->value['LABEL'];?>
: </b></td>
                <td align="left"><?php echo $_smarty_tpl->tpl_vars['conference_owner']->value['INPUT'];?>
</td>
            </tr>
            <tr>
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['moderator_pin']->value['LABEL'];?>
: </b></td>
                <td align="left"><?php echo $_smarty_tpl->tpl_vars['moderator_pin']->value['INPUT'];?>
</td>
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['moderator_options_1']->value['LABEL'];?>
</b></td>
                <td align="left">
                    <?php echo $_smarty_tpl->tpl_vars['moderator_options_1']->value['INPUT'];
echo $_smarty_tpl->tpl_vars['announce']->value;?>
&nbsp;&nbsp;&nbsp;
                    <?php echo $_smarty_tpl->tpl_vars['moderator_options_2']->value['INPUT'];
echo $_smarty_tpl->tpl_vars['record']->value;?>

                </td>
            </tr>
            <tr>
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['user_pin']->value['LABEL'];?>
: </b></td>
                <td align="left"><?php echo $_smarty_tpl->tpl_vars['user_pin']->value['INPUT'];?>
</td>
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['user_options_1']->value['LABEL'];?>
: </b></td>
                <td align="left">
                    <?php echo $_smarty_tpl->tpl_vars['user_options_1']->value['INPUT'];
echo $_smarty_tpl->tpl_vars['announce']->value;?>
&nbsp;&nbsp;&nbsp;
                    <?php echo $_smarty_tpl->tpl_vars['user_options_2']->value['INPUT'];
echo $_smarty_tpl->tpl_vars['listen_only']->value;?>
&nbsp;&nbsp;&nbsp;
                    <?php echo $_smarty_tpl->tpl_vars['user_options_3']->value['INPUT'];
echo $_smarty_tpl->tpl_vars['wait_for_leader']->value;?>

                </td>
            </tr>
            <tr>
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['start_time']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></b></td>
                <td align="left"><?php echo $_smarty_tpl->tpl_vars['start_time']->value['INPUT'];?>
</td>
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['duration']->value['LABEL'];?>
: </b></td>
                <td align="left">
                    <?php echo $_smarty_tpl->tpl_vars['duration']->value['INPUT'];?>
&nbsp;:
                    <?php echo $_smarty_tpl->tpl_vars['duration_min']->value['INPUT'];?>

                </td>
            </tr>
            <tr>
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['conference_number']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></b></td>
                <td align="left"><?php echo $_smarty_tpl->tpl_vars['conference_number']->value['INPUT'];?>
</td>
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['max_participants']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></b></td>
                <td align="left"><?php echo $_smarty_tpl->tpl_vars['max_participants']->value['INPUT'];?>
</td>
            </tr>
<?php if ($_smarty_tpl->tpl_vars['WEBCONF_CONTENT']->value) {?>
            <tr><td><input type="checkbox" name="enable_webconf" id="enable_webconf" <?php echo $_smarty_tpl->tpl_vars['WEBCONF_SELECTED']->value;?>
  onclick="if (this.checked) { showlayer('webconf_options'); } else { hidelayer('webconf_options'); } "  /><b><?php echo $_smarty_tpl->tpl_vars['enable_web_conf']->value;?>
</b></td><td colspan="3">&nbsp;</td></tr>
            <tr><td colspan="4"><div id="webconf_options"><hr/><?php echo $_smarty_tpl->tpl_vars['WEBCONF_CONTENT']->value;?>
</div></td></tr>

<?php echo '<script'; ?>
 type="text/javascript">
<!-- 

if (document.getElementById('enable_webconf').checked) {
    showlayer('webconf_options');
} else {
    hidelayer('webconf_options');
}

//  End -->
<?php echo '</script'; ?>
>

<?php }?>
        </table>
    </td></tr>
</table>
<?php }
}
