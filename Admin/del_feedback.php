<?php
session_start();
$con= mysqli_connect("localhost","root","","e_gram");
$id=$_REQUEST["id"];
$res=mysqli_query($con,"delete from feedback where id=$id");					
header("Location:view_feedback.php");
?>