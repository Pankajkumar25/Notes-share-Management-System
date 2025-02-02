<?php include('mysqli_connection.php')?>
<html>
<head>
</head>
<body>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLongTitle">Comment Area</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
	  <div class="modal-body">
        
		<form action='data.php' method='post'>
        <div class='row'>
        <label class='col-md-3'>Add a comment:</label>
        <div class='col-md-5'>
        <textarea id='desc' name='comment' id='comment' rows='3' cols='50' placeholder='What is Your View ?' required></textarea>
        </div>
        </div>
        </br>
      <div class="modal-footer">
	  <input type="submit" class="btn btn-primary" value='Publish' name='webcomment'/>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

      </div>
	  </form>

    </div>

  </div>
</div>

<!-- Professional Sigin Up -->

<div class="modal fade" id="myModalp" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>     
<h4 class="modal-title">Professional profile Sign Up</h4>
</div>
<div class="modal-body">


<div class='row' id='p1'>

<form id='registration-form' action='data.php' method='post'>
<h2><b><center><u>Professional Profile</u></b></center></h2>
<input type="hidden" name='user_type' value='professional'/>
<div class='row'>
<div class=' col-md-12'>
<center><img src='prologo.png' width='15%' ></center>
</div>
</div>
<br/>



<div class='row'>
<center><label class='col-md-3'>Name:</label></center>
<div class='col-md-8'>
<input type='text' name='username' class='form-control' required/>
</div>
</div>
<br/>




<div class='row'>
<center><label class='col-md-3'>Email:</label><center>
<div class='col-md-8'>
<input type='email' id='email' name='email' class='form-control' required/>
</div>
</div>
</br>

<div class='row'>
<center><label class='col-md-3'>Contact:</label></center>
<div class='col-md-8'>
<input type='text' id='contact' name='contact' class='form-control' required/>
</div>
</div>
</br>

<div class='row'>
<center><label class='col-md-3'>Password:</label></center>
<div class='col-md-8'>
<input type='password' id='password' name='password' class='form-control' required/>
</div>
</div>
</br>


<div class='row'>
<center><label class='col-md-3'>Gender:</label></center>
<div class='col-md-8'>
<input type='radio' id='male' name='gender' value='male' checked >&nbsp;Male
<input type='radio' id='female' name='gender' value='female'>&nbsp;Female
<input type='radio' id='other' name='gender' value='other'>&nbsp;Other

</div>
</div>
</br>



<div class='row'>
<center><label class='col-md-3'>City:</label></center>
<div class='col-md-8'>
<input type='text' name='city' id='city ' class='form-control' required/>
</div>
</div>
</br>



<div class='row'>
<center><label class='col-md-3'>Speciality:</label></center>
<div class='col-md-8'>
<input type='text' id='special' name='speciality' class='form-control' required/>
</div>
</div>
</br>

<div class='row'>
<center><label class='col-md-3'>Certifications:</label></center>
<div class='col-md-8'>
<input type='text' id='certifications' name='certifications' class='form-control' required/>
<!--<center><br><input type='file' name='file1[]' multiple id='file 1'/></center>-->
</div>
</div>
</br>


<div class='row'>
<center><label class='col-md-3'>Professional Experience:</label></center>
<div class='col-md-8'>
<input type='text' id='experience' name='experience' class='form-control' required/>
</div>
</div>
</br>








<div class='row'>
<div class='col-md-offset-4 col-md-5'>
<input type='submit' name='professional' class='btn btn-info'/>
<input type='reset' class='btn btn-danger'/>
</div>
</div>
</form>

</div>
</br>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>      
</div>
  
</div>
</div>
</div>
</div>



<!-- Teacher Sigin Up -->

<div class="modal fade" id="myModalt" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
 <div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>     
<h4 class="modal-title">Teacher Sign Up</h4>
</div>
<div class="modal-body">

<div class='row' id='t1'>
<form action='data.php' method='post'>
<h2><b><center><u>Teacher Profile</u></b></center></h2>
<input type="hidden" name='user_type' value='teacher'/>
<div class='row'>
<div class=' col-md-12'>
<center><img src='prologo.png' width='15%' ></center>
</div>
</div>
<br/>



<div class='row'>
<center><label class='col-md-3'>Name:</label></center>
<div class='col-md-8'>
<input type='text' name='username' class='form-control' required/>
</div>
</div>
<br/>

<div class='row'>
<center><label class='col-md-3'>Institute Name:</label></center>
<div class='col-md-8'>
<input type='text' id='institute' name='institute_name' class='form-control' required/>
</div>
</div>
</br>

<div class='row'>
<center><label class='col-md-3'>Email:</label></center>
<div class='col-md-8'>
<input type='email' id='email' name='email' class='form-control' required/>
</div>
</div>
</br>
<div class='row'>
<center><label class='col-md-3'>Contact no:</label><center>
<div class='col-md-8'>
<input type='text' id='contact_no' name='contact' class='form-control' required/>
</div>
</div>
</br>
<div class='row'>
<center><label class='col-md-3'>City:</label></center>
<div class='col-md-8'>
<input type='text' name='city' id='city' class='form-control' required/>
</div>
</div>
</br>


