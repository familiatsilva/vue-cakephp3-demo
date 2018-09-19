<?php
// src/Controller/ArticlesController.php

namespace App\Controller;
use Cake\Event\Event;


class NewController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->viewBuilder()->setLayout('vue');
        $this->render('/vue/default');
    }

    # Esta funcao devera retornar uma listagem para o usuario
    public function index(){}

    # Esta funcao devera retornar um formulario para o usuario
    public function edit(){}

    # Esta funcao devera receber os dados do formulario e retornar um json com a resposta
    public function create(){

        $this->autoRender = false;

        $text = 'NewController -> create -> Recebe os dados do formulario, grava e retorna uma mensagem de sucesso';

        return $this->response->withType("application/json")->withStringBody(json_encode($text));
    }
}