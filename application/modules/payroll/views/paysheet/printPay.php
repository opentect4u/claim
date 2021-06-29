<script>
  function printDiv() {    
  var divToPrint=document.getElementById('divToPrint');

  var WindowObject=window.open('','Print-Window');
        WindowObject.document.open();
        WindowObject.document.writeln('<!DOCTYPE html>');
        WindowObject.document.writeln('<html><head><title></title><style type="text/css">');


        WindowObject.document.writeln('@media print { .center { text-align: center;} .underline { text-decoration: underline; } p { display:inline; } .left { margin-left: 315px; text-align="left" display: inline; } .right { margin-right: 375px; display: inline; } td.left_algn { text-align: left; } td.right_algn { text-align: right; } .t2 td, th { border: 1px solid black; } td.hight { hight: 15px; } table.width { width: 100%; } table.noborder { border: 0px solid black; } th.noborder { border: 0px solid black; } .border { border: 1px solid black; } .bottom { position: absolute;; bottom: 5px; width: 100%; } } </style>');
       // WindowObject.document.writeln('<style type="text/css">@media print{p { color: blue; }}');
        WindowObject.document.writeln('</head><body onload="window.print()">');
        WindowObject.document.writeln(divToPrint.innerHTML);
        WindowObject.document.writeln('</body></html>');
        WindowObject.document.close();
        setTimeout(function(){WindowObject.close();},10);
    } 
</script>

