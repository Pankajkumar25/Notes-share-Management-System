<?php include("profile_info.php"); ?>
<!DOCTYPE html>
<?php include("mysqli_connection.php"); ?>
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
echo"<!--
<div class='panel panel-primary'>
<div class='panel-heading'>

	<a href='viewall_edit_delete.php'>
	<div class='pull-left col-md-2'>
    <div class='btn btn-success'>Back</div>   
	</div>
    </a>
	
<label>Find Any Book  :-</label>
    
</div>
<div class='panel-body min_h'>

<form action='findinadmin.php' method='post'>

<div class='row'>
<div class='col-md-2'>SEARCH NOTES</div>
<div class='col-md-5'>
<input type='text' name='search' class='form-control' placeholder='SEARCH ANY NOTES'>
</div>

<div class='col-md-1'>
<input type='submit' name='find' value='Search' class='btn btn-info'>
</div>



</div>


</form>
-->
";

if(isset($_POST['find']))
{
	
	echo "<br/>";
	$id=$_POST['search'];
	$email=$_SESSION['email_id'];
	
	//$query="select id,Notes,email from postnotes where notes like '$id%' and email like '$email'";
	$query="SELECT id,stream,subject,Notes,price,description,cov_image as Download FROM `postnotes` where notes like '$id%' and email like '$email'";

	//echo "<br/>$query";
	$query_result=mysqli_query($con,$query);
	$no_of_cols=mysqli_num_fields($query_result);
	$num=mysqli_num_rows($query_result);
	//echo "<br/>num=$num<br/>";
    //exit;
	
	
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

//echo "num:$num<br/>";
echo "<table class='table table-hover bg-info'>";
echo "<tr>";
for($c=0;$c<count($col_list);$c++)
	echo strtoupper("<th>$col_list[$c]</th>");

while($row_data=mysqli_fetch_assoc($query_result) )
{
	
	echo "<tr>";
	for($c=0;$c<count($col_list);$c++)
	{$col_name=$col_list[$c];
		if($col_name=='Download')
	echo "<td><a href='$row_data[Download]' class='btn btn-info'>Download</a> </td>";
	else
	echo "<td>$row_data[$col_name]</td>";

	}
	//echo "<td><a href='$row_data[$col_name]' class='btn btn-info'>Download</a> </td>";
	//echo "<td><a href='$row_data[cov_image]' class='btn btn-info'>Download</a> </td>";

		
	
	//echo "<td>$row_data[empname]</td>";
	//echo "<td>$row_data[empsalary]</td>";
	echo "</tr>";
	//print_r($row_data);
	
}

echo"</table>";
echo"</div>";

}
else {
	echo"
	<div class='panel panel-info'>
	<div class='panel-heading'>
	<center><h3>Not Found <center></h3>
	</div>
	</div>
  ";
	
}


}

echo "</div>";

echo "</div>";
echo "</div>";


include("footer.php");


?>


</div>

</body>

</html>