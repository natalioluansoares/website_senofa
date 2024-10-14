<?= $this->extend('template/header') ?>

<?= $this->section('title'); ?>
<title>Data Gawe&mdash; yukNikah</title>
<?= $this->endSection();?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12">
                <?php $errors = session()->getFlashdata('errors'); ?>
                <div class="card">
                    <div class="card-header">
                    <h4><?= $show;?></h4>
                    </div>
                    <div class="card-body">
                    <form action="<?= base_url('administrasaun/update/'.$administrasaun->id_instituisaun)?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                      <div class="form-group">
                        <label>Acessp Sistema *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-user-edit"></i>
                            </div>
                            </div>
                            <select name="id_role" id="id_role" class="form-control phone-number
                            <?= isset($errors['id_role']) ? 'is-invalid': null?>">
                                <?php foreach ($userrole as $key => $value) : ?>
                                <option value="<?= $value->id?>" 
                                    <?= old('id_role') == $value->id ? 'selected' : null ?>><?= $value->role ?>
                                </option>
                                    <?php  endforeach;  ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= isset($errors['id_role']) ? $errors['id_role'] : null ?>
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
                            <input type="text" name="naran_kompleto" value="<?= $administrasaun->naran_kompleto ?>" 
                            class="form-control phone-number <?=isset($errors['naran_kompleto']) ? 'is-invalid' : null ?>" 
                            placeholder="Naran Kompleto">
                            <div class="invalid-feedback">
                                <?=isset($errors['naran_kompleto']) ?  $errors['naran_kompleto'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Jenero *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-users"></i>
                            </div>
                            </div>
                            <select name="jenero" id="jenero"  class="form-control 
                            <?=isset($errors['jenero']) ? 'is-invalid' : null ?>">
                                <option value="<?= $administrasaun->jenero; ?>"><?= $administrasaun->jenero; ?></option>
                                <option value="Mane">Mane</option>
                                <option value="Feto">Feto</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['jenero']) ?  $errors['jenero'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Status *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>
                            </div>
                            <select name="status" id="status" class="form-control 
                            <?=isset($errors['status']) ? 'is-invalid' : null ?>">
                                <option value="<?= $administrasaun->status; ?>"><?= $administrasaun->status; ?></option>
                                <option value="Solteiro" <?= old('status') == 'Solteiro' ? 'selected' : null ?>>Solteiro</option>
                                <option value="Solteira" <?= old('status') == 'Solteira' ? 'selected' : null ?>>Solteira</option>
                                <option value="administrasaun" <?= old('status') == 'administrasaun' ? 'selected' : null ?>>administrasaun</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['status']) ?  $errors['status'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Status Servisu*</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-power-off"></i>
                            </div>
                            </div>
                            <select name="status_servisu" id="status" class="form-control 
                            <?=isset($errors['status_servisu']) ? 'is-invalid' : null ?>">
                                <option value="<?= $administrasaun->status_servisu; ?>"><?= $administrasaun->status_servisu; ?></option>
                                <option value="Aktivo" <?= old('status_servisu') == 'Aktivo' ? 'selected' : null ?>>Aktivo</option>
                                <option value="La Aktivo" <?= old('status_servisu') == 'La Aktivo' ? 'selected' : null ?>>La Aktivo</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['status_servisu']) ?  $errors['status_servisu'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Loron Moris *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-calendar"></i>
                            </div>
                            </div>
                            <input type="date" name="loron_moris" value="<?= $administrasaun->loron_moris; ?>" 
                            class="form-control phone-number <?=isset($errors['loron_moris']) ? 'is-invalid' : null ?>" 
                            placeholder="Loron Moris">
                            <div class="invalid-feedback">
                                <?=isset($errors['loron_moris']) ?  $errors['loron_moris'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Fatin Moris *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-globe"></i>
                            </div>
                            </div>
                            <input type="text" name="fatin_moris" value="<?= $administrasaun->fatin_moris; ?>" 
                            class="form-control phone-number <?=isset($errors['fatin_moris']) ? 'is-invalid' : null ?>" 
                            placeholder="Fatin Moris">
                            <div class="invalid-feedback">
                                <?=isset($errors['fatin_moris']) ?  $errors['fatin_moris'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('administrasaun');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
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