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
            <h1 class="h1 m-3 text-gray-600 ">Tools</h1>
            <i class="h2 fas fa-tools"></i>
        </div>


        <div class="card-flex ">

            <div class="row">
                <div class="col-4">

                    <div class="row">

                        <div class="col m-2 ">
                            <div id="link-ping"
                                class="card mb-4 py-1 border-left-primary  text-lg align-items-center text-primary font-weight-bold shadow-sm link-card">
                                <i class="far fa-2x fa-envelope"></i>
                                Ping
                            </div>

                        </div>


                    </div>

                    <div class="row">

                        <div class="col m-2">
                            <div id="link-log"
                                class="card mb-4 py-1 border-left-danger  text-lg align-items-center text-danger font-weight-bold shadow-sm link-card">
                                <i class="far  fa-2x fa-file"></i>
                                Log
                            </div>
                        </div>


                    </div>


                </div>

                <div id="teste" class="col-8">

                    <div class="card shadow-sm m-2 border-left-primary " id="ping">

                        <div>
                            <h3 class="text-center m-3 text-primary font-weight-bold">Ping</h3>
                        </div>


                        <div class="input-group input-group-sm pl-4 pr-4 mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Ping to</span>
                            </div>
                            <input id="ip" type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm">
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-auto pl-5 pr-5 mb-1">
                                <a href="#" id="start" class="btn btn-success btn-icon-split shadow-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check" ></i>
                                    </span>
                                    <span class="text">Start</span>
                                </a>
                            </div>
                        </div>


                        <div class="m-0 ml-2 p-4 d-flex justify-content-center">
                            <textarea name="console" id="pingtest" cols="70" rows="10"></textarea>
                        </div>


                    </div>

                    <div class="card shadow-sm m-2 border-left-danger d-none" id="log">

                        <div>
                            <h3 class="text-center m-3 text-danger font-weight-bold">Log</h3>
                        </div>

                        <div class="m-0 ml-2 p-4 d-flex justify-content-center">
                            <textarea name="logsterm" id="logsterm" cols="70" rows="10" style="margin-top: 0px; margin-bottom: 0px; height: 465px;" ></textarea>
                        </div>

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

<script src="js/tools.js"></script>