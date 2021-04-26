<?php 

    class criaModel extends Model implements IModel {

        public function __construct()
        {
            parent::__construct();
        }

        //CRUD

        public function save($data){

            // $this->ShowConsole($data);

            $sql = 'INSERT INTO tblcria
            (
                cri_nombre,
                cri_especie,
                cri_raza,
                cri_sexo,
                cri_fnacimiento,
                cri_color,
                tblanimal_ani_id,
                tblcuidador_cui_id
                ) VALUES 
                    (
                    "'.$data->cri_nombre.'",
                    "'.$data->cri_especie.'",
                    "'.$data->cri_raza.'",
                    "'.$data->cri_sexo.'",
                    "'.$data->cri_fnacimiento.'",
                    "'.$data->cri_color.'",
                    '.$data->tblanimal_ani_id.',
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
                $query = $this->prepare('SELECT cri_id,cri_nombre,cri_raza,cri_especie,cri_sexo,cri_fnacimiento, tblanimal.ani_nombre,tblcuidador.cui_nombre FROM tblcria INNER JOIN tblanimal ON tblanimal.ani_id = tblcria.tblanimal_ani_id  LEFT JOIN  tblcuidador ON tblcuidador.cui_id = tblcria.tblcuidador_cui_id  ORDER BY cri_id DESC');
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

                $query = $this->prepare('DELETE FROM tblanimal WHERE ani_id=:id'); 
                $query->execute($id); 

            } catch (PDOException $e) {
               $this->showError('delete','cuidador',$e);
            }

        }
        public function getId($id){
            try {

                $query = $this->prepare('SELECT * FROM tblanimal WHERE ani_id=:id'); 
                $query->execute(['id'=>$id]); 
                
                return $query->fetchAll();

            } catch (PDOException $e) {
                $this->showError('getId','cuidador',$e);
            }
        }

        
        public function update($id,$data){

            //$this->ShowConsole($data);

            $sql='UPDATE tblanimal SET
            
                ani_nombre=           "'.$data->ani_nombre.'",
                ani_especie=          "'.$data->ani_especie.'",
                ani_sexo=             "'.$data->ani_sexo.'",
                ani_fnacimiento=      "'.$data->ani_fnacimiento.'",
                ani_fingreso=         "'.$data->ani_fingreso.'",
                ani_color=            "'.$data->ani_color.'",
                ani_raza=             "'.$data->ani_raza.'",
                tblcuidador_cui_id=   '.$data->tblcuidador_cui_id.'
                

                WHERE ani_id=                   "'.$id.'"
            ';

        //    echo $sql;

            try {
                $query = $this->prepare($sql);
                $query->execute(); 
 
            } catch (PDOException $e) {
                $this->showError('update','cuidador',$e);
            }
        }

    }

?>

