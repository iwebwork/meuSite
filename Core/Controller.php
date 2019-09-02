<?php
   namespace Core;

   class Controller {
   
       public function loadView($viewName, $viewData = array()) {
           extract($viewData);
           require 'Views/'.$viewName.'.php';
       }
   
       public function loadTemplateOne($viewName, $viewData = array()) {
           require 'Views/templateOne.php';
       }
   
       public function loadViewInTemplate($viewName, $viewData = array()) {
           extract($viewData);
           require 'Views/'.$viewName.'.php';
       }

       public function loadViewInTemplateOne($viewName, $viewData = array()) {
        extract($viewData);
        require 'Views/'.$viewName.'.php';
    }

    }