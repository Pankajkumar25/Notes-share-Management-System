<?php require_once("mysqli_connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  require("linkfile.php");
  ?>
</head>
<body>

<div class="container-fluid">


<?php
include("header.php");
include("mainmenu.php");
echo "<br/>";
echo "<div class='row'>";

echo "<div class='col-md-3'>";
include("leftmenu.php");
echo "</div>";
echo "<div class='col-md-9'>";
echo"
<div class='panel panel-info'>
<div class='panel-heading'>
main title
</div>
<div class='panel-body min_h'>


<form id='registration-form' action='' method='post'>

<div class='row'>
<label class='col-md-3'>Enter Subject Topics: </label>
<div class='col-md-5'>
<input type='text' name='Notes' id='Notes' class='form-control'/>
</div>
</div>
</br>


<div class='row'>
<label class='col-md-3'>Description:</label>
<div class='col-md-5'>
<textarea  name='description' id='description' rows='3' cols='50'></textarea>
</div>
</div>
</br>


<div class='row'>
<label class='col-md-3'>Upload Notes </label>
<div class='col-md-5'>
<input type='file' id='cov_image' name='cov_image' class='form-control'/>
</div>
</div>
<br/>

 <input type='submit' class='btn btn-primary'>
</form>


</div>
</div>
";
echo "</div>";

echo "</div>";


include("footer.php");


?>


</div>
<script src="assets/js/jquery-1.7.1.min.js"></script> 

<script src="assets/js/jquery.validate.js"></script> 
<!--
<script src="script.js"></script> 
-->

<script>

$(document).ready(function(){


		$('#registration-form').validate({
	    rules: {
	       Notes: {
	        required: true
	      },
		  
		 description: {
	        minlength: 6,
	        required: true
	      },
		  
		  password: {
				required: true,
				minlength: 6
			},
			confirm_password: {
				required: true,
				minlength: 6,
				equalTo: "#password"
			},
		  
	      email: {
	        required: true,
	        email: true
	      },
		  
	     
		   address: {
	      	minlength: 10,
	        required: true
	      },
		   
		   address2: {
	      	minlength: 10,
	        required: true
	      },
		   
		agree:{
			required:true
		},
		 cov_image: {
        required: true,
        regex: "^^.*\.(jpg|JPG|gif|GIF|doc|DOC|pdf|PDF|xls|png)$"
		
    }
		  
	    },
		/*
		messages: {
			upload:
			{
			regex: "not of specified type"
			},
    email: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com"
    }
  },*/
		
		/*	highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
				$(element).closest('.control-group').removeClass('success').addClass('icon');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}*/
	  });

}); // end document.ready
</script>	

</body>

</html>