 <div class="modal fade" id="addcontact" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Contact</h4>
        </div>
        <div class="modal-body">
        	<form id="addnew" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label class="control-label col-sm-4" for="firstname">First Name:</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="firstname" placeholder="Enter First Name" >
					<div class="error" id="errfirstname"></div>
				</div>
			</div>
			<br><br>
			<div class="form-group">
				<label class="control-label col-sm-4" for="middlename">Middle Name:</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="middlename" placeholder="Enter Middle Name">
					<div class="error" id="errmiddlename"></div>					
				</div>
			</div>
			<br><br>
			<div class="form-group">
				<label class="control-label col-sm-4" for="lastname">Last Name:</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" >
					<div class="error" id="errlastname"></div>
				</div>
			</div>
			<br><br>
			<div class="form-group">
				<label class="control-label col-sm-4" for="email">Email Address:</label>
				<div class="col-sm-8">
					<input type="email" class="form-control" id="email" placeholder="Enter Email Address" max="5">
					<div class="error" id="erremail"></div>
				</div>
			</div>
			<br><br>
			<div class="form-group">
				<label class="control-label col-sm-4" for="phonenumber">Phone Number:</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="phonenumber" placeholder="Enter Phone Number">
					<div class="error" id="errphonenumber"></div>
				</div>
			</div>
			<br><br>
			<div class="form-group">
				<label class="control-label col-sm-4" for="companyname">Address:</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="companyname" placeholder="Enter Address">
					<div class="error" id="errcompanyname"></div>
				</div>
			</div>
			<br><br>
			<div class="form-group">        
	      		<div class="col-sm-offset-4 col-sm-10">
	        		<button type="submit" id="add" class="btn btn-primary">Submit</button>
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
