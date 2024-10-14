    <li class="menu-header" style="background-color: lavender; color:black">DASHBOARD</li>
    <li><a class="nav-link" href="<?= base_url('home') ?>" title="Dashbaord"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
    
    <li class="menu-header" style="background-color: lavender; color:black">PROFILE (*<?= userLogin()->role ?>*)</li>
    <li><a class="nav-link" href="<?= base_url('profile') ?>" title="Profile"><i class="fas fa-user-plus"></i><span>Profile</span></a></li>
    <?php if (session()->id_role == 3) :?>
    <li><a class="nav-link" href="<?= base_url('profile') ?>" title="Koreksaun"><i class="fas fa-pen"></i><span>Koreksaun</span></a></li>
<?php endif;?>
<?php if (session()->id_role == 1){?>
    <li class="menu-header" style="background-color: lavender; color:black">AKUN REGISTO</li>
     <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-plus"></i><span>Akun Registo</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('userole') ?>">
            <i class="fas fa-tag"></i>Acesso Sistema</a></li>
            <li><a class="nav-link" href="<?= base_url('akunequipaformador') ?>">
            <i class="fas fa-solid fa-handshake"></i><span>Akun Formador</span></a></li>
            <li><a class="nav-link" href="<?= base_url('akunprofessores') ?>">
            <i class="fas fa-users"></i><span>Akun Professores</span></a></li>
            <li><a class="nav-link" href="<?= base_url('akunadministrasaun') ?>">
            <i class="fas fa-solid fa-book-open"></i><span>Akun Adminis</span></a></li>
            <li><a class="nav-link" href="<?= base_url('akunparoquia') ?>">
            <i class="fas fa-user-secret"></i><span>Akun Paroquia</span></a></li>
            <li><a class="nav-link" href="<?= base_url('akunfamilia') ?>">
            <i class="fas fa-users"></i><span>Akun Familia</span></a></li>
            <li><a class="nav-link" href="<?= base_url('akunalunos') ?>">
            <i class="fas fa-users"></i><span>Akun Alunos</span></a></li>
        </ul>
    </li>
   <li class="menu-header" style="background-color: lavender; color:black">EQUIPA FORMADOR</li>
     <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-edit"></i><span>Equipa Formador</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('valoralunos') ?>">
            <i class="fas fa-solid fa-book"></i><span>Valor Dos Alunos</span></a></li>
            <li><a class="nav-link" href="<?= base_url('koreksaunprofessores') ?>">
            <i class="fas fa-user-edit"></i><span>Koreksaun Prof</span></a></li>
            <li><a class="nav-link" href="<?= base_url('koreksaunalunos') ?>">
            <i class="fas fa-user-edit"></i><span>Koreksaun Alunos</span></a></li>
        </ul>
    </li>
    <li class="menu-header" style="background-color: lavender; color:black">PROF & ALUNOS & ADMINIS</li>
     <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Prof & Alu & Adminis</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('professores') ?>">
            <i class="fas fa-user-plus"></i><span>Professores</span></a></li>
            <li><a class="nav-link" href="<?= base_url('alunos') ?>">
            <i class="fas fa-solid fa-pen-nib"></i><span>Registo Alunos</span></a></li>
            <li><a class="nav-link" href="<?= base_url('administrasaun') ?>">
            <i class="fas fa-solid fa-pen-nib"></i><span>Administrasaun</span></a></li>
        </ul>
    </li>
    <li class="menu-header" style="background-color: lavender; color:black">PAROQUIA & FAMILIA</li>
     <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i><span>Paroquia & Familia</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('paroquia') ?>">
            <i class="fas fa-user-edit"></i><span>Paroquia</span></a></li>
            <li><a class="nav-link" href="<?= base_url('familia') ?>">
            <i class="fas fa-user-edit"></i><span>Familia</span></a></li>
        </ul>
    </li>
    <li class="menu-header" style="background-color: lavender; color:black">OSAN PROPINAS</li>
        <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-money-bill"></i><span>Osan Propinas</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('propinas') ?>"><i class="fas fa-money-bill"></i><span>Osan Propinas</span></a></li>
        </ul>
    </li>

     <li class="menu-header" style="background-color: lavender; color:black">HORARIO AULA</li>
        <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-calendar"></i><span>Horario Aula</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('horario') ?>"><i class="fas fa-calendar"></i><span>Horario Aula</span></a></li>
        </ul>
    </li>
    
    <li class="menu-header">AULA & MATERIA</li>
        <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-pen"></i> <span>Aula & Materia</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('aula') ?>"><i class="fas fa-home"></i><span>Aula</span></a></li>
            <li><a class="nav-link" href="<?= base_url('materia') ?>"><i class="fas fa-book"></i><span>Materia</span></a></li>
        </ul>
    </li>
    
    <li class="menu-header" style="background-color: lavender; color:black">LAPORAN</li>
        <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-download"></i> <span>Laporan</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="">Aula</a></li>
            <li><a class="nav-link" href="">Materia</a></li>
        </ul>
    </li>
<?php } ?>

