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
  
  public function edit($args){
    $usuario = Usuario::select()->find($args['id']);

    $this->render('editar', [
      'usuario' => $usuario
    ]);
  }

  public function editAction($args){
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');

    if($name && $email){

      Usuario::update()
        ->set('nome', $name)
        ->set('email', $email)
        ->where('id', $args['id'])
      ->execute();

      $this->redirect('/');
      exit;
    }

    $this->redirect('/usuario/'.$args['id'].'/editar');

  }

  public function delete($args){

      Usuario::delete()->where('id', $args['id'])->execute();
      
      $this->redirect('/');
      exit;
  }

}
