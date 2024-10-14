<?= $this->extend('template/header') ?>

<?= $this->section('title'); ?>
<title>Data Gawe&mdash; yukNikah</title>
<?= $this->endSection();?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
</div>
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
                <?php $errors = session()->getFlashdata('errors'); ?>
                <div class="card">
                    <div class="card-header">
                    <h4><?= $show;?></h4>
                    </div>
                    <div class="card-body">
                    <form action="<?= base_url('akunfamilia/'. $akunfamilia->id_familia)?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                     <input type="hidden" name="_method" value="PATCH">
                      <div class="form-group">
                        <label>Acessp Sistema *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-user-edit"></i>
                            </div>
                            </div>
                            <select name="familia_role" id="familia_role" class="form-control phone-number
                            <?= isset($errors['familia_role']) ? 'is-invalid': null?>">
                                <?php foreach ($userrole as $key => $value) : ?>
                                <option value="<?= $value->id?>" 
                                    <?= old('familia_role') == $value->id ? 'selected' : null ?>><?= $value->role ?>
                                </option>
                                    <?php  endforeach;  ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= isset($errors['familia_role']) ? $errors['familia_role'] : null ?>
                            </div>
                        </div>
                        </div>
                      <div class="form-group">
                        <label>Naran Kompleto *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            </div>
                            <select name="naran_kompleto_familia" id="naran_kompleto_familia" class="form-control phone-number
                            <?= isset($errors['familia_role']) ? 'is-invalid': null?>">
                                <option value="<?= $akunfamilia->naran_kompleto_familia ?>"><?= $akunfamilia->naran_kompleto_familia ?></option>
                                <?php foreach ($familia as $key => $value) : ?>
                                <option value="<?= $value->naran_kompleto ?>" 
                                    <?= old('naran_kompleto_familia') == $value->naran_kompleto ? 'selected' : null ?>>
                                    <?= $value->naran_kompleto ?>
                                </option>
                                    <?php  endforeach;  ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= isset($errors['naran_kompleto_familia']) ? $errors['naran_kompleto_familia'] : null ?>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <label>jenero_familia *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-users"></i>
                            </div>
                            </div>
                            <select name="jenero_familia" id="jenero_familia"  class="form-control 
                            <?=isset($errors['jenero_familia']) ? 'is-invalid' : null ?>">
                                <option value="<?= $akunfamilia->jenero_familia ?>"><?= $akunfamilia->jenero_familia ?></option>
                                <option value="Mane"  <?= old('jenero_familia') == 'Mane' ? 'selected' : null ?>>Mane</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['jenero_familia']) ?  $errors['jenero_familia'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Numero Telemovel *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-phone"></i>
                            </div>
                            </div>
                            <input type="text" name="numero_telemovel" value="<?= $akunfamilia->numero_telemovel ?>" 
                            class="form-control phone-number <?=isset($errors['numero_telemovel']) ? 'is-invalid' : null ?>" 
                            placeholder="Numero Telemovel">
                            <div class="invalid-feedback">
                                <?=isset($errors['numero_telemovel']) ?  $errors['numero_telemovel'] : null ?>
                            </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label>Status Servisu *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-power-off"></i>
                            </div>
                            </div>
                            <select name="status_familia" id="status" class="form-control 
                            <?=isset($errors['status_familia']) ? 'is-invalid' : null ?>">
                                <option value="<?= $akunfamilia->status_familia ?>"><?= $akunfamilia->status_familia ?></option>
                                <option value="Aktivo" <?= old('status_familia') == 'Aktivo' ? 'selected' : null ?>>Aktivo</option>
                                <option value="La Aktivo" <?= old('status_familia') == 'La Aktivo' ? 'selected' : null ?>>La Aktivo</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['status_familia']) ?  $errors['status_familia'] : null ?>
                            </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label>Posto Administrativo *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-globe"></i>
                            </div>
                            </div>
                            <input type="text" name="posto_administrativo" value="<?= $akunfamilia->posto_administrativo ?>" 
                            class="form-control phone-number <?=isset($errors['posto_administrativo']) ? 'is-invalid' : null ?>" 
                            placeholder="Posto Administrativo">
                            <div class="invalid-feedback">
                                <?=isset($errors['posto_administrativo']) ?  $errors['posto_administrativo'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('akunfamilia');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
