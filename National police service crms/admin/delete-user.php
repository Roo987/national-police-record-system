<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "users";

// Create connection
$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  // sql to delete a record
  $sql = "DELETE FROM complainant WHERE id=''";
  
  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  ?>