

<script type="text/javascript">

$(document).ready(function(){

	$("#contactsearch").bind('keyup', function(){
	    var val = $("#contactsearch").val();

	    if (val == "" || val == null) {
	    	$("#mainoutput").show();
	    	$("#recievedoutput").hide();
	    }
	    else{
	    	$("#recievedoutput").show();
	    	$.ajax({
		      type: "POST",
		      data: 'query='+ val,
		      url: "search.php",
		      cache: false,
		      success: function(able){
			      var out = JSON.parse(able);
			      $("#mainoutput").hide();
				  $("#recievedoutput").html(out.message);
			  }
		    });
		    return false;
	    }
	});

	$("#contactsearch").focusout(function(){
		var val = $("#contactsearch").val();

		if(val != ""){
	    	$("#mainoutput").hide();
	    	$("#recievedoutput").show();
	    }else{
	    	$("#recievedoutput").hide();
			$("#mainoutput").show();
	    }

	});

	function isEmptyOrSpaces(str){
	    return str === null || str.match(/^ *$/) !== null;
	}

	function isEmail(emem) {
		var aa = $(emem).val();
	    var atpos = aa.indexOf("@");
	    var dotpos = aa.lastIndexOf(".");
	    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=aa.length) {
	        return false;
	    }else{
	    	return true;
	    }
	}



	$('#add').click(function(e){
  		e.preventDefault();

		var firstname = $("#firstname").val();
		var middlename = $("#middlename").val();
		var lastname = $("#lastname").val();
		var email = $("#email").val();
		var phonenumber = $("#phonenumber").val();
		var companyname = $("#companyname").val();

		var errfirstname = "";
		var errmiddlename = "";
		var errlastname = "";
		var erremail = "";
		var errphonenumber = "";
		var errcompanyname = "";

		if (firstname == "") {
			$("#errfirstname").html("This field is required.");
			errfirstname = 1;
		}else{
			$("#errfirstname").html("");
		}


		if (lastname == "") {
			$("#errlastname").html("This field is required.");
			errlastname = 1;
		}else{
			$("#errlastname").html("");
		}


		if (phonenumber.length < 1) {
			$("#errphonenumber").html("");
		}
		else if(phonenumber.length != 10){
			$("#errphonenumber").html("Invalid Phone number.");
			errphonenumber = 1;
		}
		else if(isNaN(phonenumber)){
			$("#errphonenumber").html("Only numbers are allowed.");
			errphonenumber = 1;
		}
		else{
			$("#errphonenumber").html("");
		}

		if (email.length < 1) {
			$("#erremail").html("");
		}else if(email.length > 100){
			$("#erremail").html("Your email should not be more than 100 characters.");
			erremail = 1;
		}else if(!isEmail("#email")){
			$("#erremail").html("Not a valid e-mail address.");
			erremail = 1;
		}else{
			$("#erremail").html("");
		}

		if ((errfirstname!=1) && (errmiddlename!=1) && (errlastname!=1) && (erremail!=1) && (errphonenumber!=1) && (errcompanyname!=1)) {
			$.ajax({
		      type: "POST",
		      data: 'firstname='+ firstname + '&middlename='+ middlename + '&lastname='+ lastname + '&email='+ email + '&phonenumber='+ phonenumber + '&companyname='+ companyname,
		      url: "search.php",
		      cache: false,
		      success: function(able){
			      var out = JSON.parse(able);
				  if (out.success == 1) {
				  	window.top.location = window.top.location;
				  }
			  }
		    });
		    return false;
		}
  	});
});

$('.delete').click(function(){
	var time_id = $(this).attr('name');
	window.location = 'delete.php?time_id=' + time_id;
});
</script>

<script type="text/javascript">

	$('button#edit').click(function(e){
  		e.preventDefault();

		var cid = $(this).attr("data-id");

		var e_firstname = $("#"+"e-firstname"+cid).val();
		var e_middlename = $("#e-middlename"+cid).val();
		var e_lastname = $("#e-lastname"+cid).val();
		var e_email = $("#e-email"+cid).val();
		var e_phonenumber = $("#e-phonenumber"+cid).val();
		var e_companyname = $("#e-companyname"+cid).val();

		var err_e_firstname = "";
		var err_e_middlename = "";
		var err_e_lastname = "";
		var err_e_email = "";
		var err_e_phonenumber = "";
		var err_e_companyname = "";

		function isEmail2() {
			var aa = $("#e-email"+cid).val();
		    var atpos = aa.indexOf("@");
		    var dotpos = aa.lastIndexOf(".");
		    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=aa.length) {
		        return false;
		    }else{
		    	return true;
		    }
		}

		if (e_firstname == "") {
			$("#e_errfirstname"+cid).html("This field is required.");
			err_e_firstname = 1;
		}else{
			$("#e_errfirstname"+cid).html("");
		}


		if (e_lastname == "") {
			$("#e_errlastname"+cid).html("This field is required.");
			err_e_lastname = 1;
		}else{
			$("#e_errlastname"+cid).html("");
		}


		if (e_phonenumber.length < 1) {
			$("#e_errphonenumber"+cid).html("");
		}
		else if(e_phonenumber.length != 10){
			$("#e_errphonenumber"+cid).html("Invalid Phone number.");
			err_e_phonenumber = 1;
		}
		else if(isNaN(e_phonenumber)){
			$("#e_errphonenumber"+cid).html("Only numbers are allowed.");
			err_e_phonenumber = 1;
		}
		else{
			$("#e_errphonenumber"+cid).html("");
		}

		if (e_email.length < 1) {
			$("#e_erremail"+cid).html("");
		}else if(e_email.length > 100){
			$("#e_erremail"+cid).html("Your email should not be more than 100 characters.");
			err_e_email = 1;
		}else if(!isEmail2()){
			$("#e_erremail"+cid).html("Not a valid e-mail address.");
			err_e_email = 1;
		}else{
			$("#e_erremail"+cid).html("");
		}

		if ((err_e_firstname!=1) && (err_e_middlename!=1) && (err_e_lastname!=1) && (err_e_email!=1) && (err_e_phonenumber!=1) && (err_e_companyname!=1)) {
			$.ajax({
		      type: "POST",
		      data: 'e_firstname='+ e_firstname + '&middlename='+ e_middlename + '&e_lastname='+ e_lastname + '&email='+ e_email + '&phonenumber='+ e_phonenumber + '&companyname='+ e_companyname + '&id='+ cid,
		      url: "search.php",
		      cache: false,
		      success: function(able){
			      var out = JSON.parse(able);
				  if (out.success == 1) {
				  	window.top.location = window.top.location;
				  }
			  }
		    });
		    return false;
		}


	});
</script>