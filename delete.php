<?php

//including the database connection file
    include("config.php");
    //connect_db();
//getting id of the data from url
    $id = $_GET['id'];

//deleting the row from table // actually not deleting it just unlinking from the result
   // $result = mysqli_query($conn,"delete from test WHERE id='$id'");
	  $result = mysqli_query($conn,"UPDATE test SET flag='1' WHERE id='$id'");

	//close_db();
//redirecting to the display page (listdata.php in our case)
    header("Location:listdata.php");

?>

