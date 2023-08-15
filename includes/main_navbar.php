<div class="main_navbar">
            <img src="images/logo.png" alt="" class="logo">
            <h2 class="text-white text-center">ADMIN</h2>
            <nav>
               
              
              <ul class="mt-5">
                  <li><a href="index.php" class="text-decoration-none h4 text-white">Dashboard</a><img src="images/arrow.png" class="nav-arrow"></li>
                  <li><a href="manage_ticket.php" class="text-decoration-none h5 text-white">Manage Ticket</a><img src="images/arrow.png" class="nav-arrow"></li>
                  <li><a href="normal_ticket.php" class="text-decoration-none h5 text-white">Normal Ticket</a><img src="images/arrow.png" class="nav-arrow"></li>
                  <li><a href="foreigner_ticket.php" class="text-decoration-none h5 text-white">Foreigner Ticket</a><img src="images/arrow.png" class="nav-arrow"></li>
                  <li><a href="report.php" class="text-decoration-none h5 text-white">Reports</a><img src="images/arrow.png" class="nav-arrow"></li>
                 <?php 
                    if(isset($_SESSION['user_id'])){ ?>
                        <form action="includes/logOut.php" method="POST">
                            <li><button type="submit" name="submit" class="btn btn-outline-danger text-decoration-none h5 text-white">SignOut</button></li>
                        </form>
                 <?php   } 
                    else{ ?>
                        <form action="includes/logIn.php" method="POST">
                        <li><button type="submit" name="submit" class="btn btn-outline-success text-decoration-none h5 text-white">SignIn</button></li>
                        </form>
                 <?php } ?>

                  </ul>
            </nav>
</div>