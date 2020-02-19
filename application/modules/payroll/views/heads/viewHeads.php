<div class="content-wrapper">
    <div class="container-fluid">
    <h3>Manage Earnings & Deductions</h3>
    <hr>
      <div class="card mb-3">
        <div class="card-header">
	 <button class="btn btn-success add-btn" data-toggle="tooltip" data-placement="bottom" title="" 
 		  data-original-title="Add New Head" onclick="location.href='<?php echo site_url("payroll/addEdh"); ?>';">
	    <i class="fa fa-user-plus fa-lg" aria-hidden="true"></i>New
	  </button>
	</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Sl.No.</th>
		  <th>Description</th>
		  <th>Type</th>
                  <th></th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Sl.No.</th>
		  <th>Description</th>
		  <th>Type</th>
                  <th></th>
                </tr>
              </tfoot>
              <tbody>
              <?php if($data_dtls){
                foreach ($data_dtls as $values):
	            ?>
                <tr>
                  <td><?php echo $values->sl_no;?></td>
		  <td><?php echo $values->ed_desc;?></td>
		  <td><?php echo ($values->ed_type=='E')?"Earning":"Deduction";?></td>
		              <td><button class="btn btn-primary edit-btn" data-toggle="tooltip" 
                       data-placement="bottom" title="" data-original-title="Edit" 
                       onclick="location.href='<?php echo site_url("payroll/editEdh?sl_no=$values->sl_no");?>';">
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
