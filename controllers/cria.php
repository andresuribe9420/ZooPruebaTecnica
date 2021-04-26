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
            $this->Render_FormCria();            
            $this->view->render('crias/formcreate');
            $this->view->render('estructura/footer'); //FOOTER
        }
        public function setData($data){
            $this->data = $data;
        }
        public function getData(){
            return $this->data;
        }
        public function Render_FormCria(){
            
            $R1=$this->model->consultaDatos("tblcuidador");
            $R2=$this->model->consultaDatos("tblanimal");
            

           $Data = (object)[
               'cuidador'=>$R1,
               'animal'=>$R2
           ];
            $this->view->render('crias/formcreate',$Data);            
        }
        public function RefreshDataTable(){
            
            $res = $this->model->getAll();
            $this->setData($res);
            $this->view->render('crias/table',$this->getData());
        }        
        function registrarCria(){

            $Datos = $_POST["formularioCria"];    
            
            
             $DataProcess = (object)[
                 'cri_nombre'=> $Datos[0],
                 'cri_especie'=> $Datos[1],
                 'cri_raza'=> $Datos[2],
                 'cri_sexo'=> $Datos[3],
                 'cri_fnacimiento'=> $Datos[4],
                 'cri_color'=> $Datos[5],
                 'tblanimal_ani_id'=> $Datos[7],
                 'tblcuidador_cui_id'=> $Datos[6]
                 ];
                 
            $this->model->save($DataProcess);
            $this->RefreshDataTable();
            
        }
        
        function oneCria(){ // envio de datos al formulario EDIT
            
            $id = $_POST['id']; 
            $DataOne = $this->model->getId($id);

            $R1=$this->model->consultaDatos("tblcuidador");
            $R2=$this->model->consultaDatos("tblanimal");           

                  
            //  $this->ShowConsole($DataOne); 

            $Data = (object)[                
                'cria'=>$DataOne,
                'cuidador'=>$R1,
                'madre'=>$R2,
                'genero' => array (
                    "Hembra",
                    "Macho"
                )
            ];
            // $this->ShowConsole($Data); 
            
            $this->view->render('crias/formedit',$Data);
            
        }             
        function editDataCria(){

            $idCria = $_POST['id'];
            $Datos = $_POST['formularioCriaEdit'];  

            
            $DataProcess = (object)[
                'cri_nombre'=> $Datos[0],
                'cri_especie'=> $Datos[1],
                'cri_raza'=> $Datos[2],
                'cri_sexo'=> $Datos[3],
                'cri_fnacimiento'=> $Datos[4],
                'cri_color'=> $Datos[5],
                'tblanimal_ani_id'=> $Datos[7],
                'tblcuidador_cui_id'=> $Datos[6]
                ]; 

            /* $this->ShowConsole($Data); */
            $this->model->update($idCria,$DataProcess);
            $this->RefreshDataTable();   
        }
        function deleteCria(){
            $id = $_POST['id'];
            $this->model->delete(['id'=> $id]);
            $this->RefreshDataTable();
        }

    }

?>