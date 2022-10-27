<?php
/* Smarty version 3.1.33, created on 2022-07-26 03:46:37
  from '/var/www/html/modules/myex_config/themes/default/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62df9bdda875e1_80157719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1b9536c27f31a6d2085daad96dff0eac605b3c8' => 
    array (
      0 => '/var/www/html/modules/myex_config/themes/default/form.tpl',
      1 => 1638803007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62df9bdda875e1_80157719 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
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

<div class='container-fluid'>
<div class='row'>
<div class='col-md-4'>
<legend><?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value;?>
</legend>
</div>
<div class='col-md-7'>
        <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>
        <td align="left">
            <input class="button" type="submit" name="save_new" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;&nbsp;
            <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
        </td>
        <?php }?>
</div>
</div>
</div>
 
  <!-- Nav tabs -->
  <ul class="nav nav-tabs mymargin" role="tablist">
    <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['GENERAL']->value;?>
</a></li>
    <li role="presentation"><a href="#forward" aria-controls="forward" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['FORWARD']->value;?>
</a></li>
    <li role="presentation"><a href="#recording" aria-controls="recording" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['RECORDING']->value;?>
</a></li>
    <?php if ($_smarty_tpl->tpl_vars['SHOWQR']->value == 1) {?>
    <li role="presentation"><a href="#qrcode" aria-controls="qrcode" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['QRCODE']->value;?>
</a></li>
    <?php }?>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content bordered">
    <div role="tabpanel" class="tab-pane active" id="general">
        <div class='container-fluid'>
        <div class='row'>
          <div class='col-md-4'><b><?php echo $_smarty_tpl->tpl_vars['do_not_disturb']->value['LABEL'];?>
:</b></div>
          <div class='col-md-7'><?php echo $_smarty_tpl->tpl_vars['do_not_disturb']->value['INPUT'];?>
</div>
        </div>

        <div class='row'>
          <div class='col-md-4'><b><?php echo $_smarty_tpl->tpl_vars['call_waiting']->value['LABEL'];?>
:</b></div>
          <div class='col-md-7'><?php echo $_smarty_tpl->tpl_vars['call_waiting']->value['INPUT'];?>
</div>
        </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="forward">
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-md-4'><b><?php echo $_smarty_tpl->tpl_vars['call_forward']->value['LABEL'];?>
:</b></div>
                <div class='col-md-7'><?php echo $_smarty_tpl->tpl_vars['call_forward']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['phone_number_CF']->value['INPUT'];?>
</div>
            </div>
            <div class='row'>
                <div class='col-md-4'><b><?php echo $_smarty_tpl->tpl_vars['call_forward_U']->value['LABEL'];?>
:</b></div>
                <div class='col-md-7'><?php echo $_smarty_tpl->tpl_vars['call_forward_U']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['phone_number_CFU']->value['INPUT'];?>
</div>
            </div>
            <div class='row'>
                <div class='col-md-4'><b><?php echo $_smarty_tpl->tpl_vars['call_forward_B']->value['LABEL'];?>
:</b></div>
                <div class='col-md-7'><?php echo $_smarty_tpl->tpl_vars['call_forward_B']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['phone_number_CFB']->value['INPUT'];?>
</div>
            </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="recording">
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-md-4'><b><?php echo $_smarty_tpl->tpl_vars['recording_in_external']->value['LABEL'];?>
:</b></div>
                <div class='col-md-7'><?php echo $_smarty_tpl->tpl_vars['recording_in_external']->value['INPUT'];?>
</div>
            </div>
            <div class='row'>
                <div class='col-md-4'><b><?php echo $_smarty_tpl->tpl_vars['recording_out_external']->value['LABEL'];?>
:</b></div>
                <div class='col-md-7'><?php echo $_smarty_tpl->tpl_vars['recording_out_external']->value['INPUT'];?>
</div>
            </div>
            <div class='row'>
                <div class='col-md-4'><b><?php echo $_smarty_tpl->tpl_vars['recording_in_internal']->value['LABEL'];?>
:</b></div>
                <div class='col-md-7'><?php echo $_smarty_tpl->tpl_vars['recording_in_internal']->value['INPUT'];?>
</div>
            </div>
            <div class='row'>
                <div class='col-md-4'><b><?php echo $_smarty_tpl->tpl_vars['recording_out_internal']->value['LABEL'];?>
:</b></div>
                <div class='col-md-7'><?php echo $_smarty_tpl->tpl_vars['recording_out_internal']->value['INPUT'];?>
</div>
            </div>
            <div class='row'>
                <div class='col-md-4'><b><?php echo $_smarty_tpl->tpl_vars['recording_ondemand']->value['LABEL'];?>
:</b></div>
                <div class='col-md-7'><?php echo $_smarty_tpl->tpl_vars['recording_ondemand']->value['INPUT'];?>
</div>
            </div>
            <div class='row'>
                <div class='col-md-4'><b><?php echo $_smarty_tpl->tpl_vars['recording_priority']->value['LABEL'];?>
:</b></div>
                <div class='col-md-7'>
                    <div style="width:270px">
                        <span id="recording_priority_amount" name="recording_priority_amount" style="border:0; color:#f6931f; font-weight:bold; float: right"><?php echo $_smarty_tpl->tpl_vars['recording_priority_value']->value;?>
</span>
                        <div id="slider" style="width:240px;"></div>
                        <?php echo $_smarty_tpl->tpl_vars['recording_priority']->value['INPUT'];?>

                    </div>    
                </div>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['SHOWQR']->value == 1) {?>
    <div role="tabpanel" class="tab-pane" id="qrcode">
      <form class = "form-horizontal" role = "form">
         <div class = "form-group" style='display:flex;'>
            <label for = "template" class = "col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['BRAND']->value;?>
</label>
            <div class = "col-sm-8">
            <select name=template id=template data-container="body" class='selectpicker'>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATES']->value, 'template');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
              <option value='<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            </div>
         </div>
         <div class = "form-group" style='display:flex;'>
            <label for = "template" class = "col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['ISSABEL_HOST_IP']->value;?>
</label>
            <div class = "col-sm-8">
            <select name=asteriskip data-container="body" id=asteriskip class='selectpickeradd' >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_IP']->value, 'ip');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ip']->value) {
?>
              <option value='<?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <select>
            </div>
         </div>
         <div class = "form-group">
            <div class = "col-sm-12">
               <button id="btngenerate" type = "submit" class = "btn btn-default"><?php echo $_smarty_tpl->tpl_vars['GENERATEQR']->value;?>
</button>
            </div>
         </div>
      </form>
      <img id='imgqrcode' src='' />
    </div>
    <?php }?>

 
  </div>

</div>

<?php }
}
