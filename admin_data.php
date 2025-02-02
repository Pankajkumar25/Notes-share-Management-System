<?php
require("mysqli_connection.php");


if(isset($_POST['delete1']))
{

$stream_value=$_POST['cname'];

$query="DELETE FROM `subject_list` WHERE stream='$stream_value'";
//echo $query;
//exit;
if(mysqli_query($con,$query))   //if(mysqli_query($con,$query))
{
	header("Location:delete_option.php");
}
else
{
    echo"error";
}
	
}
else if(isset($_POST['delete2']))
{

$subject_value=$_POST['subject'];

$query="DELETE FROM `subject_list` WHERE subject='$subject_value'";
//echo $query;
//exit;
if(mysqli_query($con,$query))   //if(mysqli_query($con,$query))
{
	header("Location:delete_option.php");
}
else
{
    echo"error";
}
	
}
else if(isset($_POST['admin_save1']))
{
$stream_value=$_POST['cname'];


$query="insert into subject_list(stream) values('$stream_value')";
//echo $query;
//exit;
if(mysqli_query($con,$query))   //if(mysqli_query($con,$query))
{
	header("Location:add_option.php");
}
else
{
    echo"error";
}
}


else if(isset($_POST['admin_save2']))
{
$stream_value=$_POST['stream'];
$subject_value=$_POST['subject'];


$query="insert into subject_list(stream,subject) 
values('$stream_value','$subject_value')";
//echo $query;
//exit;
if(mysqli_query($con,$query))   //if(mysqli_query($con,$query))
{
	header("Location:add_option.php");
}
else
{
    echo"error";
}

}
?>