<div class="content-wrapper">
  <div class="container-fluid">
	<h3>Modify Designation</h3>
	<hr> 
	<form style="max-width:500px;
		     background:#fafafa;
		     padding:30px;
                     box-shadow: 1px 1px 25px rgba(0,0,0,0.35);
                     border-radius:10px;
		     border: 2px solid #305a72"
		class="form-style-9" method="POST" action="<?php echo site_url("payroll/editDesig"); ?>">
	  <ul>
	  <li>
	  	<label for="sl_no" class="field-split align-left labelstyle">Sl.No.</label>
	   
	    <input type="text" name="sl_no" style="width:380px" class="field-style field-split align-left" 
	           value="<?php echo $desig_dtls->sl_no;?>" readonly>
	  </li>	
	  <li></li>
	  <li>
	  	<label for="desig" class="field-split align-left labelstyle">Designation</label>
	    <input type="text" name="desig" style="width:380px" class="field-style field-split align-left" 
	           value="<?php echo $desig_dtls->designation;?>" required>
	  </li>
	  <li></li>
	  <li>
	    <input class="btn btn-primary" title="Save" type="submit" name="submit" value="Save">
	  </li>
	  </ul>
	</form>
  </div>
</div>

