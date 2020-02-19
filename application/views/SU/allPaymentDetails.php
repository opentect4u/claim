<script type="text/javascript">
  $(document).ready(function() {
    $('#dataTable').DataTable( {
       "order": [[ 0, "desc" ],[ 1, "desc" ]]
    } );
    $('#dataTable_filter').hide();
    $('#dataTable_length').hide();
    $('#dataTable_info').hide();
    $('#dataTable_paginate').hide();
} );

  function printClaimDtls() {    
  var divToPrint = document.getElementById('divToPrint');
  var WindowObject = window.open('','Print-Window');
        WindowObject.document.open();
        WindowObject.document.writeln('<!DOCTYPE html>');
        WindowObject.document.writeln('<html><head><title></title>');

        WindowObject.document.writeln('<style type="text/css">@media print { .center { text-align: center;} .underline { text-decoration: underline; } p { display:inline; } .left { margin-left: 315px; text-align="left"; display: inline; } .right { margin-right: 375px; display: inline; } td.left_algn { text-align: left; } td.right_algn { text-align: right; } td.hight { hight: 15px; } table.width { width: 100%; } table.noborder { border: 0px solid black; } th.noborder { border: 0px solid black; } .border { border: 1px solid black; } .bottom { position: absolute; bottom: 5px; width: 100%; } .tValHide { display:none; } } </style>');
       // WindowObject.document.writeln('<style type="text/css">@media print{p { color: blue; }}');
        WindowObject.document.writeln('</head><body onload="window.print()">');
        WindowObject.document.writeln(divToPrint.innerHTML);
        WindowObject.document.writeln('</body></html>');
        WindowObject.document.close();
        setTimeout(function(){WindowObject.close();},10);
    }
</script>

	<div class="content-wrapper">
    	<div class="container-fluid">
      <div id="divToPrint">        
    		<h3 style="text-align: center;">SYNERGIC SOFTEK SOLUTIONS PVT. LTD.</h3>
    		<h4 style="text-align: center;">55 D, DESAPRAN SASHMAL ROAD</h4>
    		<h5 style="text-align: center;">KOLKATA-33</h5>
    		<h5 style="text-align: center;">Payment details for the period of <?php echo date('d/m/Y', strtotime($date->from_date)).' to '.date('d/m/Y', strtotime($date->to_date));?></h5>
    		<hr>
    		<?php
         $grant_total = 0.00;
        if ($alldata && $emp_dtls && $date) {
          for ($i=0; $i < sizeof($alldata); $i++) { 
    			foreach ($emp_dtls as $alldta) {
            if ($alldata[$i][0]->emp_no == $alldta->emp_no) {
    		?>
    		<div style="margin-left: 20px; color: #1a719e;">
  				<strong>Employee Name : <?php echo $alldta->emp_name;?><?php }}?></strong> <br style="line-height: 28px;">
  			</div>
			<hr>
	    	<div class="card">
	          	<div class="table">
		           	<table class="table table-bordered width" id="dataTable" cellpadding="4">
	              		<thead>
	                		<tr>
			                	<th>Date</th>
			                  <th>Amount Received</th>
			                  <th>Payment Mode</th>
			                  <th>Cheque No</th>
			                  <th>Cheque Date</th>
	                		</tr>
	              		</thead>
	              		<tbody>
	              			<?php if($alldata){
	              				$total_amt = 0.00;
                        for ($j=0; $j < sizeof($alldata[$i]); $j++) { 
			                ?>
			                <tr>
			                  	<td class="center"><?php echo date('d/m/Y',strtotime($alldata[$i][$j]->trans_dt));?></td>
			                  	<td style="text-align:right;"><?php echo $alldata[$i][$j]->paid_amt;?></td>
			                  	<td class="center"><?php echo $alldata[$i][$j]->payment_mode;?></td>
			                  	<td class="center"><?php echo $alldata[$i][$j]->chq_no;?></td>   
			                  	<td class="center"><?php echo $alldata[$i][$j]->chq_dt;?></td>
			                </tr>
			                <?php
                        $grant_total += $alldata[$i][$j]->paid_amt;
			                	$total_amt += $alldata[$i][$j]->paid_amt;
                        }
			                } 
                      else{
                        $total_amt = 0;
                      }
			                ?>
	             	 	</tbody>
		            </table>
		            <hr>
		            <h3 style="margin-left:200px;">Total : <?php echo $total_amt;?></h3>
	          	</div>
              <hr>
              <?php
              }
            }
          ?>
          <br>
          <h2>Grand Total: <?php echo $grant_total;?></h2>
	      			<div class="card-footer">
        				<button class="btn print-btn tValHide" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Print" style="width: 95px;" id="" onclick="printClaimDtls();"><i class="fa fa-print fa-lg" aria-hidden="true"></i></button>
        			</div>
    		</div>
    	</div>
	</div>
</div>
