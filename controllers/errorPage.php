<?php 

    class ErrorPage extends Controller{

        function __construct()
        {
            parent::__construct();
            $this->index();
        }

        public function index(){
            $this->view->mensaje = "Error al cargar el componente";
            $this->view->render('error/index');
        }


    }

?>