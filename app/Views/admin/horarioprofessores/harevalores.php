
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
                <form class="form-inline">
                        <div class="form-group ml-4">
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
                <nav class="navbar navbar-secondary navbar-expand-lg">
                    <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link has-dropdown" 
                        style="background-color: black;"><i class="fas fa-book-open mr-2"></i><span> Valores Primeiro Periode</span></a>
                        <ul class="dropdown-menu" style="width: 150%;">
                            <?php foreach( $kode as $k): ?>
                            <li class="nav-item"><a href="
                            <?= base_url('valoresestudantes/Exame_Primeiro_Periode/'.$k->kode_materia)?>" class="nav-link"style="background-color: black;">
                            <i class="fas fa-book mr-2"></i> <?= $k->materia ?> (<?= $k->kode_materia ?>)</a></li>
                            <?php endforeach ?>
                        </ul>
                        </li>
                    </ul><br><br>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link has-dropdown" 
                        style="background-color: black;"><i class="fas fa-book-open mr-2"></i><span> Valores Segundo Periode</span></a>
                        <ul class="dropdown-menu" style="width: 150%;">
                            <?php foreach( $kode as $k): ?>
                            <li class="nav-item"><a href="<?= base_url('valoresestudantes/Exame_Segundo_Periode/'.$k->kode_materia)?>" class="nav-link"style="background-color: black;">
                            <i class="fas fa-book mr-2"></i> <?= $k->materia ?> (<?= $k->kode_materia ?>)</a></li>
                            <?php endforeach ?>
                        </ul>
                        </li>
                    </ul><br><br>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link has-dropdown" 
                        style="background-color: black;"><i class="fas fa-book-open mr-2"></i><span> Valores Terceiro Periode</span></a>
                        <ul class="dropdown-menu" style="width: 150%;">
                            <?php foreach( $kode as $k): ?>
                            <li class="nav-item"><a href="<?= base_url('valoresestudantes/Exame_Terceiro_Periode/'.$k->kode_materia)?>" class="nav-link"style="background-color: black;">
                            <i class="fas fa-book mr-2"></i> <?= $k->materia ?> (<?= $k->kode_materia ?>)</a></li>
                            <?php endforeach ?>
                        </ul>
                        </li>
                    </ul>
                </div>
            </nav><br><br><br><br>
        </div>
    </div>
    
</section>
<?= $this->endSection() ?>