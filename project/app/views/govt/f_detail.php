<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row  " >
 <div class="col-md-5 mx-auto"> 
  <div class="card card-body bg-light">
  <h2></h2>
	  <p>Please fill this form to register with us</p>
	   <form action="<?php echo URLROOT; ?>/govt/f_detail" method="post">
          
		 		<div class="form-group">
            <label for="driver_id">Driver Id: <sup>*</sup></label>
            <input type="text" name="driver_id" class="form-control form-control-lg <?php echo (!empty($data['driver_id_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['driver_id']; ?>" required>
            <span class="invalid-feedback"><?php echo $data['driver_id_err']; ?></span>
        </div>
		<div class="form-group">
            <label for="entry_wt">Entry Weight: <sup>*</sup></label>
            <input type="text" name="entry_wt" class="form-control form-control-lg <?php echo (!empty($data['entry_wt_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['entry_wt']; ?>" required>
            <span class="invalid-feedback"><?php echo $data['entry_wt_err']; ?></span>
        </div>
        <div class="form-group">
            <label for="exit_wt">Exit Weight: <sup>*</sup></label>
            <input type="text" name="exit_wt" class="form-control form-control-lg <?php echo (!empty($data['exit_wt_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['exit_wt']; ?>" required>
            <span class="invalid-feedback"><?php echo $data['exit_wt_err']; ?></span>
        </div>      		
		   
		
		  <div class="row">
            <div class="col">
              <input type="submit" value="Register" class="btn btn-success btn-block">
            </div>
          
          </div> 
		</form>
	  </div>         
   </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
