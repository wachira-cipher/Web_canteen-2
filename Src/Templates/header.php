<?php 
?>
<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      background-color: green;
    }
  </style>
  <title>Jonathan's canteen</title>
</head>

<meta charset="utf-8">
<meta name=" viewport" content="width=device-width" initial-scale=1;>
<!--bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="http://localhost/web_canteen/Assets/Styles/style.css">
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
</script>

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">WEBcantEEN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/web_canteen/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/web_canteen/Src/Pages/Foods.php"> Foods</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/web_canteen/Src/Pages/Store.php"> Store</a>

          </li>
          <li class="nav-item dropdown dropdown-menu-dark">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="http://localhost/web_canteen/Src/Pages/Drinks.php">Drinks</a></li>
              <li><a class="dropdown-item" href="http://localhost/web_canteen/Src/Pages/Fast_snacks.php">Fast Snacks</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="http://localhost/web_canteen/Src/Pages/About_us.php">About Us</a></li>
            </ul>
          </li>
        </ul>


        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  