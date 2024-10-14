
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
                <div class="table-responsive">
                    <form class="form-inline">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group ml-0 mr-3">
                                        <select class="form-control mb-2" name="tinan">

                                            
                                            <option value="">---Pilih Tinan---</option>

                                            <?php $tahu = date('Y');
                                                for($i=2023;$i<$tahu+2;$i++) { 
                                            ?>

                                                <option value="<?= $i ?>"><?= $i ?></option>

                                            <?php } ?>
                                        
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning mb-2 mr-2">
                                <i class="fas fa-eye"></i></button>
                            <a href="<?= site_url('akunalunos/new');?>" class="btn btn-primary mb-2"><i class="fas fa-solid fa-plus"></i></a>
                                
                        </div>
                </form>
                    <?php 
                            if ((isset($_GET['tinan']) && $_GET['tinan']!='')){
        
                                $tinan              = $_GET['tinan'];
                                $tinanhorario   = $tinan;
                            }else{
        
                                $tinan      = date('Y');
                                $tinanhorario      = $tinan;
                            }
        
                        ?>
        
            </div>
            <div class="alert alert-info">Filter Horario Tinan: 
                <span class="font-weight-bold mr-2"><?= $tinanhorario  ?></span>
            </div>
            <div class="table-responsive">
             <?php 
                    $jumlah_data = count($akunalunos);
                    if ($jumlah_data > 0 )
                     { ?>
                <table class="table table-bordered table-md" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Naran Alunos</th>
                        <th>Naran Familia</th>
                        <th>Naran Paroquia</th>
                        <th>Jenero</th>
                        <th>Status</th>
                        <th>Paroquia</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                   
                    <?php 
                    $no=1;
                    foreach($akunalunos as $e):   
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $e->naran_kompleto_alunos?></td>
                        <td><?= $e->naran_kompleto_familia?></td>
                        <td><?= $e->naran_kompleto_paroquia?></td>
                        <td><?= $e->jenero_alunos?></td>
                        <td><?= $e->status_alunos?></td>
                        <td><?= $e->fatin_moris_alunos?></td>
                        <td><a href="<?= site_url('akunalunos/'.$e->id_alunos.'/edit') ?>" class="btn btn-success"><i class="fas fa-user-edit"></i></a></td>
                        <form action="<?= site_url('akunalunos/'.$e->id_alunos)?>" method="post" autocomplete="off"
                         onsubmit="return confirm('Ita Hakarak Hamos Dados ?')">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <td><button class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></button></td>
                        </form>
                        <td><button class="btn btn-info" id="modal-2"><i class="fas fa-folder-open"></i></button></td>
                    </tr>
                    <?php 
                    endforeach;
                     ?>
                    </tbody>
                </table>
            </div>
            <?php }else{ ?>
    
             <center>
               <span class="badge bg-danger"><i class="fas fa-info-circle"></i> Akun Estudante Tinan <?= $tinanhorario; ?> Seidauk Aumenta, Favor Bele Hili Fali Akun Estudante Tinan Seluk </span>
             </center>
    
          <?php } ?>
        </div>
            </div>
    </div>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>