<?php
/* Smarty version 3.1.33, created on 2022-07-18 06:45:52
  from '/var/www/html/modules/monitoring/themes/default/datatables.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62d539e0f2aec6_38713496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '591d1c602dc6a2d71686b2e586e3a7da95ab4dc3' => 
    array (
      0 => '/var/www/html/modules/monitoring/themes/default/datatables.tpl',
      1 => 1638714136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d539e0f2aec6_38713496 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.nopadding {
   padding: 0 !important;
   margin: 0 !important;
}
.table-striped > tbody > tr.selected > td,
.table-striped > tbody > tr.selected > th {
background-color: #522b76;
background-image: linear-gradient(#cccccc, #b3b3b3, #8c8c8c, #737373);
}
</style>

<?php echo '<script'; ?>
>
var cdrs = <?php echo $_smarty_tpl->tpl_vars['CDR']->value;?>
;
var lang = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
";
var DELMSG = "<?php echo $_smarty_tpl->tpl_vars['DELMSG']->value;?>
";
var module = "<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
";
var puedeBorrar = "<?php echo $_smarty_tpl->tpl_vars['puedeBorrar']->value;?>
";
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['customJS']->value;?>

<?php echo '</script'; ?>
>

<style>
        #loader {
            border: 8px solid #f3f3f3;
            border-radius: 50%;
            border-top: 8px solid #522b76;
            width: 30px;
            height: 30px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }

        .center {
            position: relative;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }

.table th, .table td {
        font-size: 90%;
    }

mark {
      background: purple;
      color: white;
}
#myChart{
               background-color:white; 
               }

</style>


</br>
<span id="msgFilter">
    <?php echo $_smarty_tpl->tpl_vars['FILTER_MSG']->value;?>

</span>
</br>
</br>
<table id='CDRreport' class="table table-striped table-bordered table-hover" style="width:100%">
  <thead>
    <tr>
      <th><?php echo $_smarty_tpl->tpl_vars['COLUMNS']->value[0];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['COLUMNS']->value[1];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['COLUMNS']->value[2];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['COLUMNS']->value[3];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['COLUMNS']->value[4];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['COLUMNS']->value[5];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['COLUMNS']->value[6];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['COLUMNS']->value[7];?>
</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
<div id="loader" class="center"></div>

<div class="chart-container" id=chart>
  <canvas id="myChart" height=220></canvas>
</div>

<div class="text-right">
  <button type="button" class="btn btn-link" id="download-pdf2" onclick="downloadPDF2()">
    <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
    PDF
  </button>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
      <div id="single-song-player">
      <span class="close">&times;</span>
      <div class="bottom-container">
        <!-- <progress class="amplitude-song-played-progress" id="song-played-progress"></progress> -->
        <input type="range" class="amplitude-song-slider" data-amplitude-song-index="0"/>

        <div class="time-container">
          <span class="current-time">
            <span class="amplitude-current-minutes"></span>:<span class="amplitude-current-seconds"></span>
          </span>
          <span class="duration">
            <span class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span>
          </span>
        </div>

        <div class="control-container">
          <div class="amplitude-play-pause" id="play-pause"></div>
          <div class="meta-container">
            <span data-amplitude-song-info="name" class="song-name"></span>
            <span data-amplitude-song-info="artist"></span>
          </div>
        </div>
      </div>
    </div>
</div>
<?php }
}
