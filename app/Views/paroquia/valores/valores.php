<?= $this->extend('template_alunos/template_alunos') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="">Naran Kompleto</label>
                            <div class="form-group">
                                <input type="text" class="form-control"
                                value="<?= userLoginParoquia()->naran_kompleto_paroquia; ?>" readonly style="background-color: lightgray;">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Acesso Sistema</label>
                            <div class="form-group">
                                <input type="text" class="form-control"
                                value="<?= userLoginParoquia()->role; ?>" readonly style="background-color: lightgray;">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Status</label>
                            <div class="form-group">
                                <input type="text" class="form-control"
                                value="<?= userLoginParoquia()->status_paroquia; ?>" readonly style="background-color: lightgray;">
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="card">
                <div class="card-body">
                    <div class="card-body" style="background-color: cornflowerblue;">
                        <h5 class="card-title"><strong>Seminario Nossa Senhora De Fatima</strong></h5>
                    </div>
                    <hr>
                    <p class="card-text"><h5 style="font-family: 'Times New Roman', Times, serif;">
                    Bem-vindo Sistema Informasaun Senofa</h5></p>
                    <hr>
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Naran Estudantes
                        </a>

                        <ul class="dropdown-menu">
                            <?php foreach($akunalunos as $estudante): ?>
                            <li><a class="dropdown-item" href="<?= base_url('paroquiavaloresestudante/show/'.$estudante->id_alunos)?>" style="font-family: Times New Roman;"><?= $estudante->naran_kompleto_alunos ?>
                            <sup class="text-danger">(--<?= $estudante->tinan_tama ?>--)</sup></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>