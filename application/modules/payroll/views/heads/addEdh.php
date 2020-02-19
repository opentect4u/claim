<div class="content-wrapper">
  <div class="container-fluid">
	<h3>Add New Head</h3>
	<hr> 
	<form style="max-width:500px;
		     background:#fafafa;
		     padding:30px;
                     box-shadow: 1px 1px 25px rgba(0,0,0,0.35);
                     border-radius:10px;
		     border: 2px solid #305a72"
		class="form-style-9" method="POST" action="<?php echo site_url("payroll/addEdh"); ?>">
	  <ul>
	  <li>
		<select type="text" name="edh_type" style="width:380px" class="field-style field-split align-left" required>
			<option value="0">Select</option>
			<option value="E">Earning</option>
			<option value="D">Deduction</option>
		</select> 
	  </li> 	
	  <li> 
	    <input type="text" name="edh" style="width:380px" class="field-style field-split align-left" placeholder="Head Description" required>
	  </li>
	  
	  <li>
	    <input class="btn btn-primary" title="Save" type="submit" name="submit" value="Save">
	  </li>
	  </ul>
	</form>
  </div>
</div>

