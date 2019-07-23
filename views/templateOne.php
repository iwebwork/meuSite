<html>
    <header>
        <title>Meu site</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="shortcut icon" href="<?php echo BASE_URL;?>assets/images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/templateOne.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/animate.css"/>
    </header>
    <body onload="date()">
        <nav class="navbar navbar-expand-lg navbar-light style-nave ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
               <img class="img-logo" src="<?php echo BASE_URL;?>assets/images/logo.png" >
            </button>

            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarTogglerDemo03">
                <a class="navbar-brand logo-invisible" href="#"><img class="img-logo" src="<?php echo BASE_URL;?>assets/images/logo.png" ></a>
                <ul class="navbar-nav">
                    <li class="style-nave-text">
                        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Curriculum<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    
        <?php $this->loadViewInTemplateOne($viewName, $viewData);?>

        <div class="container-fluid style-rodape margin-top" id="rodape">
            <div class="row">
                <div class="col-sm">
                    <p class="text-center style-nave-text"> All rights reserved @<text id="data"> </text></p>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/templateOne.js"></script>
    </body>
</html>