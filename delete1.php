<?php
include("connection.php");
require "Database.php";
require "books.php";
include "session.php";

 if($_GET['bookID'])
 {
	 $rentBookSelected = $_GET['bookID'];
	 $databaseConnection->insertRequest($rentBookSelected,$stdId);
	 echo "<script>
	 alert('Requeest For Book Rent Sent to Admin');
	 window.location.href='userIndex.php';
	 </script>";
}
?>

