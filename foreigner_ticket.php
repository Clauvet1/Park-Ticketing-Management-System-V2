<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mangae tickets</title>
    <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
</head>
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
            <form action="">
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
                            <div class="lab">
                                <label class="w-100" for="">&numero; Child/ Children</label>
                                <input type="text" name="customer_name" placeholder="Enter Customer Name">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
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
                                        <td>..</td>
                                        <td>..</td>
                                    </tr>
                                    <td>Child(ren)</td>
                                        <td>..</td>
                                        <td>..</td>
                                   <tr>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <div class="lab">
                                <label class="w-100" for="">Total cost</label>
                                <input type="text" name="total_cost" placeholder="Enter total cost">
                            </div>
                            <div class="lab">
                                <label class="w-100" for="">Change</label>
                                <input type="text" name="change" placeholder="Enter change">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <label for="">Date</label>
                            <input class="w-25" type="date">
                        </div>
                        <div class="col-lg-6 text-center">
                            <h1 class="text-success shadow">FOREIGNER</h1>
                        </div>
                    </div>
                    <hr>
                   <center><button type="submit" class="save mx-5 px-3 btn btn-outline-success" name="submit">PRINT</button></center>
                </div>
            </form>
        </div>
      </div>
    </div>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>