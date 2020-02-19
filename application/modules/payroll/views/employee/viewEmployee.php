<div class="content-wrapper">
    <div class="container-fluid">
      <h3>Manage Employee Details</h3>
      <hr>
        <div class="card mb-3">
        <div class="card-header">
	    <button class="btn btn-success add-btn" data-toggle="tooltip" data-placement="bottom" 
		    title="" data-original-title="Add New Employee" onclick="location.href='<?php echo site_url("payroll/addEmp"); ?>';">
               <a><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> New </a> 
	    </button>
      <button class="btn btn-success add-btn" data-toggle="tooltip" data-placement="bottom" 
        title="" data-original-title="Upload Employee" onclick="location.href='<?php echo site_url("payroll/uplEmp"); ?>';">
               <a><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> Upload CSV</a> 
      </button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Sl.No.</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Department</th>
                  <th>Date of Joining</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Sl.No.</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Department</th>
                  <th>Date of Joining</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </tfoot>
              <tbody>
              <?php if($data_dtls){
               foreach ($data_dtls as $values):
                ?>
                <tr>
                  <td><?php echo $values->emp_no;?></td>
                  <td><?php echo $values->emp_name;?></td>
                  <td><?php echo $values->designation;?></td>
                  <td><?php echo $values->sector;?></td>
                  <td><?php if($values->date_of_joining > '2002-01-01'){
                               echo date('d/m/Y',strtotime($values->date_of_joining)); 
                            }else{
                                echo "";
                            }   
                  ?></td>            

		  <td><?php echo $values->status_flag?'<span class="badge badge-success">Active</span>':
						      '<span class="badge badge-danger">Inactive</span>';?>
		  </td>
                  <td><button class="btn btn-primary edit-btn" data-toggle="tooltip" data-placement="bottom" title="" 
		       data-original-title="Edit Employee Details" 
		       onclick="location.href='<?php echo site_url("payroll/editEmp?emp_no=$values->emp_no"); ?>'">
		       
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
		      </button>
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




















































