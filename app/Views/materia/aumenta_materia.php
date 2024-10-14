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
                    <form action="<?= base_url('materia/create')?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                      <div class="form-group">
                        <label>Kode Materia*</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-key"></i>
                            </div>
                            </div>
                            <input type="text" name="kode_materia" value="<?= old('kode_materia')?>" 
                            class="form-control phone-number <?=isset($errors['loron_materia']) ? 'is-invalid' : null ?>" 
                            placeholder="Kode Materia" autofocus>
                            <div class="invalid-feedback">
                                <?=isset($errors['kode_materia']) ?  $errors['kode_materia'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Materia *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-book-open"></i>
                            </div>
                            </div>
                            <input type="text" name="materia" value="<?= old('materia')?>" 
                            class="form-control phone-number <?=isset($errors['loron_materia']) ? 'is-invalid' : null ?>" 
                            placeholder="Materia" autofocus>
                            <div class="invalid-feedback">
                                <?=isset($errors['materia']) ?  $errors['materia'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Horas *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-book"></i>
                            </div>
                            </div>
                            <input type="text" name="horas_materia" value="<?= old('horas_materia')?>" 
                            class="form-control phone-number <?=isset($errors['horas_materia']) ? 'is-invalid' : null ?>" 
                            placeholder="Horas">
                            <div class="invalid-feedback">
                                <?=isset($errors['horas_materia']) ?  $errors['horas_materia'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Tinan Akademiko *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-calendar"></i>
                            </div>
                            </div>
                            <input type="text" name="tinan_akademiko" value="<?= date('Y')?>" 
                            class="form-control phone-number <?=isset($errors['tinan_akademiko']) ? 'is-invalid' : null ?>" 
                            placeholder="Tinan Akademiko">
                            <div class="invalid-feedback">
                                <?=isset($errors['tinan_akademiko']) ?  $errors['tinan_akademiko'] : null ?>
                            </div>
                        </div>
                        </div>
                         <div class="form-group">
                        <label>loron_materia *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-folder-open"></i>
                            </div>
                            </div>
                            <select name="loron_materia" id="loron_materia" class="form-control 
                            <?=isset($errors['loron_materia']) ? 'is-invalid' : null ?>">
                                <option value="">Hili Loron Materia</option>
                                <option value="Segunda" <?= old('loron_materia') == 'Segunda' ? 'selected' : null ?>>Segunda</option>
                                <option value="Terca-Feira" <?= old('loron_materia') == 'Terca-Feira' ? 'selected' : null ?>>Terca-Feira</option>
                                <option value="Quarta-Feira" <?= old('loron_materia') == 'Quarta-Feira' ? 'selected' : null ?>>Quarta-Feira</option>
                                <option value="Quinta-Feira" <?= old('loron_materia') == 'Quinta-Feira' ? 'selected' : null ?>>Quinta-Feira</option>
                                <option value="Sexta-Feira" <?= old('loron_materia') == 'Sexta-Feira' ? 'selected' : null ?>>Sexta-Feira</option>
                                <option value="Sabado" <?= old('loron_materia') == 'Sabado' ? 'selected' : null ?>>Sabado</option>
                            </select>
                            <div class="invalid-feedback">
                                <?=isset($errors['loron_materia']) ?  $errors['loron_materia'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Dia *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-calendar"></i>
                            </div>
                            </div>
                            <input type="date" name="dia_materia" value="<?= old('dia_materia')?>" 
                            class="form-control phone-number <?=isset($errors['dia_materia']) ? 'is-invalid' : null ?>" 
                            placeholder="Dia">
                            <div class="invalid-feedback">
                                <?=isset($errors['dia_materia']) ?  $errors['dia_materia'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Aula *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-home"></i>
                                    </div>
                                </div>
                                <select name="aula_materia" id="aula_materia" class="form-control phone-number
                                <?= isset($errors['aula_materia']) ? 'is-invalid': null?>">
                                    <option value="">Pilih Aula</option>
                                    <?php foreach ($aula as $key => $value) : ?>
                                    <option value="<?= $value->id_aula ?>" 
                                        <?= old('aula_materia') == $value->id_aula ? 'selected' : null ?>><?= $value->aula ?>
                                    </option>
                                        <?php  endforeach;  ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= isset($errors['aula_materia']) ? $errors['aula_materia'] : null ?>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                        <label>Professores *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-user-edit"></i>
                            </div>
                            </div>
                            <select name="professores" id="professores" class="form-control phone-number
                            <?= isset($errors['professores']) ? 'is-invalid': null?>">
                                <option value="">Pilih Professores</option>
                                <?php foreach ($professores as $key => $value) : ?>
                                <option value="<?= $value->id_user?>" 
                                    <?= old('professores') == $value->id_user ? 'selected' : null ?>><?= $value->naran_kompleto ?>
                                </option>
                                    <?php  endforeach;  ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= isset($errors['professores']) ? $errors['professores'] : null ?>
                            </div>
                        </div>
                        </div>
                         <button type="submit" id="toastr-2" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('materia');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
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