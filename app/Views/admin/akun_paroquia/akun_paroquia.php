
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
                    <a href="<?= site_url('akunparoquia/new');?>" class="btn btn-primary mb-3"><i class="fas fa-solid fa-plus"></i></a>
                <div class="table-responsive">
                <table class="table table-bordered table-md" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Naran Kompleto</th>
                        <th>Jenero</th>
                        <th>Status</th>
                        <th>Paroquia</th>
                        <th>Telemovel</th>
                        <th>Update</th>
                        <!-- <th>Detail</th> -->
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    foreach($instituisaun as $e): 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $e->naran_kompleto_paroquia?></td>
                        <td><?= $e->jenero_paroquia?></td>
                        <td><?= $e->status_paroquia?></td>
                        <td><?= $e->paroquia?></td>
                        <!-- <td><?= $e->role?></td> -->
                        <td><?= $e->numero_telemovel?></td>
                        <td><a href="<?= site_url('akunparoquia/'.$e->id_paroquia.'/edit') ?>" class="btn btn-success"><i class="fas fa-user-edit"></i></a></td>
                        <form action="<?= site_url('akunparoquia/'.$e->id_paroquia)?>" method="post" autocomplete="off" 
                        onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <td><button class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></button></td>
                        </form>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
    </div>
</section>
<?= $this->endSection() ?>