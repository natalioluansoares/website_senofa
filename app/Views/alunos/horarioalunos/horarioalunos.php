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
            <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <b>Success !</b>
                    <?= session()->getFlashdata('success') ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <b>Error !</b>
                    <?= session()->getFlashdata('error') ?>
                </div>
            </div>
        <?php endif; ?>
            <?php if (userLoginAlunos()->aktivo_alunos == 1) { ?>
            <div class="card">
                <div class="card-body">
                    <div class="card-body" style="background-color: cornflowerblue;">
                        <h5 class="card-title"><strong>Seminario Nossa Senhora De Fatima</strong></h5>
                    </div>
                    <hr>
                    <p class="card-text"><h5 style="font-family: 'Times New Roman', Times, serif;">
                    Bem-vindo Sistema Informasaun Senofa</h5></p>
                    <hr>
                    <h6 style="color: dark;"><strong>SEGUNDA</strong></h6>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-info">
                                <tr>
                                    <th>Kode Materia</th>
                                    <th>Materia</th>
                                    <th>Horas</th>
                                    <th>Loron</th>
                                    <th>Dia</th>
                                    <th>Aula</th>
                                    <th>Professores</th>
                                    <th class="text-center">Aumenta</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach($segunda as $ur): 
                                ?>
                                <tr>
                                    <td><?= $ur->kode_materia?></td>
                                    <td><?= $ur->materia?></td>
                                    <td><?= $ur->horas_materia?></td>
                                    <td><?= $ur->loron_materia?></td>
                                    <td><?= $ur->dia_materia?></td>
                                    <td><?= $ur->aula?></td>
                                    <td><?= $ur->naran_kompleto?></td>
                                    <td class="text-center" style="background-color: darkgray;">
                                        <button  class="form-control btn-animation text-center"
                                                 title="Click Untuk Ubah Alamat Anda" data-toggle="modal"
                                                 data-target=".segunda" id="segundamodel" readonly 
                                                 data-kode="<?= $ur->kode_materia ?>"  data-materia="<?= $ur->materia ?>"
                                                 data-professores="<?= $ur->professores ?>" data-horas="<?= $ur->horas_materia ?>"
                                                 data-loron="<?= $ur->loron_materia ?>" data-dia="<?= $ur->dia_materia ?>"
                                                 data-aula="<?= $ur->aula_materia ?>" data-tinan="<?= $ur->tinan_akademiko ?>"
                                                 style="font-family:Times New Roman">Aumenta</button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td><a href="" class="btn btn-primary">Horario</a></td>
                                    <td><a href="<?= base_url('homealunos')?>" class="btn btn-warning">Fila</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <h6 style="color: dark;"><strong>TERCA - FEIRA</strong></h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-info">
                            <tr>
                                <th>Kode Materia</th>
                                <th>Materia</th>
                                <th>Horas</th>
                                <th>Loron</th>
                                <th>Dia</th>
                                <th>Aula</th>
                                <th>Professores</th>
                                <th class="text-center">Aumenta</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach($terca as $ur): 
                            ?>
                            <tr>
                                <td><?= $ur->kode_materia?></td>
                                <td><?= $ur->materia?></td>
                                <td><?= $ur->horas_materia?></td>
                                <td><?= $ur->loron_materia?></td>
                                <td><?= $ur->dia_materia?></td>
                                <td><?= $ur->aula?></td>
                                <td><?= $ur->naran_kompleto?></td>
                                <td class="text-center" style="background-color: darkgray;">
                                    <button  class="form-control btn-animation text-center"
                                        title="Click Untuk Ubah Alamat Anda" data-toggle="modal"
                                        data-target=".segunda" id="segundamodel" readonly 
                                        data-kode="<?= $ur->kode_materia ?>"  data-materia="<?= $ur->materia ?>"
                                        data-professores="<?= $ur->professores ?>" data-horas="<?= $ur->horas_materia ?>"
                                        data-loron="<?= $ur->loron_materia ?>" data-dia="<?= $ur->dia_materia ?>"
                                        data-aula="<?= $ur->aula_materia ?>" data-tinan="<?= $ur->tinan_akademiko ?>"
                                        style="font-family:Times New Roman">Aumenta
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                             <tbody>
                                <tr>
                                    <td><a href="" class="btn btn-primary">Horario</a></td>
                                    <td><a href="<?= base_url('homealunos')?>" class="btn btn-warning">Fila</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <h6 style="color: dark;"><strong>QUARTA - FEIRA</strong></h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-info">
                            <tr>
                                <th>Kode Materia</th>
                                <th>Materia</th>
                                <th>Horas</th>
                                <th>Loron</th>
                                <th>Dia</th>
                                <th>Aula</th>
                                <th>Professores</th>
                                <th class="text-center">Aumenta</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach($quarta as $ur): 
                            ?>
                            <tr>
                                <td><?= $ur->kode_materia?></td>
                                <td><?= $ur->materia?></td>
                                <td><?= $ur->horas_materia?></td>
                                <td><?= $ur->loron_materia?></td>
                                <td><?= $ur->dia_materia?></td>
                                <td><?= $ur->aula?></td>
                                <td><?= $ur->naran_kompleto?></td>
                                <td class="text-center" style="background-color: darkgray;">
                                    <button  class="form-control btn-animation text-center"
                                        title="Click Untuk Ubah Alamat Anda" data-toggle="modal"
                                        data-target=".segunda" id="segundamodel" readonly 
                                        data-kode="<?= $ur->kode_materia ?>"  data-materia="<?= $ur->materia ?>"
                                        data-professores="<?= $ur->professores ?>" data-horas="<?= $ur->horas_materia ?>"
                                        data-loron="<?= $ur->loron_materia ?>" data-dia="<?= $ur->dia_materia ?>"
                                        data-aula="<?= $ur->aula_materia ?>" data-tinan="<?= $ur->tinan_akademiko ?>"
                                        style="font-family:Times New Roman">Aumenta
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td><a href="" class="btn btn-primary">Horario</a></td>
                                    <td><a href="<?= base_url('homealunos')?>" class="btn btn-warning">Fila</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <h6 style="color: dark;"><strong>QUINTA - FEIRA</strong></h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-info">
                            <tr>
                                <th>Kode Materia</th>
                                <th>Materia</th>
                                <th>Horas</th>
                                <th>Loron</th>
                                <th>Dia</th>
                                <th>Aula</th>
                                <th>Professores</th>
                                <th class="text-center">Aumenta</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach($quinta as $ur): 
                            ?>
                            <tr>
                                <td><?= $ur->kode_materia?></td>
                                <td><?= $ur->materia?></td>
                                <td><?= $ur->horas_materia?></td>
                                <td><?= $ur->loron_materia?></td>
                                <td><?= $ur->dia_materia?></td>
                                <td><?= $ur->aula?></td>
                                <td><?= $ur->naran_kompleto?></td>
                                <td class="text-center" style="background-color: darkgray;">
                                    <button  class="form-control btn-animation text-center"
                                        title="Click Untuk Ubah Alamat Anda" data-toggle="modal"
                                        data-target=".segunda" id="segundamodel" readonly 
                                        data-kode="<?= $ur->kode_materia ?>"  data-materia="<?= $ur->materia ?>"
                                        data-professores="<?= $ur->professores ?>" data-horas="<?= $ur->horas_materia ?>"
                                        data-loron="<?= $ur->loron_materia ?>" data-dia="<?= $ur->dia_materia ?>"
                                        data-aula="<?= $ur->aula_materia ?>" data-tinan="<?= $ur->tinan_akademiko ?>"
                                        style="font-family:Times New Roman">Aumenta
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td><a href="" class="btn btn-primary">Horario</a></td>
                                    <td><a href="<?= base_url('homealunos')?>" class="btn btn-warning">Fila</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <h6 style="color: dark;"><strong>SEXTA - FEIRA</strong></h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-info">
                            <tr>
                                <th>Kode Materia</th>
                                <th>Materia</th>
                                <th>Horas</th>
                                <th>Loron</th>
                                <th>Dia</th>
                                <th>Aula</th>
                                <th>Professores</th>
                                <th class="text-center">Aumenta</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach($sexta as $ur): 
                            ?>
                            <tr>
                                <td><?= $ur->kode_materia?></td>
                                <td><?= $ur->materia?></td>
                                <td><?= $ur->horas_materia?></td>
                                <td><?= $ur->loron_materia?></td>
                                <td><?= $ur->dia_materia?></td>
                                <td><?= $ur->aula?></td>
                                <td><?= $ur->naran_kompleto?></td>
                                <td class="text-center" style="background-color: darkgray;">
                                    <button  class="form-control btn-animation text-center"
                                        title="Click Untuk Ubah Alamat Anda" data-toggle="modal"
                                        data-target=".segunda" id="segundamodel" readonly 
                                        data-kode="<?= $ur->kode_materia ?>"  data-materia="<?= $ur->materia ?>"
                                        data-professores="<?= $ur->professores ?>" data-horas="<?= $ur->horas_materia ?>"
                                        data-loron="<?= $ur->loron_materia ?>" data-dia="<?= $ur->dia_materia ?>"
                                        data-aula="<?= $ur->aula_materia ?>" data-tinan="<?= $ur->tinan_akademiko ?>"
                                        style="font-family:Times New Roman">Aumenta
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td><a href="" class="btn btn-primary">Horario</a></td>
                                    <td><a href="<?= base_url('homealunos')?>" class="btn btn-warning">Fila</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <h6 style="color: dark;"><strong>SABADO</strong></h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-info">
                            <tr>
                                <th>Kode Materia</th>
                                <th>Materia</th>
                                <th>Horas</th>
                                <th>Loron</th>
                                <th>Dia</th>
                                <th>Aula</th>
                                <th>Professores</th>
                                <th class="text-center">Aumenta</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach($sabado as $ur): 
                            ?>
                            <tr>
                                <td><?= $ur->kode_materia?></td>
                                <td><?= $ur->materia?></td>
                                <td><?= $ur->horas_materia?></td>
                                <td><?= $ur->loron_materia?></td>
                                <td><?= $ur->dia_materia?></td>
                                <td><?= $ur->aula?></td>
                                <td><?= $ur->naran_kompleto?></td>
                                <td class="text-center" style="background-color: darkgray;">
                                    <button  class="form-control btn-animation text-center"
                                        title="Click Untuk Ubah Alamat Anda" data-toggle="modal"
                                        data-target=".segunda" id="segundamodel" readonly 
                                        data-kode="<?= $ur->kode_materia ?>"  data-materia="<?= $ur->materia ?>"
                                        data-professores="<?= $ur->professores ?>" data-horas="<?= $ur->horas_materia ?>"
                                        data-loron="<?= $ur->loron_materia ?>" data-dia="<?= $ur->dia_materia ?>"
                                        data-aula="<?= $ur->aula_materia ?>" data-tinan="<?= $ur->tinan_akademiko ?>"
                                        style="font-family:Times New Roman">Aumenta
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td><a href="" class="btn btn-primary">Horario</a></td>
                                    <td><a href="<?= base_url('homealunos')?>" class="btn btn-warning">Fila</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php }else{ ?>
                <div class="card">
                <div class="card-body">
                    <div class="card-body" style="background-color: cornflowerblue;">
                        <h5 class="card-title"><strong>Seminario Nossa Senhora De Fatima</strong></h5>
                    </div>
                    <hr>
                    <p class="card-text"><h5 style="font-family: 'Times New Roman', Times, serif;">
                    Bem-vindo Sistema Informasaun Senofa</h5></p>
                    <hr>
                    <center>
                        <div class="table-responsive">
                        <h5>
                         <span class="badge bg-danger"><i class="fas fa-info-circle"></i> Data Masih Kosong,
                        Silahkan input data kehadiran Pada  bulan dan tahun yang anda pilih</span>
                        </h5>
                        </div>
                    </center>
                </div>
            </div>
           <?php } ?>
        </div>
    </div>
