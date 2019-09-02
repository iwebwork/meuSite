<?php
    namespace Controllers;
    
    use \Core\Controller;

    class MyknowController extends Controller{

        public function index()
        {
            $dados = array();
            $this->loadTemplateOne('myknow',$dados);
        }

    } 