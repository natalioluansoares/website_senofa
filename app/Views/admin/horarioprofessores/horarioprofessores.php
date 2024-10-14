
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
                    <div class="card-header bg-primary text-white">Filter Dados Valores Estudante</div>
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
                                        <a href="<?= base_url("horarioprofessores") ?>" class="btn btn-success ml-1">
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
                    $jumlah_data = count($segunda);
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
                            <th>Estudante</th>
                            <th>Aumenta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>  
                        <?php foreach($segunda as $ur):?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ur->kode_materia?></td>
                            <td><?= $ur->materia?></td>
                            <td><?= $ur->horas_materia?></td>
                            <td><?= $ur->loron_materia?></td>
                            <td><?= $ur->dia_materia?></td>
                            <td><?= $ur->aula ?></td>
                            <td><?= $ur->naran_kompleto_alunos?></td>
                            <td class="text-center" style="background-color: darkgray;">
                                <button  class="form-control btn-animation text-center"
                                    title="Click Untuk Ubah Alamat Anda" data-toggle="modal"
                                    data-target=".segunda" id="segundamodel" readonly
                                    data-kode="<?= $ur->kode_materia ?>" data-materia="<?= $ur->materia ?>"
                                    data-loron="<?= $ur->loron_materia ?>" data-dia="<?= $ur->dia_materia ?>"
                                    data-aula="<?= $ur->aula_horario ?>" data-horas="<?= $ur->horas_materia ?>"
                                    data-alunos="<?= $ur->alunos ?>"  data-professores="<?= $ur->professores ?>"
                                     data-horario="<?= $ur->tinan_horario ?>"
                                    style="font-family:Times New Roman">Valores
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
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
</section>
<div class="modal fade segunda" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(12, 153, 235, 0.74); color:white">
                    <h5 class="modal-title" id="exampleModalLabel">Valores Alunos</h5>
                </div>
                <form action="<?= base_url('horarioprofessores'); ?>" method="post"
                    style="background-color: rgba(3, 79, 194, 0.685); color:white">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                    <?php if(userLogin()->aktivo_instituisaun == 1) { ?>
                     <div class="row">
                        <div class="col-lg-6">
                            <label for="alamat" style="color: white;">Valor TPC</label>
                            <div class="input-group">
                                <input type="text" name="valor_tpc" id="tpc" placeholder="Valor Trabalho Para Casa"
                                 class="form-control" required>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <label for="alamat" style="color: white;">Valor Exame</label>
                            <div class="input-group">
                                <input type="text" name="valor_exame" id="exame" placeholder="Valor Exame" class="form-control" required>
                            </div><br>
                        </div>
                        <div class="col-lg-12">
                            <label for="alamat" style="color: white;" align="center">Exame Periode</label>
                            <div class="input-group">
                                <select name="exame_periode" id="" class="form-control" required>
                                    <option value="">Hili Exame Periode</option>
                                    <option value="Exame_Primeiro_Periode">Exame Primeiro Periode</option>
                                    <option value="Exame_Segundo_Periode">Exame Segundo Periode</option>
                                    <option value="Exame_Terceiro_Periode">Exame Terceiro Periode</option>
                                </select>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="alunos" id="alunos" placeholder="Valor Exame" class="form-control" required>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="tinan_exame" id="horario" class="form-control" required>
                            </div><br>
                        </div>
                   </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="kode_materia" id="kode" placeholder="Valor Trabalho Para Casa" class="form-control" required>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="materia" id="materia" placeholder="Valor Trabalho Para Casa" class="form-control" required>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="loron_valores" id="loron" placeholder="Valor Trabalho Para Casa" class="form-control" required>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="horas_valores" id="horas" placeholder="Valor Trabalho Para Casa" class="form-control" required>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="aula_valores" id="aula" placeholder="Valor Trabalho Para Casa" class="form-control" required>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="professores" id="professores" placeholder="Valor Trabalho Para Casa" class="form-control" required>
                            </div><br>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fila</button>
                        <button type="submit" class="btn btn-success" title="Click Untuk Update Data Menu"><i
                                class="ion-ios7-personadd mr-2"></i>Aumenta</button>
                    </div>
                    <?php }else{ ?>
                        <center>
                         <span class="badge bg-danger"><i class="fas fa-info-circle"></i>Kontakto Administrador Hodi Bele Aumenta Valores</span>
                       </center>

	                <?php } ?>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal-dialog -->
<script src="<?= base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
$(document).on("click", "#segundamodel", function() {
    var Kode = $(this).data('kode');
    var Materia = $(this).data('materia');
    var Loron = $(this).data('loron');
    var Horas = $(this).data('horas');
    var Aula = $(this).data('aula');
    var Alunos = $(this).data('alunos');
    var Horario = $(this).data('horario');
    var Professores = $(this).data('professores');

    $(".segunda #kode").val(Kode);
    $(".segunda #materia").val(Materia);
    $(".segunda #loron").val(Loron);
    $(".segunda #horas").val(Horas);
    $(".segunda #aula").val(Aula);
    $(".segunda #aula").val(Aula);
    $(".segunda #alunos").val(Alunos);
    $(".segunda #horario").val(Horario);
    $(".segunda #professores").val(Professores);
})
$(document).ready(function(e) {
    $("#form").on("submit", (function(e) {
        e.preventDefault();
        $.ajax({
            url: '<?= base_url('horarioalunos'); ?>',
            type: 'POST',
            data: new FormatData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function() {
                document.location.href =
                    "<?= base_url('horarioalunos'); ?>";
            }
        });
    }));
})
</script>
<?= $this->endSection() ?>