<?php if (session()->id_role == 2){?>
    <li class="menu-header" style="background-color: lavender; color:black">EQUIPA FORMADOR</li>
     <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-edit"></i><span>Equipa Formador</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('valoralunos') ?>">
            <i class="fas fa-solid fa-book"></i><span>Valor Dos Alunos</span></a></li>
            <li><a class="nav-link" href="<?= base_url('koreksaunprofessores') ?>">
            <i class="fas fa-user-edit"></i><span>Koreksaun Prof</span></a></li>
            <li><a class="nav-link" href="<?= base_url('koreksaunalunos') ?>">
            <i class="fas fa-user-edit"></i><span>Koreksaun Alunos</span></a></li>
        </ul>
    </li>
    <li class="menu-header" style="background-color: lavender; color:black">PAROQUIA & FAMILIA</li>
     <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i><span>Paroquia & Familia</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('paroquia') ?>">
            <i class="fas fa-user-edit"></i><span>Paroquia</span></a></li>
            <li><a class="nav-link" href="<?= base_url('familia') ?>">
            <i class="fas fa-user-edit"></i><span>Familia</span></a></li>
        </ul>
    </li>
    <li class="menu-header" style="background-color: lavender; color:black">PROF & ALUNOS & ADMINIS</li>
     <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Prof & Admini & Alun</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('professores') ?>">
            <i class="fas fa-user-plus"></i><span>Professores</span></a></li>
            <li><a class="nav-link" href="<?= base_url('alunos') ?>">
            <i class="fas fa-solid fa-pen-nib"></i><span>Alunos</span></a></li>
            <li><a class="nav-link" href="<?= base_url('administrasaun') ?>">
            <i class="fas fa-solid fa-pen-nib"></i><span>Administrasaun</span></a></li>
        </ul>
    </li>
     <li class="menu-header" style="background-color: lavender; color:black">SECRETARIO</li>
        <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-money-bill"></i><span>Osan Propinas</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('propinas') ?>"><i class="fas fa-money-bill"></i><span>Osan Propinas</span></a></li>
        </ul>
    </li>
    <li class="menu-header" style="background-color: lavender; color:black">HORARIO AULA & MATERIA</li>
        <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-calendar"></i><span>Horario & Materia</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('propinas') ?>"><i class="fas fa-calendar"></i><span>Horario Aula</span></a></li>
            <li><a class="nav-link" href="<?= base_url('materia') ?>"><i class="fas fa-book"></i><span>Materia</span></a></li>
        </ul>
    </li>
    <li class="menu-header" style="background-color: lavender; color:black">LAPORAN</li>
        <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-download"></i> <span>Laporan</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="">Aula</a></li>
            <li><a class="nav-link" href="">Materia</a></li>
        </ul>
    </li>
<?php } ?>

