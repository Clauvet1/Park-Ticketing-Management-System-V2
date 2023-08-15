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
  <div class="colll col-lg-9 col-md-8">
      <div class="bg_top">
        <h3 class="text-center">Weekly Report</h3>
      </div>
      <div class="content">
        <div class="date">
        <h1 class="year">2023...</h1>
        </div>
      
        
      </div>
    </div>
    </div>
   
  </div>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>