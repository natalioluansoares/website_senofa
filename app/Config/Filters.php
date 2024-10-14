<?php

namespace Config;

use App\Filters\FilterAdministrasaun;
use App\Filters\FilterAdministrator;
use App\Filters\FilterAlunos;
use App\Filters\FilterEquipaFormador;
use App\Filters\FilterFamilia;
use App\Filters\FilterParoquia;
use App\Filters\FilterProfessores;
use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'filterAdministrator'       => FilterAdministrator::class,
        'filterEquipaFormador'      => FilterEquipaFormador::class,
        'filterAdministrasaun'      => FilterAdministrasaun::class,
        'filterProfessores'         => FilterProfessores::class,
        'filterParoquia'            => FilterParoquia::class,
        'filterFamilia'             => FilterFamilia::class,
        'filterAlunos'              => FilterAlunos::class,

    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     */
    public array $globals = [
        'before' => [
            // 'honeypot',
            'csrf',
            // 'invalidchars',
            // 'filterAdministrator' => ['except' =>['login/*', 'login', '/']],
            // 'filterAlunos' => ['except' =>['alunoslogin', 'alunoslogin', '/']]
        ],
        'after' => [
            'filterAdministrator' => ['except' =>[ 'home','home/*', 'profile', 'profile/*', 'userole', 'userole/*',
            'familia', 'familia/*','akunfamilia', 'akunfamilia/*',
            'administrasaun', 'administrasaun/*', 'akunadministrasaun','akunadministrasaun/*',
            'equipaformador', 'equipaformador/*', 'akunequipaformador', 'akunequipaformador/*',
            'paroquia', 'paroquia/*', 'akunparoquia', 'akunparoquia/*', 'alunos', 'alunos/*','akunalunos', 'akunalunos/*',
            'professores', 'professores/*', 'akunprofessores', 'akunprofessores/*',
            'propinas', 'propinas/*','horario', 'horario/*', 'aula', 'aula/*', 'materia', 'materia/*',
            'osantama', 'osantama/*', 'osansai', 'osansai/*', 'valoresestudantes', 'valoresestudantes/*',
            'absensialunos', 'absensialunos/*']],

            'filterEquipaFormador' => ['except' => ['home','home/*', 'profile', 'profile/*', 'familia', 'familia/*',
            'equipaformador', 'equipaformador/*', 'paroquia', 'paroquia/*', 'professores', 'professores/*',
            'propinas','horario', 'horario/*', 'aula', 'aula/*', 'materia', 'materia/materia/*',
            'osantama', 'osantama/*', 'osansai', 'osansai/*',   'administrasaun', 'administrasaun/*', 
            'akunadministrasaun','akunadministrasaun/*', 'valoresestudantes', 'valoresestudantes/*',
            'absensialunos', 'absensialunos/*']],
            
            'filterAdministrasaun' => ['except' => [
            'home','home/*','profile', 'profile/*', 'administrasaun', 'administrasaun/*', 'akunadministrasaun','akunadministrasaun/*',
            'propinas', 'propinas/*', 'osantama', 'osantama/*', 'osansai', 'osansai/*', 'materia', 'materia/materia/*', 
            'allpropinas', 'allpropinas/*']],

            'filterProfessores' => ['except' => [
            'home','home/*','profile', 'profile/*', 'horario', 'horario/*', 'aula', 'aula/*', 
            'materia', 'valores', 'valores/*', 'horarioprofessores', 'horarioprofessores/*',
            'valoresestudantes', 'valoresestudantes/*', 'absensialunos', 'absensialunos/*', 'absensidetail', 'absensidetail/*']],

            'filterAlunos' => ['except' => [
            'homealunos','homealunos/*', 'propinasalunos', 'propinasalunos/*', 'horarioalunos', 'horarioalunos/*', 'horarioaula']],

            'filterParoquia' => ['except' => [
            'homeparoquia','homeparoquia/*', 'propinasparoquia', 'propinasparoquia/*', 'paroquiavaloresestudante', 'paroquiavaloresestudante/*']],

            'filterFamilia' => ['except' => [
            'homefamilia','homefamilia/*', 'propinasfamilia', 'propinasfamilia/*', 'familiavaloresestudante']],
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don't expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [
       
        'filterAdministrator' => ['before' => [
            'home','home/*','userole', 'userole/*', 'profile', 'profile/*',
            'familia', 'familia/*','akunfamilia', 'akunfamilia/*', 'administrasaun','administrasaun/*',
            'equipaformador', 'equipaformador/*', 'akunequipaformador', 'akunequipaformador/*',
            'paroquia', 'paroquia/*', 'akunparoquia', 'akunparoquia/*', 'alunos', 'alunos/*','akunalunos', 'akunalunos/*',
            'administrasaun', 'administrasaun/*', 'akunadministrasaun','akunadministrasaun/*',
            'professores', 'professores/*', 'akunprofessores', 'akunprofessores/*',
            'propinas', 'propinas/*','horario', 'horario/*', 'aula', 'aula/*', 'materia', 'materia/*',
            'osantama', 'osantama/*', 'osansai', 'osansai/*', 'valoresestudantes', 'valoresestudantes/*',
            'absensialunos', 'absensialunos/*'
            
            ]
        ],
        'filterEquipaFormador' => ['before' => [
            'home','home/*', 'profile', 'profile/*',
            'familia', 'familia/*','professores', 'professores/*',
            'equipaformador', 'equipaformador/*','paroquia', 'paroquia/*',
            'administrasaun', 'administrasaun/*', 'akunadministrasaun','akunadministrasaun/*',
            'propinas', 'horario', 'horario/*', 'aula', 'aula/*', 'materia', 'materia/materia/*',
            'osantama', 'osantama/*', 'osansai', 'osansai/*', 'valoresestudantes', 'valoresestudantes/*',
            'absensialunos', 'absensialunos/*'
            
            ]
        ],
        'filterAdministrasaun' => ['before' => [
            'home','home/*','profile', 'profile/*',
            'administrasaun', 'administrasaun/*', 'materia', 'materia/materia/*',
            'propinas', 'propinas/*', 'osantama', 'osantama/*', 'osansai', 'osansai/*',
            'allpropinas', 'allpropinas/*'
            ]
        ],

        'filterProfessores' => ['before' => [
             'home','home/*','profile', 'profile/*', 'horario', 'horario/*', 
             'aula', 'aula/*', 'materia', 'valoresestudantes', 'valoresestudantes/*',
             'horarioprofessores', 'horarioprofessores/*', 'absensialunos', 'absensialunos/*',
             'absensidetail', 'absensidetail/*'
            ]
        ],
        'filterAlunos' => ['before' => [
             'homealunos','homealunos/*','propinasalunos', 'propinasalunos/*', 'horarioalunos', 'horarioalunos/*', 'horarioaula']
        ],
        'filterParoquia' => ['before' => [
             'homeparoquia','homeparoquia/*', 'propinasparoquia', 'propinasparoquia/*',
             'paroquiavaloresestudante', 'paroquiavaloresestudante/*'
            ]
        ],
        'filterFamilia' => ['before' => [
             'homefamilia','homefamilia/*', 'propinasfamilia', 'propinasfamilia/*', 'familiavaloresestudante'
            ]
         ]
        
    ];
     
}
