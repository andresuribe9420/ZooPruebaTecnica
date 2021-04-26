<?php 

    class Cuidador extends Controller  {

        function __construct()
        {   
            parent::__construct();
            
        }

        public function index(){
            $this->view->render('estructura/header'); //HEADER
            $this->view->render('cuidadores/index'); // Pagina Principal
            $this->RefreshDataTable();            
            $this->view->render('cuidadores/formcreate');
            $this->view->render('estructura/footer'); //FOOTER
        }
        public function setData($data){
            $this->data = $data;
        }
        public function getData(){
            return $this->data;
        }
        public function RefreshDataTable(){
            
            $res = $this->model->getAll();
            $this->setData($res);
            $this->view->render('cuidadores/table',$this->getData());
        }        
        function registrarCuidador(){

            $Datos = $_POST["formularioCuidador"];    
            
             $DataProcess = (object)[
                 'cui_cedula'=> $Datos[0],
                 'cui_nombre'=> $Datos[1],
                 'cui_apellido'=> $Datos[2],
                 'cui_telefono'=> $Datos[3],
                 'cui_correo'=> $Datos[4]
                 ];
                 
            $this->model->save($DataProcess);
            $this->RefreshDataTable();
            
        }
        function oneCuidador(){ // envio de datos al formulario EDIT
            
            $id = $_POST['id']; 
            $DataOne = $this->model->getId($id);

            //  $this->ShowConsole($DataOne); 

            $Data = (object)[                
                'cuidador'=>$DataOne
            ];
            // $this->ShowConsole($Data); 
            
            $this->view->render('cuidadores/formedit',$Data);
            
        }             
        function editDataCuidador(){

            $idCuidador = $_POST['id'];
            $Datos = $_POST['formularioCuidadorEdit'];  

            
            $DataProcess = (object)[
                'cui_cedula'=> $Datos[0],
                'cui_nombre'=> $Datos[1],
                'cui_apellido'=> $Datos[2],
                'cui_telefono'=> $Datos[3],
                'cui_correo'=> $Datos[4]
                ];
            
            

            /* $this->ShowConsole($Data); */
            $this->model->update($idCuidador,$DataProcess);
            $this->RefreshDataTable();   
        }
        function deleteCuidador(){
            $id = $_POST['id'];
            $this->model->delete(['id'=> $id]);
            $this->RefreshDataTable();
        }

    }

?>