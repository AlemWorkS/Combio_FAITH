<?php include('connexion.php');?>
<!DOCTYPE html>
<html lang="fr">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index-2.html"><img src="images/logo.svg" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="images/logo-mini.svg" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item nav-search d-none d-md-flex">
            <div class="nav-link">
              <div class="input-group">
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
         
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>

          </li>
          
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="images/faces/face5.jpg" alt="image">
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome Jane
                </p>
                <p class="designation">
                  Admin
                </p>
              </div>
            </div>
          </li>

          
          <!--Acceuil-->

          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Acceuil</span>
            </a>
          </li>

          <!--Accès aux commandes-->
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/orders.html">
              <i class="fas fa-shopping-cart menu-icon"></i>
              <span class="menu-title">Commande</span>
              <i class="menu-arrow"></i>
            </a>
          </li>

          <!--Accès aux Fournisseurs-->
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/fournisseurs.html">
              <i class="fas fa-phone menu-icon"></i>
              <span class="menu-title">Fournisseurs</span>
              <i class="menu-arrow"></i>
            </a>
          </li>

          <!--Les produits-->
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/produits.html">
              <i class="fas fa-bag menu-icon"></i>
              <span class="menu-title">Produits</span>
              <i class="menu-arrow"></i>
            </a>
          </li>

      
          
          
          
        </ul>
      </nav>
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Dashboard
            </h3>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card" >
              <div class="card" style="background: linear-gradient(85deg, #392c70, #6a005b); min-height:300px;color:white">
                <div class="card-body">
                  <h4 class="card-title" style="color:white">
                    <i class="fas fa-gift" style="color:white"></i>
                    Nombre de commande
                  </h4>
                  <h4 style="text-align:center;font-size:100px;margin-top:50px"><?php
                $result = $con ->query("SELECT *
                FROM commande
                ");
                $num_ligne = mysqli_num_rows($result);
                echo($num_ligne)
                ?></h4>               
                </div>
              </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card" style="background: linear-gradient(85deg, #392c70, #6a005b); min-height:300px;color:white">
                <div class="card-body">
                  <h4 class="card-title" style="color:white">
                    <i class="fas fa-chart-line" style="color:white"></i>
                    Articles vendues
                  </h4>
                  <h4 style="text-align:center;font-size:100px;margin-top:50px"></h4>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 grid-margin stretch-card">
              <div class="card" style="background: linear-gradient(85deg, #392c70, #6a005b); min-height:300px;color:white">
                <div class="card-body">
                  <h4 class="card-title" style="color:white">
                    <i class="fas fa-dollar-sign"></i>
                    Somme totale
                  </h4>
                  <h4 style="text-align:center;font-size:100px;margin-top:50px"></h4>
                </div>
              </div>
            </div>
          </div>
          
          
          
          
          
        </div>
        <footer class="footer">
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html>
