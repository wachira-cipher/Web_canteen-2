<?php
include "Src/Templates/header.php";
?>

  <br>
  <button class="btn btn-info" class="d-flex" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">New</button>



  <br>
  <section class="main">
    <div class="container">
      <div class="row">
        <div class="column-lg-3">
          <h1 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Best Snacks Ever!!</h1>
          <a href="http://localhost/web_canteen/Src/Pages/Shop.php"><button type="button" class=" btn btn-primary"> Go Shop</button></a>

        </div>
        <div class="row">
          <div class="col-lg-2 py-0">
            <div class="card-body">
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col ">
            <div class="card-group">
              <div class="card" style="width: 18rem; ">
                <img src="Assets/Images/217.kebabs.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Fast Snacks</h5>
                  <p class="card-text">Fast snacks made by experts</p>
                  <a href="http://localhost/web_canteen/Src/Pages/Fast_snacks.php"><button type="primary" class="btn btn-primary"> See More</button></a>



                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="Assets/Images/1.SOFT-DRINKS.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title py-3">Drinks</h5>
                  <p class="card-text">Get all soft-drinks you can ever think of!</p>
                  <a href="http://localhost/web_canteen/Src/Pages/drinks.php"><button type="primary" class="btn btn-primary"> See More</button></a>



                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="Assets/Images/211.burger.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Foods</h5>
                  <p class="card-text"></p>
                  <a href="http://localhost/web_canteen/Src/Pages/foods.php">
                    <button type="primary" class="btn btn-primary"> See More</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br><br>
      <br><br><br>
      <br><br><br>
      <br><br><br>
      <br><br><br>
      <br><br><br>
  </section>

  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="index.html">Previous</a></li>
      <li class="page-item"><a class="page-link" href="http://localhost/web_canteen/Src/Pages/Shop.php">1</a></li>
      <li class="page-item"><a class="page-link" href="http://localhost/web_canteen/Src/Pages/Fast_snacks.php">2</a></li>
      <li class="page-item"><a class="page-link" href="http://localhost/web_canteen/Src/Pages/Drinks.php"></a></li>
      <li class="page-item"><a class="page-link" href="http://localhost/web_canteen/Src/Pages/Foods.php">Next</a></li>
    </ul>
  </nav>
  <?php  
  include "Src/Templates/Footer.php";

  ?>





</body>

</html>