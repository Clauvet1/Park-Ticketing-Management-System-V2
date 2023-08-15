<?php include'includes/header.php' ?>
    <body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card shadow p-3">
            <div class="h3 text-success text-center">Sign In</div>
            <form action="includes/logIn.php" method="post" class="form">
                <div class="input-group my-2">
                    <div class="input-group-prepend rounded-left"><div class="input-group-text rounded-left rounded-0 "><i class="bi bi-person-fill"></i></div></div>
                    <input type="text" name="user_id" placeholder="Enter Username or email">
                </div>
                <div class="input-group my-2">
                    <div class="input-group-prepend rounded-left"><div class="input-group-text rounded-0"><i class="bi bi-key-fill"></i></div></div>
                    <input type="password" name="password"   placeholder="Enter Password">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" name="submit" class="btn btn-success btn-md">Submit</button>
                </div>
                <div><a href="signUp.php">SignUP</a></div>
            </form>
        </div>
    </div>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="jquery-3.6.1.js"></script>
    <script src="bootstrap/bootstrap-icons/bootstrap-icons.json"></script>
</body>
</html>