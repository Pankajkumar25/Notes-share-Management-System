<?php include("profile_info.php"); ?>
<?php
include("mysqli_connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  require("linkfile.php");
  ?>
 
<style>
	div.price
	{
		visibility:hidden;
	}
	</style>
 <script>
function confirm_msg()
{
  return confirm("Are you sure to Edit");
}
function price_option()
{
	var price_option=document.getElementById('option').value;
		//alert("testng-"+price_option);
	if(price_option=="Free")
		{  document.getElementById('paid_row').style.visibility="hidden";
			
		}	
		else
		{ document.getElementById('paid_row').style.visibility="visible";
			
		}
		
}

</script>
</head>
<body>

<div class="container-fluid bg-info">

<?php
include("header.php");
echo "<br/>";
include("mainmenu.php");
echo "<div class='row'>";

echo "<div class='col-md-3'>";
include("leftmenu.php");
echo "</div>";
echo "<div class='col-md-9'>";
echo"
<div class='panel panel-primary'>
<div class='panel-heading'>
<label>Upload notes  :-</label>
</div>
<div class='panel-body min-h'>";

if(isset($_REQUEST['act']))
{
  $act=$_REQUEST['act'];
  if($act==1)
  echo "<h1 class='well text-dark bg-info'><center> Your data is Saved Successfully.</center></h1>";
}

echo"<form action='new_post.php' id='registration-form'  method='post'>

<div class='row'>
<label class='col-md-3'>Select Stream:</label>
<div class='col-md-5'>

<select id='country' name='stream' class='form-control' onchange='this.form.submit()'>";

$sql="select distinct(stream) from subject_list";
$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
echo "<option value='select'>select</option>";
  
while($row_data=mysqli_fetch_array($query))
{
	if(isset($_POST['stream'])  && $_POST['stream']==$row_data[0])
		$status="selected";
	else
		$status="";
  echo "<option value='$row_data[0]' $status>$row_data[0]</option>";   
  
}
echo "</select>
</form>

";


echo"<form id='registration-form' action='data.php'  method='post' enctype='multipart/form-data' >

";

$where_con="";
if(isset($_POST['stream']))
{	$stream=$_POST['stream'];
$where_con="where stream='$stream'";
echo "<input type='hidden' name='stream' value='$stream'/>";


}

echo "
</div>
</div>
</br>


<div class='row'>
<label class='col-md-3'>Select Subject:</label>
<div class='col-md-5'>

<select name='subject' class='form-control'>";

$sql="select distinct(subject) from subject_list $where_con";
$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
while($row_data=mysqli_fetch_array($query))
{
  echo "<option value='$row_data[0]'>$row_data[0]</option>";
  
}
echo "</select>";
echo"
</div>
</div>
</br>

<div class='row'>
<label class='col-md-3'>Enter Subject Topics: </label>
<div class='col-md-5'>
<input type='text' name='Notes' id='Notes' class='form-control' required/>
</div>
</div>
</br>


<div class='row'>
<label class='col-md-3'>Description:</label>
<div class='col-md-5'>
<textarea  name='description' id='description' rows='3' cols='50' required></textarea>
</div>
</div>
</br>


<div class='row'>
<label class='col-md-3'>Upload Notes </label>
<div class='col-md-5'>
<input type='file' id='cov_image' name='cov_image' class='form-control' required/>
</div>
</div>
<br/>



<div class='row'>
<label class='col-md-3'>Upload Images </label>
<div class='col-md-5'>
<input type='file' id='preview' name='preview' class='form-control' required/>
</div>
</div>

<br/>



<div class='row'>
<div class='col-md-5'>
<input type='hidden' name='email' value='$email' class='form-control'/>
</div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Enter Price:</label>
<div class='col-md-5'>
<select id='option' class='form-control' onchange='price_option()'>
            <option value='Free'>Free</option>
            <option value='paid'>Paid</option>
			
		</select>
</div>
</div>
</br>


<div class='row price' id='paid_row'>
<label class='col-md-1'>Rs:</label>
<div class='col-md-offset-2 col-md-5'>
<input type='text' name='price'  maxlength=5 class='form-control' value=0 required/>
</div>
</div>
</br>


<div class='row'>
<div class='col-md-offset-4 col-md-5'>
<input type='submit' name='save' value='save' class='btn btn-info'/>
<input type='reset' class='btn btn-danger'/>
</div>
</div>

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