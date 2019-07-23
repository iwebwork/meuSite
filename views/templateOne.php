<html>
    <header>
        <title>Meu site</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/templateOne.css"/>
    </header>
    <body onload="date()">
        <nav class="navbar navbar-expand-lg navbar-light style-nave">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="img-logo" src="<?php echo BASE_URL?>assets/images/logo.png" ></a>

            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarTogglerDemo03">
                <ul class="navbar-nav">
                    <li class="style-nave-text">
                        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Curriculo<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    
        <?php $this->loadViewInTemplateOne($viewName, $viewData);?>

        <div class="container-fluid style-rodape">
            <div class="row">
                <div class="col-sm">
                    <p class="text-center style-nave-text"> Todos os direitos reservados @<text id="data"> </text></p>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/templateOne.js"></script>
    </body>
</html>