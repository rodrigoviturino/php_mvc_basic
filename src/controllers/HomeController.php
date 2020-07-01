<?php
namespace src\controllers;

// Chamamos os arquivos, pode ser model tbm
use \core\Controller;
// use \src\models\Test; 

class HomeController extends Controller {

    public function index() {
        // $this->render('home', ['nome' => 'Viturino']);

        $posts = [
            ['titulo' => 'Titulo Post 1', 'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'],
            ['titulo' => 'Titulo Post 2', 'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'],
            ['titulo' => 'Titulo Post 3', 'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'],
            ['titulo' => 'Titulo Post 4', 'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'],
            ['titulo' => 'Titulo Post 5', 'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.']
        ];

        $this->render('home', [
            'nome' => 'Rodrigo',
            'idade' => 26,
            'posts' => $posts
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
