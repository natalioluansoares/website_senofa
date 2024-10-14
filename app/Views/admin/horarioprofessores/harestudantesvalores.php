
<?= $this->extend('template/header') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                <h4><?= $show;?></h4>
                </div>
                <div class="card-body">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">Filter Dados Horario Estudante</div>
                        <div class="card-body">
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
                                        <a href="<?= base_url("valoresestudantes") ?>" class="btn btn-success ml-1">
                                        <i class="fas fa-sharp fa-regular fa-backward"></i></a>
                                </div>
                        </form>
                    </div>
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
		        <div class="alert alert-info">Filter Valores Tuir Tinan: 
                    <span class="font-weight-bold mr-2"><?= $tinan  ?></span>
	            </div>
                <div class="table-responsive">
                    <?php 
                    $jumlah_data = count($primeiro);
                    if ($jumlah_data > 0 )
                     { ?>
                    <table class="table table-bordered table-striped table-md" id="table1">
                        <thead class="table-info">
                        <tr>
                            <th>#</th>
                            <th>Kode Materia</th>
                            <th>Materia</th>
                            <th>Horas</th>
                            <th>Loron</th>
                            <th>Dia</th>
                            <th>Aula</th>
                            <th>Valores</th>
                            <th>Professores</th>
                            <th>Aksaun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>  
                        <?php 
                        // $valores_segunda_exame = 0;
                        foreach($primeiro as $ur):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ur->kode_materia?></td>
                            <td><?= $ur->materia?></td>
                            <td><?= $ur->horas_valores?></td>
                            <td><?= $ur->loron_valores?></td>
                            <td><?= $ur->exame_periode?></td>
                            <td><?= $ur->aula ?></td>
                            <td><?= ($ur->valor_exame * $ur->valor_tpc)/10 ?></td>
                            <td><?= $ur->naran_kompleto_alunos?></td>

                            <td><a href="<?= base_url("horarioprofessores/".$ur->kode_materia. "/edit") ?>" class="btn btn-success ml-1">
                                        <i class="fas fa-sharp fa-regular fa-backward"></i></a></td>
                        </tr>
                        <?php
                        //  $valores_segunda_exame += $ur->valor_exame * $ur->valor_tpc/10;
                        endforeach; 
                        ?>
                    </tbody>
                    </table>
                    <?php }else{ ?>

                       <center>
                         <span class="badge bg-danger"><i class="fas fa-info-circle"></i>Sistema Error Presica Kontak
                          Administrator Tamba Valores Seidauk Tama !</span>
                       </center>

	                <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>