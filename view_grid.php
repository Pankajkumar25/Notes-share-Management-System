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
<div class='panel panel-primary'>
<div class='panel-heading'>
View All Books  :-
</div>
<div class='panel-body min_h'>



";

$pageno=0;
if(isset($_REQUEST['pageno']))
$pageno=$_REQUEST['pageno'];

$size=4;
$offset=$pageno*$size;

$sql="select id,stream,subject,Notes,price,description,cov_image from postnotes ";
$query=mysqli_query($con,$sql);
$total_rows=mysqli_num_rows($query);
$total_pages=round($total_rows/$size);

//echo "Total rows=$total_rows<br/>total pages=$total_pages";


$sql="select stream,subject,price,description,cov_image from postnotes limit $offset,$size";
//echo "<br/>size=$size pageno=$pageno offset=$offset<br/>";
//echo $sql;

$query_result= mysqli_query($con,$sql);
$num=mysqli_num_rows($query_result);
$no_of_cols=mysqli_num_fields($query_result);

$col_list=Array();

for($c=0;$c<$no_of_cols;$c++)
{
	
	$temp=mysqli_fetch_field($query_result);
	//echo $temp->name;
	$col_list[$c]=$temp->name;
	//echo "<hr/>";
}

while($row_data=mysqli_fetch_assoc($query_result) )
{
	echo "<div class='col-md-6'>";
	echo "<div class='panel panel-primary'>";
	echo"<div class=' panel-heading'>Notes Share
	</div>";
	echo "<table class='table table-bordered'>";
	for($c=0;$c<count($col_list);$c++)
	{
		if($c==4)
		{
			break;
		}
		$col_name=$col_list[$c];
		if($col_name)
		
		echo "<tr><th>$col_name</b></th><td>$row_data[$col_name]</td></tr>";	
		else
		
	echo "<tr><th>$col_name</th><td>$row_data[$col_name]</td></tr>";
	
	}
	//echo "<tr><th>Cover Image:</th><td><img src='c1.jpg' width='100' height='100'/></td></tr>";
	echo "<tr><th>Download Notes:</th><td><a href='$row_data[cov_image]' class='btn btn-success'>Download</a> </td></tr>";
	
	echo "</table>";
	echo "</div>";

//echo "<center>";


echo "</div>";


}
echo "<center>";
if($pageno>0)
{
$lastpageno=$pageno-1;
echo "<a href='view_grid.php?pageno=$lastpageno' class='btn btn-info'>Previous</a>";
}
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

for($i=0,$j=1;$i<$total_pages;$i++,$j++)
{
	echo "<a href='view_grid.php?pageno=$i'>$j</a> &nbsp;&nbsp;";
}


if($pageno<$total_pages-1)
{
$pageno++;
echo "<a href='view_grid.php?pageno=$pageno' class='btn btn-info'>Next</a>";
}
echo "</center>";



echo "

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