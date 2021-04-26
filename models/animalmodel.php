<?php 

    class animalModel extends Model implements IModel {

        public function __construct()
        {
            parent::__construct();
        }

        //CRUD

        public function save($data){

            // $this->ShowConsole($data);

            $sql = 'INSERT INTO tblanimal
            (
                ani_nombre,
                ani_especie,
                ani_sexo,
                ani_fnacimiento,
                ani_fingreso,
                ani_color,
                ani_raza,
                tblcuidador_cui_id,
                ani_image
                ) VALUES 
                    (
                    "'.$data->ani_nombre.'",
                    "'.$data->ani_especie.'",
                    "'.$data->ani_sexo.'",
                    "'.$data->ani_fnacimiento.'",
                    "'.$data->ani_fingreso.'",
                    "'.$data->ani_color.'",
                    "'.$data->ani_raza.'",
                     '.$data->tblcuidador_cui_id.'
                    
                    )';

                //    echo $sql;
                        
            try {
                
                $query = $this->prepare($sql); //Preparando la consulta        
                $query->execute(); // Aca mandamos a ejecutar la consulta pasando por ultimo los values :value

            } catch (PDOException $e) {
                $this->showError('save','cuidador',$e);
            }

        }
        public function getAll(){
            try {
                $query = $this->prepare('SELECT * FROM tblanimal ORDER BY ani_id DESC');
                $query->execute(); 

                return $query->fetchAll();
            } catch (PDOException $e) {
                $this->showError('getAll','cuidador',$e);
            }
        }   
        public function consultaDatos($table){
            try {
                $query = $this->prepare('SELECT * FROM '.$table);
                $query->execute(); 

                return $query->fetchAll();
            } catch (PDOException $e) {
                $this->showError('consultaDatos','usuario',$e);
            }
        }     
        public function delete($id){

            try {

                $query = $this->prepare('DELETE FROM tblcuidador WHERE cui_id=:id'); 
                $query->execute($id); 

            } catch (PDOException $e) {
               $this->showError('delete','cuidador',$e);
            }

        }
        public function getId($id){
            try {

                $query = $this->prepare('SELECT * FROM tblcuidador WHERE cui_id=:id'); 
                $query->execute(['id'=>$id]); 
                
                return $query->fetchAll();

            } catch (PDOException $e) {
                $this->showError('getId','cuidador',$e);
            }
        }

        
        public function update($id,$data){

            //$this->ShowConsole($data);

            $sql='UPDATE tblcuidador SET
            
                cui_cedula=           "'.$data->cui_cedula.'",
                cui_nombre=           "'.$data->cui_nombre.'",
                cui_apellido=         "'.$data->cui_apellido.'",
                cui_telefono=         "'.$data->cui_telefono.'",
                cui_correo=           "'.$data->cui_correo.'"
                

                WHERE cui_id=                   "'.$id.'"
            ';

           

            try {
                $query = $this->prepare($sql);
                $query->execute(); 
 
            } catch (PDOException $e) {
                $this->showError('update','cuidador',$e);
            }
        }

    }

?>

