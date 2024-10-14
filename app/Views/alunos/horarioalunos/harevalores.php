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
            <div class="card">
                <div class="card-body">
                    <div class="card-body" style="background-color: cornflowerblue;">
                        <h5 class="card-title"><strong>Seminario Nossa Senhora De Fatima</strong></h5>
                    </div>
                    <hr>
                    <p class="card-text"><h5 style="font-family: 'Times New Roman', Times, serif;">
                    Bem-vindo Sistema Informasaun Senofa <a href="<?= base_url('horarioalunos/new') ?>" class="btn" style="background-color: cornflowerblue;"><i class="fas fa-sign-out-alt"></i></a></h5></p>
                    <hr>
                    <h3 class="text-center" style="color: darkgrey;"><?= $title; ?></h3>
                    <div class="table-responsive">
                    <h6 style="color: dark;"><strong># EXAME PRIMEIRO PERIODO #</strong></h6>
                    <?php 
                    $jumlah = [$segunda, $terca, $quarta, $quinta, $sexta, $sabado,
                    ];
                    $jumlah_data = count($jumlah);
                    if ($jumlah_data > 0 )
                     { ?>
                     <?php 
                    $jumlah_data = count($segunda);
                    if ($jumlah_data > 0 )
                     { ?>
                <table class="table table-bordered table-striped">
                    
                    <thead class="table-info">
                        <tr>
                            <th>#</th>
                            <th>Kode Materia</th>
                            <th>Materia</th>
                            <th>Horas</th>
                            <th>Loron</th>
                            <th>Dia</th>
                            <th>Aula</th>
                            <th>Tinan</th>
                            <th>Valores</th>
                            <th>Professores</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>  
                        <?php 
                        $valores_segunda_exame = 0;
                        foreach($segunda as $ur):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ur->kode_materia?></td>
                            <td><?= $ur->materia?></td>
                            <td><?= $ur->horas_valores?></td>
                            <td><?= $ur->loron_valores?></td>
                            <td><?= $ur->exame_periode?></td>
                            <td><?= $ur->aula ?></td>
                            <td><?= $ur->tinan_exame ?></td>
                            <td><?= ($ur->valor_exame * $ur->valor_tpc)/10 ?></td>
                            <td><?= $ur->naran_kompleto?></td>
                        </tr>
                        <?php
                         $valores_segunda_exame += $ur->valor_exame * $ur->valor_tpc/10;
                        endforeach; 
                        ?>
                    </tbody>
                    <tbody>
                        <?php 
                        $valores_terca_exame = 0;
                        foreach($terca as $ur):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ur->kode_materia?></td>
                            <td><?= $ur->materia?></td>
                            <td><?= $ur->horas_valores?></td>
                            <td><?= $ur->loron_valores?></td>
                            <td><?= $ur->exame_periode?></td>
                            <td><?= $ur->aula ?></td>
                            <td><?= $ur->tinan_exame ?></td>
                            <td><?= ($ur->valor_exame * $ur->valor_tpc)/10 ?></td>
                            <td><?= $ur->naran_kompleto?></td>
                        </tr>
                        <?php
                         $valores_terca_exame += $ur->valor_exame * $ur->valor_tpc/10;
                        endforeach; 
                        ?>
                    </tbody>
                    <tbody>
                        <?php 
                        $valores_quarta_exame = 0;
                        foreach($quarta as $ur):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ur->kode_materia?></td>
                            <td><?= $ur->materia?></td>
                            <td><?= $ur->horas_valores?></td>
                            <td><?= $ur->loron_valores?></td>
                            <td><?= $ur->exame_periode?></td>
                            <td><?= $ur->aula ?></td>
                            <td><?= $ur->tinan_exame ?></td>
                            <td><?= ($ur->valor_exame * $ur->valor_tpc)/10 ?></td>
                            <td><?= $ur->naran_kompleto?></td>
                        </tr>
                        <?php
                         $valores_quarta_exame += $ur->valor_exame * $ur->valor_tpc/10;
                        endforeach; 
                        ?>
                    </tbody>
                    <tbody>
                        <?php 
                        $valores_quinta_exame = 0;
                        foreach($quinta as $ur):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ur->kode_materia?></td>
                            <td><?= $ur->materia?></td>
                            <td><?= $ur->horas_valores?></td>
                            <td><?= $ur->loron_valores?></td>
                            <td><?= $ur->exame_periode?></td>
                            <td><?= $ur->aula ?></td>
                            <td><?= $ur->tinan_exame ?></td>
                            <td><?= ($ur->valor_exame * $ur->valor_tpc)/10 ?></td>
                            <td><?= $ur->naran_kompleto?></td>
                        </tr>
                        <?php
                         $valores_quinta_exame += $ur->valor_exame * $ur->valor_tpc/10;
                        endforeach; 
                        ?>
                    </tbody>
                    <tbody>
                        <?php 
                        $valores_sexta_exame = 0;
                        foreach($sexta as $ur):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ur->kode_materia?></td>
                            <td><?= $ur->materia?></td>
                            <td><?= $ur->horas_valores?></td>
                            <td><?= $ur->loron_valores?></td>
                            <td><?= $ur->exame_periode?></td>
                            <td><?= $ur->aula ?></td>
                            <td><?= $ur->tinan_exame ?></td>
                            <td><?= ($ur->valor_exame * $ur->valor_tpc)/10 ?></td>
                            <td><?= $ur->naran_kompleto?></td>
                        </tr>
                        <?php
                         $valores_sexta_exame += $ur->valor_exame * $ur->valor_tpc/10;
                        endforeach; 
                        ?>
                    </tbody>
                    <tbody>
                        <?php 
                        $valores_sabado_exame = 0;
                        foreach($sabado as $ur):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ur->kode_materia?></td>
                            <td><?= $ur->materia?></td>
                            <td><?= $ur->horas_valores?></td>
                            <td><?= $ur->loron_valores?></td>
                            <td><?= $ur->exame_periode?></td>
                            <td><?= $ur->aula ?></td>
                            <td><?= $ur->tinan_exame ?></td>
                            <td><?= ($ur->valor_exame * $ur->valor_tpc)/10 ?></td>
                            <td><?= $ur->naran_kompleto?></td>
                        </tr>
                        <?php
                         $valores_sabado_exame += $ur->valor_exame * $ur->valor_tpc/10;
                        endforeach; 
                        ?>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan="8"><h5><strong>Total Valores Primeiro Periode</strong></h5></td>
                            <td>  <?= ($valores_segunda_exame +
                             $valores_terca_exame + 
                             $valores_quarta_exame + $valores_quinta_exame
                             + $valores_sexta_exame + + $valores_sabado_exame )/1?></td>
                             <?php if (($valores_segunda_exame +
                                $valores_terca_exame + 
                                $valores_quarta_exame + $valores_quinta_exame
                                + $valores_sexta_exame + + $valores_sabado_exame )/1 <= 3.53 || ($valores_segunda_exame +
                                $valores_terca_exame + 
                                $valores_quarta_exame + $valores_quinta_exame
                                + $valores_sexta_exame + + $valores_sabado_exame )/1 >=2.53) 
                            {?>
                            <td class="text-center" style="background-color: cornflowerblue; color:aliceblue">Lulus</td>
                            <?php }elseif(($valores_segunda_exame +
                                $valores_terca_exame + 
                                $valores_quarta_exame + $valores_quinta_exame
                                + $valores_sexta_exame + + $valores_sabado_exame )/1 >=2.53 || ($valores_segunda_exame +
                                $valores_terca_exame + 
                                $valores_quarta_exame + $valores_quinta_exame
                                + $valores_sexta_exame + + $valores_sabado_exame )/1 >=1.53)
                                { ?>
                                <td class="text-center" style="background-color: red; color:aliceblue;">Tidak Lulus</td>
                             <?php }else{ ?>
                                <td class="text-center" style="background-color: red; color:aliceblue;">Tidak Lulus</td>
                            <?php } ?>
                        </tr>
                    </tbody>
                    </table>
                    </div>

                   
                     <?php }else{ ?>

                       <center>
                         <span class="badge bg-danger"><i class="fas fa-info-circle"></i> Data Masih Kosong,
                        Silahkan input data kehadiran Pada  bulan dan tahun yang anda pilih</span>
                       </center>

	                <?php } ?>

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