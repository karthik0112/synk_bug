<?php
/* Smarty version 3.1.33, created on 2022-07-19 00:39:46
  from '/var/www/html/modules/address_book/themes/default/new_adress_book.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62d63592cccd78_70415004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2fa6c6cee0228a286f256de8975a7e59e3346a8' => 
    array (
      0 => '/var/www/html/modules/address_book/themes/default/new_adress_book.tpl',
      1 => 1637331812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d63592cccd78_70415004 (Smarty_Internal_Template $_smarty_tpl) {
?><input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
' />
<input type='hidden' name='type' value='<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
' />

<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <td align="left">
            <?php if ($_smarty_tpl->tpl_vars['Show']->value) {?>
                <input class="button" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;&nbsp;&nbsp;&nbsp;
            <?php } elseif ($_smarty_tpl->tpl_vars['Edit']->value) {?>
                <input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
">&nbsp;&nbsp;&nbsp;&nbsp;
            <?php } elseif ($_smarty_tpl->tpl_vars['Commit']->value) {?>
                <input class="button" type="submit" name="commit" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;&nbsp;&nbsp;&nbsp;
            <?php }?>
            <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
        </td>
	<?php if (($_smarty_tpl->tpl_vars['mode']->value != 'view') && ($_smarty_tpl->tpl_vars['TYPE']->value != 'internal')) {?>
	    <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
	<?php }?>
    </tr>
    <tr>
        <td  colspan='2'>
            <table width="100%" cellpadding="4" cellspacing="0" border="0" class="tabForm">
                <tr class="letra12" <?php echo $_smarty_tpl->tpl_vars['style_address_options']->value;?>
>
                    <td colspan='2'>
                        <input type="radio" name="address_book_options" id="new_contact" value="new_contact" <?php echo $_smarty_tpl->tpl_vars['check_new_contact']->value;?>
 onclick="Activate_Option_Address_Book()" />
                        <?php echo $_smarty_tpl->tpl_vars['new_contact']->value;?>
 &nbsp;&nbsp;&nbsp;
                        <input type="radio" name="address_book_options" id="address_from_csv" value="address_from_csv" <?php echo $_smarty_tpl->tpl_vars['check_csv']->value;?>
 onclick="Activate_Option_Address_Book()" />
                        <?php echo $_smarty_tpl->tpl_vars['address_from_csv']->value;?>

                    </td>
                </tr>
                <tr id="tr_new_contact">
                    <td width="310px" align="center" valign="top">
<br/>
            <?php if ($_smarty_tpl->tpl_vars['ShowImg']->value) {?>
                        <img style='border-radius: 50%;' alt="image" src="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&action=getImage&type=<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
&idPhoto=<?php echo $_smarty_tpl->tpl_vars['idPhoto']->value;?>
&thumbnail=no&rawmode=yes"/>
            <?php } else { ?>
                        <img style='border-radius: 50%;' alt="image" src="modules/<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
/images/Icon-user.png"/>
            <?php }?>
                    </td>
                    <td>
                        <table class="letra12" width="100%" cellpadding="4" cellspacing="0" border="0">                            
                            <tr>
                                <td align="left" width="25%"><b><?php echo $_smarty_tpl->tpl_vars['name']->value['LABEL'];?>
: <?php if (($_smarty_tpl->tpl_vars['mode']->value != 'view') && ($_smarty_tpl->tpl_vars['TYPE']->value != 'internal')) {?><span  class="required">*</span><?php }?></b></td>
                                <td class="required" align="left"><?php echo $_smarty_tpl->tpl_vars['name']->value['INPUT'];?>
</td>
                            </tr>
                            <?php if ($_smarty_tpl->tpl_vars['TYPE']->value == 'external') {?>
                                <tr>
                                    <td align="left" width="25%"><b><?php echo $_smarty_tpl->tpl_vars['last_name']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></b></td>
                                    <td class="required" align="left"><?php echo $_smarty_tpl->tpl_vars['last_name']->value['INPUT'];?>
</td>
                                </tr>
                            <?php }?>
                            <tr id='tr_phone'>
                                <td align="left" width="25%"><b><?php echo $_smarty_tpl->tpl_vars['work_phone']->value['LABEL'];?>
: <?php if (($_smarty_tpl->tpl_vars['mode']->value != 'view') && ($_smarty_tpl->tpl_vars['TYPE']->value != 'internal')) {?><span id="span_phone" class="required">*</span><?php }?></b></td>
                                <td class="required" align="left"><?php echo $_smarty_tpl->tpl_vars['work_phone']->value['INPUT'];?>
</td>             
                            </tr>       
                            <?php if ($_smarty_tpl->tpl_vars['TYPE']->value == 'internal') {?>
                                <tr>
                                    <td align="left" width="25%"><b><?php echo $_smarty_tpl->tpl_vars['department']->value['LABEL'];?>
: </b></td>
                                    <td class="required" align="left"><?php echo $_smarty_tpl->tpl_vars['department']->value['INPUT'];?>
</td>
                                </tr>
                            <?php }?>
                            <tr id='tr_phone'>
                                <td align="left" width="25%"><b><?php echo $_smarty_tpl->tpl_vars['cell_phone']->value['LABEL'];?>
: </b></td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['cell_phone']->value['INPUT'];?>
</td>
                            </tr>
                            <tr id='tr_phone'>
                                <td align="left" width="25%"><b><?php echo $_smarty_tpl->tpl_vars['home_phone']->value['LABEL'];?>
: </b></td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['home_phone']->value['INPUT'];?>
</td>
                            </tr>
                            <tr id='tr_phone'>
                                <td align="left" width="25%"><b><?php echo $_smarty_tpl->tpl_vars['fax1']->value['LABEL'];?>
: </b></td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['fax1']->value['INPUT'];?>
</td>
                            </tr>
                            <tr id='tr_phone'>
                                <td align="left" width="25%"><b><?php echo $_smarty_tpl->tpl_vars['fax2']->value['LABEL'];?>
: </b></td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['fax2']->value['INPUT'];?>
</td>
                            </tr>
                            <tr>
                                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['email']->value['LABEL'];?>
: </b></td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['email']->value['INPUT'];?>
</td>
                            </tr>
                            <?php if ($_smarty_tpl->tpl_vars['TYPE']->value == 'internal') {?>
                                <tr>
                                    <td align="left" width="25%"><b><?php echo $_smarty_tpl->tpl_vars['im']->value['LABEL'];?>
: </b></td>
                                    <td class="required" align="left"><?php echo $_smarty_tpl->tpl_vars['im']->value['INPUT'];?>
</td>
                                </tr>
                            <?php }?>
                            <tr>
                                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['province']->value['LABEL'];?>
: </b></td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['province']->value['INPUT'];?>
</td>
                            </tr>
                            <tr>
                                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['city']->value['LABEL'];?>
: </b></td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['city']->value['INPUT'];?>
</td>
                            </tr>
                            <tr>
                                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['address']->value['LABEL'];?>
: </b></td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['address']->value['INPUT'];?>
</td>
                            </tr>
                            <tr>
                                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['company']->value['LABEL'];?>
: </b></td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['company']->value['INPUT'];?>
</td>
                            </tr>
                            <tr>
                                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['company_contact']->value['LABEL'];?>
: </b></td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['company_contact']->value['INPUT'];?>
</td>
                            </tr>
                            <tr>
                                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['contact_rol']->value['LABEL'];?>
: </b></td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['contact_rol']->value['INPUT'];?>
</td>
                            </tr>
                            <tr>
                                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['notes']->value['LABEL'];?>
: </b></td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['notes']->value['INPUT'];?>
</td>
                            </tr>
                    <?php if (($_smarty_tpl->tpl_vars['EditW']->value || $_smarty_tpl->tpl_vars['Commit']->value || $_smarty_tpl->tpl_vars['Show']->value)) {?>
                            <tr>
                                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['picture']->value['LABEL'];?>
: </b></td>
                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['picture']->value['INPUT'];?>
</td>
                            </tr>
                            <?php if ($_smarty_tpl->tpl_vars['TYPE']->value == 'external') {?>
                                <tr>
                                    <td align="right">
                                        <input type="radio" name="address_book_status" id="isPrivate" value="isPrivate" <?php echo $_smarty_tpl->tpl_vars['check_isPrivate']->value;?>
 />
                                        <?php echo $_smarty_tpl->tpl_vars['private_contact']->value;?>
 &nbsp;&nbsp;&nbsp;
                                    </td>
                                    <td align="left">
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="address_book_status" id="isPublic" value="isPublic" <?php echo $_smarty_tpl->tpl_vars['check_isPublic']->value;?>
 />
                                        <?php echo $_smarty_tpl->tpl_vars['public_contact']->value;?>

                                    </td>
                                </tr> 
                            <?php }?>
                    <?php }?>
                        </table>
                    </td>
                </tr>
                <tr id="tr_from_csv">
                    <td><?php echo $_smarty_tpl->tpl_vars['label_file']->value;?>
&nbsp;(file.csv):<?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></td>
                    <td><input type='file' id='userfile' name='userfile'></td>
                    <td><a href="?menu=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&amp;action=download_csv&amp;rawmode=yes" name="link_download"><?php echo $_smarty_tpl->tpl_vars['DOWNLOAD']->value;?>
</a></td>
                </tr>
            </table>
            <table id="table_from_csv" width="100%" cellpadding="4" cellspacing="0" border="0" class="tabForm">
                <tr>
                    <td colspan='3'><?php echo $_smarty_tpl->tpl_vars['HeaderFile']->value;?>
</td>
                </tr>
                <tr>
                    <td colspan='3'><?php echo $_smarty_tpl->tpl_vars['AboutContacts']->value;?>
</td>
                </tr>
            </table>
        </td>

    </tr>
</table>


    <?php echo '<script'; ?>
 type="text/javascript">
        Activate_Option_Address_Book();

        function Activate_Option_Address_Book()
        {
            var new_contact = document.getElementById('new_contact');
            var address_from_csv = document.getElementById('address_from_csv');
            if(new_contact.checked==true)
            {
                document.getElementById('tr_new_contact').style.display = '';
                document.getElementById('tr_from_csv').style.display = 'none';
                document.getElementById('table_from_csv').style.display = 'none';
            }
            else
            {
                document.getElementById('tr_new_contact').style.display = 'none';
                document.getElementById('tr_from_csv').style.display = '';
                document.getElementById('table_from_csv').style.display = '';
            }
        }
    <?php echo '</script'; ?>
>

<?php }
}
