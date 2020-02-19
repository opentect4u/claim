

<form method="post" action="<?php echo site_url("Admin/allPaymentDetails");?>">
  <div class="form-row why"> 
    <div class="form-group col-md-6">
        <label for="aldpaydtl1">From Date:</label>
        <input type="text" class="form-control" name="date1" id="aldpaydtl1" placeholder="DD/MM/YYYY" required>
    </div>
    <div class="form-group col-md-6">
      <label for="aldpaydtl2">To Date:</label>
      <input type="text" class="form-control" name="date2" id="aldpaydtl2" placeholder="DD/MM/YYYY" required>
    </div>
    </div> 
    <div class="form-group col-md-6">
      <div class="alert alert-danger" id="d1alpmtalert">Supplied date can't be greater than system date!</div>
       <div class="alert alert-danger" id="d2alpmtalert">Supplied date can't be greater than system date!</div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <button class="btn btn-primary" type="submit">Proceed</button>
    </div>
</form>


<script type="text/javascript">
  $(document).ready(function($){    
      $('#aldpaydtl1').datepicker({
          format: 'dd/mm/yyyy',
          endDate: "today"
        });
      $('#aldpaydtl2').datepicker({
          format: 'dd/mm/yyyy',
          endDate: "today"
        });
  });
</script>

<style>
.datepicker{z-index:1151 !important;}
</style>

<script src="<?php echo base_url('js/jquery.maskedinput.js'); ?>" type="text/javascript"></script>

<script>
$(document).ready(function($){
    document.getElementById("d1alpmtalert").style.display = "none";
    document.getElementById("d2alpmtalert").style.display = "none";
      $("#aldpaydtl1").mask("99/99/9999");
      $("#aldpaydtl1").css({"placeholder":"opacity:0.4"});
  });

  $(document).ready(function($){
      $("#aldpaydtl2").mask("99/99/9999");
});
  $(document).ready(function($){
      $("#aldpaydtl2").css({"placeholder":"opacity:0.4"});
});


  $('#aldpaydtl1').on("change", function() {
      var today = new Date();
      var to_date = $('#aldpaydtl1').val().split("/");
      var mydate = new Date(to_date[2], to_date[1] - 1, to_date[0]);

      if (mydate > today) {
        document.getElementById("d1alpmtalert").style.display = "block";
        $('#aldpaydtl1').val('');
        return false;
      }
      else{
        document.getElementById("d1alpmtalert").style.display = "none";
        var to_date = $(this).val();
      $('#aldpaydtl2').val(to_date);
      }
  });

  $('#aldpaydtl2').on( "change", function() {
      var today = new Date();
      var to_date = $('#aldpaydtl2').val().split("/");
      var mydate = new Date(to_date[2], to_date[1] - 1, to_date[0]);

      if (mydate > today) {
        document.getElementById("d2alpmtalert").style.display = "block";
        $('#aldpaydtl2').val('');
        return false;
      }
      else {
        document.getElementById("d2alpmtalert").style.display = "none";
      }
  });
</script>


