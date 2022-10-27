<?php
/* Smarty version 3.1.33, created on 2022-06-21 02:00:37
  from '/var/www/html/modules/sphones/themes/default/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62b15e859e20a8_21792775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e370f660cd13bffebb121b817b5fa83367c3f2cc' => 
    array (
      0 => '/var/www/html/modules/sphones/themes/default/form.tpl',
      1 => 1575121599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b15e859e20a8_21792775 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="90%"  border="0" cellpadding="10" align="center">
  <tr>
    <td width="200" align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['xlite_img']->value;?>
" align="center">&nbsp;</td>
    <td><table class="tabForm" align="left" width="100%">
          <tr>
            <td><b>X-Lite</b><br>
              <?php echo $_smarty_tpl->tpl_vars['xlite_software_description']->value;?>
<br>
              <b><?php echo $_smarty_tpl->tpl_vars['tag_manuf_description']->value;?>
</b><br>
              <i>"<?php echo $_smarty_tpl->tpl_vars['xlite_manufacturer_description']->value;?>
"</i><br>
              <b><?php echo $_smarty_tpl->tpl_vars['download_link']->value;?>
: </b><a href="http://www.counterpath.com/x-lite-download.html">http://www.counterpath.com/x-lite-download.html</a><br>
              <b><?php echo $_smarty_tpl->tpl_vars['tag_manufacturer']->value;?>
:</b> <a href="http://www.counterpath.com/">CounterPath</a><br>
            </td>
          </tr>
        </table>
    </td>
  </tr>
  <tr>
    <td width="200" align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['zoiper_img']->value;?>
" align="center" width="290" height="209">&nbsp;</td>
    <td><table class="tabForm" align="left" width="100%">
          <tr>
            <td><b>ZoIPer</b><br>
              <?php echo $_smarty_tpl->tpl_vars['zoiper_software_description']->value;?>
<br>
              <b><?php echo $_smarty_tpl->tpl_vars['tag_manuf_description']->value;?>
</b><br>
              <i>"<?php echo $_smarty_tpl->tpl_vars['zoiper_manufacturer_description']->value;?>
"</i><br>
              <b><?php echo $_smarty_tpl->tpl_vars['download_link']->value;?>
: </b><a href="http://www.zoiper.com/download_list.php?os=All">http://www.zoiper.com/download_list.php?os=All</a><br>
              <b><?php echo $_smarty_tpl->tpl_vars['tag_manufacturer']->value;?>
:</b> <a href="http://www.zoiper.com/">Zoiper's Official Web</a><br>
            </td>
          </tr>
        </table>
    </td>
  </tr>
</table>
<?php }
}
