<?php
/* Smarty version 3.1.33, created on 2022-08-16 02:25:16
  from '/var/www/html/modules/meet/themes/default/new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62fb384c4b6560_16728151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11b7bf72c09845c47079664bcf7f0d9d8ec7b5bb' => 
    array (
      0 => '/var/www/html/modules/meet/themes/default/new.tpl',
      1 => 1575121599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb384c4b6560_16728151 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://meet.jit.si/external_api.min.js"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['mb_message']->value != '') {?>
<br/>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['videomode']->value == 'input') {?>
<div class='panel panel-neon'>
<div class='panel-heading'>
<div class='panel-title'>
<?php echo $_smarty_tpl->tpl_vars['STARTNEW']->value;?>

</div>
</div>
<div class='panel-body'>
<form method="POST" role='form'>
<input type='hidden' name='action' value='create'>
<div class='form-group'>
<div><?php echo $_smarty_tpl->tpl_vars['invite']->value['LABEL'];?>
:
<a href='?edittemplate=1' title='<?php echo $_smarty_tpl->tpl_vars['CONFEMAIL']->value;?>
'><i class='fa fa-cog'></i></a>
</div>
<?php echo $_smarty_tpl->tpl_vars['invite']->value['INPUT'];?>

<input class="button col-md-2 col-sm-12 col-md-offset-1 col-sm-offset-0" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['STARTCONF']->value;?>
">
</div>
</form>
</div>
</div>
<div class='panel panel-neon'>
<div class='panel-heading'>
<div class='panel-title'>
<?php echo $_smarty_tpl->tpl_vars['JOINEXISTING']->value;?>

</div>
</div>
<div class='panel-body'>
<form method="POST" role='form'>
<input type='hidden' name='action' value='join'>
<div class='form-group'>
<div>
<?php echo $_smarty_tpl->tpl_vars['join']->value['LABEL'];?>
:
</div>
<?php echo $_smarty_tpl->tpl_vars['join']->value['INPUT'];?>

<input class="button col-md-2 col-sm-12 col-md-offset-1 col-sm-offset-0" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['JOINCONF']->value;?>
">
</div>
</form>
</div>
</div>
<div class='alert alert-neon text-right'>Powered by <a href='http://jitsi.org' rel='external'>Jitsi</a></div>
<?php } elseif ($_smarty_tpl->tpl_vars['videomode']->value == 'template') {?>

<div class='panel panel-neon'>
<div class='panel-heading'>
<div class='panel-title'>
<?php echo $_smarty_tpl->tpl_vars['EDITTEMPLATE']->value;?>

</div>
</div>
<div class='panel-body'>
<form method="POST" role='form'>
<input type='hidden' name='action' value='savetemplate'>

<div class='row'>
<div class='col-md-12'><?php echo $_smarty_tpl->tpl_vars['SUBJECT']->value;?>
:</div>
</div>
<div class='row'>
<div class='col-md-8'>
<input type=text name='emailsubject' class='form-control col-md-8'  value='<?php echo $_smarty_tpl->tpl_vars['emailsubject']->value;?>
'>
</div>
</div>
<div class='panel'></div>
<div class='row'>
<div class='col-md-12'><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
:</div>
<div class='col-md-8'>
<textarea id='emailcontent' name='emailcontent' class='form-control col-md-8' rows='10'><?php echo $_smarty_tpl->tpl_vars['emailcontent']->value;?>
</textarea>
</div>
</div>
<br/>
<div class='row'>
<div class='col-md-12'>
<input class="button" type="submit" name="savetemplate" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">
<input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
</div>
</div>
</form>
</div>
</div>

<?php } else { ?>
<div id='meet' data-room='<?php echo $_smarty_tpl->tpl_vars['roomid']->value;?>
' data-username='<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
' data-language='<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value;?>
'></div>
<?php }
}
}
