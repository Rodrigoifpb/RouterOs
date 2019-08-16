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
            <h1 class="h1 m-3 text-gray-600 ">Arp List</h1>
            <i class="h2 fas fa-location-arrow"></i>
          </div>

        </div>
        <!-- /.container-fluid -->

            <div class="card-group m-4">
              <div class="card shadow-sm ">
                <div class="card-header bg-purple text-white">
                  <h5>ARP List</h5>
                </div>
                <div class="card-body">

                    <table class="table" id="listarp">
                        <thead>
                          <tr>
                            <!-- <th scope="col">#</th> -->
                            <th scope="col"> IP Address</th>
                            <th scope="col">Mac Address</th>
                            <th scope="col">Interface</th>
                          </tr>
                        </thead>
                        <tbody></tbody>
                      </table>
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

  <script src="js/arplist.js"></script>