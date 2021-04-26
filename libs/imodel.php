<?php 

    interface IModel {
        public function save($data);
        public function getId($id);
        public function getAll();
        public function update($id,$data);
        public function delete($id);
    } // Va a ser como el estandar de los CRUD en el equipo

?>