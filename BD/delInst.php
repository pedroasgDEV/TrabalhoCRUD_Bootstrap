<?php
	include_once("connectDB.php");
	$id=$_GET['id'];
	$sql = "DELETE FROM instituicao WHERE id ='$id'";
	$criarest= mysqli_query($conectar,$sql);
	header("Location:../login.php");
?>