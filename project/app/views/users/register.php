<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
	  <?php flash('register_success');?>
      <h2>CREATE YOUT ACCOUNT</h2>
	  <p>Please fill this form to register with us</p>
	   <form action="<?php echo URLROOT; ?>/users/register" method="post">
          <div class="form-group">
            <label for="name">Name: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="contractor_id">Contractor Name: <sup>*</sup></label>
            <input type="text" name="contractor_id" class="form-control form-control-lg <?php echo (!empty($data['contractor_id_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['contractor_id']; ?>">
            <span class="invalid-feedback"><?php echo $data['contractor_id_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="adhar_no">Adhar No.: <sup>*</sup></label>
            <input type="text" name="adhar_no" class="form-control form-control-lg <?php echo (!empty($data['adhar_no_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['adhar_no']; ?>">
            <span class="invalid-feedback"><?php echo $data['adhar_no_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="truck_no">Truck No.: <sup>*</sup></label>
            <input type="text" name="truck_no" class="form-control form-control-lg <?php echo (!empty($data['truck_no_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['truck_no']; ?>">
            <span class="invalid-feedback"><?php echo $data['truck_no_err']; ?></span>
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