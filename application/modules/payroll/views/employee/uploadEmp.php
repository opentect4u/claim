<div class="content-wrapper">
  <div class="container-fluid">
  	<h3>Upload .csv File for Employee Details</h3>
	<hr> 
		<label for="sample_file" class="field-split align-left labelstyle">Sample File:</label>	
		<a name="sample_file" href="<?php echo site_url('payroll/dwnEmp');?>">Download</a>
		<form style="max-width:800px;background:#fafafa;padding:30px;box-shadow: 1px 1px 25px rgba(0,0,0,
					 0.35);border-radius:10px;border: 2px solid #305a72" 
					 class="form-style-9"
		     	 	 method="POST" action="<?php site_url("payroll/uplEmp");?>"enctype="multipart/form-data">
			<ul>
		      	<li>
		          <label for="upemp" class="field-split align-left labelstyle">Browse CSV File:</label>
		        </li>
		        <li>  	
		   	      <input type="file" style="width:300px;display:inline" class="field-style field-split
		   	             align-left" name="upemp">
		   	    </li>
		   	    <br>
		   	   <li>
			   <input type="submit" class="submit" name="importSubmit" value="Save" >
	          </li>
	        </ul>       
		</form>
 </div>
</div>





	

