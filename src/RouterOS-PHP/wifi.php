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
    <div id="content-wrapper" class="d-flex flex-column ">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-center mb-4 border-bottom ">
            <h1 class="h1 m-3 text-gray-600 ">Interface</h1>
            <i class="h2 fas fa-network-wired"></i>
          </div>


        </div>
        <!-- /.container-fluid -->

        <div class="row m-4">

          <div class="card text-center d-flex col p-0 shadow-sm">
            <div class="card-header bg-purple">
              <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="wlan-tab" data-toggle="tab" href="#wlan" role="tab"
                    aria-controls="wlan" aria-selected="true">Wifi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add"
                    aria-selected="false">Add</a>
                </li>
              </ul>
            </div>

            <div class="card-body">

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="wlan" role="tabpanel" aria-labelledby="wlan-tab">

                  <table id="tabela-wlan" class="table">
                    <thead>
                      <tr>
                        <th scope="col">R/X</th>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actual MTU</th>
                        <th scope="col">Tx</th>
                        <th scope="col">Rx</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>

                </div>
                <div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="add-tab">

                  <div class=" m-3">
                    <h3>New Wifi</h3>
                    <hr>

                    <div>
                    
                    <form class="form-inline">

                      <label class="my-1 mr-2 h5" for="selectInterface">Interfaces</label>
                      <select class="custom-select my-1 mr-sm-2" id="selectInterface">
                        <option selected></option>
                        <option value="1">Virtual</option>
                        <option value="2">WDS</option>
                      </select>

                    </form>
                    <hr>

                    <div class="showUP"></div>
                    
                    </div>
                    
                    </div>
                    
                </div>
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
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

<script src="js/wifi.js"></script>
