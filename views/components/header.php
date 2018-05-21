<!-- CSS Styles -->
<style>
  .navbar{
    /* background-image: linear-gradient(to left bottom, #36b1d3, #417fa3, #3c516e, #292939, #050008); */
    background-color: #fff !important;
    color: #333 !important;
    box-shadow : 2px 2px #f1f1f1;
  }
  .navbar a{
    color: #333 !important;    
  }
</style>
<!-- Html content -->
<header id="header">
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light" >
        <a class="navbar-brand" href="home.php">Sales Call Tracker</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home </a>
            </li>
            <li class="nav-item active">
              
              <a class="nav-link" href="addnew.php">
              <i class="fas fa-address-card"></i>
              Track Call</a>
            </li>
              
              
            <div class="dropdown">
            <button class="btn btn-tranparent  dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            By Category
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <a class="dropdown-item" href="viewcalls.php">All</a>
            <a class="dropdown-item" href="viewcalls.php?category=Win Telco&status=All">Win Telco</a>
            <a class="dropdown-item" href="viewcalls.php?category=Other Telco&status=All">Other Telco</a>
            <a class="dropdown-item" href="viewcalls.php?category=Non Telco&status=All">Non Telco</a>
            <a class="dropdown-item" href="viewcalls.php?category=Others&status=All">Others</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="btn btn-tranparent  dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            By Status
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <a class="dropdown-item" href="viewcalls.php">All</a>
            <a class="dropdown-item" href="viewcalls.php?category=all&status=Green">Green</a>
            <a class="dropdown-item" href="viewcalls.php?category=all&status=Red">Red</a>
            <a class="dropdown-item" href="viewcalls.php?category=all&status=Amber">Amber</a>
            </div>
          </div>
          <a href="../model/export3.php" class="btn btn-tranparent">Export</a>
          
          </ul>

            <div class="btn-group ">
                <button type="button" class="btn btn-tranparent  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="../assets/images/loading.gif" alt="loading..." class="loading" width=20px; style="display:none;">
                  <img src="../assets/images/svg/user_black.svg"  width="30px;" >                    
                  <?php echo $_SESSION["name"] ?>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button" id="logout">Logout</button>
                </div>
            </div>

        </div>
      </nav>
    </header>