<div class='row'>
<center><label class='col-md-3'>Gender:</label></center>
<div class='col-md-8'>
Male&nbsp;<input type='radio' id='rmale' value='male' name='gender'  />&nbsp;&nbsp;
Female&nbsp;<input type='radio' id='rfemale' value='female' name='gender'/>&nbsp;&nbsp;
Others&nbsp;<input type='radio' id='rother' value='others' name='gender' />

</div>
</div>
</br>


<div class='row'>
<center><label class='col-md-3'>Speciality:</label></center>
<div class='col-md-8'>
<input type='text' id='special' name='speciality' class='form-control' />
</div>
</div>
</br>


<div class='row'>
<center><label class='col-md-3'>Years in Practice:</label></center>
<div class='col-md-8'>
<input type='text' id='practice' name='practics' class='form-control'/>
</div>
</div>
</br>


<div class='row'>
<center><label class='col-md-3'>Password:</label></center>
<div class='col-md-8'>
<input type='password' id='password' name='password' class='form-control' required/>
</div>
</div>
</br>

<div class='row'>
<div class='col-md-offset-4 col-md-5'>
<input type='submit' name='teacher' class='btn btn-info'/>
<input type='reset' class='btn btn-danger'/>
</div>
</div>
</form>

</div>
</br>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>      
</div>
  
</div>
</div>
</div>
</div>



<!-- Student Sigin Up -->
<div class="modal fade" id="myModals" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
 <div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>     
<h4 class="modal-title">Student Profile Sign Up</h4>
</div>
<div class="modal-body">

<div class='row' id='s1'>

<form action='data.php' method='post'>

<h2><b><center><u>Student Profile</u></b></center></h2>
<input type="hidden" name='user_type' value='student'/>
<div class='row'>
<div class=' col-md-12'>
<center><img src='prologo.png' width='15%' ></center>
</div>
</div>
<br/>



<label class='col-md-3'>Student Name:</label>
<div class='col-md-8'>
<input type='text' name='username' class='form-control' required/>
</div>
<br/>
<br/>


<label class='col-md-3'>Email:</label>
<div class='col-md-8'>
<input type='email' id='email' name='email' class='form-control' required/>
</div>
</br>
</br>

<label class='col-md-3'>Course Name:</label>
<div class='col-md-8'>
<input type='text' name='course' id='course ' class='form-control' required/>
</div>
</br>
</br>



<label class='col-md-3'>College Name:</label>
<div class='col-md-8'>
<input type='text' id='college' name='college' class='form-control' required/>
</div>
</br>
</br>


<label class='col-md-3'>University Name:</label>
<div class='col-md-8'>
<input type='text' id='university' name='university' class='form-control' required/>
</div>
</br>
</br>

<label class='col-md-3'>Gender:</label>
<div class='col-md-8'>
<input type='radio' id='male' name='gender' value='male' checked >&nbsp;Male
<input type='radio' id='female' name='gender' value='female'>&nbsp;Female
<input type='radio' id='other' name='gender' value='other'>&nbsp;Other

</div>
</br>
</br>


<label class='col-md-3'>Contact No:</label>
<div class='col-md-8'>
<input type='text' id='contact no' name='contact' class='form-control' required/>
</div>
</br>
</br>

<label class='col-md-3'>Password :</label>
<div class='col-md-8'>
<input type='password' id='contact no' name='password' class='form-control' required/>
</div>
</br>
</br>
</br>


<div class='row'>
<div class='col-md-offset-4 col-md-5'>
<input type='submit' name='student' class='btn btn-info'/>
<input type='reset' class='btn btn-danger'/>
</div>
</div>
</form>
</div>
</br>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>      
</div>
  
</div>
</div>
</div>
</div>




<!-- login-->

<div class='modal fade' id='myModal' role='dialog'>
  <div class='modal-dialog modal-md'>
    <div class='modal-content'>
      <div class='modal-header'>
            <button type='button' class='close' data-dismiss='modal'>&times;</button>
        
        <h4 class='modal-title'>Login</h4>
      </div>
  <div class='modal-body'>

<form action='data.php' method='post'>
<div class='row'>
<label class='col-md-3'>Email</label>
<div class='col-md-8'><input type='text' name='userid' class='form-control' required/>
</div>
</div>
<br/>
<div class='row'>
<label class='col-md-3'>Password</label>
<div class='col-md-8'><input type='password' name='password' class='form-control' required/>
</div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>User type</label>
<div class='col-md-8'>
<select name='usertype' class='form-control' required> 

<option value='admin'>Admin</option>
<option value='professional'>Professional</option>
<option value='teacher'>Teacher</option>
<option value='student'>Student</option>

</select>

</div>
</div>
</br>

<div class='row'>
<div class='col-md-offset-3 col-md-6'>
<input type='submit' name='login'  value='Login' class='btn btn-info'/>
<input type='reset' class='btn btn-info'/>
</div>
</div>
</form>
   
</div>
</div>
</div>
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
	       username: {
	        required: true
	      },
		  
		 city: {
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