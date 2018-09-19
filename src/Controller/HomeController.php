<?php
// src/Controller/ArticlesController.php

namespace App\Controller;
use Cake\Event\Event;

class HomeController extends AppController
{  

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->viewBuilder()->setLayout('vue');
        $this->render('/vue/default');
    }

    public function dashboard(){}
    
}