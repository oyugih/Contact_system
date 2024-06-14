<?php
include "header.php";
?>

<body style="padding: 14px">

<center>
<div class="panel panel-primary">
	<div class="panel-heading" style="font-size: 28px";>CONTACT MANAGEMENT SYSTEM</div>
</div>
<center/>

<div class="btn btn-success btn-md" data-toggle="modal" data-target="#addcontact">+ Add Contact</div>

<br>
<br>

<div id="search_area">
    <input type="text" name="contactsearch" id="contactsearch" class="form-control input-md" autocomplete="off" placeholder="Search your contacts." />
</div>
<br>

<div id="recievedoutput"></div>

<table class="table table-striped" id="mainoutput">
  <tr style="font-size: 24px">
    <td>First Name</td>
    <td>Middle Name</td>
    <td>Last Name</td>
    <td>Email Address</td>
    <td>Phone Number(s)</td>
    <td>Address</td>
    <td>Actions</td>


  </tr>

  <?php 
	  while ($i = mysqli_fetch_array($query)) {
		$id = $i['id'];
		$fname = $i['firstname'];
		$mname = $i['middlename'];
		$lname = $i['lastname'];
		$email = $i['email'];
		$phone = $i['contacts'];
		$cname = $i['companyname'];
   ?>
  
  <tr>
    <td><?php echo $fname; ?></td>
    <td><?php echo $mname; ?></td>
    <td><?php echo $lname; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $phone; ?></td>
    <td><?php echo $cname; ?></td>
    <td style="font-size: 10px">
    	<div class="btn btn-success btn-md" data-toggle="modal" data-target="#addcontact">ADD</div> &nbsp &nbsp &nbsp &nbsp &nbsp
    	<span class="btn btn-primary btn-md" data-toggle="modal" data-target="#edit<?php echo $id; ?>">EDIT</span> &nbsp &nbsp &nbsp &nbsp &nbsp
    	<span class="btn btn-danger btn-md delete" name="<?php echo $id; ?>">DELETE</span>
    </td>
  </tr>


  <?php

include "update.php";?>
  
  <?php } ?>

    <?php
include "contact.php";
include "script.php";
?>
  


</table>



</body>
</html>

    <?php
include "footer.php";
?>