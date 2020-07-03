<script type="text/javascript">
    $(document).ready(function() {
    $('#dataTable').dataTable( {
       "order": [0, "asc"]
    } );
    /*$('#dataTable_filter').hide();
    $('#dataTable_length').hide();
    $('#dataTable_info').hide();
    $('#dataTable_paginate').hide();
    $('#hie').hide();*/
} );

   
  function printClaimDtls() { 
    $('#hie').show();   
  var divToPrint = document.getElementById('divToPrint');

  var WindowObject = window.open('','Print-Window');
        WindowObject.document.open();
        WindowObject.document.writeln('<!DOCTYPE html>');
        WindowObject.document.writeln('<html><head><title></title>');

        WindowObject.document.writeln('<style type="text/css">@media print { .center { text-align: center;} .underline { text-decoration: underline; } p { display:inline; } .left { margin-left: 315px; text-align="left"; display: inline; } .right { margin-right: 375px; display: inline; } td.left_algn { text-align: left; } td.right_algn { text-align: right; } td.hight { hight: 15px; } table.width { width: 100%; } table.noborder { border: 0px solid black; } th.noborder { border: 0px solid black; } .border { border: 1px solid black; } .bottom { position: absolute; bottom: 5px; width: 100%; } .tValHide { display:none; } } </style>');
       
        WindowObject.document.writeln('</head><body onload="window.print()">');
        WindowObject.document.writeln(divToPrint.innerHTML);
        WindowObject.document.writeln('</body></html>');
        WindowObject.document.close();
        $('#hie').hide();
        setTimeout(function(){WindowObject.close();},10);
    }
</script>
<div id="divToPrint">
  <div class="content-wrapper">
    <div class="container-fluid">
      <h3 style="text-align: center;">SYNERGIC SOFTEK SOLUTIONS PVT. LTD.</h3>
      <h4 style="text-align: center;">55 D, DESAPRAN SASHMAL ROAD</h4>
      <h5 style="text-align: center;">KOLKATA-33</h5>
      <h3 style="text-align: center;">Employee Leave Balance As On : <?php echo date('d/m/Y',strtotime($date[0]));?></h3>

      
        <hr>
        <div class="card-body">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Employee Code</th>
                  <th>Name</th>
                  <th>CL</th>
                  <th>EL</th>
                  <th>ML</th>
                  <th>HL</th>
                  <th>LWP</th> 
                </tr>
              </thead>
              <tbody>
              <?php
               if($lvBalance){
                foreach ($lvBalance as $aldta){?>
                <tr>
                  <th><?php echo $aldta->emp_no;?></th>
                  <?php foreach ($emp_dtls as $key){
                    if ($key->emp_no == $aldta->emp_no) {
                    ?>
                    <th><?php echo $key->emp_name;?></th>
                    <th><?php echo $aldta->cl;?></th>
                    <th><?php echo $aldta->el;?></th>
                    <th><?php echo $aldta->ml;?></th>
                    <th><?php echo $aldta->hl;?></th>
                    <th><?php echo $aldta->lwp;?></th>
                </tr>
                  <?php
                        }
                        }
                  } 
                }
              ?>
              </tbody>
            </table>
      </div>
    </div>
      <div class="card-footer">
        <button class="btn print-btn tValHide" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Print" style="width: 95px;" id="" onclick="printClaimDtls();"><i class="fa fa-print fa-lg" aria-hidden="true"></i></button>
                
        <a data-toggle="tooltip" data-original-title="Save As Excel" class="btn btn-lg btn-success" href="<?php echo site_url('leave/print_bal_xlsx');?>">
        	<span class="fa-stack fa-lg">
        			<i class="fa fa-file-excel-o fa-stack-1x" aria-hidden="true"></i>
        	</span>
        </a>

      </div>
  </div>
</div>

    