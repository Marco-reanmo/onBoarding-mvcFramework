<?php
    class Pages extends Controller{
        
        public function __construct() {
            echo 'This is the Pages Class.';
        }
        
        public function index() {
            //Todo: loadModel(...) and then push into $data
            $data = ['title' => 'Index'];
            $this->loadView('pages/index', $data);;
        }

        public function about() {
            $this->loadView('pages/about');
        }
    }
    