<?php
session_start();
$con= mysqli_connect("localhost","root","","e_gram");
// include 'includes/header.php';

// include 'includes/sidebar.php';
// include 'includes/topbar.php';
$id=$_REQUEST["id"];
$res=mysqli_query($con,"delete from register where id=$id");			
header("Location:home.php");
?>