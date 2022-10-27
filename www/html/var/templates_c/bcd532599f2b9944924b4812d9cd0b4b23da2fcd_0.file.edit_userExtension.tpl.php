<?php
/* Smarty version 3.1.33, created on 2022-07-18 06:22:32
  from '/var/www/html/modules/userlist/themes/default/edit_userExtension.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62d534684ca6a3_09151571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcd532599f2b9944924b4812d9cd0b4b23da2fcd' => 
    array (
      0 => '/var/www/html/modules/userlist/themes/default/edit_userExtension.tpl',
      1 => 1638368363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d534684ca6a3_09151571 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Issabel</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
        <?php echo $_smarty_tpl->tpl_vars['HEADER_LIBS_JQUERY']->value;?>

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
libs/js/base.js"><?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->tpl_vars['HEADER']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['HEADER_MODULES']->value;?>

    </head>
    <body>
    <?php if ($_smarty_tpl->tpl_vars['THEMENAME']->value == "elastixneo") {?>
      <div>
        <div class="elxneo-module-title">
            <div class="name-left"></div>
            <span class="name">
          <?php if ($_smarty_tpl->tpl_vars['icon']->value != null) {?>
          <img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" width="22" height="22" align="absmiddle" />
          <?php }?>
          &nbsp;<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
            <div class="name-right"></div>
          </div>
      <div id="elxneo-content">
<?php if (!empty($_smarty_tpl->tpl_vars['mb_message']->value)) {?>
<div class="div_msg_errors" id="message_error">
    <div style="height:24px">
        <div class="div_msg_errors_title" style="padding-left:5px"><b style="color:red;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['mb_title']->value;?>
</b></div>
        <div class="div_msg_errors_dismiss"><input type="button" onclick="hide_message_error();" value="<?php echo $_smarty_tpl->tpl_vars['md_message_title']->value;?>
"/></div>
    </div>
    <div style="padding:2px 10px 2px 10px"><?php echo $_smarty_tpl->tpl_vars['mb_message']->value;?>
</div>
</div>
<?php }?>
          <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

       </div>
    <?php } else {
if (!empty($_smarty_tpl->tpl_vars['mb_message']->value)) {?>
    <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" class="message_board">
      <tbody id="table_error">
      <tr>
        <tr>
            <td valign="middle" class="mb_title">&nbsp;<?php echo $_smarty_tpl->tpl_vars['mb_title']->value;?>
</td>
        </tr>
        <tr>
            <td valign="middle" class="mb_message"><?php echo $_smarty_tpl->tpl_vars['mb_message']->value;?>
</td>
        </tr>
    </tbody></table>
<?php }?>
    <div class="moduleTitle">
      &nbsp;&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" border="0" align="absmiddle">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

    </div>
    <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

<?php }?>
    </body>
</html>
<?php }
}
