
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

  <!-- General CSS Files -->

   <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url()?>template/node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url()?>template/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url()?>template/assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-5 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="<?= base_url()?>template/assets/img/avatar/InanMariaFatima.jpg" alt="logo" width="80" 
            class="shadow-light rounded-circle mb-5 mt-2">
            <h5 class="text-dark font-weight-normal">SEMINARIO NOSSA SENHORA DE FATIMA<span class="font-weight-bold"> BALIDE DILI</span></h5>
            <p class="text-muted">Akun Ne'e So Instituisaun Senofa MaK Bele Uja..Se Mak La Parteinsia Iha Instituisaun Senofa Labele Atu Tama Ka Uja...
              Obrigado<span class="text-warning">...FIAT VOLUNTAS TUA...</span></p>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">x</button>
                        <b>Error !</b>
                        <?= session()->getFlashdata('error') ?>
                    </div>
                </div>
            <?php endif; ?>
            <form method="POST" action="<?= site_url('administratorprocess')?>" class="needs-validation" novalidate="">
              <?= csrf_field(); ?>
            <div class="form-group">
                <label for="email">Naran Kompleto</label>
                <input id="text" type="text" class="form-control" name="naran_kompleto" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your naran kompleto
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Senha</label>
                </div>
                <input id="password" type="password" class="form-control" name="senha" tabindex="2" required>
                <div class="invalid-feedback">
                  please fill in your senha
                </div>
              </div>

              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                  <label class="custom-control-label" for="remember-me">Mengingat Saya</label>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-danger btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

              <!-- <div class="mt-5 text-center">
                Don't have an account? <a href="auth-register.html">Create new one</a>
              </div> -->
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; YukCoding 2023
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" 
        data-background="<?= base_url()?>template/assets/img/avatar/bunda_maria.jpg">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-5 font-weight-bold">Nossa Senhora De Fatima</h1>
                <h5 class="font-weight-normal text-muted-transparent">Fiat Volutas Tua</h5>
              </div>
              Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url()?>/template/assets/js/stisla.js"></script>
  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?= base_url()?>template/assets/js/scripts.js"></script>
  <!-- <script src="<?= base_url()?>template/assets/js/custom.js"></script> -->

  <!-- Page Specific JS File -->
</body>
</html>
