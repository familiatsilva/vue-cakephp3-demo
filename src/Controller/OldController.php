<?php
// src/Controller/ArticlesController.php

namespace App\Controller;
use Cake\Event\Event;


class OldController extends AppController
{

    # Esta funcao devera retornar uma listagem para o usuario
    public function index(){}

    # Esta funcao devera retornar um formulario para o usuario
    public function edit(){}

    # Esta funcao devera receber os dados do formulario e retornar um json com a resposta
    public function create(){

        $this->autoRender = false;

        $text = 'OldController -> create -> Recebe os dados do formulario, grava e retorna uma mensagem de sucesso';

        return $this->response->withType("application/json")->withStringBody(json_encode($text));
    }
}