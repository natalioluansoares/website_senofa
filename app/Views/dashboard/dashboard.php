<?= $this->extend('template/header') ?>

<!-- <?= $this->section('title'); ?>
<title>Home Page &mdash; yukNikah</title>
<?= $this->endSection();?> -->
<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('akunequipaformador')?>">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-user"></i>
                    </div>
                        <div class="card-wrap">
                            <div class="card-header">
                            <h4>Equipa Formador</h4>
                            </div>
                            <div class="card-body">
                                <?= Data_equipa_formador('akun_instituisaun') ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('akunprofessores')?>">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-user-edit"></i>
                    </div>
                        <div class="card-wrap">
                            <div class="card-header">
                            <h4>Akun Professores</h4>
                            </div>
                            <div class="card-body">
                                <?= Data_professores('akun_instituisaun') ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('akunadministrasaun')?>">
                    <div class="card card-statistic-1">
                    <div class="card-icon" style="background-color: dimgrey;">
                        <i class="fas fa-book-open"></i>
                    </div>
                        <div class="card-wrap">
                            <div class="card-header">
                            <h4>Akun Secretariado</h4>
                            </div>
                            <div class="card-body">
                                <?= Data_professores('akun_instituisaun') ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('akunparoquia')?>">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                        <i class="fas fa-user-plus"></i>
                    </div>
                        <div class="card-wrap">
                            <div class="card-header">
                            <h4>Akun Paroquia</h4>
                            </div>
                            <div class="card-body">
                                <?= Data_paroquia('akun_instituisaun') ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('akunfamilia')?>">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-users"></i>
                    </div>
                        <div class="card-wrap">
                            <div class="card-header">
                            <h4>Akun Familia</h4>
                            </div>
                            <div class="card-body">
                                <?= Data_paroquia('akun_instituisaun') ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('akunalunos')?>">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-dark">
                        <i class="fas fa-pen"></i>
                    </div>
                        <div class="card-wrap">
                            <div class="card-header">
                            <h4>Akun Alunos</h4>
                            </div>
                            <div class="card-body">
                                <?= Data_alunos('akun_alunos') ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <?= $this->endSection() ?>

