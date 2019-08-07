<?php
    class myknowController extends controller{

        public function index()
        {
            $dados = array();
            $this->loadTempleteOne('myknow',$dados);
        }

    } 