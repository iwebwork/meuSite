<?php

    require 'environment.php';
    $config = array();

    //Informações para o banco interno
    if(ENVIRONMENT == 'development'){
        define("BASE_URL","http://localhost/meuSite/");
        $config['dbname'] = '';
        $config['host'] = '127.0.0.1';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
    }else{
        //Informações para o banco externo
        define("BASE_URL","http://www.iwebwork.com.br/");
        $config['dbname'] = '';
        $config['host'] = 'mysql873.umbler.com:41890';
        $config['dbuser'] = 'iwebwork';
        $config['dbpass'] = '06101218iwebwork';
    }

    global $pdo;

    try{
        $pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);

    }catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
    }