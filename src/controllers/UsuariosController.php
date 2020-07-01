<?php
namespace src\controllers;

// Chamamos os arquivos, pode ser model tbm
use \core\Controller;
use \src\models\Usuario; 

class UsuariosController extends Controller {

  public function add(){
    $this->render('add');
  }

  public function addAction(){
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');

    if($name && $email){
      // $data = Usuario::select()->where('email', $email)->execute();
      $usuario = new Usuario();

      $data = $usuario->select()->where('email', $email)->exists();

      if($data === false) { 
        // insere
        Usuario::insert([
          'nome' => $name,
          'email' => $email
        ])->execute();
          // redirect para /
          $this->redirect('/');
      } else {
        // redirect para /novo
        $this->redirect('/novo');
      }
      
    } else {
      // redirect para /novo
      $this->redirect('/novo');
      
    }

  }
  

}