<?php
    function getIndianCurrency($number)
    {
      $decimal = round($number - ($no = floor($number)), 2) * 100;
      $hundred = null;
      $digits_length = strlen($no);
      $i = 0;
      $str = array();
      $words = array(0 => '', 1 => 'One', 2 => 'Two',
          3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
          7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
          10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
          13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
          16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
          19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
          40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
          70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
      $digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
      while( $i < $digits_length ) {
          $divider = ($i == 2) ? 10 : 100;
          $number = floor($no % $divider);
          $no = floor($no / $divider);
          $i += $divider == 10 ? 1 : 2;
          if ($number) {
              $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
              $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
              $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
          } else $str[] = null;
      }
      $Rupees = implode('', array_reverse($str));
      $paise = ($decimal) ? "and " . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
      return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise .' Only.';
    }
 ?>

<div class="content-wrapper">

    <div class="container-fluid">

    	<div id="divToPrint">

	    	<div style="text-align:center;">

                <h3>Synergic Softek Solutions Pvt.Ltd.</h3>

                <h5><span>Acropolis, Module 7/18</span> <br>
					<span>1858/1 Rajdanga Main Road</span>
					<span>Kolkata-107</span><h5>
				<h4><?php echo $emp_dtls->emp_name; ?></h4>

				<h5>Pay Slip for <?php echo date('F',strtotime("2012-$data_dtls->sal_month-01")).' - '.
				    							 			   $data_dtls->sal_year; ?></h5>

            </div>
			
			<div class="card-body">

	          <div class="table-responsive">
<hr>
	          	<table class="width noborder" cellpadding="3.5">

	                <tr>
	                    <th class="noborder" width="15%"></th>
	                    <th class="noborder" width="1%"></th>
	                    <th class="noborder" width="25%"></th>
	                    <th class="noborder" width="1%"></th>
	                    <th class="noborder" width="15%"></th>
	                    <th class="noborder" width="45%"></th>
	                </tr>

	                <tr>
	                    <td>Employee No.</td>
	                    <td class="left_algn">:</td>
	                    <td class="left_algn"> <?php echo $emp_dtls->emp_no; ?></td>
	                    <td></td>
	                    <td >PAN No.</td>
	                    <td class="left_algn">: <?php echo $emp_dtls->pan_no; ?></td>

	                </tr>

	                <tr>

	                    <td>Department</td>
	                    <td class="left_algn">:</td>
	                    <td class="left_algn"> <?php echo $emp_dtls->sector; ?></td>
	                    <td></td>
	                    <td>Bank A/C No.</td>
	                    <td class="left_algn">: <?php echo $emp_dtls->bank_ac_no; ?></td>

	                </tr>

	                <tr>
	                    <td>Designation</td>
	                    <td class="left_algn">:</td>
	                    <td class="left_algn"> <?php echo $emp_dtls->designation; ?></td>
	                    <td></td>
	                    <td>PF A/C No.</td>
	                    <td class="left_algn">: <?php echo $emp_dtls->pf_ac_no; ?></td>

	                </tr>

	                <tr>

	                    <td>Date of Joining</td>
	                    <td class="left_algn">:</td>
	                    <td class="left_algn"> <?php if (isset($emp_dtls->date_of_joining)){ echo date( 'd/m/Y', strtotime($emp_dtls->date_of_joining)); } ?></td>
	                    <td></td>
	                    <td>ESI No.</td>
	                    <td class="left_algn">: <?php echo $emp_dtls->esi_no; ?></td>

	                </tr>
	            </table>   
				<hr>

	            <table class="width" cellpadding="6" style="width:100%; ">

	                <thead>

	                    <tr class="t2">
	                        <th width="30%">Earnings</th>
	                        <th width="20%">Amount</th>
	                        <th width="30%">Deductions</th>
	                        <th width="20%">Amount</th>
	                    </tr>

	                </thead>

	                <tbody> 

	                    <tr class="t2">
	                        <td class="left_algn">Basic</td>
	                        <td class="right_algn"><?php echo $data_dtls->basic_sal; ?></td>
	                        <td class="left_algn">Prof.Tax</td>
	                        <td class="right_algn"><?php echo $data_dtls->ptax_amt; ?></td>
	                    </tr>

	                    <tr class="t2">
	                        <td class="left_algn">DA</td>
	                        <td class="right_algn"><?php echo $data_dtls->da_amt; ?></td>
	                        <td class="left_algn">EPF</td>
	                        <td class="right_algn"><?php echo $data_dtls->epf_amt; ?></td>
	                    </tr>

	                    <tr class="t2">
	                        <td class="left_algn">HRA</td>
	                        <td class="right_algn"><?php echo $data_dtls->hra_amt; ?></td>
	                        <td class="left_algn">Loan/Misc Deduction</td>
	                        <td class="right_algn"><?php echo $data_dtls->adv_amt; ?></td>
	                    </tr>

	                    <tr class="t2">
	                        <td class="left_algn">Project Allowance</td>
	                        <td class="right_algn"><?php echo $data_dtls->proj_amt; ?></td>
	                        <td class="left_algn">TDS</td>
	                        <td class="right_algn"><?php echo $data_dtls->tds_amt; ?></td>

	                    </tr>

	                    <tr class="t2">
	                        <td class="left_algn">Medical Allowance</td>
	                        <td class="right_algn"><?php echo $data_dtls->med_amt; ?></td>
	                        <td class="left_algn">Total Deduction</td>
	                        <td class="right_algn"><?php echo $data_dtls->tot_ded; ?></td>

	                    </tr>

	                    <tr class="t2">
	                        <td class="left_algn">LTA</td>
	                        <td class="right_algn"><?php echo $data_dtls->lta_amt; ?></td>
	                        <!--<td class="left_algn">Mobile Charges</td>
	                        <td class="right_algn"><?php //echo $data_dtls->mob_amt; ?></td>-->

	                    </tr>


	                    <!--<tr class="t2">
	                        <td class="left_algn">Misc.Allowance</td>
	                        <td class="right_algn"><?php //echo $data_dtls->misc_amt; ?></td>
	                        <td class="left_algn">P-TAX</td>
	                        <td class="right_algn"><?php //echo $data_dtls->ptax_amt; ?></td>

	                    </tr>-->

	                    <tr class="t2">
	                        <td class="left_algn">Convence Allowance</td>
	                        <td class="right_algn"><?php echo $data_dtls->conv_allow; ?></td>
	                        <td class="left_algn">Net Salary</td>
	                        <td class="right_algn"><?php echo $data_dtls->net_amt; ?></td>

	                    </tr>

	                    <tr class="t2">
	                        <td class="left_algn">Gross Salary</td>
	                        <td class="right_algn"><?php echo $data_dtls->gross_sal; ?></td>
	                        <td></td><td></td>
	                        

	                    </tr>

	                    <tr class="t2">
	                        <td class="left_algn">Outstation Allowance/Incentive</td>
	                        <td class="right_algn"><?php echo $data_dtls->out_alw; ?></td>
	                        <td></td><td></td>
	                        

	                    </tr>

	                    <tr class="t2">
	                        <td class="left_algn">Total Salary</td>
	                        <td class="right_algn"><?php echo $data_dtls->tot_sal; ?></td>

	                        <td></td><td></td>

	                    </tr>

	                    <!--<tr class="t2">
	                        <td class="left_algn">Total Earnings</td>
	                        <td class="right_algn"><?php //echo $data_dtls->tot_ear; ?></td>
	                        <td class="left_algn">Total Deductions</td>
	                        <td class="right_algn"><?php //echo $data_dtls->tot_ded; ?></td>
	                    </tr>-->

	                </tbody>

	            </table>

	            <div>
	            	<hr>
	            	<strong>Net Amount: <?php echo $data_dtls->net_amt; ?> ( <font size="4.5"><?php echo getIndianCurrency($data_dtls->net_amt);?></font>)</strong>

	            </div>
                  
			  </div>

			</div>

		</div>	

		 <div style="text-align: center;">

	      <button class="btn btn-primary" type="button" onclick="printDiv();">Print</button>

	    </div>

	</div>

</div>


