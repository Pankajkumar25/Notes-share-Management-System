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
//include("adminmainmenu.php");
echo "<br/>";
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
<div class='panel-body min_h'>
";

if(isset($_REQUEST['admin_save1']))
{
$query="SELECT dlike FROM `postnotes` WHERE id=55";
$query_result=mysqli_query($con,$query);
$num=mysqli_num_rows($query_result);
	//echo "<br/>num=$num<br/>";
if($num>0)
{		
		$row_data=mysqli_fetch_row($query_result);
		//echo "<br/>$row_data[1]<br/>$row_data[2]";
		//print_r($row_data);	
		echo "<table class='table'>";
		echo "<tr><th>Empid</th><td>$row_data[0]</td></tr>";
		echo "</table>";
		
$t=$row_data[0]+1;
$query="UPDATE postnotes SET dlike='$t' where id=55";
//echo $query;
//exit;
if(mysqli_query($con,$query))   //if(mysqli_query($con,$query))
{
    
	//header("Location:count.php");
}
}	
		
else
{
		echo "not found";
}
	
}

else if(isset($_REQUEST['admin_save2']))
{
	
$query="SELECT plike FROM `postnotes` WHERE id=55";
$query_result=mysqli_query($con,$query);
$num=mysqli_num_rows($query_result);
	//echo "<br/>num=$num<br/>";
if($num>0)
{		
		$row_data=mysqli_fetch_row($query_result);
		//echo "<br/>$row_data[1]<br/>$row_data[2]";
		//print_r($row_data);	
		echo "<table class='table'>";
		echo "<tr><th>Empid</th><td>$row_data[0]</td></tr>";
		echo "</table>";
		
$t=$row_data[0]+1;
$query="UPDATE postnotes SET plike='$t' where id=55";
//echo $query;
//exit;
if(mysqli_query($con,$query))   //if(mysqli_query($con,$query))
{
    
	//header("Location:count.php");
}
}	
		
else
{
		echo "not found";
}
	
}

echo"
<form action='count.php' method='post' enctype='multipart/form-data' >


<div class='row'>

<input type='submit' name='admin_save2' value='Like' class='btn btn-success'/>

</div>

<div class='row'>

<input type='submit' name='admin_save1' value='DisLike' class='btn btn-danger'/>

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