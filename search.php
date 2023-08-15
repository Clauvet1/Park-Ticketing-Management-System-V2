<?php include'includes/header.php';
if(!isset($_SESSION['userName'])){
  echo"
  <script>
      alert('You are not loggedIn');
      window.location.href='../signIn.php';
  </script>
";
}else{ ?>

          <body>
          <h1>Hello <span class="text-success"><?= $_SESSION['first_name'];?></span></h1>
        <h1 class="px-3 mt-5">This are are the Details On ticket Sales this months</h1>
        <div class="row mt-5">
          
          <?php
        $sql = "SELECT * FROM normal_ticket;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result); 
        ?>
        <h1 class=" px-4 text-success">For Citizens</h1>
        <?php  if($resultCheck > 0){
          while($row = mysqli_fetch_assoc($result)){ ?>

    
         <div class="row border border-success p-2 m-2">
          <div class="col-lg-2">
           <p><?= $row['customer_name']?></p>
          </div>
          <div class="col-lg-1">
           <p><?= $row['num_of_adults']?></p>
          </div>
          <div class="col-lg-1">
           <p><?= $row['num_of_children']?></p>
          </div>
          <div class="col-lg-2">
           <p><?= $row['ticket_for']?></p>
          </div>
          <div class="col-lg-2">
           <p><?= $row['total_cost']?>FCFA</p>
          </div>
          <div class="col-lg-2">
           <p><?= $row['customer_change']?>FCFA</p>
          </div>
          <div class="col-lg-2">
           <p><?= $row['sold_date']?></p>
          </div>
         </div>
         <?php   }
          }?>

<?php
        $sql = "SELECT * FROM foreigner_ticket;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result); 
        ?>
        <h1 class=" px-4 mt-5 text-success">For Foreigners</h1>
        <?php  if($resultCheck > 0){
          while($row = mysqli_fetch_assoc($result)){ ?>

    
         <div class="row border border-success p-2 m-2">
          <div class="col-lg-2">
           <p><?= $row['customer_name']?></p>
          </div>
          <div class="col-lg-1">
           <p><?= $row['num_of_adults']?></p>
          </div>
          <div class="col-lg-1">
           <p><?= $row['num_of_children']?></p>
          </div>
          <div class="col-lg-2">
           <p><?= $row['ticket_for']?></p>
          </div>
          <div class="col-lg-2">
           <p><?= $row['total_cost']?>FCFA</p>
          </div>
          <div class="col-lg-2">
           <p><?= $row['customer_change']?>FCFA</p>
          </div>
          <div class="col-lg-2">
           <p><?= $row['sold_date']?></p>
          </div>
         </div>
         <?php   }
          }?>
         </div>
        
        </div>
        
            <?php include'includes/footer.php' ?>
            
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>  
  </body>    
</html>
<?php }?>