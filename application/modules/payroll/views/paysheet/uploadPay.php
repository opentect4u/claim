<div class="content-wrapper">
  <div class="container-fluid">
  	<h3>Upload Paysheet</h3>
	<hr> 
		<label for="sample_file" class="field-split align-left labelstyle">Sample File:</label>	
		<a name="sample_file" href="<?php echo site_url('payroll/dwnPay');?>">Download</a>
		<form style="max-width:800px;background:#fafafa;padding:30px;box-shadow: 1px 1px 25px rgba(0,0,0,
					 0.35);border-radius:10px;border: 2px solid #305a72" 
					 class="form-style-9"
		     	 	 method="POST" action="<?php site_url("payroll/uplPay");?>"enctype="multipart/form-data">
		  <ul>
		     <li>
		        <label for="upemp" class="field-split align-left labelstyle">Browse CSV File:</label>
		     </li>
		     <li>  
                        <input type="file" style="width:300px;display:inline" class="field-style field-split align-left" name="upemp">
		     </li>
		     <br>
		     <li>
			 <select name="sal_mth" class="field-style field-split align-left custom-select" 
			         style="width:100px;margin-left:100px">
				<option value="0">Select</option>
				<option value="1">JAN</option>
			        <option value="2">FEB</option>
			        <option value="3">MAR</option>
				<option value="4">APR</option>
				<option value="5">MAY</option>
			        <option value="6">JUN</option>
				<option value="7">JUL</option>
				<option value="8">AUG</option>
				<option value="9">SEP</option>
				<option value="10">OCT</option>
			 	<option value="11">NOV</option>
				<option value="12">DEC</option>
			  </select>
		   
			  <input type="text" name="sal_yr" style="width:100px;display:inline;" 
			  class="field-style field-split align-left" value=<?php echo date('Y'); ?> readonly>
		      </li>
		      <br>
		      <li>
			 <input type="submit" class="submit" name="importSubmit" value="Save" >
	              </li>
	          </ul>       
	    </form>
 </div>
</div>
