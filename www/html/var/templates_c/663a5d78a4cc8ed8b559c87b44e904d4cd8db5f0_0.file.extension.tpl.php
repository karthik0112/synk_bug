<?php
/* Smarty version 3.1.33, created on 2022-07-27 02:29:44
  from '/var/www/html/modules/graphic_report/themes/default/extension.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62e0db58e988d8_07517929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '663a5d78a4cc8ed8b559c87b44e904d4cd8db5f0' => 
    array (
      0 => '/var/www/html/modules/graphic_report/themes/default/extension.tpl',
      1 => 1638825550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e0db58e988d8_07517929 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
//var lang = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
";
var chartLabels = "<?php echo $_smarty_tpl->tpl_vars['chartLabels']->value;?>
";
var chartData = "<?php echo $_smarty_tpl->tpl_vars['chartData']->value;?>
";
var chartData2 = "<?php echo $_smarty_tpl->tpl_vars['chartData2']->value;?>
";
var chartType = "<?php echo $_smarty_tpl->tpl_vars['Chart']->value;?>
";
var chartTitle = "<?php echo $_smarty_tpl->tpl_vars['chartTitle']->value;?>
";
var chartTitle2 = "<?php echo $_smarty_tpl->tpl_vars['chartTitle2']->value;?>
";
var noData = "<?php echo $_smarty_tpl->tpl_vars['noData']->value;?>
";
<?php echo '</script'; ?>
>

<div class="chart-container" id=chart align=center>
  <canvas id="myChart" height=60></canvas>
</div>
<div class="chart-container" id=chart2 align=center>
  <canvas id="myChart2" height=60></canvas>
</div>

<div class="text-right">
  <button type="button" class="btn btn-link" id="download-pdf2" onclick="downloadPDF2()">
    <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
    PDF
  </button>
</div>
<?php }
}
