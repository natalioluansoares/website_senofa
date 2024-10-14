 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
    <!-- <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">

    <!-- Template CSS -->
    <!-- Template CSS -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
        <div class="row">
            <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-warning">
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
                                            <hr width="100%">
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
                </div>
            </div>

      <!-- Main Content -->
        <section class="section">
            <div class="row" >
                <div class="col-lg-12">
                    <div class="card">
                         <nav class="navbar navbar-expand-lg bg-warning">
                            <div class="container-fluid">
                                <a class="navbar-brand " href="#"><h5>SEMINARIO NOSSA SENHORA DE FATIMA </h5></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?= base_url('homealunos')?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#">Calender</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="homealunos/#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Estudante
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Foti Horario Estudante</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('paroquiavaloresestudante') ?>">Valore Estudante</a></li>
                                        <li><a class="dropdown-item" href="#">Muda Senha</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('propinasparoquia'); ?>">Osan Propinas</a></li>
                                        <li><a class="dropdown-item" href="#">Absensi Estudante</a></li>
                                    </ul>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </nav>
                        
                    </div>
                </div>
            </div><br>
           <?= $this->renderSection('content') ?>
        </section>
      </div>
    </div>
  </div>

 <script src="<?= base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url()?>/template/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="<?= base_url()?>/template/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url()?>/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <!-- Template JS File -->
  <script src="<?= base_url()?>/template/assets/js/scripts.js"></script>
  <script src="<?= base_url()?>/template/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->

  <script type="text/javascript">
        window.onload = function() { jam(); }
       
        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('jam()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>
    <script>
        var tw = new Date();
        if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
        else (a=tw.getTime());
        tw.setTime(a);
        var tahun= tw.getFullYear ();
        var hari= tw.getDay ();
        var bulan= tw.getMonth ();
        var tanggal= tw.getDate ();
        var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
        var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
        document.getElementById("loron").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>
</body>
</html>
