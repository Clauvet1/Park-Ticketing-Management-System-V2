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
        <?php include'includes/main_navbar.php';?>
        <?php include'includes/sub_navbar.php';?>
      </div>
      <div class="col-lg-9 col-md-8">
        <div class="manage_ticket_content">
            <h1 class="hs mt-3">Foreigner Ticket</h1>
            <hr class="h">
            
            <form action="includes/f_ticket.php" method="POST">
                <div class="form_box">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="lab">
                                <label class="w-100" for="">Customer Name</label>
                                <input type="text"  id="customer" name="customer_name" placeholder="Enter Customer Name">
                            </div>
                            <div class="lab">
                               
                                <label class="w-100" for="">&numero; Adults</label>
                                <input type="number" id="adult_num" min="0" max="10" onclick="displayAdultPrice();" name="adult_number" placeholder="Enter the number of adults">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="lab">
                                <label class="w-100" for="">Ticket For</label>
                                <select name="ticket_for" id="">
                                    <option value="70_sitter_Bus">70 sitter Bus</option>
                                    <option value="30_sitter_Bus">30 sitter Bus</option>
                                </select>
                            </div>
                            <div class="lab">
                                <label class="w-100" for="">&numero; Child/ Children</label>
                                <input type="number" id="child_num" onclick="displayChildPrice();" value="1" min="0" max="10" name="child_num" placeholder="Enter number of children">
                            </div>
                        </div>
                    </div>
                    
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                       
                            <table class="w-100">
                                <thead>
                                    <tr class="bg-success text-center">
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Sits</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr class="text-center">
                                        <td>Adult(s)</td>
                                        <td id="A_price">..</td>
                                        <td id="A_sits">..</td>
                                    </tr>
                                   <tr class="text-center">
                                   <td>Child(ren)</td>
                                        <td id="C_price">..</td>
                                        <td id="C_sits">..</td>
                                    </tr>
                                </tbody>
                            </table>

                            
                        </div>
                        <div class="col-lg-6">
                            <div class="lab">
                                <label class="w-100" for="">Total cost</label>
                                <div class="row">
                                <b class="col-lg-2"><p id="total"></p></b>
                                <p class="col-lg-4">FCFA</p>
                            </div>
                            <div class="row py-2">
                                      <input class="col-lg-10" type="number" name="total" min="0" placeholder="Enter the total amount above here"><div class="col-lg-2">FCFA</div>
                                </div>
                               
                            </div>
                            <div class="lab">
                                <label class="w-100" for="">Change</label>
                                <div class="row">
                                      <input class="col-lg-10" type="number" name="change" min="0" placeholder="Enter change"><div class="col-lg-2">FCFA</div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <label for="">Date</label>
                            <input class="w-25" name="sold_date" type="date">
                        </div>
                        <div class="col-lg-6 text-center">
                            <h1 class="text-success shadow">Foreigner Ticket</h1>
                        </div>
                    </div>
                    <hr>
                   <center><button type="submit" class="save mx-5 px-3 btn btn-outline-success"  name="submit">SAVE</button></center>
                </div>
            </form>
        </div>
      </div>
    </div>
    </div>
    <?php
$sql = "SELECT* FROM manage_ticket WHERE nationality = 'foreigner';";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){ ?>


      <?php include'includes/script.php'; ?>
      <?php     }
} ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <?php include'includes/footer.php'?>
</body>
</html>
<?php }?>