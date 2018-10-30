<?php
    session_start();
    include 'connection.php';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $id = $_SESSION['id'];
  $title = $_GET['title'];
  $query = "SELECT * FROM movies  WHERE title = '$title'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_array($result)){
      $title = $row["title"];
      $description = $row["description"];
      $release_year = $row["release_year"];
      $cover = $row["cover"];
      $gerne = $row["gerne"];
      $actors = $row["actors"];
      $directors = $row["directors"];
      $price = $row["price"];
      $youtube = $row["youtube"];

      $sql = "INSERT INTO wishlist (id, title, release_year, cover, gerne, actors, directors, price, youtube)
      VALUES ('$id', '$title', '$release_year', 'cover', '$gerne', '$actors', '$directors', '$price', '$youtube')";
      if ($conn->query($sql) === TRUE) {
        echo "Movie is added to Wish List";
        header( "Refresh:5; profile.php", true, 303);
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  }

} else {
  echo '<h3>You are no logged!<a href="login.php"> Please Login</a> </h3>';
}