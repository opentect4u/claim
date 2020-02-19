<div class="content-wrapper">
  <div class="container-fluid">
	<h3>Add New Designation</h3>
	<hr> 
	<form style="max-width:500px;
		     background:#fafafa;
		     padding:30px;
                     box-shadow: 1px 1px 25px rgba(0,0,0,0.35);
                     border-radius:10px;
		     border: 2px solid #305a72"
		class="form-style-9" method="POST" action="<?php echo site_url("payroll/addDesig"); ?>">
	  <ul>
	  <li> 
	    <input type="text" name="desig" style="width:380px" class="field-style field-split align-left" placeholder="Designation Name" required>
	  </li>
	  
	  <li>
	    <input class="btn btn-primary" title="Save" type="submit" name="submit" value="Save">
	  </li>
	  </ul>
	</form>
  </div>
</div>