</div>
 <div class="modal fade segunda" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(12, 153, 235, 0.74); color:white">
                    <h5 class="modal-title" id="exampleModalLabel">Horario Materia</h5>
                </div>
                <form action="<?= base_url('horarioalunos'); ?>" method="POST"
                    style="background-color: rgba(3, 79, 194, 0.685); color:white">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="alamat" style="color: white;">Kode Materia</label>
                            <div class="input-group">
                                <input type="text" name="kode_materia" id="kode" class="form-control" readonly>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <label for="alamat" style="color: white;">Materia</label>
                            <div class="input-group">
                                <input type="text" name="materia" id="materia" class="form-control" readonly>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="professores" id="professores" class="form-control" readonly>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="horas_materia" id="horas" class="form-control" readonly>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="loron_materia" id="loron" class="form-control" readonly>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="dia_materia" id="dia" class="form-control" readonly>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="alunos" value="<?= userLoginAlunos()->id_alunos ?>" class="form-control" readonly>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="tinan_horario" id="tinan" class="form-control" readonly>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="hidden" name="aula_horario" id="aula" class="form-control" readonly>
                            </div><br>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <a href="<?= base_url('horarioalunos') ?>" class="btn btn-danger"  >
                        Fila
                    </a>
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
            var Professores = $(this).data('professores');
            var Horas = $(this).data('horas');
            var Loron = $(this).data('loron');
            var Dia = $(this).data('dia');
            var Aula = $(this).data('aula');
            var Tinan = $(this).data('tinan');

            $(".segunda #kode").val(Kode);
            $(".segunda #materia").val(Materia);
            $(".segunda #professores").val(Professores);
            $(".segunda #horas").val(Horas);
            $(".segunda #loron").val(Loron);
            $(".segunda #dia").val(Dia);
            $(".segunda #aula").val(Aula);
            $(".segunda #tinan").val(Tinan);
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
        