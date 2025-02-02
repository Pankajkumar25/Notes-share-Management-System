<?php
session_start();
$email=$_SESSION['email'];
echo "session value=$email";

$id=$_SESSION['id'];
echo "session value=$id";
?>