<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row  " >
 <div class="col-md-5 mx-auto"> 
 <?php flash('register_success');?>
  <div class="card card-body bg-light">
  <h2 align="center">Register the Contractor</h2>
	  <p>Please fill this form to register with us</p>
	   <form action="<?php echo URLROOT; ?>/govt/contractor" method="post">
          <div class="form-group">
            <label for="name">Name: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>" required>
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
        </div>
		 <div class="form-group">
            <label for="address">Address: <sup>*</sup></label>
            <input type="text" name="address" class="form-control form-control-lg <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['address']; ?>" required>
            <span class="invalid-feedback"><?php echo $data['address_err']; ?></span>
        </div>
		<div class="form-group">
            <label for="adhar">Adhar No.: <sup>*</sup></label>
            <input type="text" name="adhar" class="form-control form-control-lg <?php echo (!empty($data['adhar_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['adhar']; ?>" required>
            <span class="invalid-feedback"><?php echo $data['adhar_err']; ?></span>
        </div>
		   <div class="form-group">
            <label for="license">License Card No.: <sup>*</sup></label>
            <input type="text" name="license" class="form-control form-control-lg <?php echo (!empty($data['license_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['license']; ?>" required>
            <span class="invalid-feedback"><?php echo $data['license_err']; ?></span>
        </div>
		<div class="form-group">
            <label for="mob">Mobile No.: <sup>*</sup></label>
            <input t	ype="text" name="mob" class="form-control form-control-lg <?php echo (!empty($data['mob_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mob']; ?>">
            <span class="invalid-feedback"><?php echo $data['mob_err']; ?></span>
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
