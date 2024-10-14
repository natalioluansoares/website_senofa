
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
                        <div class="card-header bg-primary text-white"><?= $show;?></div>
                    </div>
                   <h4><?= $show;?></h4>
                </div>
                <div class="card-body">
                    <?php
                    $jumlah_data = count($absensi);
                    if ($jumlah_data > 0 )
                    { ?>
                <div class="table-responsive">
                <table class="table table-bordered table-striped table-md" id="table1">
                <thead class="table-info">
                        <tr>
                            <th>#</th>
                            <th>Kode Materia</th>
                            <th>Materia</th>
                            <th>Loron/Horas</th>
                            <th>Exame Periode</th>
                            <th>Estudante</th>
                            <th>Aksaun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;  
                        $presente = 0;
                        $alpha = 0;
                        $doente = 0;
                        $lisensa = 0;
                        ?>  
                        <?php
                         foreach($absensi as $ur):
                         ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ur->kode_materia?></td>
                            <td><?= $ur->materia?></td>
                            <td><?= $ur->dia_absensi?></td>
                            <!-- <?php if ($ur->dia_absensi >= '2023-09-14 16:11:52') {?>
                                <td>AMama</td>
                            <?php }elseif($ur->dia_absensi >= '2023-09-13 16:11:52') { ?>
                                 <td class="btn btn-primary">SoaresLuan</td>
                            <?php }?> -->
                            <td><?= $ur->exame_periode?></td>
                            <td><?= $ur->naran_kompleto_alunos?></td>
                            <td><a href="<?= base_url('absensidetail/detail/'. $ur->kode_materia) ?>" class="btn btn-primary">Fila</a></td>
                        </tr>
                        <?php
                        $presente += $ur->presente; 
                        $alpha += $ur->alpha; 
                        $doente += $ur->doente; 
                        $lisensa += $ur->lisensa; 
                        endforeach;
                         ?>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan="1"><h7><strong>Total Presente</strong></h7></td>
                            <td><strong>:<?= $presente;?></strong></td>
                            <td colspan="0"><h7><strong>Total Alpha</strong></h7></td>
                            <td><strong>:<?= $alpha;?></strong></td>
                            <td colspan="0"><h7><strong>Total Doente</strong></h7></td>
                            <td><strong>:<?= $doente;?></strong></td>
                        </tr>
                        <tr>
                            <td colspan="0"><h7><strong>Total Lisensa</strong></h7></td>
                            <td><strong>:<?= $lisensa;?></strong></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <?php }else{ ?>
                    <center>
                        <span class="badge bg-danger"><i class="fas fa-info-circle"></i>Absensi Periode Ida Ne'e Seidauk Iha,
                         Bele Hare Fali Absensi Seluk !</span>
                    </center>
                <?php } ?> 
                </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<?= $this->endSection() ?>