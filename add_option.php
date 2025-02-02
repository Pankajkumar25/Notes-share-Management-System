<?php include("profile_info.php"); ?>

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

<div class="container-fluid bg-info">


<?php
echo "<br/>";
include("header.php");
include("adminmainmenu.php");

echo "<div class='row'>";

echo "<div class='col-md-3'>";
include("adminleftmenu.php");
echo "</div>";
echo "<div class='col-md-9'>";
echo"
<div class='panel panel-primary'>
<div class='panel-heading'>
<label><h2>Add Panel</h2></label>
</div>
<div class='panel-body min-h'>





<form action='admin_data.php' method='post' enctype='multipart/form-data' >

<div class='row'>
<label class='col-md-3'>Add New Stream </label>
<div class='col-md-5'>
<input type='text' name='cname' class='form-control'/>

</div>
<input type='submit' name='admin_save1' value='Add' class='btn btn-success'/>

</form>

</div>
</br>

<div class='row'>
<label class='col-md-3'>All Stream:</label>
<div class='col-md-5'>
<form action='admin_data.php' method='post' enctype='multipart/form-data' >

<select name='stream' class='form-control'>";

$sql="select distinct(stream) from subject_list  where stream!=''";
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
<label class='col-md-3'>Add New Subject </label>
<div class='col-md-5'>
<input type='text' name='subject' class='form-control'/>
</div>
<input type='submit' name='admin_save2' value='Add' class='btn btn-success'/>
</form>

</div>
<br/>

<div class='row'>
<label class='col-md-3'>All Subject:</label>
<div class='col-md-5'>

<select name='subject' class='form-control'>";

$sql="select distinct(subject) from subject_list where subject!=''";
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