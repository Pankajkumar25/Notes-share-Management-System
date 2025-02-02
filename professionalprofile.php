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

echo "<div class='col-md-9'>
<div class='panel panel-info min_h'>
			<div class='panel-heading'>home page title </div>
			<div class='panel-body'>";
			if(isset($_REQUEST['id']))
			{$id=$_REQUEST['id'];
		     echo"saved&profile id=$id";
			}
			
			
			  echo"<form action='data.php' method='post' >
			
			
			
			
			  

<h2><b><center><u>professional profile</u></b></center></h2>

<div class='row'>
<div class=' col-md-12'>
<center><img src='teacher image.jpg' ></center>
</div>
</div>
<br/>



<div class='row'>
<label class='col-md-3'> your Name:</label>
<div class='col-md-8'>
<input type='text' name=' username' class='form-control'/>
</div>
</div>
<br/>


<div class='row'>
<label class='col-md-3'>Email-id:</label>
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
<label class='col-md-3'>speciality:</label>
<div class='col-md-8'>
<input type='text' id='special' name='special' class='form-control'/>
</div>
</div>
</br>


<div class='row'>
<label class='col-md-3'>professional Experience:</label>
<div class='col-md-8'>
<input type='text' id='experience' name='experience' class='form-control'/>
</div>
</div>
</br>



<div class='row'>
<label class='col-md-3'>certifications:</label>
<div class='col-md-8'>
<input type='text' id='certificate' name='certificate' class='form-control'/>
<center><br><input type='file' name='file1[]' multiple id='file 1'/></center>
</div>
</div>
</br>
</br>









 
<div class='row'>
<div class='col-md-offset-3 col-md-5'>
<center><input type='submit' name='submit2' value='ADD' class='btn btn-primary'/>
<input type='reset'     value='EDIT' class='btn btn-info'/></center>
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