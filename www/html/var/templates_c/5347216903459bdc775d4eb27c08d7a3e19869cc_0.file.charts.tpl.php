<?php
/* Smarty version 3.1.33, created on 2022-07-08 01:24:46
  from '/var/www/html/modules/channelusage/themes/default/charts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62c7bf9e84b3b5_84092910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5347216903459bdc775d4eb27c08d7a3e19869cc' => 
    array (
      0 => '/var/www/html/modules/channelusage/themes/default/charts.tpl',
      1 => 1638825550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c7bf9e84b3b5_84092910 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
var hours = <?php echo $_smarty_tpl->tpl_vars['hoursJSON']->value;?>
;
//var lang = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
";
var total = <?php echo $_smarty_tpl->tpl_vars['totalJSON']->value;?>
;
var dahdi = <?php echo $_smarty_tpl->tpl_vars['dahdiJSON']->value;?>
;
var sip = <?php echo $_smarty_tpl->tpl_vars['sipJSON']->value;?>
;
var iax = <?php echo $_smarty_tpl->tpl_vars['iaxJSON']->value;?>
;
var h323 = <?php echo $_smarty_tpl->tpl_vars['h323JSON']->value;?>
;
var local = <?php echo $_smarty_tpl->tpl_vars['localJSON']->value;?>
;
var localtz = "<?php echo $_smarty_tpl->tpl_vars['timezone']->value;?>
";
<?php echo '</script'; ?>
>

<div class="chart-container" id=chart>
  <canvas id="myChart" height=420></canvas>
</div>

<div class="text-right">
  <button type="button" class="btn btn-link" id="download-pdf2" onclick="downloadPDF2()">
    <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
    PDF
  </button>
</div>
<?php }
}
