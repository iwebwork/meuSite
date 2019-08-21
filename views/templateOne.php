<html !DOCTYPE>
    <head>
        <title>Meu site</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="shortcut icon" type="image/x-icon" href="https://drive.google.com/open?id=1uyIALvwYLxirgbjsEDcQ9eKVgcRxrJ2P"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/mdb.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/mdb.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/mdb.lite.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/mdb.lite.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/style.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/style.css"/>
        <!-- Meus css -->
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/templateOne.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/home.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/myknow.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/myprojects.css"/>
    </head>
    <body onload="date()">
        <nav class="navbar navbar-expand-lg navbar-light style-nave font-title fudoImg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
               <img class="img-logo" src="https://drive.google.com/open?id=1uyIALvwYLxirgbjsEDcQ9eKVgcRxrJ2P" >
            </button>

            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarTogglerDemo03">
                <a href="<?php echo BASE_URL;?>" class="navbar-brand logo-invisible" href="#"><img class="img-fluid animated bounceIn slow img-logo" src="<?php echo BASE_URL;?>assets/images/logo.png" ></a>
                <ul class="navbar-nav" id="navUl">
                    <li class="style-nave-text" data-id="1">
                        <a class="nav-link" href="<?php echo BASE_URL;?>"><h4>Home page</h4><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="style-nave-text" data-id="2">
                        <a class="nav-link" href="<?php echo BASE_URL;?>myknow"><h4>My knowledges</h4><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="style-nave-text" data-id="3">
                        <a class="nav-link" href="<?php echo BASE_URL;?>myprojects"><h4>My Projects</h4><span class="sr-only">(current)</span></a>
                    </li>
                    <!--<li class="style-nave-text" data-id="4">
                        <a class="nav-link" href="#"><h4>Blog</h4><span class="sr-only">(current)</span></a>
                    </li>-->
                </ul>
            </div>
        </nav>
    
        <?php $this->loadViewInTemplateOne($viewName, $viewData);?>

        <div class="container-fluid margin-top shadow-lg bg-light rounded" id="rodape">
            <div class="row d-flex justify-content-center">
                <h4 class="font-weight-bold">Contact information</h4>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-5 d-flex flex-column">
                    <div class="p-2 d-flex ">
                        - Igor Siqueira da Silva
                    </div>
                    <div class="p-2 d-flex ">
                        - Email: igorsiqueira.adm@gmail.com
                    </div>
                    <div class="p-2 d-flex ">
                        - Telephone:+55 (31)9 9403-2335
                    </div>
                </div>
                <div clas="col-sm-5 d-flex flex-column">
                    <div class="p-2 d-flex ">
                        <a class="btn btn-sm btn-block" href="<?php echo BASE_URL?>assets/arquivos diversos/Currículo de TI - Igor Siqueira da Silva.pdf" download>
                            My Curriculum
                        </a>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-sm d-flex flex-column">
                    <div class="p-2 text-center">
                        <h6>Follow me on the platforms</h6>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-2">
                    <a target="_blank" href="https://www.facebook.com/igorsiqueira.silva" class="btn btn-lg btn-block kpx_btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <i class="fa fa-facebook fa-2x"></i>
                        <span class="hidden-xs"></span>
                    </a>   
                </div>
                <div class="col-sm-2">
                    <a target="_blank" href="https://www.linkedin.com/in/igor-siqueira-da-silva-45aba613a/" class="btn btn-lg btn-block kpx_btn-linkedin" data-toggle="tooltip" data-placement="top" title="LinkedIn">
                        <i class="fa fa-linkedin fa-2x"></i>
                        <span class="hidden-xs"></span>
                    </a>
                </div>
                <div class="col-sm-2">
                    <a target="_blank" href="https://github.com/iwebwork?tab=repositories" class="btn btn-lg btn-block kpx_btn-github" data-toggle="tooltip" data-placement="top" title="GitHub">
                        <i class="fa fa-github fa-2x"></i>
                        <span class="hidden-xs"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p class="text-center"> Igor Siqueira da Silva - All rights reserved @<text id="data"> </text></p>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/templateOne.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/navBar.js"></script>
        
    </body>
</html>