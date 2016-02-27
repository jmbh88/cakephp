<?php

namespace App\Controller;

use Cake\Event\Event;

abstract class AuthController extends AppController {
    
    public function initialize() {
        parent::initialize();
        $this->loadComponent('Auth',[           
            'authenticate' => [
                'Form' => [
                    'userModel' => 'Usuarios',//definimos la tabla model (UsuariosTable) que va ser relacion en la bd
                    'fields' => ['username' => 'username','password' => 'password'], //mapeando los campos username y password
                    'passwordHasher' => [
                        'className' => 'Plain' //mecanismo de codificacion password sino declaramos, utiliza el standard
                    ]
                ]
            ],
            'loginAction' => [ // pagina de logueo
                'controller' => 'Usuarios',
                'action' => 'login'
            ],
            'loginRedirect' => [ //pagina luego de hacer el logueo
                'controller' => 'Home',
                'action' => 'index'                
            ],
            'logoutRedirect' => [ //pagina al cerrar sesion
                'controller' => 'Usuarios',
                'action' => 'login'
            ],
            'authError' => 'No tienes permiso de acceder', //mensaje de error
        ]);
    }
    
    //permite definir que acciones van a ser publicas
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        //        $this->Auth->allow(['index', 'view', 'display']);
    }
    
    
}
