<?php
  
// Server name must be localhost
$servername = "bflmysql.mysql.database.azure.com";
  
// In my case, user name will be root
$username = "bflmysql@bflmysql";
  
// Password is empty
$password = "Password123$";
  
// Creating a connection
$conn = new mysqli($servername, 
            $username, $password);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failure: " 
        . $conn->connect_error);
} 
  

// Closing connection
$conn->close();
?>
