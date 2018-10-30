<?php
include 'connection.php';
$userName = $_POST['username'];
$password =  $_POST['password'];
$admin = 0;
$query = "INSERT INTO users (email,password, admin) VALUES ('$userName','$password', '$admin')";
if(mysqli_query($conn, $query)){
  echo "User is register successfully.";
  header( "Refresh:5; login.php", true, 303);

} else{
  echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}