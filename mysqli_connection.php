<?php
//echo "connection page<br/>";
$server="localhost";
$db_userid="root";
$db_password="";
$database="sdata";

$con=mysqli_connect($server,$db_userid,$db_password,$database);
if($con)
{
	//echo "server  & database connected";
		
}
else
{
	//echo "server & database connection  error";
	exit;
}
?>