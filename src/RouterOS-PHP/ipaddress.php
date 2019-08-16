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
      <h1 class="h1 m-3 text-gray-600 ">IP</h1>
      <i class="h2 fas fa-location-arrow"></i>
    </div>


    <div class="row m-4">
      <div class="card d-flex col p-0 shadow-sm">
        <div class="card-header bg-purple">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab"
                aria-controls="list" aria-selected="true">Address List</a>
            </li>
        </div>
        <div class="card-body">

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
              <table class="table table-striped " id="iplist">
                <thead>
                  <tr>
                    <th scope="col">Address</th>
                    <th scope="col">Network</th>
                    <th scope="col">Interface</th>
                  </tr>
                </thead><tbody> 
                 </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="add-tab">...</div>
          </div>

        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

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

<script src="js/addrlist.js"></script>
