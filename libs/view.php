<?php 

    class View{

        function __construct()
        {
            //echo "<p> Vista Base </p>";
        }

        function render($nombre, $data = []){

            $this->data = $data;
            require 'views/'. $nombre .'.php';
        }

    }

?>