<?php

    /*
    Basic Controller Class
    Loads the models and views.
     */
    class Controller {

        public function loadModel($modelname) {
            require_once __DIR__ . '/../model/' . $modelname . '.php';
            return new $modelname;
        }

        public function loadView($viewname, $data = []) {
            $viewfile = __DIR__ . '/../view/' . $viewname . '.php';
            if(file_exists($viewfile)) {
                require_once $viewfile;
            } else {
                die('Unexpected error: View does not exist.');
            }
        }
    }