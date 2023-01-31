<?php 
include __DIR__ . "/../Templates/header.php";
?>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <div class="container">
          <img src="http://localhost/web_canteen/Assets/Images/211.burger.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title py-9">burger</h5>
            <p class="card-text py-9">50.87</p>
          </div>
          <div class="card-footer">
            <img style="height: 20px; width: 20px;" src="http://localhost/web_canteen/Assets/Images/2.cart.jpg" alt=""><a
              href="http://localhost/web_canteen/Src/Pages/contacts.php"><button type="button" class=" btn btn-success"> Add to cart</button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="http://localhost/web_canteen/Assets/Images/217.kebabs.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kebabs</h5>
          <p class="card-text">125.99</p>
        </div>
        <div class="card-footer">
          <img style="height: 20px; width: 20px;" src="http://localhost/web_canteen/Assets/Images/2.cart.jpg" alt=""><a
            href="http://localhost/web_canteen/Src/Pages/contacts.php"><button type="button" class=" btn btn-success"> Add to cart</button></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="http://localhost/web_canteen/Assets/Images/223.mahamri.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Aunties Mahamri Mix</h5>
          <p class="card-text">60.79</p>
        </div>
        <div class="card-footer">
          <img style="height: 20px; width: 20px;" src="http://localhost/web_canteen/Assets/Images/2.cart.jpg" alt=""><a href="Pages/contacts.html"><button
              type="button" class=" btn btn-success"> Add to cart</button></a>
        </div>
      </div>
    </div>
  </div>
  <?php  
  include __DIR__ . "/../Templates/Footer.php";
?>