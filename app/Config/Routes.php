<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Navbar::index');

// Login Administrator
$routes->get('administratorauth', 'Administratorauth::index');
$routes->get('administratorlogin', 'Administratorauth::login');
$routes->post('administratorprocess', 'Administratorauth::processologin');

// Login Alunos
$routes->get('alunosauth', 'Alunosauth::index');
$routes->get('alunoslogin', 'Alunosauth::login');
$routes->post('alunosprocess', 'Alunosauth::processologin');

  
// Propinas Paroquia
$routes->get('propinasparoquia', 'Propinasparoquia::index');

// Propinas Familia
$routes->get('propinasfamilia', 'Propinasfamilia::index');


// Login Paroquia
$routes->get('paroquiaauth', 'Paroquiaauth::index');
$routes->get('paroquialogin', 'Paroquiaauth::login');
$routes->post('paroquiaprocess', 'Paroquiaauth::processologin');

// Login Administrasaun
$routes->get('administrasaunauth', 'Administrasaunauth::index');
$routes->get('administrasaunlogin', 'Administrasaunauth::login');
$routes->post('administrasaunprocess', 'Administrasaunauth::processologin');

// Login Familia
$routes->get('familiaauth', 'familiaauth::index');
$routes->get('familialogin', 'familiaauth::login');
$routes->post('familiaprocess', 'familiaauth::processologin');

// Login Equipa Formador
$routes->get('equipaformadorauth', 'Equipaformadorauth::index');
$routes->get('equipaformadorlogin', 'Equipaformadorauth::login');
$routes->post('equipaformadorprocess', 'Equipaformadorauth::processologin');

// Login Professores
$routes->get('professoresauth', 'Professoresauth::index');
$routes->get('professoreslogin', 'Professoresauth::login');
$routes->post('professoresprocess', 'Professoresauth::processologin');

// LOGOUT Administrator
$routes->get('administratorlogout', 'Administratorauth::logout');

// LOGOUT Alunos
$routes->get('alunoslogout', 'Alunosauth::logout');
$routes->get('homealunos', 'Homealunos::index');
$routes->get('homeparoquia', 'Homeparoquia::index');
$routes->get('homefamilia', 'Homefamilia::index');

// LOGOUT Administrasaun
$routes->get('administrasaunlogout', 'Administrasaunauth::logout');

// LOGOUT Administrator
$routes->get('paroquialogout', 'Paroquiaauth::logout');

// LOGOUT Familia
$routes->get('familialogout', 'Familiaauth::logout');

// LOGOUT Professores
$routes->get('professoreslogout', 'Professoresauth::logout');

$routes->get('equipaformadorlogout', 'Equipaformadorauth::logoutequipa');
// LOGOUT Equipa Formador

$routes->get('home', 'Home::index');
$routes->get('allpropinas', 'Allpropinas::index');

// Horario Aula
$routes->get('horarioaula', 'Horarioaula::index');

$routes->get('absensidetail', 'Absensidetail::index');
$routes->get('absensidetail/detail/(:any)', 'Absensidetail::detailabsensi/$1');
$routes->get('absensidetail/Exame_Primeiro_Periode/(:any)/(:any)/(:any)', 'Absensidetail::primeiro_absensi/$1/$2/$3');
$routes->get('absensidetail/Exame_Segundo_Periode/(:any)/(:any)', 'Absensidetail::segundo_absensi/$1/$2');
$routes->get('absensidetail/Exame_Terceiro_Periode/(:any)/(:any)', 'Absensidetail::terceiro_absensi/$1/$2');

$routes->get('absensialunos/(:any)/(:any)', 'Absensialunos::absensi/$1/$2');


$routes->get('horarioalunos/(:any)/(:any)', 'Horarioalunos::valores_primeiro_periodo/$1/$2');
// $routes->get('horarioalunos/(:any)/(:any)', 'Horarioalunos::valores_segundo_periodo/$1/$2');
// $routes->get('horarioalunos/(:any)/(:any)', 'Horarioalunos::valores_terceiro_periodo/$1/$2');



$routes->post('horarioprofessores/valores', 'Horarioprofessores::valores');
$routes->get('materia/materia/(:any)', 'Materia::materia/$1');
$routes->get('valoresestudantes/Exame_Primeiro_Periode/(:any)', 'Valoresestudantes::valores_primeiro/$1');
$routes->get('valoresestudantes/Exame_Segundo_Periode/(:any)', 'Valoresestudantes::valores_segundo/$1');
$routes->get('valoresestudantes/Exame_Terceiro_Periode/(:any)', 'Valoresestudantes::valores_terceiro/$1');

$routes->presenter('userole');
$routes->presenter('equipaformador');
$routes->presenter('professores');
$routes->presenter('paroquia');
$routes->presenter('familia');
$routes->presenter('alunos');
$routes->presenter('aula');
$routes->presenter('materia');
$routes->presenter('administrasaun');
$routes->presenter('akunadministrasaun');
$routes->presenter('paroquiavaloresestudante');

$routes->resource('akunequipaformador');
$routes->resource('akunprofessores');
$routes->resource('akunparoquia');
$routes->resource('akunfamilia');
$routes->resource('akunalunos');
$routes->resource('propinas');
$routes->resource('propinasalunos');
$routes->resource('horarioalunos');
$routes->resource('horarioprofessores');
$routes->resource('familiavaloresestudante');
$routes->resource('valoresestudantes');
$routes->resource('absensialunos');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
