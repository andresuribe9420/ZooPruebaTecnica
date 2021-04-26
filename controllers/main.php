<?php 

    class Main extends Controller {

        function __construct()
        {   
            parent::__construct();
            
        }

        public function index(){
            $this->view->render('estructura/header'); //HEADER
            $this->view->render('main/index'); // Pagina Principal
            $this->view->render('estructura/footer'); //FOOTER
        }

    }

?>