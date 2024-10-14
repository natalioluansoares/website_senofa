
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
        <div class="row">
            <div class="col-12 col-md-12">
                <?php $errors = session()->getFlashdata('errors'); ?>
                <div class="card">
                    <div class="card-body">
                    <form action="<?= base_url('propinas/'.$propinas->id_propinas)?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                     <input type="hidden" name="_method" value="PATCH">
                      <div class="form-group">
                        <label>Naran Kompleto Alunos *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-user-edit"></i>
                                    </div>
                                </div>
                                <select name="naran_alunos" id="naran_alunos" class="form-control phone-number
                                <?= isset($errors['naran_alunos']) ? 'is-invalid': null?>">
                                    <?php 
                                    $jumlah_data = count($akunalunos);
                                    if ($jumlah_data > 0 )
                                    { ?>
                                    <?php }else{ ?>
                                    <center>
                                        <option value="" class="text-danger">Propinan Tinan Ida Seidauk Bele Selu</option>
                                    </center>
                                    <?php } ?>
                                    <?php foreach ($akunalunos as $key => $value) : ?>
                                    <option value="<?= $value->id_alunos ?>" 
                                        <?= $propinas->naran_alunos  == $value->id_alunos ? 'selected' : null ?>>
                                        <?= $value->naran_kompleto_alunos ?>
                                    </option>
                                        <?php  endforeach;  ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= isset($errors['naran_alunos']) ? $errors['naran_alunos'] : null ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <label>Aula *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-home"></i>
                                    </div>
                                </div>
                                <select name="aula_alunos" id="aula_alunos" class="form-control phone-number
                                <?= isset($errors['aula_alunos']) ? 'is-invalid': null?>">
                                    <option value="">Pilih Aula</option>
                                    <?php foreach ($aula as $key => $value) : ?>
                                    <option value="<?= $value->id_aula ?>" 
                                        <?= $propinas->aula_alunos == $value->id_aula ? 'selected' : null ?>><?= $value->aula ?>
                                    </option>
                                        <?php  endforeach;  ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= isset($errors['aula_alunos']) ? $errors['aula_alunos'] : null ?>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                        <label>Periode Exame *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-calendar"></i>
                                    </div>
                                </div>
                                <select name="pre_exame" id="pre_exame" class="form-control phone-number
                                <?= isset($errors['pre_exame']) ? 'is-invalid': null?>">
                                    <option value="<?= $propinas->pre_exame?>"><?= $propinas->pre_exame?></option>
                                    <option value="">Periode Exame</option>
                                    <option value="Exame_Primeiro_Periode">Exame Primeiro Periode</option>
                                    <option value="Exame_Segundo_Periode">Exame Segundo Periode</option>
                                    <option value="Exame_Terceiro_Periode">Exame Terceiro Periode</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= isset($errors['pre_exame']) ? $errors['pre_exame'] : null ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <label>Propinas *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-money-bill"></i>
                            </div>
                            </div>
                            <input type="text" name="propinas" value="<?= $propinas->propinas?>" 
                            class="form-control phone-number <?=isset($errors['propinas']) ? 'is-invalid' : null ?>" 
                            placeholder="Propinas">
                            <div class="invalid-feedback">
                                <?=isset($errors['propinas']) ?  $errors['propinas'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Loron Selu *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-calendar"></i>
                            </div>
                            </div>
                            <input type="date" name="loron_propinas" value="<?= $propinas->loron_propinas?>" 
                            class="form-control phone-number <?=isset($errors['loron_propinas']) ? 'is-invalid' : null ?>" 
                            placeholder="Loron Selu">
                            <div class="invalid-feedback">
                                <?=isset($errors['loron_propinas']) ?  $errors['loron_propinas'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Horas Selu *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-calendar"></i>
                            </div>
                            </div>
                            <input type="text" name="horas_propinas" value="<?= $propinas->horas_propinas?>" 
                            class="form-control phone-number <?=isset($errors['horas_propinas']) ? 'is-invalid' : null ?>" 
                            placeholder="Horas Selu">
                            <div class="invalid-feedback">
                                <?=isset($errors['horas_propinas']) ?  $errors['horas_propinas'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('propinas/'.$propinas->naran_alunos.'/show');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>