<div class="content-wrapper">
    <div class="container-fluid">
    <h3>View Leave Applications</h3>
    <hr>
      <div class="card mb-3">
        <div class="card-header">
	  <button class="btn btn-success add-btn" data-toggle="tooltip" data-placement="bottom" title="" 
 		  data-original-title="Apply" onclick="location.href='<?php echo site_url("leave/applyLeave"); ?>';">
	    <i class="fa fa-user-plus fa-lg" aria-hidden="true"></i>Apply
	  </button>
	</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Date</th>
		  		  <th>Application No.</th>
		  		  <th>Type</th>
		  		  <th>Period</th>
		  		  <th>Status</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Date</th>
				  <th>Application No.</th>
				  <th>Type</th>
				  <th>Period</th>
				  <th>Status</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
              <tbody>
		<?php if($data_dtls){

                   foreach ($data_dtls as $values):
	        ?>
                <tr>
					<td><?php   echo date('d/m/Y',strtotime($values->appl_dt));?></td> 
		  			<td><?php   echo $values->appl_no;?></td>
		  			<td><?php $lvtype = $values->leave_type;
							    if($lvtype == 'C'){
							    	$lvtype = 'CL';
							    }elseif($lvtype == 'E'){
							        $lvtype = 'EL';
							    }elseif($lvtype == 'M'){
							    	$lvtype = 'ML';
							    }else{
							    	$lvtype = 'HL';
							    }
					   		    echo $lvtype;		   
						?>
		  			</td>
		  			<td><?php echo date('d/m/Y',strtotime($values->from_dt)).' To '.date('d/m/Y',strtotime($values->to_dt)); ?></td>
				  <td><?php $status=$values->approval_status;
					    if($status == 'U'){
					    	$status = 'Pending For Approval';
					    }elseif($status == 'A'){
					    	$status = 'Approved';
					    }else{
					    	$status = 'Rejected';
					    }
				    	    echo $status;		    
				      ?>
				  </td>

		      <td><button class="btn btn-primary edit-btn" data-toggle="tooltip" 
                       	   data-placement="bottom" title="" data-original-title="Delete Application" 
                           onclick="location.href='<?php if($values->approval_status=='U'){echo site_url("leave/delLeave?appl_dt=$values->appl_dt&appl_no=$values->appl_no");}else{echo site_url("#");}?>';">
		           <i class="fa fa-trash" aria-hidden="true"></i></button>
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
