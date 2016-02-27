<?php
namespace App\Controller;

class HomeController extends AuthController{

    public function index() {
        
        $usuario = $this->Auth->user(); //para recuperar el usuario de la sesion activa
        $this->set('usuario',$usuario);
    }
    
}
