<?php
function dbconnect(){
  $servername = "remotemysql.com";
  $username = "0u8Xxq6Xww";
  $password = "LWVxFHZIAP";
  $db = "0u8Xxq6Xww";
  $conn = mysqli_connect($servername, $username, $password, $db);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
    return $conn;
  }
}
?>
