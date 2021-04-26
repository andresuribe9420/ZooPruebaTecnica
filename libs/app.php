<?php 
    
    require_once 'controllers/errorPage.php';

    function IsLoadView($archivoController,$WhatAction,$url = null){

        # WhatAction 
        #    - LoadAction
        #    - LoadView
        #    - LoadIndex

        if (file_exists($archivoController)) {

            require_once $archivoController;

            if ($WhatAction == 'LoadObjectAction') {

                $ctr = $_POST['Ctr'];
                $acc = $_POST['Acc'];

                $controller = new $ctr;
                $controller->cargarModel($ctr);
                $controller->{$acc}();
            }

            if ($WhatAction == 'LoadView') {

                $clase = ucwords($url[0]);
                $controller = new $clase;
                $controller->cargarModel($url[0]);
                $controller->{'index'}();
            }

            if ($WhatAction == 'LoadIndex') {

                $controller = new Main();
                $controller->{'index'}();
                return false;
            }

        }else{

            $controller = new ErrorPage();

        }
    }
    function IsCleanUrl(){

        $url =  isset($_GET['url']) ? $_GET['url'] : null ;
        $url = rtrim($url, '/');
        $url = explode('/',$url);

        return $url;
    }
    
  
        $exist = empty($_GET['url']) ? false : true;
        
        if (isset($_POST['Acc']) && isset($_POST['Ctr'])) {
            
            $ctr = $_POST['Ctr'];
            $archivoController = 'controllers/'. $ctr . '.php';
            IsLoadView($archivoController,'LoadObjectAction');
    
        }else if ($exist) {
            
            $url = IsCleanUrl();
            $archivoController = 'controllers/'. $url[0] . '.php';
            IsLoadView($archivoController,'LoadView',$url);
    
        }else {
            
            $archivoController = 'controllers/main.php';
            IsLoadView($archivoController,'LoadIndex');
    
        }
    
?>