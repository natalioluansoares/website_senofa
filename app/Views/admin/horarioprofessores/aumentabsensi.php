
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
                <div class="card-body">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white"><?= $show;?></div>
                </div>
                <h4><?= $show ?></h4>
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
                    <?php
                    $jumlah_data = count($segunda);
                    if ($jumlah_data > 0 )
                    { ?>
                <div class="table-responsive">
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
                                    style="font-family:Times New Roman">Absensi
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
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
</section>
<div class="modal fade segunda" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(12, 153, 235, 0.74); color:white">
                    <h5 class="modal-title" id="exampleModalLabel">Absensi Alunos</h5>
                </div>
                <form action="<?= base_url('absensialunos'); ?>" method="post"
                    style="background-color: rgba(3, 79, 194, 0.685); color:white">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                     <div class="row">
                        <div class="col-lg-6">
                            <label for="presente" style="color: white;">Presente</label>
                            <div class="input-group">
                                <select name="presente"  class="form-control">
                                    <option value="">Hili Presente</option>
                                    <option value="1">Presente</option>
                                </select>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <label for="alpha" style="color: white;">Alpha</label>
                            <div class="input-group">
                                <select name="alpha"  class="form-control">
                                    <option value="">Hili Alpha</option>
                                    <option value="1">Alpha</option>
                                </select>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <label for="doente" style="color: white;">Doente</label>
                            <div class="input-group">
                                <select name="doente"  class="form-control">
                                    <option value="">Hili Doente</option>
                                    <option value="1">Doente</option>
                                </select>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <label for="lisensa" style="color: white;">Lisensa</label>
                            <div class="input-group">
                                <select name="lisensa"  class="form-control">
                                    <option value="">Hili Lisensa</option>
                                    <option value="1">Lisensa</option>
                                </select>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
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
                            <label for="alamat" style="color: white;" align="center">Horas</label>
                            <div class="input-group">
                                <input type="date" class="form-control" name="dia_absensi" required>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="absensi_alunos" id="alunos" placeholder="Valor Exame" class="form-control" required>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="tinan_akademiko" id="horario" class="form-control" required>
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
                                <input type="hidden" name="absensi_professores" id="professores" placeholder="Valor Trabalho Para Casa" class="form-control" required>
                            </div><br>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fila</button>
                        <button type="submit" class="btn btn-success" title="Click Untuk Update Data Menu"><i
                                class="ion-ios7-personadd mr-2"></i>Aumenta</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal-dialog -->
<script src="<?= base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
$(document).on("click", "#segundamodel", function() {
    var Kode = $(this).data('kode');
    var Materia = $(this).data('materia');
    var Horario = $(this).data('horario');
    var Aula = $(this).data('aula');
    var Alunos = $(this).data('alunos');
    var Professores = $(this).data('professores');

    $(".segunda #kode").val(Kode);
    $(".segunda #materia").val(Materia);
    $(".segunda #horario").val(Horario);
    $(".segunda #aula").val(Aula);
    $(".segunda #alunos").val(Alunos);
    $(".segunda #professores").val(Professores);
})
$(document).ready(function(e) {
    $("#form").on("submit", (function(e) {
        e.preventDefault();
        $.ajax({
            url: '<?= base_url('valoresestudantes'); ?>',
            type: 'POST',
            data: new FormatData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function() {
                document.location.href =
                    "<?= base_url('valoresestudantes'); ?>";
            }
        });
    }));
})
</script>
<?= $this->endSection() ?>