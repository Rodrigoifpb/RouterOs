<?php	
session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false){
  header('Location: login.php');
  exit();
}else{
  $page = $_GET['page'] ?? 'main';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>RouterOS Analiser - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
 <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  

</head>

<body id="page-top" class="">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?page=main">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-project-diagram"></i>
        </div>
        <div class="sidebar-brand-text mx-3">RouterOS Analiser</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php?page=main">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Interface e seus componentes -->

      <li class="nav-item">
        <a class="nav-link collapsed" id="nav-inter" href="#" data-toggle="collapse" data-target="#collapseInterface"
          aria-expanded="true" aria-controls="collapseInterface">
          <i class="fas fa-network-wired"></i>
          <span></i>Interface</span>
        </a>
        <div id="collapseInterface" class="collapse" aria-labelledby="headingInterface" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?page=interfaces"><i class="fas fa-chevron-right"></i> Interfaces</a>
            <a class="collapse-item" href="index.php?page=wifi"> <i class="fas fa-chevron-right"></i> Wifi</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- ip e seus componentes -->
      <li class="nav-item">
        <a class="nav-link collapsed" id="nav-IP" href="#" data-toggle="collapse" data-target="#collapseIP"
          aria-expanded="true" aria-controls="collapseIP">
          <i class="fas fa-location-arrow"></i>
          <span>IP</span>
        </a>
        <div id="collapseIP" class="collapse" aria-labelledby="headingInterface" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?page=ipaddress"><i class="fas fa-chevron-right"></i> IP Address</a>
            <a class="collapse-item" href="index.php?page=arp"> <i class="fas fa-chevron-right"></i> ARP</a>
            <a class="collapse-item" href="index.php?page=dhcp"> <i class="fas fa-chevron-right"></i> DHCP</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- ppp e seus componentes -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?page=ppp">
          <i class="fas fa-user-lock"></i>
          <span>PPP</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- ferramentas e seus componentes -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?page=tools">
          <i class="fas fa-tools"></i>
          <span>Tools</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="selection.php">
          <i class="fas fa-user-times"></i> <span>Disconect</span>
        </a>
      </li>

      <hr class="sidebar-divider">
<!-- exit -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="back/logout.php">
          <i class="fas fa-sign-out-alt"></i> <span>Exit</span>
        </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Corpo das paginas -->
    <?php 
      if( !@include($page.".php") ){
        include("404.html");
      }
    ?>
    <!-- Final das paginas -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

    
    
</body>

</html>