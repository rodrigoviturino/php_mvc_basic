<?php
namespace src\controllers;

// Chamamos os arquivos, pode ser model tbm
use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

    public function index() {
        
        $usuarios = Usuario::select()->execute();

        $this->render('home', [
            'usuarios' => $usuarios
        ]);
    }

    // Usando banco de dados
    // public function teste(){
    //     $banco = new Test();
    // }

    public function fotos(){
        $this->render('fotos');
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        var_dump($args);
    }

}
