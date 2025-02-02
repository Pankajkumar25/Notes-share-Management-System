<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  
  include_once("link_file.php");
  ?>
   </head>
  <body>
 <div class="container-fluid"> <!--container |container-fluid -->


<?php
include_once("head.php");
include_once("mainmenu.php");
echo "<div class='row'>";
echo "<div class='col-md-3'>";
include_once("leftmenu.php");
echo "</div>";

echo "<div class='col-md-6'>
<div class='panel panel-primary min_h'>
			<div class='panel-heading'><center>teacher profile</center></div>
			<div class='panel-body'>";
			if(isset($_REQUEST['id']))
			{$id=$_REQUEST['id'];
		     echo"saved&profile id=$id";
			}
			
			
			  echo"<form action='data.php' method='post'>

<h2><b><center><u>Teacher Profile</u></b></center></h2>

<div class='row'>
<div class=' col-md-12'>
<center><img src='teacher image.jpg' ></center>
</div>
</div>
<br/>



<div class='row'>
<label class='col-md-3'> your Name:</label>
<div class='col-md-8'>
<input type='text' name= 'username' class='form-control'/>
</div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>your institute name:</label>
<div class='col-md-8'>
<input type='text' id='institute' name='institute' class='form-control'/>
</div>
</div>
</br>






<div class='row'>
<label class='col-md-3'>email:</label>
<div class='col-md-8'>
<input type='email' id='email' name='email' class='form-control'/>
</div>
</div>
</br>

<div class='row'>
<label class='col-md-3'>city:</label>
<div class='col-md-8'>
<input type='text' name='city' id='city ' class='form-control'/>
</div>
</div>
</br>


<div class='row'>
<label class='col-md-3'>Gender:</label>
<div class='col-md-8'>
Male&nbsp;<input type='radio' id='rmale' value='male' name='gender' checked />&nbsp;&nbsp;
Female&nbsp;<input type='radio' id='rfemale' value='female' name='gender'/>&nbsp;&nbsp;
Others&nbsp;<input type='radio' id='rother' value='others' name='gender' />

</div>
</div>
</br>


<div class='row'>
<label class='col-md-3'>speciality:</label>
<div class='col-md-8'>
<input type='text' id='special' name='special' class='form-control'/>
</div>
</div>
</br>


<div class='row'>
<label class='col-md-3'>years in practice:</label>
<div class='col-md-8'>
<input type='text' id='practice' name='practice' class='form-control'/>
</div>
</div>
</br>




 
<div class='row'>
<div class='col-md-offset-3 col-md-5'>
<center><input type='submit' name='submit1' class='btn btn-primary'/></center>
</div>
</div>
</form>
  
			
			
			
			</div>
			
		
	</div>";

echo "</div>";
echo "</div>";

include_once("footer.php");

?>
</div>

</body>
</html>