<?php session_start(); ?>
<!DOCTYPE html>
<?php include("mysqli_connection.php"); ?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container-fluid bg-info">


<html lang="en">
<head>
  <title>notes and content sharing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  //require("linkfile.php");
  ?>
</head>
<body>

</br>
<?php
include("header.php");
include("comment.php");
include("homemainmenu.php");
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="c1.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>UP</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="c2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>HR</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="c3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>PB</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
</div>  
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<?php
echo "<br/>";
echo "<div class='row'>";

echo "<div class='col-md-12'>";
echo"
<div class='panel panel-success'>
<div class='panel-heading'>
<div class='panel-body min-h'>

";

$pageno=0;
if(isset($_REQUEST['pageno']))
{$pageno=$_REQUEST['pageno'];
$id=$_SESSION['id'];

}
if(isset($_POST['find']))
{$id=$_POST['search'];
if($id!="")
$_SESSION['id']=$id;
}



$size=2;
$offset=$pageno*$size;
$sql1="";
if($id!="")
{
	$sql1="where notes like '$id%' 
or description like '$id%' or subject like '$id%' or stream like '$id%'";
}

$sql="select id,stream,subject,price,description,Notes,cov_image from postnotes $sql1";
//echo $sql;

$query=mysqli_query($con,$sql);
$total_rows=mysqli_num_rows($query);
$total_pages=round($total_rows/$size);

$sql="select id,stream,subject,price,description,Notes,cov_image from postnotes where notes like '$id%' 
	or description like '$id%' or subject like '$id%' or stream like '$id%' limit $offset,$size";

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
	echo "<div class='col-md-6'>";
	//echo"<div class=' panel-heading'></div>";
	echo "<table class='table table-bordered'>";
	
    $subject="";
    for($c=0;$c<count($col_list);$c++)
	{
		$col_name=$col_list[$c];		
		echo "<tr><th>$col_name</th><td>$row_data[$col_name]</td></tr>";
		if($c==0)
		$subject=$row_data[$col_name];
	}
	 
echo "<tr><th>Download Notes:</th><td><a href='$row_data[cov_image]' class='btn btn-success'>Download</a> </td></tr>";

echo "</table>";

echo "</div>";


}
echo "<center class='panel-footer-warning col-md-12'>";

if($pageno>0)
{
$lastpageno=$pageno-1;
echo "<a href='search.php?pageno=$lastpageno' class='btn btn-info'>Previous</a>";
}
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

for($i=0,$j=1;$i<$total_pages;$i++,$j++)
{
	echo "<a href='search.php?pageno=$i'>$j</a> &nbsp;&nbsp;";
}


if($pageno<$total_pages-1)
{
$pageno++;
echo "<a href='search.php?pageno=$pageno' class='btn btn-info'>Next</a>";
}
echo "</center>";





echo"
</div>
</div>
";


include("footer.php");


echo "</div>";
echo "</div>";



?>


</div>

</div>
</div>

</body>

</html>