<?php include'includes/header.php';
  if(!isset($_SESSION['user_id'])){ 
    echo"
    <script>
        alert('You are not loggedIn');
        window.location.href='signIn.php';
    </script>
  ";
  }else{
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
        <h3 class="text-center">Weekly Report</h3>
      </div>
      <div class="content">
        <div class="date">
        <h1 class="year">2023</h1>
        </div>
        <div class="bg-white col-lg-3 text-center rounded-4 p-3"><h1 class="month">AUGUST</h1></div>
        <div class="container">
        <div class="row pt-3">
          <div class="col-lg-3 p-2 bg-white">
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
          }
          $total = $citizen_adults + $citizen_child + $foreigner_adults_count + $foreigner_child_count;
          
      

            $total_price = $citizen_total_cost + $foreigner_total_cost;
          ?>

            <h1 class="display-report mx-2"><span class=""><?= $total?></span> <br> Tickets Solds</h1><hr>
            <h1 class="display-report"><span><?= $total_price?></span>FCFA<br> has been made so far this month</h1>
          </div>
          <div class="col-lg-9">
            <div class="IMG3">
            </div>
           
          </div>
          </div>
          
        </div>

        
      </div>
    </div>
    </div>
   
  </div>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <?php include'includes/footer.php'?>
</body>
</html>
<?php } ?>