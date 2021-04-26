<?php 

    class Main extends Controller {

        function __construct()
        {   
            parent::__construct();
            /* $this->view->render('main/index'); */
            /* echo "<p>Nuevo Controlador Main</p>"; */
        }

        public function index(){
            $this->view->render('estructura/header'); //HEADER
            $this->view->render('main/index');
            $this->view->render('estructura/ajustes_nav'); //Barra Navegacion
            $this->view->render('estructura/footer'); //FOOTER
        }

    }

?>