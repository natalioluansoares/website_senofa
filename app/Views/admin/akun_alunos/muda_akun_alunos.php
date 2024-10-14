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
                    <form action="<?= base_url('akunalunos/'. $akunalunos->id_alunos)?>" method="post" autocomplete="off">
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
                            <select name="alunos_role" id="alunos_role" class="form-control phone-number
                            <?= isset($errors['alunos_role']) ? 'is-invalid': null?>">
                                <?php foreach ($userrole as $key => $value) : ?>
                                <option value="<?= $value->id?>" 
                                    <?= old('alunos_role') == $value->id ? 'selected' : null ?>><?= $value->role ?>
                                </option>
                                    <?php  endforeach;  ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= isset($errors['alunos_role']) ? $errors['alunos_role'] : null ?>
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
                            <select name="naran_kompleto_alunos" id="naran_kompleto_alunos" class="form-control phone-number
                            <?= isset($errors['alunos_role']) ? 'is-invalid': null?>">
                                <option value="<?= $akunalunos->naran_kompleto_alunos ?>"><?= $akunalunos->naran_kompleto_alunos ?></option>
                                <?php foreach ($alunos as $key => $value) : ?>
                                <option value="<?= $value->naran_kompleto ?>" 
                                    <?= old('naran_kompleto_alunos') == $value->naran_kompleto ? 'selected' : null ?>><?= $value->naran_kompleto ?>
                                </option>
                                    <?php  endforeach;  ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= isset($errors['naran_kompleto_alunos']) ? $errors['naran_kompleto_alunos'] : null ?>
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
                            <select name="jenero_alunos" id="jenero_alunos"  class="form-control 
                            <?=isset($errors['jenero_alunos']) ? 'is-invalid' : null ?>">
                                <option value="<?= $akunalunos->jenero_alunos ?>"><?= $akunalunos->jenero_alunos ?></option>
                                <option value="Mane"  <?= old('jenero_alunos') == 'Mane' ? 'selected' : null ?>>Mane</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['jenero_alunos']) ?  $errors['jenero_alunos'] : null ?>
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
                            <input type="text" name="numero_telemovel_alunos" value="<?= $akunalunos->numero_telemovel_alunos ?>" 
                            class="form-control phone-number <?=isset($errors['numero_telemovel_alunos']) ? 'is-invalid' : null ?>" 
                            placeholder="Numero Telemovel">
                            <div class="invalid-feedback">
                                <?=isset($errors['numero_telemovel_alunos']) ?  $errors['numero_telemovel_alunos'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Status *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-power-off"></i>
                            </div>
                            </div>
                            <select name="status_alunos" id="status" class="form-control 
                            <?=isset($errors['status_alunos']) ? 'is-invalid' : null ?>">
                                <option value="<?= $akunalunos->status_alunos ?>"><?= $akunalunos->status_alunos ?></option>
                                <option value="Aktivo" <?= old('status_alunos') == 'Aktivo' ? 'selected' : null ?>>Aktivo</option>
                                <option value="La Aktivo" <?= old('status_alunos') == 'La Aktivo' ? 'selected' : null ?>>La Aktivo</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['status_alunos']) ?  $errors['status_alunos'] : null ?>
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
                            <input type="date" name="loron_moris_alunos" value="<?= $akunalunos->loron_moris_alunos ?>" 
                            class="form-control phone-number <?=isset($errors['loron_moris_alunos']) ? 'is-invalid' : null ?>" 
                            placeholder="Loron Moris">
                            <div class="invalid-feedback">
                                <?=isset($errors['loron_moris_alunos']) ?  $errors['loron_moris_alunos'] : null ?>
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
                            <input type="text" name="fatin_moris_alunos" value="<?= $akunalunos->fatin_moris_alunos ?>" 
                            class="form-control phone-number <?=isset($errors['fatin_moris_alunos']) ? 'is-invalid' : null ?>" 
                            placeholder="Fatin Moris">
                            <div class="invalid-feedback">
                                <?=isset($errors['fatin_moris_alunos']) ?  $errors['fatin_moris_alunos'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('akunalunos');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
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
