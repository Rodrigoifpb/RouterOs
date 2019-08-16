<?php	
session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false){
  header('Location: login.php');
  exit();
}else{
  header('Location: index.php');
}
?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Begin Page Content -->
  <div class="container-fluid ">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4 border-bottom">
      <h1 class="h1 m-3 text-gray-600 ">Dashboard</h1>
      <i class="h2 text-gray-600 fas fa-tachometer-alt"></i>
    </div>

    <div class="row">
      <div class="col-lg-4">

        <div class="card mb-4 py-1 border-bottom-primary">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-lg font-weight-bold text-primary text-uppercase mb-0">cpu</div>
                <div id="cpu" class="h2 mb-0 font-weight-bold text-gray-800 pl-3">
                %
                </div>
              </div>
              <div class="col-auto">
                <i data-feather="alert-circle" class="fas fa-microchip fa-3x text-gray-300 pr-2"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">

        <div class="card mb-4 py-1 border-bottom-success">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-lg font-weight-bold text-success text-uppercase mb-0">Free-Memory</div>
                <div id="ram" class="h2 mb-0 font-weight-bold text-gray-800 pl-3"></div>
              </div>
              <div class="col-auto">
                <i data-feather="alert-circle" class="fas fa-memory fa-3x text-gray-300 pr-2"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">

        <div class="card mb-4 py-1 border-bottom-warning">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-lg font-weight-bold text-warning text-uppercase mb-0">Uptime</div>
                <div id="contador" class="h2 mb-0 font-weight-bold text-gray-800 pl-3"></div>
              </div>
              <div class="col-auto">
                <i data-feather="alert-circle" class="fas fa-user-clock fa-3x text-gray-300 pr-2"></i>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <!-- /.container-fluid -->

  </div>

  <!-- graphic -->

  <div class="row m-2">
    <div class="col-9">
    <div class="mt-5">
      <canvas id="graphic"></canvas>
    </div>
  </div>

  <div class="col-3">
    <div class="card d-flex border-bottom-info text-center mt-5">
      <div class="card-header bg-info text-white">
      <h4>Info of System</h4>
    </div>
    <div style="height: 375px;" class="card-body d-flex text-center ">

        <div >
          <table class="table table-sm d-flex" id="tabela-info">
            <tbody>
            </tbody> 
          </table>
        </div>

    </div>
  </div>
  </div>
  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; RouterOs 2019</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="js/utils.js"></script>
<script src="js/main.js"></script>
<script src="js/demo/moment.min.js"></script>