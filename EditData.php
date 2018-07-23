<?php
   session_start();
   $id=$_SESSION["id"] ;
   session_destroy(); 
   require 'config.php';
   $date = date("Y-m-d h:i:s",strtotime('+4 hours'));
	$head=$_POST['heading'];
	$data=$_POST['newsbody'];
	//$statement="insert into test(heading,summertext) values ('$head','$data')";
	$statement="UPDATE test SET heading='$head',summertext='$data',datetime='$date' WHERE id='$id'";
	if(mysqli_query($conn,$statement))
	{
		//echo "head recived";
		header('location:home.php');
	}
	else
		mysqli_error($conn);

	mysqli_close($conn);