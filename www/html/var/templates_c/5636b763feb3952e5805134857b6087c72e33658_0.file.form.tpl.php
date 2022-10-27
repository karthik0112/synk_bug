<?php
/* Smarty version 3.1.33, created on 2022-06-21 02:00:39
  from '/var/www/html/modules/faxutils/themes/default/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62b15e87e54ad1_88274023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5636b763feb3952e5805134857b6087c72e33658' => 
    array (
      0 => '/var/www/html/modules/faxutils/themes/default/form.tpl',
      1 => 1575121599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b15e87e54ad1_88274023 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="90%"  border="0" cellpadding="6" align="center">
  <tr>
    <td width="200" align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['fax1_img']->value;?>
" align="center">&nbsp;</td>
    <td><table class="tabForm" align="left" width="100%">
          <tr>
            <td><b>JHylaFAX</b><br>
              <?php echo $_smarty_tpl->tpl_vars['fax1_software_description']->value;?>
<br>
              <b><?php echo $_smarty_tpl->tpl_vars['tag_manuf_description']->value;?>
</b><br>
              <i>"<?php echo $_smarty_tpl->tpl_vars['fax1_manufacturer_description']->value;?>
"</i><br>
              <b><?php echo $_smarty_tpl->tpl_vars['download_link']->value;?>
: </b><a href="http://sourceforge.net/project/showfiles.php?group_id=136485">http://sourceforge.net/project/showfiles.php?group_id=136485</a><br>
              <b><?php echo $_smarty_tpl->tpl_vars['tag_manufacturer']->value;?>
:</b> <a href="http://jhylafax.sourceforge.net">JHylaFAX</a><br>
            </td>
          </tr>
        </table>
    </td>
  </tr>
  <tr>
    <td width="200" align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['fax2_img']->value;?>
" align="center">&nbsp;</td>
    <td><table class="tabForm" align="left" width="100%">
          <tr>
            <td><b>Winprint HylaFAX</b><br>
              <?php echo $_smarty_tpl->tpl_vars['fax2_software_description']->value;?>
<br>
              <b><?php echo $_smarty_tpl->tpl_vars['tag_manuf_description']->value;?>
</b><br>
              <i>"<?php echo $_smarty_tpl->tpl_vars['fax2_manufacturer_description']->value;?>
"</i><br>
              <b><?php echo $_smarty_tpl->tpl_vars['download_link']->value;?>
: </b><a href="http://sourceforge.net/project/showfiles.php?group_id=91606">http://sourceforge.net/project/showfiles.php?group_id=91606</a><br>
              <b><?php echo $_smarty_tpl->tpl_vars['tag_manufacturer']->value;?>
:</b> <a href="http://winprinthylafax.sourceforge.net">Winprint Hylafax</a><br>
            </td>
          </tr>
        </table>
    </td>
  </tr>
</table>
<?php }
}
