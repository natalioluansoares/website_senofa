
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
                <div class="section-body">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="card-body">
                                <div class="card mb-3">
                                    <div class="card-header bg-primary text-white">Filter Materia Do Professores</div>
                                    
                                </div>
                                <h4><?= $show;?></h4>
                            </div>
                            <nav class="navbar navbar-secondary navbar-expand-lg">
                                <div class="container">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                    <a href="#" data-toggle="dropdown" class="nav-link has-dropdown" 
                                    style="background-color: black;"><i class="fas fa-book-open mr-2"></i><span>Materia Do Professores</span></a>
                                    <ul class="dropdown-menu" style="width: 165%;">
                                        <?php foreach( $professor as $k): ?>
                                        <li class="nav-item"><a href="<?= base_url('materia/'.$k->id_user)?>" class="nav-link"style="background-color: black;">
                                        <i class="fas fa-book mr-2"></i> <?= $k->naran_kompleto  ?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                    </li>
                                </ul>
                                </div>
                            </nav>
                        </div>
                <?php } ?>
                <?php if (session()->id_role == 2) { ?>
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card mb-3">
                                        <div class="card-header bg-primary text-white">Filter Valores Do Alunos</div>
                                        
                                    </div>
                                    <h4><?= $show;?></h4>
                                </div>
                                <nav class="navbar navbar-secondary navbar-expand-lg">
                                    <div class="container">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                        <a href="#" data-toggle="dropdown" class="nav-link has-dropdown" 
                                        style="background-color: black;"><i class="fas fa-book-open mr-2"></i><span>Materia Do Professores</span></a>
                                        <ul class="dropdown-menu">
                                            <?php foreach( $professor as $k): ?>
                                            <li class="nav-item"><a href="<?= base_url('materia/materia/'.$k->id_user)?>" class="nav-link"style="background-color: black;">
                                            <i class="fas fa-book mr-2"></i> <?= substr($k->naran_kompleto,0,25)  ?></a></li>
                                            <?php endforeach ?>
                                        </ul>
                                        </li>
                                    </ul>
                                    </div>
                                </nav>
                        </div>
                    </div>
                <?php } ?>
                <?php if (session()->id_role == 6) { ?>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card mb-3">
                                        <div class="card-header bg-primary text-white">Filter Valores Do Alunos</div>
                                        
                                    </div>
                                    <h4><?= $show;?></h4>
                                </div>
                                <nav class="navbar navbar-secondary navbar-expand-lg">
                                    <div class="container">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                        <a href="#" data-toggle="dropdown" class="nav-link has-dropdown" 
                                        style="background-color: black;"><i class="fas fa-book-open mr-2"></i><span>Materia Do Professores</span></a>
                                        <ul class="dropdown-menu">
                                            <?php foreach( $professor as $k): ?>
                                            <li class="nav-item"><a href="<?= base_url('materia/materia/'.$k->id_user)?>" class="nav-link"style="background-color: black;">
                                            <i class="fas fa-book mr-2"></i> <?= substr($k->naran_kompleto,0,25)  ?></a></li>
                                            <?php endforeach ?>
                                        </ul>
                                        </li>
                                    </ul>
                                    </div>
                                </nav>
                        </div>
                    </div>
                <?php } ?>
                <?php if (session()->id_role == 3) { ?>
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