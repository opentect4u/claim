<div class="content-wrapper">
  <div class="container-fluid">
	<h3>Edit Employee Details</h3>
	<hr> 
	    <form style="max-width:700px;background:#fafafa;
	    	         padding:30px;box-shadow:1px 1px 25px rgba(0,0,0,0.35);
                     border-radius:10px;border: 2px solid #305a72"
	          class="form-style-9" method="POST" action="<?php echo site_url('payroll/editEmp');?>">
      <ul>
      	<li>
      		<label for="emp_no" style="display:inline;"class="field-split align-left labelstyle">
      		       Employee No.</label>
      		<label for="emp_name" style="display:inline;margin-left:211px;" class="field-split 
      		       align-left labelstyle">Name</label>	
      	
	    	<input type="text" name="emp_no" style="width:300px;display:inline;" class="field-style
	    	       field-split align-left" value="<?php echo($data_dtls->emp_no); ?>" readonly>

	    	<input type="text" name="emp_name" style="width:300px;display:inline;margin-left:20px" 
	    	       class="field-style field-split align-left"value="<?php echo($data_dtls->emp_name);?>" required>      
	    </li>
	    <br><br>
	    <li>
	 	    <label for="emp_dept" style="display:inline;" class="field-split align-left labelstyle">
	 	           Department</label> 
	 	    <label for="emp_desig" style="display:inline;margin-left:228px;" class="field-split align-left
	 	           labelstyle">Designation</label>
	
	        <input type="text" name="emp_dept" style="width:300px;display:inline;" class="field-style
	               field-split align-left" value="<?php echo($data_dtls->sector); ?>">
	          
	        <input type="text" name="emp_desg" style="width:300px;display:inline;margin-left:20px" 
	               class="field-style field-split align-left"value="<?php echo($data_dtls->designation);?>">
	    </li>
	    <br><br>
	    <li>
	        <label for="doj" style="display:inline;"class="field-split align-left labelstyle">
	        	   Joining Date </label> 
	        <label for="dot" style="display:inline;margin-left:220px;" class="field-split align-left
	               labelstyle">Termination Date</label> 

	        <input type="date" name="doj" id="dp1" style="width:300px" class="field-style field-split
	               align-left" value="<?php echo $data_dtls->date_of_joining;?>">

	        <input type="date" name="dot"id=dp2 style="width:300px;display:inline;margin-left:20px" 
	               class="field-style field-split align-left" 
                   value="<?php echo $data_dtls->date_of_termination;?>">
	    </li>
	    <br><br>
	    <li>
	        <label for="pan_no" style="display:inline;"class="field-split align-left labelstyle">
	               PAN No.</label>	
	        <label for="ac_no" style="display:inline;margin-left:256px;"
	               class="field-split align-left labelstyle">Account No.</label>

	        <input type="text" name="pan_no" style="width:300px;display:inline;"
	               class="field-style field-split align-left" value="<?php echo($data_dtls->pan_no);?>">

	        <input type="text" name="ac_no" style="width:300px;display:inline;margin-left:20px" 
	               class="field-style field-split align-left" 
	               value="<?php echo($data_dtls->bank_ac_no);?>">	  
	    </li>
	    <br><br>
	    <li>
	        <label for="pf_no" style="display:inline;"class="field-split align-left labelstyle">
	               PF No.</label>	
	        <label for="esi_no" style="display:inline;margin-left:268px;"
	               class="field-split align-left labelstyle">ESI No.</label>

	        <input type="text" name="pf_no" style="width:300px;display:inline;"
	               class="field-style field-split align-left" 
	               value="<?php echo($data_dtls->pf_ac_no);?>">

	        <input type="text" name="esi_no" style="width:300px;display:inline;margin-left:20px" 
	               class="field-style field-split align-left" 
	               value="<?php echo($data_dtls->esi_no);?>">	  
	    </li>
	    <br><br>
		<li>
	    	<select type="text" name="status" style="width:620px;" 
	    		    class="field-style field-split align-left"> 
	    		    <?php $status = $data_dtls->status_flag ?>

	                <option value="1"<?php echo($data_dtls->status_flag==1)?"selected":""?>>Active</option>
	                <option value="0"<?php echo($data_dtls->status_flag==0)?"selected":""?> >Retired/Resigned</option>
            </select> 

	    </li>
	    
	    <li>
      	    <input type="submit" name="submit" value="Save">
	    </li>
    </ul>	 
</form>

<script>
		$(document).ready(function(){
			if(<?php echo $status ?> == 0){
				$('input').prop("readonly",true);
				$(':input[type="submit"]').prop('disabled', true);
			}
		});

</script>		


