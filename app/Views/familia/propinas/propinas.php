<?= $this->extend('template_familia/template_familia') ?>
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
                                value="<?= userLoginFamilia()->naran_kompleto_familia; ?>" readonly style="background-color: lightgray;">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Acesso Sistema</label>
                            <div class="form-group">
                                <input type="text" class="form-control"
                                value="<?= userLoginFamilia()->role; ?>" readonly style="background-color: lightgray;">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Status</label>
                            <div class="form-group">
                                <input type="text" class="form-control"
                                value="<?= userLoginFamilia()->status_familia; ?>" readonly style="background-color: lightgray;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-body" style="background-color: cornflowerblue;">
                        <h5 class="card-title"><strong>Seminario Nossa Senhora De Fatima</strong></h5>
                    </div>
                    <hr>
                    <p class="card-text"><h5 style="font-family: 'Times New Roman', Times, serif;">
                    Bem-vindo Sistema Informasaun Senofa</h5></p>
                    <hr>
                    <h3 class="text-center" style="color: darkgrey;"><?= $title; ?></h3>
                <table class="table table-bordered table-striped" id="table1">
                    <thead class="table-info">
                        <tr>
                            <th>#</th>
                            <th>Naran</th>
                            <th>Horas</th>
                            <th>Loron</th>
                            <th>Osan</th>
                            <th>Kode</th>
                            <th>Classe</th>
                        </tr>
                    </thead>
                        <tbody>
                        <?php 
                        $no=1;
                        foreach($propinas as $ur): 
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ur->naran_kompleto_alunos?></td>
                            <td><?= $ur->horas_propinas?></td>
                            <td><?= $ur->loron_propinas?></td>
                            <td><?= $ur->propinas?></td>
                            <td><?= $ur->kode_propinas?></td>
                            <td><?= $ur->aula?></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>