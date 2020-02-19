<div class="content-wrapper">
  <div class="container-fluid">
	<h3>Add Status</h3>
	<hr> 
	<form style="max-width:800px;background:#fafafa;padding:30px;box-shadow: 1px 1px 25px rgba(0,0,0,0.35);border-radius:10px;border: 2px solid #305a72"
	      class="form-style-9" method="POST" action="<?php echo site_url('attendance/addStatus'); ?>">
      <ul>
	 <li>
	    <select class="field-style field-split align-left" style="width:400px;" name="emp_cd" id="emp_cd">
	    	<option value="">Select Employee</option>
	    	<?php
	    		foreach($emp as $value){
	    			echo "<option value=".$value->emp_no.">".$value->emp_name."</option>"; 
	    		}
	    	?>
	    </select>	
	 </li>
	 <br>
	 <li>
	    <select class="field-style field-split align-left" style="width:400px;" name="status" id="status">
	    	<option value="">Select Attendance Status</option>
	    	<option value="L">Late In</option>
	    	<option value="R">Early Out</option>
	    	<option value="H">Half</option>
	    	<option value="C">Absent(CL)</option>
	    	<option value="E">Absent(EL)</option>
	    	<option value="M">Absent(ML)</option>
	    	<option value="I">Client Site</option>
	    	<option value="W">LWP</option>
	    	<option value="O">Holiday Half</option>
	    	<option value="F">Holiday Full</option>
	    </select>
	    
	    <input type="number" name="lvno" id="lvno" style="width:300px;display:inline;margin-left:5px" 
		       class = "field-style field-split " value = 0 readonly
		/>
	    
	    
	 </li>
	 <br>
	 <li>
	    <input type="date" id="dp1"name="attn_dt" style="width:400px;" class="field-style field-split align-left" placeholder="Date" required>
	    <i class="fa fa-calendar"></i>
	</li>  	
	<br class="attn_br">
	  <li id="time">
	    <input type="text" name="in_out_time" style="width:400px" class="field-style field-split align-left"  placeholder="Time">
	 </li>
	 <br class="hide_br">
	 <li id="days">
	    <input type="text" name="days" id="dys" style="width:400px;" class="field-style field-split align-left" placeholder="No.of Days" onchange="endDt()">
	</li>  	
	 <br class="hide_br">
	 <li id="end_dt">
	    <input type="date" name="end_dt" id="endt" style="width:400px;" class="field-style field-split align-left" placeholder="End Date" readonly>
	    <i class="fa fa-calendar"></i>
	</li>  	
	<br>
	 <li>
		<textarea type="text"class= "field-style field-split align-left" style="width:400px" name = "remarks" placeholder="Remarks"></textarea>       
	</li>	 
	
	<br>
	 <li>
      	    <input type="submit" id="submit" name="submit" value="Save">
	 </li>
     </ul>	
  
</form>

<script src="<?php echo base_url('js/jquery.maskedinput.js'); ?>"></script>

<script>
  /*$(document).ready(function($){
      $('#dp1').datepicker({
          format: 'dd/mm/yyyy',
          endDate: "today"
        });
  });

  $(document).ready(function($){
      $("#dp1").mask("99/99/9999");
  });

  $(document).ready(function($){
	  $("#dp1").css({"placeholder":"opacity:0.4"});	
   });*/		

   $(document).ready(function(){
   		$("#status").change(function(){
   			if($("#status").val()=='C' || $("#status").val()=='E' || $("#status").val()=='M'){
   				$("#time").hide();
   				$(".attn_br").hide();
   				$("#days").show();
   				$("#end_dt").show();
   				$(".hide_br").show();
   				$("#lvno").show();
   			}else if($("#status").val()=='I'){
   				$("#time").hide();
   				$(".attn_br").hide();
   				$("#days").show();
   				$("#end_dt").show();
   				$(".hide_br").show();
   				$("#lvno").hide();
   			}else if($("#status").val()=='W' || $("#status").val()=='O' || $("#status").val()=='F'){
   				$("#days").hide();
   				$("#time").hide();
   				$("#end_dt").hide();
   				$(".hide_br").hide();
   				$("#lvno").hide();
   			}else{
   				$("#days").hide();
   				$("#time").show();
   				$("#end_dt").hide();
   				$(".hide_br").hide();
   				$("#lvno").hide();
   			}
   		});
   		//
   		$("#status").on('change',function(){
   		    
   		    var status = $("#status").val();
   		    var emp_cd = $("#emp_cd").val();
   		    
   		    if(status=='C' || status=='E' || status=='M'){
   		        $.get("<?php echo site_url('attendance/balance'); ?>",{status:status,empcd:emp_cd},function(data){
   		            var balance = parseInt(data);
   		            $("#lvno").val(balance);
   		        });
   		    }
   		});
   		
   		//
   		$("#dys").on('change',function(){
   		    var balance = parseInt($("#lvno").val());
   		    var days    = parseInt($("#dys").val());
   		    
   		    if(days > balance){
				$("#dys").css("border","1px solid red");
				$("#submit").hide();
				alert("Insufficient Balance");
				return false;
			}else{
				$("#dys").css("border","1px solid #B0CFE0");
				$("#submit").show();
				return true;
			}
   		});

   		$("#dp1").change(function(){
   			$("#dys").val(0);
   		});
   });




   function endDt(){
			var frmDt = document.getElementById("dp1").value;
			var days  = document.getElementById("dys").value;
			var day;

			var year;

			days = (days - 1);
		
			toDt   = new Date(frmDt);

			toDt.setDate(toDt.getDate() + days);

			var dd = toDt.getDate();
    		var mm = toDt.getMonth() + 1;
    		var y  = toDt.getFullYear();

    		if(dd < 9){
    			dd = '0' + dd;
    		}else{
    			dd = dd;
    		}

    		if(mm < 9){
    			mm = '0' + mm;
    		}else{
    			mm = mm;
    		}

			var format = y + '-' + mm + '-' + dd;

			document.getElementById("endt").value = format;
		}


</script>

<style>
.datepicker{z-index:1151 !important;}
</style>

