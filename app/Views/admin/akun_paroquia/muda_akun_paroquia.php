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
                    <form action="<?= base_url('akunparoquia/'. $akunparoquia->id_paroquia)?>" method="post" autocomplete="off">
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
                            <select name="paroquia_role" id="paroquia_role" class="form-control phone-number
                            <?= isset($errors['paroquia_role']) ? 'is-invalid': null?>">
                                <?php foreach ($userrole as $key => $value) : ?>
                                <option value="<?= $value->id?>" 
                                    <?= old('paroquia_role') == $value->id ? 'selected' : null ?>><?= $value->role ?>
                                </option>
                                    <?php  endforeach;  ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= isset($errors['paroquia_role']) ? $errors['paroquia_role'] : null ?>
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
                            <select name="naran_kompleto_paroquia" id="naran_kompleto_paroquia" class="form-control phone-number
                            <?= isset($errors['paroquia_role']) ? 'is-invalid': null?>">
                                <option value="<?= $akunparoquia->naran_kompleto_paroquia ?>"><?= $akunparoquia->naran_kompleto_paroquia ?></option>
                                <?php foreach ($paroquia as $key => $value) : ?>
                                <option value="<?= $value->naran_kompleto ?>" 
                                    <?= old('naran_kompleto_paroquia') == $value->naran_kompleto ? 'selected' : null ?>>
                                    <?= $value->naran_kompleto ?>
                                </option>
                                    <?php  endforeach;  ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= isset($errors['naran_kompleto_paroquia']) ? $errors['naran_kompleto_paroquia'] : null ?>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <label>jenero_paroquia *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-users"></i>
                            </div>
                            </div>
                            <select name="jenero_paroquia" id="jenero_paroquia"  class="form-control 
                            <?=isset($errors['jenero_paroquia']) ? 'is-invalid' : null ?>">
                                <option value="<?= $akunparoquia->jenero_paroquia ?>"><?= $akunparoquia->jenero_paroquia ?></option>
                                <option value="Mane"  <?= old('jenero_paroquia') == 'Mane' ? 'selected' : null ?>>Mane</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['jenero_paroquia']) ?  $errors['jenero_paroquia'] : null ?>
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
                            <input type="text" name="numero_telemovel" value="<?= $akunparoquia->numero_telemovel ?>" 
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
                            <select name="status_paroquia" id="status" class="form-control 
                            <?=isset($errors['status_paroquia']) ? 'is-invalid' : null ?>">
                                <option value="<?= $akunparoquia->status_paroquia ?>"><?= $akunparoquia->status_paroquia ?></option>
                                <option value="Aktivo" <?= old('status_paroquia') == 'Aktivo' ? 'selected' : null ?>>Aktivo</option>
                                <option value="La Aktivo" <?= old('status_paroquia') == 'La Aktivo' ? 'selected' : null ?>>La Aktivo</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['status_paroquia']) ?  $errors['status_paroquia'] : null ?>
                            </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label>Paroquia *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-globe"></i>
                            </div>
                            </div>
                            <input type="text" name="paroquia" value="<?= $akunparoquia->paroquia ?>" 
                            class="form-control phone-number <?=isset($errors['paroquia']) ? 'is-invalid' : null ?>" 
                            placeholder="Paroquia">
                            <div class="invalid-feedback">
                                <?=isset($errors['paroquia']) ?  $errors['paroquia'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('akunparoquia');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
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
