

<form method="post" action="<?php echo site_url("Admin/deletePaymentProcess")?>">
	Are you sure?
	<input type="hidden" name="del" value="<?php echo $payment->trans_cd * 8191;?>">
<div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <button class="btn btn-danger" type="submit">Delete</button>
    </div>
</form>