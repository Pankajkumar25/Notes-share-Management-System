<?php
session_start();
require("mysqli_connection.php");

if(isset($_SESSION['id']))
{
	$table_name=$_SESSION['usertype'];
	$id=$_SESSION['id'];
$sql="select * from reg where id='$id'";
$query=mysqli_query($con,$sql);
$row_data=mysqli_fetch_row($query);
$_SESSION['email_id']=$row_data[1];
$_SESSION['ref_id']=$row_data[4];

}
else{
	header("Location:index.php");
}
?>