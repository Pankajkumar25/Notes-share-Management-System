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

<div class="container">


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
<div class='panel-body min_h'>";


$sql="select stream,subject,price,description,cov_image,preview from postnotes ";
$query_result= mysqli_query($con,$sql);
$num=mysqli_num_rows($query_result);
$no_of_cols=mysqli_num_fields($query_result);
//echo "no of cols=$no_of_cols";

if($num>0)
{
$col_list=Array();

for($c=0;$c<$no_of_cols;$c++)
{
	
	$temp=mysqli_fetch_field($query_result);
	//echo $temp->name;
	$col_list[$c]=$temp->name;
	//echo "<hr/>";
}

//print_r($col_list);


echo "<table class='table table-hover'>";
echo "<tr>";
echo "<th>Sno</th>";
for($c=0;$c<count($col_list);$c++)
echo "<th>$col_list[$c]</th>";
echo "</tr>";
$sno=1;
while($row_data=mysqli_fetch_assoc($query_result) )
{
	
	echo "<tr>";
	echo "<td>$sno</td>";
	for($c=0;$c<count($col_list);$c++)
	{$col_name=$col_list[$c];
		echo "<td>$row_data[$col_name]</td>";}
	//echo "<td>$row_data[empname]</td>";
//	echo "<td>$row_data[empsalary]</td>";
	echo "</tr>";
	//print_r($row_data);
	$sno++;
	
}
echo"</table>";
echo "<center><h2 class='bg-info'>Total Profiles:$num</h2></center><br/>";
}
else
{
	echo "<center>Not Found</center>";
}

echo"
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