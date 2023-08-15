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
          <a class="no" href="search.php">
        <div class="row">
          <?php
        $sql = "SELECT * FROM foreigner_ticket;";
          $result = mysqli_query($conn, $sql);
          $rowcount = mysqli_num_rows($result);
          $foreigner_adults_count = 0;
          $foreigner_child_count = 0;
          $foreigner_total_cost = 0;
          if($rowcount > 0){
            while($row = mysqli_fetch_assoc($result)){
            $foreigner_adults = $row['num_of_adults'];
            $foreigner_child = $row['num_of_children'];
            $foreigner_total = $row['total_cost'];
            $foreigner_adults_count += $foreigner_adults;
            $foreigner_child_count += $foreigner_child;
            $foreigner_total_cost += $foreigner_total;
            }
          } 
          $sql = "SELECT * FROM normal_ticket;";
          $result1 = mysqli_query($conn, $sql);
          $rowcount1 = mysqli_num_rows($result1);
          $citizen_total_cost = 0;
          $citizen_adults_count = 0;
          $citizen_child_count = 0;
          if($rowcount1 > 0){
            while($row = mysqli_fetch_assoc($result1)){
            $citizen_adults = $row['num_of_adults'];
            $citizen_child = $row['num_of_children'];
            $citizen_total = $row['total_cost'];
            $citizen_total_cost += $citizen_total;
            $citizen_adults_count += $citizen_adults;
            $citizen_child_count += $citizen_child;
            }
          }?>

          <div class="col-lg-3">
            <div class="box">
              <div class="box_content p-2">
                <div class="data">
                <p class="total_result"><?= $citizen_adults_count?></p>
                <p>Total &numero; <br>Adult Citizens Today</p>
                </div>
                <div class="image">
                  <img class="IMG1" src="images/booking.png" alt="">
                </div>
              </div>
              
            </div>
          </div> 
          
          <div class="col-lg-3">
            <div class="box">
              <div class="box_content p-2">
                <div class="data">
                <p class="total_result"><?= $citizen_child_count?></p>
                <p>Total &numero; <br>Children who are Citizens Today</p>
                </div>
                <div class="image">
                  <img class="IMG1" src="images/booking.png" alt="">
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-3">
            <div class="box">
              <div class="box_content p-2">
                <div class="data">
                <p class="total_result"><?= $foreigner_adults_count?></p>
                <p>Total &numero; <br>Adult Foreigner Today</p>
                </div>
                <div class="image">
                  <img class="IMG1" src="images/packing.jpg" alt="">
                </div>
              </div>
              
            </div>
          </div> 
          
          <div class="col-lg-3">
            <div class="box">
              <div class="box_content p-2">
                <div class="data">
                <p class="total_result"><?= $foreigner_child_count?></p>
                <p>Total &numero; <br>Children who are Foreigners Today</p>
                </div>
                <div class="image">
                  <img class="IMG1" src="images/packing.jpg" alt="">
                </div>
              </div>
              
            </div>
          </div>
        </div>
        </a>
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