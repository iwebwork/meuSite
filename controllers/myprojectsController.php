<?php
    class myprojectsController extends controller{

        public function index()
        {
            $dados = array();
            $this->loadTempleteOne('myprojects',$dados);
        }

    }