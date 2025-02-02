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


<form id='registration-form' action='data.php' method='post'>
<h2><b><center><u>Professional Profile</u></b></center></h2>
<input type='hidden' name='user_type' value='professional'/>
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
<div class='col-md-offset-4 col-md-5'>
<input type='submit' name='professional' class='btn btn-info'/>
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

</body>

</html>