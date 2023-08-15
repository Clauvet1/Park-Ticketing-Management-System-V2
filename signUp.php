<?php include'includes/header.php' ?>
    <body>
    <div class="container  d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card col-lg-6 col-md-6 col-sm-8 col-xs-7 shadow p-3">
            <div class="h3 text-success text-center">Sign Up</div>
            <form action="includes/register.php" method="post" class="form">
                <div class="input-group my-2"> <input type="text" name="fname"  placeholder="firstName">
                </div>
                <div class="input-group my-2">  <input type="text" name="lname"   placeholder="lastName">
                </div>
                <div class="input-group my-2">  <input type="email" name="email"  placeholder="Enter Email">
                </div>
                <div class="input-group my-2">  <input type="text" name="user_id"  placeholder="Username">
                </div>
                <div class="input-group my-2">  <input type="password" name="password"   placeholder="Enter Password">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" name="submit" class="btn btn-success btn-md">SignUp</button>
                </div>
                <div><a href="signIn.php">Already have an account? SignIN</a></div>
            </form>
        </div>
    </div>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="jquery-3.6.1.js"></script>
    <script src="bootstrap/bootstrap-icons/bootstrap-icons.json"></script>
</body>
</html>