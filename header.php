<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-cart-arrow-down"></i> Cart</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-cog"></i> User account</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <?php
          include 'connection.php';
          session_start();
          if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo '<a class="dropdown-item" href="profile.php">Profile</a>';
            echo '<a class="dropdown-item" href="logout.php">Logout</a>';
          } else{
            echo ' <a class="dropdown-item" href="login.php">Login</a>';
            echo '<a class="dropdown-item" href="register.php">Register</a>';
          }
          ?>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="post">

      <input name="keyword" class="form-control mr-sm-2" type="text" placeholder="enter title" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>