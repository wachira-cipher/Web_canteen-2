
                    <?php  
                    include __DIR__ . "/../Templates/header.php";
?>
                    <section class="form">
                    <form>
                  
                      <label for="fname">First name:</label><br>
                      <input type="text" id="fname" name="fname"><br>
                      <label for="lname">Last name:</label><br>
                      <input type="text" id="lname" name="lname">
                    </form> 
            
                </div>
              </div>
              <div class="row">
                <div class="col-lg-5 py-3">
                  <textarea name="" style="text-align: center; align-self: center;" class="form-control bg-light"  placeholder="Enter deal description"  rows="3" cols="3"></textarea>
                  <br><br>
                 <a href="https://tyson.wachira@securetech.co.ke"> <button type="button" class="btn btn-primary" >Submit</button></a>
                 <br><br>
                 <button type="button" class="btn-close" disabled aria-label="Close">
                </button>
                  <div class="alert alert-success" role="alert">
                    You have placed your order successfully!
                  </div>
                  
              
                </div>
              </div>
            </form>
          </section>
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="http://localhost/web_canteen/Src/Pages/Shop.php">Previous</a></li>
              <li class="page-item"><a class="page-link" href="http://localhost/web_canteen/Src/Pages/index.php">1</a></li>
              <li class="page-item"><a class="page-link" href="http://localhost/web_canteen/Src/Pages/Fast_snacks.php">2</a></li>
              <li class="page-item"><a class="page-link" href="http://localhost/web_canteen/Src/Pages/Drinks.php"></a></li>
              <li class="page-item"><a class="page-link" href="http://localhost/web_canteen/Src/Pages/Foods.php">Next</a></li>
            </ul>
          </nav>
          
              </div>
              
              <?php 
              include __DIR__ . "/../Templates/Footer.php";
?>

                

            
                        
        
    </body>
</html>