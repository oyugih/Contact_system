<div class="modal fade" id="edit<?php echo $id; ?>" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit: <?php echo "$fname $lname"; ?></h4>
        </div>
        <div class="modal-body">
			<div class="form-group">
				<label class="control-label col-sm-4" for="firstname">First Name:</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $fname; ?>" class="form-control" id="e-firstname<?php echo $id; ?>" placeholder="Enter First Name" >
					<div class="error" id="e_errfirstname<?php echo $id; ?>"></div>
				</div>
			</div>
			<br><br>
			<div class="form-group">
				<label class="control-label col-sm-4" for="middlename">Middle Name:</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $mname; ?>" class="form-control" id="e-middlename<?php echo $id; ?>" placeholder="Enter Middle Name">
					<div class="error" id="e_errmiddlename<?php echo $id; ?>"></div>
				</div>
			</div>
			<br><br>
			<div class="form-group">
				<label class="control-label col-sm-4" for="lastname">Last Name:</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $lname; ?>" class="form-control" id="e-lastname<?php echo $id; ?>" placeholder="Enter Last Name" >
					<div class="error" id="e_errlastname<?php echo $id; ?>"></div>
				</div>
			</div>
			<br><br>
			<div class="form-group">
				<label class="control-label col-sm-4" for="email">Email Address:</label>
				<div class="col-sm-8">
					<input type="email" value="<?php echo $email; ?>" class="form-control" id="e-email<?php echo $id; ?>" placeholder="Enter Email Address" max="5">
					<div class="error" id="e_erremail<?php echo $id; ?>"></div>
				</div>
			</div>
			<br><br>
			<div class="form-group">
				<label class="control-label col-sm-4" for="phonenumber">Phone Number:</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $phone; ?>" class="form-control" id="e-phonenumber<?php echo $id; ?>" placeholder="Enter Phone Number">
					<div class="error" id="e_errphonenumber<?php echo $id; ?>"></div>
				</div>
			</div>
			<br><br>
			<div class="form-group">
				<label class="control-label col-sm-4" for="companyname">Address:</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $cname; ?>" class="form-control" id="e-companyname<?php echo $id; ?>" placeholder="Enter Address">
					<div class="error" id="e_errcompanyname<?php echo $id; ?>"></div>
				</div>
			</div>
			<br><br>
			<div class="form-group">        
	      		<div class="col-sm-offset-4 col-sm-10">
	        		<button type="submit" data-id="<?php echo $id; ?>" id="edit" class="btn btn-success">Edit</button>
	      		</div>
    		</div>
			</form>
			<br><br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