<?php if (session()->id_role == 3) : ?>
    <li class="menu-header" style="background-color: lavender; color:black">Valores & MATERIA</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-folder"></i><span>Valores & Materia</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('horarioprofessores') ?>"><i class="fas fa-book-open"></i><span>Aumtenta Valores</span></a></li>
        <li><a class="nav-link" href="<?= base_url('valoresestudantes') ?>"><i class="fas fa-eye"></i><span>Hare Valores</span></a></li>
        <li><a class="nav-link" href="<?= base_url('materia') ?>"><i class="fas fa-book"></i><span>Materia</span></a></li>
    </ul>
    </li>
    <li class="menu-header" style="background-color: lavender; color:black">ABSENSI</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-calendar"></i><span>Absensi</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('absensialunos') ?>"><i class="fas fa-calendar"></i><span>Absensi</span></a></li>
        <li><a class="nav-link" href="<?= base_url('absensidetail') ?>"><i class="fas fa-calendar"></i><span>Detail Absensi</span></a></li>
    </ul>
    </li>
    <li class="menu-header" style="background-color: lavender; color:black">SALARIO</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-calendar"></i><span>Salario</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('salario') ?>"><i class="fas fa-calendar"></i><span>Professores</span></a></li>
    </ul>
    </li>
<?php endif ?>


<?php if (session()->id_role == 5) : ?>
    <li class="menu-header" style="background-color: lavender; color:black">VALORES & KOREKSAUN</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-folder-open"></i><span>Valores & Koreksaun</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('valoralunos') ?>">
        <i class="fas fa-solid fa-book"></i><span>Valor Dos Alunos</span></a></li>
        <li><a class="nav-link" href="<?= base_url('koreksaunalunos') ?>">
        <i class="fas fa-user-edit"></i><span>Koreksaun Alunos</span></a></li>
    </ul>
    </li>
     <li class="menu-header" style="background-color: lavender; color:black">OSAN PROPINAS</li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-money-bill"></i><span>Osan Propinas</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('propinas') ?>"><i class="fas fa-money-bill"></i><span>Osan Propinas</span></a></li>
        </ul>
    </li>
<?php endif ?>
<?php if (session()->id_role == 6) : ?>
    <li class="menu-header" style="background-color: lavender; color:black">VALORES & KOREKSAUN</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-folder-open"></i><span>Valores & Koreksaun</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('valoralunos') ?>">
        <i class="fas fa-solid fa-book"></i><span>Valor Dos Alunos</span></a></li>
        <li><a class="nav-link" href="<?= base_url('koreksaunalunos') ?>">
        <i class="fas fa-user-edit"></i><span>Koreksaun Alunos</span></a></li>
    </ul>
    </li>
    <li class="menu-header" style="background-color: lavender; color:black">OSAN PROPINAS</li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-money-bill"></i><span>Osan Propinas</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('allpropinas') ?>"><i class="fas fa-money-bill"></i><span>Total Osan Tama</span></a></li>
            <li><a class="nav-link" href="<?= base_url('propinas') ?>"><i class="fas fa-money-bill"></i><span>Osan Propinas</span></a></li>
        </ul>
    </li>
<?php endif ?>
<?php if (session()->id_role == 6) : ?>
    <li class="menu-header" style="background-color: lavender; color:black">Valores & MATERIA</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-folder"></i><span>Valores & Materia</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('horarioprofessores') ?>"><i class="fas fa-book-open"></i><span>Valores</span></a></li>
        <li><a class="nav-link" href="<?= base_url('materia') ?>"><i class="fas fa-book"></i><span>Materia</span></a></li>
    </ul>
    </li>
<?php endif ?>

    <!-- <li class="menu-header">SECRETARIO</li>
     <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-money-bill"></i><span>Osan Propinas</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('propinas') ?>"><i class="fas fa-money-bill"></i><span>Osan Propinas</span></a></li>
    </ul>
    </li>
    <li class="menu-header">HORARIO AULA & MATERIA</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-calendar"></i><span>Horario Aula & Materia</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('propinas') ?>"><i class="fas fa-calendar"></i><span>Horario Aula</span></a></li>
        <li><a class="nav-link" href="<?= base_url('propinas') ?>"><i class="fas fa-book"></i><span>Materia</span></a></li>
    </ul>
    </li>
    
    <li class="menu-header">AULA & MATERIA</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-pen"></i> <span>Aula & Materia</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('propinas') ?>"><i class="fas fa-home"></i><span>Aula</span></a></li>
        <li><a class="nav-link" href="<?= base_url('propinas') ?>"><i class="fas fa-book"></i><span>Materia</span></a></li>
    </ul>
    </li>
    
    
    <li class="menu-header">LAPORAN</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-download"></i> <span>Laporan</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="">Aula</a></li>
        <li><a class="nav-link" href="">Materia</a></li>
    </ul>
    </li> -->