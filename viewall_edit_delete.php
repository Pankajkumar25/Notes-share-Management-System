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
function edit_msg()
{
  return confirm("Are you sure to Edit");
}
</script>

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
View All , Edit , Delete , Update :-
</div>
<div class='panel-body min_h'>

<form action='find_notes.php' method='post'>
<div class='row'>
<div class='col-md-2'></div>
<div class='col-md-6'>
<input type='text' name='search' class='form-control' placeholder='SEARCH ANY NOTES'>
</div>

<div class='col-md-1'>
<input type='submit' name='find' value='Search' class='btn btn-info'>
</div>



</div>


</form>
</br>
";



$pageno=0;

if(isset($_POST['update']))
{
	//echo "update case";
	//$pageno=$_REQUEST['pageno'];
	$id=$_POST['id'];
	echo "<br/>";
	$stream_value=$_POST['stream'];
    echo "<br/>";
    $subject_value=$_POST['subject'];
    echo "<br/>";
    $price_value=$_POST['price'];
    echo "<br/>";
    $description_value=$_POST['description'];
   

    // $sql="insert into postnotes(stream,subject,price,description,Notes) 
    // values('$stream_value','$subject_value','$price_value','$description_value','$Notes_value')";

    $sql="update postnotes set stream='$stream_value',subject='$subject_value',price='$price_value',description='$description_value' where id=$id";
	echo "<br/>";
	 //echo $sql;
	 //exit;
	if(mysqli_query($con,$sql))
	{
		echo"Your data is update successfully ";
		//header("Location:viewall_edit_delete.php?pageno=$pageno&id=$id&caseno=1");

	}
	else
	echo "error<br/>$sql";
	
}
if(isset($_REQUEST['caseno']))
{
	$caseno=$_REQUEST['caseno'];
	$id=$_REQUEST['id'];
	if($caseno==2)
		echo "id=$id Deleted ";
	else if($caseno==1)
		echo "id=$id updated ";
}
else if(isset($_REQUEST['act']))
{
	$act=$_REQUEST['act'];
	$id=$_REQUEST['id'];
	//echo "act=$act& id=$id";
	
	if($act==2)
	{
		$sql="delete from postnotes where id=$id ";
		if(mysqli_query($con,$sql))
		{
			echo"Your data is delete successfully";
			//header("Location:viewall_edit_delete.php?caseno=2&id=$id");
			
		}else
		echo "error<br/>$sql";
	}
	
}

$pageno=0;
if(isset($_REQUEST['pageno']))
$pageno=$_REQUEST['pageno'];

$size=4;
$offset=$pageno*$size;

$sql="select id,stream,subject,Notes,price,description from postnotes ";
$query=mysqli_query($con,$sql);
$total_rows=mysqli_num_rows($query);
$total_pages=round($total_rows/$size);

//echo "Total rows=$total_rows<br/>total pages=$total_pages";


$sql="select id,stream,subject,price,description from postnotes limit $offset,$size";
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

//print_r($col_list);

//echo "num:$num<br/>";
//echo "<table class='table table-hover'>";
echo "<table class='table table-bordered' bg-primary>";
echo "<form action='viewall_edit_delete.php' method='post'>";
//echo "<tr><td><input type='submit' value='Selected Rows Find/Delete' name='find1' class='btn btn-info'/></td></tr>";
echo "<tr class='bg-primary'>";
echo "<th>Sno</th>";
for($c=0;$c<count($col_list);$c++)
echo "<th>$col_list[$c]</th>";

echo "<th>Edit</th>";	
echo "<th>Delete</th>";
echo "<th>View</th>";
echo "</tr>";
$sno=1;
while($row_data=mysqli_fetch_assoc($query_result) )
{echo "<tr>";
	echo "<td >$sno</td>";
	if(isset($_REQUEST['act']) && $_REQUEST['act']==1 && $_REQUEST['id']==$row_data['id'])
	{
		echo "<form action='viewall_edit_delete.php?pageno=$pageno' method='post' onsubmit='return confirm_msg(2,$id)'>";
		for($c=0;$c<count($col_list);$c++)
		{$col_name=$col_list[$c];
		if($col_name=='id')
		echo "<td><input type='hidden' name='$col_list[$c]'  value='$row_data[$col_name]'/>$row_data[$col_name]</td>";
		
		else

		echo "<td><input type='text' name='$col_list[$c]'  value='$row_data[$col_name]' class='form-control'</td>";
	}
		echo "<td><input type='submit' value='Update'  name='update' class='btn btn-primary'/></td>";
		echo"<td><a href='viewall_edit_delete.php?pageno=$pageno'class='btn btn-info'>Cancel</a></td>";
		//echo"<td><a href=''class='btn btn-primary'>View</a></td>";
		echo "</form>";
		
		
	}
	
	else
	{
	
	for($c=0;$c<count($col_list);$c++)
	{$col_name=$col_list[$c];
		echo "<td>$row_data[$col_name]</td>";}
	echo"<td><a href='viewall_edit_delete.php?pageno=$pageno&act=1&id=$row_data[id]' onclick='return edit_msg()' class='btn btn-info'>Edit</a></td>";
	echo"<td><a href='viewall_edit_delete.php?pageno=$pageno&act=2&id=$row_data[id]'onclick='return confirm_msg(1,$row_data[id])' class='btn btn-danger'>Delete</a></td>";   //onclick='return confirm_msg(1,$id)'	
	echo"<td><a href='model_view.php?pageno=$pageno&act1=3&id=$row_data[id]'class='btn btn-success'>View</a></td>";
	//echo "<td>$row_data[empname]</td>";
//	echo "<td>$row_data[empsalary]</td>";
	
	}
	echo "</tr>";
	//print_r($row_data);
	$sno++;
}

echo "</form>";
echo"</table>";
echo "<center>";
if($pageno>0)
{
$lastpageno=$pageno-1;
echo "<a href='viewall_edit_delete.php?pageno=$lastpageno' class='btn btn-info'>Previous</a>";
}
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

for($i=0,$j=1;$i<$total_pages;$i++,$j++)
{
	echo "<a href='viewall_edit_delete.php?pageno=$i'>$j</a> &nbsp;&nbsp;";
}


if($pageno<$total_pages-1)
{
$pageno++;
echo "<a href='viewall_edit_delete.php?pageno=$pageno' class='btn btn-info'>Next</a>";
}
echo "</center>";

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