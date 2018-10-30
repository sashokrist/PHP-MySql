<?php
include 'connection.php';


// username and password sent from form
$username=$_POST['username'];
$password=$_POST['passwprd'];


$query = "SELECT * FROM users  WHERE email='$username' and password='$password'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_array($result))
  {
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $row["id"];
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      header('Location: profile.php');
    } else {
      echo "Please log in first to see this page.";
    }

  }
}
