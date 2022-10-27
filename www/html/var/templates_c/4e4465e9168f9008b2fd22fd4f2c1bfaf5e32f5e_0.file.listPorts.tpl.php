<?php
/* Smarty version 3.1.33, created on 2022-06-22 00:50:15
  from '/var/www/html/modules/hardware_detector/themes/default/listPorts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62b29f8729f610_38335975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e4465e9168f9008b2fd22fd4f2c1bfaf5e32f5e' => 
    array (
      0 => '/var/www/html/modules/hardware_detector/themes/default/listPorts.tpl',
      1 => 1637330690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b29f8729f610_38335975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/usr/share/php/Smarty/plugins/function.counter.php','function'=>'smarty_function_counter',),));
?>
<table width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" align="center" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="3" style="padding: 10px 10px 5px 10px;">
            <input type='button' name='submit_harware_detect' value='<?php echo $_smarty_tpl->tpl_vars['HARDWARE_DETECT']->value;?>
'  onclick="detectar()" class='button' />
        </td>
    </tr>
    <tr class="filterForm">
	<?php if ($_smarty_tpl->tpl_vars['THEMENAME']->value == "elastixneo") {?>
        <td class="filterForm" width="450px" valign="top" align="left" style="padding: 2px 2px 2px 30px; border:none;">
	<?php } else { ?>
	<td class="filterForm" width="450px" valign="top" align="left" style="padding: 2px 2px 2px 30px;">
	<?php }?>
            <table border="0">
                <tr>
                    <td><input type="checkbox" name="chkAdvance" id="chkAdvance" />&nbsp; <b><?php echo $_smarty_tpl->tpl_vars['Advanced']->value;?>
</b></td>
                </tr>
                <tr>
                    <td class="filterForm2 secAdv" id="secAdvance">
                        <div id="optionsAdvance" style="visibility: hidden;">
                            <input type='checkbox' name='chk_dahdi_replace' id='chk_dahdi_replace' />&nbsp; <b><?php echo $_smarty_tpl->tpl_vars['CHAN_DAHDI_REPLACE']->value;?>
</b> &nbsp;&nbsp;&nbsp;&nbsp;<br />
                            <input type='checkbox' name='chk_there_is_sangoma' id='chk_there_is_sangoma' />&nbsp; <b><?php echo $_smarty_tpl->tpl_vars['DETECT_SANGOMA']->value;?>
</b> &nbsp;&nbsp;&nbsp;&nbsp;<br/>
                            <?php if ($_smarty_tpl->tpl_vars['isInstalled_mISDN']->value == 0) {?>
                                <input type='checkbox' name='chk_misdn_hardware' id='chk_misdn_hardware'  disabled='disabled' />&nbsp; <?php echo $_smarty_tpl->tpl_vars['DETECT_mISDN']->value;?>
 <font color="#0043EC">(<?php echo $_smarty_tpl->tpl_vars['MSG_isInstalled_mISDN']->value;?>
)</font>
                            <?php } else { ?>
                                <input type='checkbox' name='chk_misdn_hardware' id='chk_misdn_hardware'  />&nbsp; <b><?php echo $_smarty_tpl->tpl_vars['DETECT_mISDN']->value;?>
</b> <font color="#00CC00">(<?php echo $_smarty_tpl->tpl_vars['MSG_isInstalled_mISDN']->value;?>
)</font>
                            <?php }?>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
	<?php if ($_smarty_tpl->tpl_vars['THEMENAME']->value == "elastixneo") {?>
        <td class="filterForm" align="center" style="border:none;">
	<?php } else { ?>
	 <td class="filterForm" align="center">
	<?php }?>
            <div class='hourglass' style="display:none" id='relojArena'>
                <img src='images/hourglass.gif' align='absmiddle' /> 
                <font style='font-size:12px; color:red'><?php echo $_smarty_tpl->tpl_vars['detectandoHardware']->value;?>
...</font>
            </div>
        </td>
	<?php if ($_smarty_tpl->tpl_vars['THEMENAME']->value == "elastixneo") {?>
        <td class="filterForm" valign="middle" width="300px" align="right" style="border:none;">
	<?php } else { ?>
	<td class="filterForm" valign="middle" width="300px" align="right">
	<?php }?>
            <fieldset class="fielform">
                <legend class="sombreado"><?php echo $_smarty_tpl->tpl_vars['Status_ports']->value;?>
</legend>
                <table border="0" align="left">
                    <tr>
                        <td><img src='modules/<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
/images/conn_alarm_icon.png' align='absmiddle' /></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Channel_detected_notused']->value;?>
</td>
                    </tr>
                    <tr>
                        <td><img src='modules/<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
/images/conn_ok_icon.png' align='absmiddle' /></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Channel_detected_use']->value;?>
</td>
                    </tr>
                    <tr>
                        <td><img src='modules/<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
/images/conn_unkown_icon.png' align='absmiddle' /></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Undetected_Channel']->value;?>
</td>
                    </tr>
                    <tr>
                        <td align="center"><img src='modules/<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
/images/conn_empty_icon.png' align='absmiddle' /></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['CHANNELS_EMPTY']->value;?>
</td>
                    </tr>
                    <tr>
                        <td align="center"><b>HC</b></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['HARDWARE_CONTROL']->value;?>
</td>
                    </tr>
                </table>
            </fieldset>
        </td>
    </tr>
  <tr>
    <td colspan="3">
<!-- cards -->
      <table border ='0' align="left" cellspacing="0" cellpadding="0" width="100%">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrData']->value, 'data', false, 'k', 'filas', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['data']->value['DESC']['TIPO'] != $_smarty_tpl->tpl_vars['CARD_NO_MOSTRAR']->value) {?>
                <tr>
                    <td>
                        <fieldset class="fielformSpam">
                            <legend id="<?php echo $_smarty_tpl->tpl_vars['data']->value['DESC']['ID'];?>
" class="sombreado"><?php echo $_smarty_tpl->tpl_vars['CARD']->value;?>
 # <?php echo $_smarty_tpl->tpl_vars['data']->value['DESC']['ID'];?>
: <?php echo $_smarty_tpl->tpl_vars['data']->value['DESC']['TIPO'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['DESC']['ADICIONAL'];?>
 </legend>
                            <table border ='0' align="left" cellspacing="0" cellpadding="3" width="100%">
                                <tr>
                                    <td class="textConf" width="25%" style="background-color:#EFEFEF">
                                        <div valign="middle">
                                            <div><?php echo $_smarty_tpl->tpl_vars['SET_PARAMETERS_PORTS']->value;?>
.</div>
                                            <div align="center"><a id="confSPAN<?php echo $_smarty_tpl->tpl_vars['data']->value['DESC']['ID'];?>
" class="confSPAN"><?php echo $_smarty_tpl->tpl_vars['Configuration_Span']->value;?>
</a></div>
                                            <?php if ($_smarty_tpl->tpl_vars['data']->value['DESC']['MEDIA'] == "PRI") {?>
                                            <div align="center"><a id="paramSPAN<?php echo $_smarty_tpl->tpl_vars['data']->value['DESC']['ID'];?>
"   class="confSPAN"><?php echo $_smarty_tpl->tpl_vars['Parameters_Span']->value;?>
</a></div>
                                            <?php }?>
                                        </div>
                                    </td>
                                    <td width="5px"></td> <!-- Espàcio -->
                                    <td align="right" style="background-color:#EFEFEF">
                                        <table border ='0' align="right" cellspacing="0" cellpadding="0">
                                            <tr> 
                                                <td colspan="4">
                                                <table border ='0' align="center" cellspacing="0" cellpadding="0" class="table_title_row">
                                                    <?php if ($_smarty_tpl->tpl_vars['data']->value['PUERTOS']) {?>
                                                        <?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'print'=>false,'assign'=>'cnt'),$_smarty_tpl);?>

                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['PUERTOS'], 'puerto', false, 'q', 'filasPuerto', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['q']->value => $_smarty_tpl->tpl_vars['puerto']->value) {
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['cnt']->value%12 == 0) {?>
                                                                    <tr>
                                                                <?php }?>
                                                                        <td>
                                                                            <table style='border:1px #CCCCCC solid;padding:1px;background-color:white;' border='0' callpadding='0' cellspacing='0' onMouseOver="this.style.backgroundColor='#f2f2f2';" onMouseOut="this.style.backgroundColor='#ffffff';">
                                                                                <tr><td  align='center' style='font-size:11px;background-image:url(modules/hardware_detector/images/<?php echo $_smarty_tpl->tpl_vars['puerto']->value['ESTADO_DAHDI'];?>
);height:64px;width:68px;background-repeat:no-repeat;vertical-align:top'><p><br /><?php echo $_smarty_tpl->tpl_vars['puerto']->value['TIPO'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['puerto']->value['LOCALIDAD'];?>
 </p></td></tr>
                                                                                <tr><td  align='center' style='width:68px;height:28px;font-size:11px;color:<?php echo $_smarty_tpl->tpl_vars['puerto']->value['ESTADO_ASTERISK_COLOR'];?>
'><?php echo $_smarty_tpl->tpl_vars['puerto']->value['ESTADO_ASTERISK'];?>
</td></tr>
                                                                            </table>
                                                                        </td>
                                                                <?php if (($_smarty_tpl->tpl_vars['cnt']->value+1)%12 == 0) {?>
                                                                    </tr>
                                                                <?php }?>
                                                                <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php } else { ?>
                                                        <tr>
                                                            <td style='border:1px #CCCCCC solid;padding:1px;background-color:white'><?php echo $_smarty_tpl->tpl_vars['PORT_NOT_FOUND']->value;?>
</td>
                                                        </tr>
                                                    <?php }?>
                                                </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </td>
                </tr>
            <?php }?>
            <tr>
                <td height='8'></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
      </table>
    </td>
  </tr>
  <tr>
<!-- cards MISDN -->
    <td class="table_navigation_row" colspan="3">
      <?php if ($_smarty_tpl->tpl_vars['arrMisdn']->value != "noMISDN") {?>
      <table border ='0' align="left" cellspacing="0" cellpadding="0" >
        <tr>
          <td style='border:1px #CCCCCC solid' align='center' class="moduleTitle"><?php echo $_smarty_tpl->tpl_vars['CARD_MISDN']->value;?>
</td>
        </tr>
        <tr> 
          <td>
            <table border ='0' align="center" cellspacing="0" cellpadding="0" class="table_title_row" width='100%'>
            <tr>
                 <td style='border:1px #CCCCCC solid;padding:1px;background-color:white;font-size:10;'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrMisdn']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
echo $_smarty_tpl->tpl_vars['info']->value;?>
<br/><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                 </td>
            </tr>
            </table>
         </td>
        </tr>
      </table>
      <?php }?>
    </td>
  </tr>
</table>
<center><h3 style='color:#990033;font-size:14px'><?php echo $_smarty_tpl->tpl_vars['CARDS_NOT_FOUNDS']->value;?>
</h3></center>




<input class="button" type="hidden" id="labelNoPorts" name="labelNoPorts" value="<?php echo $_smarty_tpl->tpl_vars['NoPorts']->value;?>
" />
<input class="button" type="hidden" name="lblLoading" value="<?php echo $_smarty_tpl->tpl_vars['LBL_LOADING']->value;?>
" id="lblLoading">
<input class="button" type="hidden" name="lblLoading" value="<?php echo $_smarty_tpl->tpl_vars['LBL_SAVING']->value;?>
"  id="lblSaving">
<input class="button" type="hidden" name="lblLoading" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"  id="lblModule">
<?php }
}
