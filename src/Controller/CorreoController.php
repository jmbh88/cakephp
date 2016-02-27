<?php
namespace App\Controller;

use Cake\Mailer\Email;

class CorreoController extends AppController{
    
    public function smtp() {
        $email = new Email('default'); // Seleccionar el profile a usar
//        $email->from(['tienda@tecsup.edu.pe' => 'Tienda Online']) 
        $email -> to('jmbh8891@gmail.com')
            ->subject('Correo desde CakePHP 3')
            ->send('Contenido del correo ...');
        
        echo 'Correo enviado';
        $this->autoRender = false; // Solo para este ejemplo no se usará una vista
    }
    
}

