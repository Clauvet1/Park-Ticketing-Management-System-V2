<?php  include'includes/header.php';
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
            <h1 class="hs mt-3">Manage Ticket</h1>
            <hr class="h">
            <form action="includes/m_ticket.php" method="POST">
                <div class="form_box">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="lab">
                                <label class="w-100" for="">Customer Name</label>
                                <input type="text" name="customer_name" placeholder="Enter Customer Name">
                            </div>
                            <div class="lab">
                                <label class="w-100" for="">&numero; Adults</label>
                                <input type="number" name="adult_number" placeholder="Enter the number of adults">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="lab">
                                <label class="w-100" for="">Ticket For</label>
                                <select name="" id="">
                                    <option value="">70 sitter Bus</option>
                                    <option value="">30 sitter Bus</option>
                                </select>
                            </div>
                            <div class="lab ">
                                <label class="w-100 disabled" for="">&numero; Child/ Children</label>
                                <input type="number" class="disabled" name="children_number" placeholder="Enter number of children">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                        <p class="text-danger h5">FILL ONLY THIS TABLE AND THE TICKET TYPE</p>  
                            <table>
                                <thead>
                                    <tr class="bg-success text-center">
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Sits</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Adult</td>
                                        <td><input type="text" name="adult_price" placeholder="adult price"></td>
                                       <td><input type="text" name="adult_sit_number" placeholder="enter the number of sits"></td> 
                                    </tr>
                                    <td>Child(ren)</td>
                                        <td><input type="text" name="child_price" placeholder="child/Children price"></td>
                                       <td><input type="text" name="child_sit_number" placeholder="enter the number of sits"></td> 
                                   <tr>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <div class="lab">
                                <label class="w-100" for="">Total cost</label>
                                <input type="number" name="total_cost" placeholder="Enter total cost">
                            </div>
                            <div class="lab">
                                <label class="w-100" for="">Change</label>
                                <input type="number" name="change" placeholder="Enter change">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <label for="">Date</label>
                            <input class="w-25" type="date">
                        </div>
                        <div class="col-lg-6 text-center">
                            <label for="">Ticket Type</label>
                            <select name="ticket_type" id="">
                                <option value="">Select a Ticket Type</option>
                                <option value="citizen">Citizen</option>
                                <option value="foreigner">Foreigner</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                   <center><button type="submit" class="save mx-5 px-3 btn btn-outline-success" name="submit">SAVE</button></center>
                </div>
            </form>
        </div>
      </div>
    </div>
    </div>
    <?php include'includes/footer.php' ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>