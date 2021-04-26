<?php 
    include 'imodel.php';
    class Model{

        function __construct()
        {
            $this->db = new Database();
        }

        function query($query){
            return $this->db->conexion()->query($query);
        }

        function prepare($query){
            return $this->db->conexion()->prepare($query);
        }

        function showError($accion,$modelo,$error){
            error_log('No se pudo '.$accion.' el dato model '.$modelo.' '.$error);
        }

        function ShowConsole($data){
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }

    }

?>