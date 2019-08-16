<?php
session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false){
  header('Location: login.php');
  exit();
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

  <title>Wellcome RouterOS Analiser - Login</title>

  <!-- Custom fonts for this template-->
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

</head>

<body class="bg-login-image">

  <div class="container">

    <!-- Outer Row -->
    <div class="m-5 wellcome">
      Choose a Mikrotik
    </div>
    <div class="row justify-content-center">
        <div class="row">
            <div id="warning" class="col">
            </div>
          </div>
      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card d-flex p-3">
          <!-- Nested Row within Card Body -->

          <ul class="" id="tabSelect" role="tabela">
          </ul>
          <div class="tab-content" id="infoTab"></div>
          
          <div class="row">
            <div class="col">
              <form action="" id="add-ip">
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <input type="text" name="ip" id="ip" class="form-control" placeholder="IP" autofocus>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" name="user" id="user" class="form-control" placeholder="User">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="password" name="key" id="key" class="form-control" placeholder="Key">
                  </div>
                  <div class="form-group col-md-1">
                    <button class="btn bg-purple text-white">Add</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="tab-inter fade show text-align" id="inter" role="tabpanel" aria-labelledby="tab-inter">

            <table class="table" id="iptable">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">IP</th>
                  <th scope="col">USER</th>
                  <th scope="col">Remove</th>
                  <th scope="col">Acessar</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
          <div class="tab-add fade" id="Adicionar" role="tabpanel" aria-labelledby="tab-add">

          </div>
          
        </div>
        
      </div>
      
    </div>

  </div>

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
  <script src="js/selection.js"></script>
  
</body>

</html>