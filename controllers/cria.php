<?php 

    class Cria extends Controller {

        function __construct()
        {   
            parent::__construct();
            
        }

        public function index(){
            $this->view->render('estructura/header'); //HEADER
            $this->view->render('crias/index'); // Pagina Principal
            $this->RefreshDataTable();            
            $this->Render_FormAnimal();            
            $this->view->render('crias/formcreate');
            $this->view->render('estructura/footer'); //FOOTER
        }
        public function setData($data){
            $this->data = $data;
        }
        public function getData(){
            return $this->data;
        }
        public function Render_FormAnimal(){
            
            $R1=$this->model->consultaDatos("tblcria");
            

           $Data = (object)[
               'cuidador'=>$R1
           ];
            $this->view->render('crias/formcreate',$Data);            
        }
        public function RefreshDataTable(){
            
            $res = $this->model->getAll();
            $this->setData($res);
            $this->view->render('animales/table',$this->getData());
        }        
        function registrarAnimal(){

            $Datos = $_POST["formularioCuidador"];    
            
             $DataProcess = (object)[
                 'ani_nombre'=> $Datos[0],
                 'ani_especie'=> $Datos[1],
                 'ani_sexo'=> $Datos[3],
                 'ani_fnacimiento'=> $Datos[4],
                 'ani_fingreso'=> $Datos[5],
                 'ani_color'=> $Datos[6],
                 'ani_raza'=> $Datos[2],
                 'tblcuidador_cui_id'=> $Datos[7]
                 ];
                 
            $this->model->save($DataProcess);
            $this->RefreshDataTable();
            
        }
        
        function oneAnimal(){ // envio de datos al formulario EDIT
            
            $id = $_POST['id']; 
            $DataOne = $this->model->getId($id);
            $cuidador = $this->model->consultaDatos("tblcuidador");

           
            //  $this->ShowConsole($DataOne); 

            $Data = (object)[                
                'animal'=>$DataOne,
                'cuidador'=>$cuidador,
                'genero' => array (
                    "Hembra",
                    "Macho"
                )
            ];
            // $this->ShowConsole($Data); 
            
            $this->view->render('animales/formedit',$Data);
            
        }             
        function editDataAnimal(){

            $idAnimal = $_POST['id'];
            $Datos = $_POST['formularioAnimalEdit'];  

            
            $DataProcess = (object)[
                'ani_nombre'=> $Datos[0],
                'ani_especie'=> $Datos[1],
                'ani_sexo'=> $Datos[3],
                'ani_fnacimiento'=> $Datos[4],
                'ani_fingreso'=> $Datos[5],
                'ani_color'=> $Datos[6],
                'ani_raza'=> $Datos[2],
                'tblcuidador_cui_id'=> $Datos[7]
                ];   

            /* $this->ShowConsole($Data); */
            $this->model->update($idAnimal,$DataProcess);
            $this->RefreshDataTable();   
        }
        function deleteAnimal(){
            $id = $_POST['id'];
            $this->model->delete(['id'=> $id]);
            $this->RefreshDataTable();
        }

    }

?>