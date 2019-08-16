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
      <h1 class="h1 m-3 text-gray-600 ">PPP</h1>
      <i class="h2 fas fa-user-lock"></i>
    </div>


  </div>
  <!-- /.container-fluid -->

  <div class="row m-4">
    <div class="card d-flex col p-0 shadow-sm">
      <div class="card-header bg-purple">
        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link" id="client-tab" data-toggle="tab" href="#client" role="tab"
              aria-controls="client" aria-selected="false">PPP Client</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="server-tab" data-toggle="tab" href="#server" role="tab"
              aria-controls="server" aria-selected="false">PPP Server</a>
          </li>
        </ul>
      </div>
      <div class="card-body">

        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade show active" id="client" role="tabpanel" aria-labelledby="client-tab">

            <table class="table table-striped" id="tabela-ppp2">
              <thead>
                <tr>
                  <th scope="col"> User </th>
                 <th scope="col">Name-Service</th>
                  <th scope="col">Pap</th>
                  <th scope="col">Chap</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>

          </div>
          <div class="tab-pane fade" id="server" role="tabpanel" aria-labelledby="server-tab">

            <table class="table table-striped " id="tabela-ppp3">
              <thead>
                <tr>
                  <th scope="col">Port</th>
                 <th scope="col">Address</th>
                  <th scope="col">Pap</th>
                  <th scope="col">Chap</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>

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
      <span>Copyright &copy; RouterOs 2019</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
<script src="js/ppp.js"></script>