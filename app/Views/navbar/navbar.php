
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url()?>/template/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
             <div class="row">
                <div class="col-lg">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-warning"  style="background-color: gold;">
                        <tr>
                            <th data-priority="1" class="text-center">
                                <img src="<?= base_url()?>/template/assets/img/avatar/TimorLeste.png"  class="rounded-circle" width="150px">
                            </th>
                            <th data-priority="1">
                                <div class="text-center">
                                    <font size="3" style="font-family:Wide Latin">
                                        <b>Website Seminario Nossa Senhora De Fatima</b><br>
                                        <span style="font-family:Times New Roman">Balide,Dili-Timor Leste <br>
                                            Telp.(0380)833395- 831194</span>
                                    </font><br>
                                    Web:<span style="font-family:Times New Roman; color:#3366cc">
                                        http//www.senofa.ac.id</span>
                                    Email:<span style="font-family:Times New Roman; color:#3366cc">
                                        balidi.seminarionossasenhorafatima@gmail.com</span>
                                    <hr width="80%">
                                </div>
                            </th>
                            <th data-priority="1" class="text-center">
                                <img src="<?= base_url()?>/template/assets/img/avatar/InanMariaFatima.jpg" 
                                class="rounded-circle" width="140px">
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
      </nav>

      <!-- Main Content -->
        <section class="section">
          <div class="section-body">
          </div><br><br><br><br>
          <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                         <img alt="image" src="<?= base_url()?>/template/assets/img/avatar/avatar-5.png" 
                         height="100px">
                        <div class="card-body" align ="center">
                            <h6 class="card-title">INSTITUISAUN</h6>
                            <a href="<?= base_url('administratorlogin') ?>" class="btn btn-danger">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                         <img alt="image" src="<?= base_url()?>/template/assets/img/avatar/REITOR1.jpg" 
                         height="100px">
                        <div class="card-body" align ="center">
                            <h6 class="card-title">REITOR</h6>
                            <a href="<?= base_url('reitorlogin') ?>" class="btn btn-warning" style="background-color: coral;">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                         <img alt="image" src="<?= base_url()?>/template/assets/img/avatar/avatar-1.png" 
                         height="100px">
                        <div class="card-body" align ="center">
                            <h6 class="card-title">EQUIPA FORMADOR</h6>
                            <a href="<?= base_url('equipaformadorlogin') ?>" class="btn btn-primary">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                         <img alt="image" src="<?= base_url()?>/template/assets/img/avatar/avatar-2.png" 
                         height="100px">
                        <div class="card-body" align ="center">
                            <h6 class="card-title">PROFESSORES</h6>
                            <a href="<?= base_url('professoreslogin')?>" class="btn btn-success">Login</a>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4">
                    <div class="card">
                         <img alt="image" src="<?= base_url()?>/template/assets/img/avatar/SECRETARIADO1.jpg" 
                         height="100px">
                        <div class="card-body" align ="center">
                            <h6 class="card-title">ADMINISTRASAUN</h6>
                            <a href="<?= base_url('administrasaunlogin')?>" class="btn btn-secondary">Login</a>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4">
                    <div class="card">
                         <img alt="image" src="<?= base_url()?>/template/assets/img/avatar/ALUNOS.png" 
                         height="100px">
                        <div class="card-body" align ="center">
                            <h6 class="card-title">ALUNOS</h6>
                            <a href="<?= base_url('alunoslogin') ?>" class="btn btn-dark">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                         <img alt="image" src="<?= base_url()?>/template/assets/img/avatar/avatar-3.png" 
                         height="100px">
                        <div class="card-body" align ="center">
                            <h6 class="card-title">PAROQUIA</h6>
                            <a href="<?= base_url('paroquialogin')?>" class="btn btn-info">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                         <img alt="image" src="<?= base_url()?>/template/assets/img/avatar/avatar-4.png" 
                         height="100px">
                        <div class="card-body" align ="center">
                            <h6 class="card-title">FAMILIA</h6>
                            <a href="<?= base_url('familialogin')?>" class="btn btn-warning">Login</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
       
        </section>
      </div>
    </div>
  </div>

 <script src="<?= base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url()?>/template/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="<?= base_url()?>/template/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url()?>/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <!-- Template JS File -->
  <script src="<?= base_url()?>/template/assets/js/scripts.js"></script>
  <script src="<?= base_url()?>/template/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
