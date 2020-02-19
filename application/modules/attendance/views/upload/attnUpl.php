<div class="content-wrapper">
    <div class="container-fluid">
    <h3>Manage Attendance Status</h3>
    <hr>
      <div class="card mb-3">
        <div class="card-header">
	  <button class="btn btn-success add-btn" data-toggle="tooltip" data-placement="bottom" title="" 
 		  data-original-title="Apply" onclick="location.href='<?php echo site_url("attendance/addStatus"); ?>';">
	    <i class="fa fa-user-plus fa-lg" aria-hidden="true"></i>New
	  </button>
	</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
		  		  <th>Emp.No.</th>
            <th>Name</th>	
            <th>Year</th>
            <th>Month</th>
            <th>Date</th>
		  		  <th>Status</th>
            <th>Time</th>
            <th>Days</th>
		  		  <th>Option</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
		  		  <th>Emp.No.</th>
            <th>Name</th>
            <th>Year</th>
            <th>Month</th>
            <th>Date</th>
		  		  <th>Status</th>
            <th>Time</th>
            <th>Days</th>
		  		  <th>Option</th>
                </tr>
              </tfoot>
              <tbody>
				<?php if($dtls){
                   	foreach ($dtls as $values):?>
                <tr>
		  			<td><?php echo $values->emp_cd;?></td>
		  			<td><?php echo $values->emp_name;?></td>
            <td><?php echo date('Y',strtotime($values->attn_dt));?></td>
            <td><?php echo date('n',strtotime($values->attn_dt));?></td>
            <td><?php echo date('d/m/Y',strtotime($values->attn_dt));?></td>
		  			<td><?php $stType = $values->status;
			    			if($stType == 'L'){
			    				$stType = 'Late In';
			    			}elseif($stType == 'R'){
			    				$stType = 'Early Out';
			    			}elseif($stType == 'H'){
                  $stType = 'Half';
                }elseif($stType == 'I'){
                  $stType = 'Client Site';
                }elseif($stType == 'C'){
			    				$stType = 'CL';
			    			}elseif($stType == 'E'){
                  $stType = 'EL';
                }elseif($stType == 'M'){
                  $stType = 'ML';
                }elseif($stType == 'W'){
                  $stType = 'LWP';
                }elseif($stType == 'O'){
                  $stType = 'Holiday Half';
                }elseif($stType == 'F'){
                  $stType = 'Holiday Full';
                }
							echo $stType;		   
		       			?>
		  			</td>
            <td><?php echo $values->in_out_time; ?></td>
            <td><?php echo $values->no_of_days; ?></td>
		     <td><button class="btn btn-primary" data-toggle="tooltip" 
                           data-placement="bottom" title="" data-original-title="View" 
                           onclick="location.href='<?php echo site_url("attendance/viewAllstatus?trans_dt=$values->trans_dt&sl_no=$values->sl_no");?>';">
               <i class="fa fa-eye" aria-hidden="true"></i>
          </td>
		</tr>

                <?php
                     endforeach;
                } 
              ?>
	      </tbody>
            </table>
          </div>
      </div>
      <div class="card-footer small text-muted"></div>
      </div>
    </div>
 </div>
 </div>
 </div>
</div>

<script>

    $(document).ready(function() {

    <?php if($this->session->flashdata('msg')){ ?>
	window.alert("<?php echo $this->session->flashdata('msg'); ?>");
    });

    <?php } ?>
</script>
