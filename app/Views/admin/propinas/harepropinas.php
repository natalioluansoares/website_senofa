
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
                    <?php 
                    $jumlah_data = count($alunos);
                    if ($jumlah_data > 0 )
                     { ?>
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Propinas Estudantes <?= $propinastinan  ?>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark"  style="height: 300px; width: 50%; overflow-y: scroll;">
                            
                            <?php foreach($alunos as $a): ?>
                                <li><a class="dropdown-item" href="<?= base_url('propinas/'.$a->id_alunos.'/show')?>">
                                <?= $a->naran_kompleto_alunos ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
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
</section>
<?= $this->endSection() ?>