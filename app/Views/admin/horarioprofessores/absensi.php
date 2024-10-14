
<?= $this->extend('template/header') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
        <?php

        use PhpParser\Node\Stmt\Label;

 if (session()->getFlashdata('success')): ?>
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
                <div class="card-body">
                    <div class="card mb-3">
                        <div class="card-header bg-primary text-white">Filter Valores Do Alunos</div>
                        
                    </div>
                    <h4><i class="fas fa-eye mr-2" style="font-size: large;"></i><?= $show;?> <i class="fas fa-eye mr-2" style="font-size: large;"></i></h4>
                </div>
                <div class="card-body">
                <form class="form-inline">
                        <div class="form-group ml-0">
                            <select class="form-control ml-0" name="tinan">
                                
                                
                                <option value="">---Pilih Tinan---</option>

                                    <?php $tahu = date('Y');
                                        for($i=2023;$i<$tahu+2;$i++) { 
                                    ?>

                                        <option value="<?= $i ?>"><?= $i ?></option>
                                        
                                    <?php } ?>
                                
                                </select>
                        </div>
                        <div class="form-group ml-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-eye"></i></button>
                        </div>
                </form>
                </div>
                    <?php 
                        if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                            $tinan          = $_GET['tinan'];
                            $tinanhorario   = $tinan;
                        }else{

                            $tinan          = date('Y');
                            $tinanhorario   = $tinan;
                        }

                    ?>
                    <div class="card-body">
                            <div class="alert alert-info">Filter Valores Tuir Tinan: 
                            <span class="font-weight-bold mr-2"><?= $tinan  ?></span></div>
                            <?php
                            $jumlah_data = count($kode);
                            if ($jumlah_data > 0 )
                            { ?>
                             <div class="dropdown">
                                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Absensi Estudante Akademiko <?= $tinan  ?>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" style="width: 50%;">
                                        <?php foreach( $kode as $k): ?>
                                        <li><a class="dropdown-item" href="<?= base_url('absensialunos/'.$k->kode_materia. '/'. $k->tinan_akademiko)?>">
                                        <?= $k->materia ?> (<?= $k->kode_materia ?>)</a></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                                <?php }else{ ?>
                                    <center>
                                        <span class="badge bg-danger"><i class="fas fa-info-circle"></i>Materia Tinan Akademiko Seidauk Iha, Bele Buka Fali Tinan Akademiko Seluk</span>
                                    </center>
                                <?php } ?> 
                        </div> 
                </div>
            </div>
        </div>
    </div>
    
</section>
<?= $this->endSection() ?>