<?php

namespace App\Auth;

use Cake\Auth\AbstractPasswordHasher;

class PlainPasswordHasher extends AbstractPasswordHasher {
    
    public function hash($password){//metodo para encriptar, se usa al registrar un nuevo usuario
    // si tengo una logica para encriptar el password se coloca aca
    //
//        return sha1($password);
        return $password;
    }

    public function check($password, $hashedPassword){ //metodo para comparar, se usa al loguearse
//        return sha1($password) === $hashedPassword;
        return $password === $hashedPassword;
    }
    
}
