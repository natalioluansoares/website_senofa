
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
                    <div class="card mb-3">
                        <div class="card-header bg-primary text-white">Filter Dados Propinas Estudante</div>
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
                    </div>
                    <?php 
                    if ((isset($_GET['tinan']) && $_GET['tinan']!='')){

                        $tinan              = $_GET['tinan'];
                        $propinastinan   = $tinan;
                    }else{

                        $tinan      = date('Y');
                        $propinastinan   = $tinan;
                    }

                ?>

		        <div class="alert alert-info">Filter Propinas Tinan: 
                    <span class="font-weight-bold mr-2"><?= $propinastinan  ?></span>
	            </div>
                <div class="table-responsive">
                <?php 
                $jumlah_data = count($propinas);
                if ($jumlah_data > 0 )
                { ?>
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
                <?php }else{ ?>
                <div class="table-responsive">

                   <center>
                     <span class="badge bg-danger"><i class="fas fa-info-circle"></i> Propinan Estudante Tinan Ida Ne'e Seidauk Selu Tamba Estudante Seidauk Iha Horario Akademiko Tinan <?= $propinastinan  ?></span>
                   </center>

                </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>