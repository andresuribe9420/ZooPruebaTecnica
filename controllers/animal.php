<?php 

    class Animal extends Controller {

        function __construct()
        {   
            parent::__construct();
            
        }

        public function index(){
            $this->view->render('estructura/header'); //HEADER
            $this->view->render('animales/index'); // Pagina Principal
            $this->view->render('estructura/footer'); //FOOTER
        }

    }

?>