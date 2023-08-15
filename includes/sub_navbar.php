<nav class="navbar navbar-dark" aria-label="First navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">

      <form role="search" method="POST" class="my-4">
          <input class="form-control" name="search" type="search" placeholder="Search" aria-label="Search">
          <button name="submit" class="btn btn-outline-success my-1" type="submit">Search</button>
        </form>
        
        <ul class="navbar-nav me-auto mb-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="manage_ticket.php">Manage Tickets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="normal_ticket.php">Normal Ticket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="foreigner_ticket.php">Foreigner Ticket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="report.php">Report</a>
          </li>

          <form action="includes/logOut" method="POST">
                  <li><button type="submit" name="signout" href="report.php" class="btn btn-outline-danger text-decoration-none h5 text-white">SignOut</button></li>
                 </form>
         
        </ul>
        
      </div>
    </div>
  </nav>