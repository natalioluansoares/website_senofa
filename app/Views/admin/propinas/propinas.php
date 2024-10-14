
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
                    <a href="<?= base_url('propinas');?>" class="btn btn-info mb-4">
                    <i class="fas fa-sharp fa-regular fa-backward"></i></a>
                    <a href="<?= base_url("propinas/new") ?>" class="btn btn-success mb-4 ml-1">
                    <i class="fas fa-plus"></i></a>
                <div class="table-responsive">
                <table class="table table-bordered table-striped table-md" id="table1">
                <thead class="table-info">
                    <tr>
                        <th>#</th>
                        <th>Naran</th>
                        <th>Status</th>
                        <th>Horas</th>
                        <th>Loron</th>
                        <th>Osan</th>
                        <th>Tama</th>
                        <th>Classe</th>
                        <th>Periode</th>
                        <?php if ((session()->id_role != 2)) {?>
                        <th>Update</th>
                        <th>Delete</th>
                        <?php } ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    $osan =0;
                    foreach($propinas as $ur): 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $ur->naran_kompleto_alunos?></td>
                        <td><?= $ur->status_alunos?></td>
                        <td><?= $ur->horas_propinas?></td>
                        <td><?= $ur->loron_propinas?></td>
                        <td><strong>$<?= $ur->propinas?></strong></td>
                        <td><?= $ur->tinan_tama?></td>
                        <td><?= $ur->aula?></td>
                        <td><?= $ur->pre_exame?></td>
                        <?php if ((session()->id_role != 2)) { ?>
                        <td><a href="<?= site_url('propinas/'.$ur->id_propinas.'/edit') ?>" class="btn btn-success"><i class="fas fa-user-edit"></i></a></td>
                        <form action="<?= site_url('userole/delete/'.$ur->id_propinas)?>" method="post" autocomplete="off" 
                            onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                            <?= csrf_field(); ?>
                            <td><button class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></button></td>
                        </form>
                        <?php } ?>
                    </tr>
                    <?php 
                    $osan += $ur->propinas;
                    endforeach;
                     ?>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan="5"><h5><strong>Total Propinas</strong></h5></td>
                            <td><strong>$<?= $osan;?></strong></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>