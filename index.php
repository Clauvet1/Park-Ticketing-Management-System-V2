  <?php  include'includes/header.php';
  ?>

<body>
  <div class="main">
    <div class="row">
      <div class="coll col-lg-3 col-md-4">
    <?php include'includes/main_navbar.php'; ?>
    <?php include'includes/sub_navbar.php'; ?>
  </div>
  <div class="col-lg-9 col-md-8">
      <div class="bg_top">
        <h3 class="text-center">WELCOME <span class="mx-2"><?= $_SESSION['first_name']?></span></h3>
      </div>
      <div class="content">
        <h1 class="hs text-white my-4">Park Ticketing System</h>
        <hr>
        <h3>Dashboard</h3>
        <div class="container">
        <div class="row">
          <?php 
          $sql = "SELECT * FROM normal_ticket;";
          $result = mysqli_query($conn, $sql);
          $rowcount = mysqli_num_rows($result);
             ?>

          <div class="col-lg-3">
            <div class="box">
              <div class="box_content p-2">
                <div class="data">
                <p class="total_result"><?= $rowcount?></p>
                <p>Total &numero; <br>Foreigners Today</p>
                </div>
                <div class="image">
                  <img class="IMG1" src="images/booking.png" alt="">
                </div>
              </div>
              
            </div>
          </div>
          <?php    
          
          $sql = "SELECT * FROM foreigner_ticket;";
          $result = mysqli_query($conn, $sql);
          $rowcount = mysqli_num_rows($result) ?>

        
          <div class="col-lg-3">
            <div class="box">
              <div class="box_content p-2">
                <div class="data">
                <p class="total_result"><?= $rowcount?></p>
                <p>Total &numero; <br>Foreigners Today</p>
                </div>
                <div class="image">
                  <img class="IMG1" src="images/packing.jpg" alt="">
                </div>
              </div>
              
            </div>
          </div>
          <?php    
          ?>
        </div>
        </div>
        
      </div>
      <div class="content2">

   </div>
    </div>
    </div>
   
  </div>
  <?php include'includes/footer.php'?>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>