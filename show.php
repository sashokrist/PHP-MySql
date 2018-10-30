<?php
  include 'connection.php';
  ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>WEXO</title>

  <!-- Bootstrap core CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="jumbotron.css" rel="stylesheet">
</head>

<body>
<?php include 'header.php'; ?>
<main>
<div class="row" style="padding-left: 30%;">
  <div class="col-md-12 text-center">
    <h1 class="text-center" style="padding-top: 50px;">WEXO MOVIES</h1><br>
    <div>
      <div>
        <div>
          <?php
          $title = $_GET['title'];
          $query = "SELECT * FROM movies  WHERE title = '$title'";
          $result = mysqli_query($conn, $query);
          if(mysqli_num_rows($result) > 0)
          {
            while($row = mysqli_fetch_array($result))
            {
              ?>
              <div class="col-md-6">
                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;">
                  <p><?php echo $row["title"]; ?></p>
                  <img src="images/<?php echo $row["cover"]; ?>" class="img-responsive" style="width: 150px"; height="150px" /><br />
                  <p><?php echo $row["description"]; ?></p>
                  <p><?php echo 'Release year: '.$row["release_year"]; ?></p>
                  <p><?php echo 'Gerne: '.$row["gerne"]; ?></p>
                  <p><?php echo 'Actors: '.$row["actors"]; ?></p>
                  <p><?php echo 'Director: '.$row["directors"]; ?></p>
                    <p><?php echo 'Price: '.$row["price"]; ?>$</p>
                  <?php echo '<h3><b><a href="addToWishlist.php?title=' . $row['title'] . '">Add to Wish List</a></b></h3>'; ?>
                       <div>
                           <form class="form-control">
                               <button type="submit" class="btn btn-primary float-right">Buy</button>
                           </form>
                       </div><br>
                    <div>
                        <?php $url = $row["youtube"]; ?>
                        <h4>Movie trailer</h4>
                        <iframe width="360" height="315" src="<?php echo $url; ?>" frameborder="0"
                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
              </div>
              <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
  <footer class="text-muted">
    <div class="container">
      <p class="float-right">
        <a href="#">Back to top</a>
      </p>
      <b><h3 class="text-center">WEXO MOVIES</h3></b>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>