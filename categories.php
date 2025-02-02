<?php require_once("mysqli_connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container-fluid">


<?php
echo "<br/>";
echo "<div class='row'>";
//echo "<div class='col-md-12'>";
echo"
<div class='panel panel-warning'>
<div class='panel-heading'>
<center><h3 class='m-4'><img src='assets/icons/menu-button-wide.svg'>&nbsp; Categories</h3></center>
</div>
<div class='panel-body'>
";

$pageno=0;
if(isset($_REQUEST['pageno']))
$pageno=$_REQUEST['pageno'];

$size=6;
$offset=$pageno*$size;


$sql="SELECT Notes,count(*) FROM `postnotes` group by notes;";
$query=mysqli_query($con,$sql);
$total_rows=mysqli_num_rows($query);
$total_pages=round($total_rows/$size);

//echo "Total rows=$total_rows<br/>total pages=$total_pages";

$sql="SELECT Notes,count(*) as No_of_Notes FROM `postnotes` group by notes limit $offset,$size";
//echo "<br/>size=$size pageno=$pageno offset=$offset<br/>";
//echo $sql;
$query_result= mysqli_query($con,$sql);
$num=mysqli_num_rows($query_result);
$no_of_cols=mysqli_num_fields($query_result);
//echo "col_count=$no_of_cols";
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
	echo "<div class='col-md-4'>";
	echo "<div class='panel panel-primary'>";
	//echo"<div class=' panel-heading'></div>";
	echo "<table class='table table-bordered'>";
	
    $subject="";
    for($c=0;$c<count($col_list);$c++)
	{
		$col_name=$col_list[$c];		
				/*
		if($c==1)
		{
			break;
		}
        if($col_name)
		{
			
		echo "<tr><th>$col_name</th><td>$row_data[$col_name]</td></tr>";	
		
	}
		else
		{
			}*/
		echo "<tr><th><img src='assets/icons/book-half.svg'>&nbsp; $col_name</th><td>$row_data[$col_name]</td></tr>";
		if($c==0)
		$subject=$row_data[$col_name];
	}
//	echo "<tr><th>No of Subject</th><td>$row_data[$col_name]</td></tr>";
	 echo"<tr><td><a href='home_grid.php?subject=$subject' class='btn btn-success'>View</a> </td></tr>";
	// echo "<tr><td colspan=2>  
	// <div class='btn-group btn-group-justified'>
	// <a href='$row_data[cov_image]' class='btn btn-danger'>Like</a> 
	// 				<a href='comment.php' class='btn btn-primary'>Comment</a>
	// 				<a href='$row_data[cov_image]' class='btn btn-warning'>Share</a>
	// 				</div>
	// </td></tr>";
	
echo "</table>";
echo "</div>";
echo "</div>";


}
echo "<center class='panel-footer-warning col-md-12'>";

if($pageno>0)
{
$lastpageno=$pageno-1;
echo "<a href='index.php?pageno=$lastpageno' class='btn btn-info'>Previous</a>";
}
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

for($i=0,$j=1;$i<$total_pages;$i++,$j++)
{
	echo "<a href='index.php?pageno=$i'>$j</a> &nbsp;&nbsp;";
}


if($pageno<$total_pages-1)
{
$pageno++;
echo "<a href='index.php?pageno=$pageno' class='btn btn-info'>
Next</a>";
}
echo "</center>";





echo"
</div>
</div>
";


include("footer.php");

//echo "</div>";
echo "</div>";

?>


</div>

</body>

</html>