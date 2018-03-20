<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row  " >
 <div class="col-md-5 mx-auto"> 
  <div class="card card-body bg-light">
  <h2></h2>
	  <p>Please fill this form to register with us</p>
	   <form action="<?php echo URLROOT; ?>/govt/driver" method="post">
          
		 		<div class="form-group">
            <label for="adhar_no">Aadhar No.: <sup>*</sup></label>
            <input type="text" name="adhar_no" class="form-control form-control-lg <?php echo (!empty($data['adhar_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['adhar_no']; ?>" required>
            <span class="invalid-feedback"><?php echo $data['adhar_err']; ?></span>
        </div>
		<div class="form-group">
            <label for="driver_id">Driver's Id: <sup>*</sup></label>
            <input type="text" name="driver_id" class="form-control form-control-lg <?php echo (!empty($data['driver_id_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['driver_id']; ?>" required>
            <span class="invalid-feedback"><?php echo $data['contractor_err']; ?></span>
        </div>
		
		   
		<div class="form-group">
            <label for="documents">Legal Documents: <sup>*</sup></label>
            <input type="checkbox" name="documents" class="form-control form-control-lg" required>
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
