<?php
    namespace Controllers;

    use \Core\Controller;

    class MyprojectsController extends controller{

        public function index()
        {
            $dados = array();
            $this->loadTemplateOne('myprojects',$dados);
        }

    }