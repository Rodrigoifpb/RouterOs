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
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-center mb-4 border-bottom">
            <h1 class="h1 m-3 text-gray-600 ">DHCP</h1>
            <i class="h2 fas fa-location-arrow"></i>
          </div>

        </div>
        <!-- /.container-fluid -->

        <div class="accordion m-4" id="accordionExample">
          <div class="card">
            <div class="card-header bg-purple" id="headingOne">
              <h2 class="mb-0 text-center">
                <button class="btn text-white collapsed" type="button" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Tabela DHCP Client
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <table class="table table-striped" id="dhcpcliente">
                  <thead>
                    <tr>
                      <th scope="col">Interface</th>
                      <th scope="col">User Peen DNS</th>
                      <th scope="col">Add Defaut Route</th>
                      <th scope="col">status</th>
                      <th scope="col">IP address</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>

              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header bg-purple" id="headingTwo">
              <h2 class="mb-0 text-center">
                <button class="btn text-white" type="button" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="true" aria-controls="collapseTwo">
                  Tabela DHCP Server
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
              
                <table class="table table-striped" id="dhcpservidor">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Interface</th>
                      <th scope="col">address Pool</th>
                      <th scope="col">lease Time</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>

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

    <script src="js/dhcp.js"></script>
