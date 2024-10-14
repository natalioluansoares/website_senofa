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
                                value="<?= userLoginAlunos()->naran_kompleto_alunos; ?>" readonly style="background-color: lightgray;">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Tinan Tama</label>
                            <div class="form-group">
                                <input type="text" class="form-control"
                                value="<?= userLoginAlunos()->tinan_tama; ?>" readonly style="background-color: lightgray;">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Status</label>
                            <div class="form-group">
                                <input type="text" class="form-control"
                                value="<?= userLoginAlunos()->status_alunos; ?>" readonly style="background-color: lightgray;">
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="card-body">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">Filter Dados Valores Estudante</div>
                        <div class="card-body">
                           <form class="form-inline">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group ml-0 mb-2">
                                            <select class="form-control ml-0" name="tinan">

                                                
                                                <option value="">---Pilih Tinan---</option>

                                                <?php $tahu = date('Y');
                                                    for($i=2023;$i<$tahu+2;$i++) { 
                                                ?>

                                                    <option value="<?= $i ?>"><?= $i ?></option>

                                                <?php } ?>
                                            
                                            </select>
                                    </div>
                                </div><br>
                                <div class="col-lg-1">
                                    <div class="form-group ml-auto">
                                        <button type="submit" class="btn btn-primary ml-2 mb-2 form-control">
                                            <i class="fas fa-eye"></i></button>
                                            <!-- <a href="<?= base_url("propinas/new") ?>" class="btn btn-success ml-1">
                                            <i class="fas fa-plus"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php 
                    if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $tinanhorario   = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $tinanhorario      = $tinan;
                    }

                ?>

                <div class="card-body">
                        <div class="alert alert-info">Filter Valores Tinan: 
                            <span class="font-weight-bold mr-2"><?= $tinanhorario  ?></span>
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
                    <h3><?= $title; ?><sup style="color: darkgrey;">(<?= $tinanhorario ?>)</sup></h3><br><br>
                    <?php 
                    $jumlah_data = count($horario);
                    if ($jumlah_data > 0 )
                     { ?>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="dropdown">
                                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Exame Primeiro Periode <?= $tinanhorario  ?>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-white" style="width: 75%;">
                                        <li><a class="dropdown-item" href="<?= base_url('horarioalunos/Exame_Primeiro_Periode/'.$tinanhorario)?>">
                                    Exame Primeiro Periode <?= $tinanhorario ?></a></li>
                                    </ul>
                                </div>
                            </div><br><br>
                            <div class="col-lg-4">
                                <div class="dropdown">
                                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Exame Segundo Periode <?= $tinanhorario  ?>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-white" style="width: 75%;">
                                        <li><a class="dropdown-item" href="<?= base_url('horarioalunos/Exame_Segundo_Periode/'.$tinanhorario)?>">
                                    Exame Segundo Periode <?= $tinanhorario ?></a></li>
                                    </ul>
                                </div>
                            </div><br><br>
                            <div class="col-lg-4">
                                <div class="dropdown">
                                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Exame Terceiro Periode <?= $tinanhorario  ?>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-white" style="width: 75%;">
                                        <li><a class="dropdown-item" href="<?= base_url('horarioalunos/Exame_Terceiro_Periode/'.$tinanhorario)?>">
                                    Exame Terceiro Periode <?= $tinanhorario ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><br><br><br>

                     <?php }else{ ?>

                       <center>
                         <span class="badge bg-danger"><i class="fas fa-info-circle"></i> Data Masih Kosong,
                        Silahkan input data kehadiran Pada  bulan dan tahun yang anda pilih</span>
                       </center>

	                <?php } ?>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>