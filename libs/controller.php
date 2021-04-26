<?php 

    class Controller{

        function __construct()
        {           
            $this->view = new View();
        }

        function cargarModel($model){
            $url = 'models/'.$model.'model.php';
            //echo " ".$url;

            if (file_exists($url)) {
                require $url;

                $NombreModel = $model.'Model';
                $this->model = new $NombreModel;
             //echo " ".$NombreModel;
            }
        }        

        function ShowConsole($data){
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }

    }

?>