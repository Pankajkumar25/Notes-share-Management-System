<?php include("profile_info.php"); ?>

<?php require_once("mysqli_connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  require("linkfile.php");
  ?>
  <script>
function confirm_msg()
{
  return confirm("Are you sure to Delete");
}
</script>
</head>
<body>

<div class="container-fluid bg-info">


<?php
//include("header.php");
echo "<br/>";
include("adminmainmenu.php");
echo "<div class='row'>";

echo "<div class='col-md-3'>";
include("adminleftmenu.php");
echo "</div>";
echo "<div class='col-md-9'>";
echo"
<div class='panel panel-primary'>
<div class='panel-heading'>
<label><h2>Delete panel</h2></label>
</div>
<div class='panel-body min-h'>
<form action='admin_data.php' method='post' enctype='multipart/form-data' >

<div class='row'>
<label class='col-md-3'>Delete Stream </label>
<div class='col-md-5'>

<select name='cname' class='form-control'>";

$sql="select distinct(stream) from subject_list";
$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
while($row_data=mysqli_fetch_array($query))
{
  echo "<option value='$row_data[0]'>$row_data[0]</option>";
  
}
echo "
</select>
</div>
<input type='submit' name='delete1' value='Delete' onclick='return confirm_msg(1,$row_data[id])' class='btn btn-danger'/>
</div>
</br>
</form>



<form action='admin_data.php' method='post' enctype='multipart/form-data' >
<div class='row'>
<label class='col-md-3'>Delete Subject </label>
<div class='col-md-5'>

<select name='subject' class='form-control'>";

$sql="select distinct(subject) from subject_list";
$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
while($row_data=mysqli_fetch_array($query))
{
  echo "<option value='$row_data[0]'>$row_data[0]</option>";
  
}

echo "
</select>
</div>
<input type='submit' name='delete2' value='Delete' onclick='return confirm_msg(1,$row_data[id])' class='btn btn-danger'/>
</div>
<br/>
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