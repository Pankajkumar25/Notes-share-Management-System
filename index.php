<!DOCTYPE html>
<html lang="en">
<head>
  <title>notes and content sharing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="container-fluid bg-info">
</br>


<?php
include("header.php");
include("comment.php");
include("homemainmenu.php");


if(isset($_REQUEST['id']))
{
	$id=$_REQUEST['id'];
	echo"<center><h1>Register Successfully id=$id</h1></center>";
}
$msg="";
if(isset($_REQUEST['case']))
{
	$caseno=$_REQUEST['case'];
	if($caseno==1)
		$msg="password miss Match";
	if($caseno==2)
		$msg="user not found";
}
echo "<div class='row'><div class='col-md-12'><h1><center><b>$msg</h1></b></center></div></div>";


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
          <h3>1</h3>
          <p>upload notes</p>
        </div>
      </div>

      <div class="item">
        <img src="c2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>2</h3>
          <p>sharing is caring</p>
        </div>
      </div>
    
      <div class="item">
        <img src="c3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>3</h3>
          <p>study well!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span><img src="assets/icons/arrow-left-circle.svg" class="glyphicon glyphicon-chevron-right" ></span>
	  <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span><img src="assets/icons/arrow-right-circle.svg" class="glyphicon glyphicon-chevron-right" ></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<?php include("categories.php");?>
</div>


</body>
</html>
