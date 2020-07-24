<?php
$sql = "CREATE DATABASE user";
    if ($conn->query($sql) === TRUE) {
      echo "Database created successfully";
     } else {
      echo "Error creating database: " . $conn->error;
            } 






// sql to create table
   $sql = "CREATE TABLE login(
   username varchar(30) NOT NULL,
   password VARCHAR(30) NOT NULL,
   email VARCHAR(50),
   phone int(25))";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
?>