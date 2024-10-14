
<?= $this->extend('template/header') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Success !</b>
                    <?= session()->getFlashdata('success') ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Error !</b>
                    <?= session()->getFlashdata('error') ?>
                </div>
            </div>
        <?php endif; ?>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                <h4><?= $show;?></h4>
                </div>
                <div class="card-body">
            <?php if (session()->id_role == 1) { ?>
                <a href="<?= site_url('materia/new');?>" class="btn btn-primary mb-3"><i class="fas fa-solid fa-plus"></i></a>
                    <a href="<?= base_url("materia") ?>" class="btn btn-success mb-3 ml-1"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                <div class="table-responsive">
                    <table class="table table-bordered table-md" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Materia</th>
                                <th>Materia</th>
                                <th>Horas</th>
                                <th>Loron</th>
                                <th>Dia</th>
                                <th>Classe</th>
                                <th>Professores</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1;
                            foreach($professores as $ur): 
                            ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $ur->kode_materia?></td>
                                <td><?= $ur->materia?></td>
                                <td><?= $ur->horas_materia?></td>
                                <td><?= $ur->loron_materia?></td>
                                <td><?= $ur->dia_materia?></td>
                                <td><?= $ur->aula ?></td>
                                <td><?= $ur->naran_kompleto?></td>
                                <td><a href="<?= site_url('materia/edit/'.$ur->id_materia) ?>" class="btn btn-success"><i class="fas fa-user-edit"></i></a></td>
                                <form action="<?= site_url('materia/delete/'.$ur->id_materia)?>" method="post" autocomplete="off" 
                            onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                                    <?= csrf_field(); ?>
                                    <td><button class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></button></td>
                                </form>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
            <?php if (session()->id_role == 2) { ?>
                    <a href="<?= base_url("materia") ?>" class="btn btn-success mb-3 ml-5"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                <div class="table-responsive">
                    <table class="table table-bordered table-md" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Materia</th>
                                <th>Materia</th>
                                <th>Horas</th>
                                <th>Loron</th>
                                <th>Dia</th>
                                <th>Classe</th>
                                <th>Professores</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1;
                            foreach($professores as $ur): 
                            ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $ur->kode_materia?></td>
                                <td><?= $ur->materia?></td>
                                <td><?= $ur->horas_materia?></td>
                                <td><?= $ur->loron_materia?></td>
                                <td><?= $ur->dia_materia?></td>
                                <td><?= $ur->aula ?></td>
                                <td><?= $ur->naran_kompleto?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
            <?php if (session()->id_role == 6) { ?>
                    <a href="<?= base_url("materia") ?>" class="btn btn-success mb-3 ml-5"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                <div class="table-responsive">
                    <table class="table table-bordered table-md" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Materia</th>
                                <th>Materia</th>
                                <th>Horas</th>
                                <th>Loron</th>
                                <th>Dia</th>
                                <th>Classe</th>
                                <th>Professores</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1;
                            foreach($professores as $ur): 
                            ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $ur->kode_materia?></td>
                                <td><?= $ur->materia?></td>
                                <td><?= $ur->horas_materia?></td>
                                <td><?= $ur->loron_materia?></td>
                                <td><?= $ur->dia_materia?></td>
                                <td><?= $ur->aula ?></td>
                                <td><?= $ur->naran_kompleto?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>