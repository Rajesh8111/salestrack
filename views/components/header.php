<header id="header">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
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
              <a class="nav-link" href="addnew.php">Track Call</a>
            </li>
              
              
            <div class="dropdown">
            <button class="btn btn-tranparent text-white dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <button class="btn btn-tranparent text-white dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            By Status
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <a class="dropdown-item" href="viewcalls.php">All</a>
            <a class="dropdown-item" href="viewcalls.php?category=all&status=Green">Green</a>
            <a class="dropdown-item" href="viewcalls.php?category=all&status=Red">Red</a>
            <a class="dropdown-item" href="viewcalls.php?category=all&status=Amber">Amber</a>
            </div>
          </div>
          <a href="../model/export3.php" class="btn btn-tranparent text-white">Export</a>
          
          </ul>

            <div class="btn-group ">
                <button type="button" class="btn btn-tranparent text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="../assets/images/loading.gif" alt="loading..." class="loading" width=20px; style="display:none;">
                    <?php echo $_SESSION["name"] ?>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button" id="logout">Logout</button>
                </div>
            </div>

        </div>
      </nav>
    </header>