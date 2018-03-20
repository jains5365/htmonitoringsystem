<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row" id="glogin">
  <div class="col-md-5 mx-auto">
<div class="card card-body mt-5 bg-light" id="card">
<h2>LOG IN YOUR ACCOUNT</h2>
	  <p>Please fill this form to login</p>
	   <form action="<?php echo URLROOT; ?>/govt/login" method="post">
          <div class="form-group">
            <label for="name">Name: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
           
		   <div class="row" id="bb">
            <div class="col">
              <input type="submit" value="Log in" class=" btn btn-success btn-block" id="b">
            </div>
          
          </div>
		  </form>
			 
			          </div> 
		         </div>
		       </div>
		   </div>
 <?php require APPROOT . '/views/inc/footer.php'; ?>