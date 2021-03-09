<?php
App::uses('AppController', 'Controller');

class DocenteAcademiaController extends AppController {

    public $uses = array('Usuario');

    //METODOS  DE EDGAR
    public function vistacs() {
        
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', ' '.date("Y"));
        $this->set('objJS', '<!-- Css -->');
        $this->set('piePag', '<!-- Java -->'.'<script src="../js/librerias/vistamg.js?18"></script>');
    }
   // FIN DE METODOS EDGAR

   //METODOS DE ERICK PRADO
    public function temario_docente(){
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('objJS','<link rel="stylesheet" href="../css/academia_clasedigital.css?1">');
        // $this->set('piePag','<script src="../js/librerias/acadig_temario.js?1"></script>');
        $this->set('objJS','<link rel="stylesheet" href="../css/academia_clasedigital.css?1"><script src="../js/librerias/acadig_temario.js?1"></script>');
        $usuario = $this->Session->read('usuario');
    }

  // FIN DE METODOS PRADO
    
    public function getdatos($op = null) {

        $usuario = $this->Session->read('usuario');
        if (count($usuario) <= 0) {

            $response = array(
                'success' => false,
                'message' => 'SESSION',
                'data' => 'SesiÃ³n Expirada. Por favor vuelva iniciar sesiÃ³n para continuar'

            );

            $encoded = json_encode($response);

            exit(AppController::fnEncrypt($encoded));

        }

        if ($this->request->is('post')) {
            $this->layout = '';
            ini_set('max_execution_time', 300);
            ini_set('max_input_time', 300);
            $sql = '';

            if (isset($op)) {

                switch ($op)
                {
                    // EDGAR CASE DE 1-20  ERICK PRADOS DE  21-40 
                   
                    //INICIO DE CASE DE EDGAR
                    case 1:
                        /*
                        $cadena = $usuario->correo;                 
                        $resultado = intval(preg_replace('/[^0-9]+/', '', $cadena), 10);           
                        $sql = "CALL NPV_DATOSALUMNO_COMBO_SALONES($resultado)";
                        exit(AppController::getDataTable($sql));
                        $linea =  $this->request->data['linea'];*/
                    break;

                    //INICIO DE CASE DE PRADOS
                
                   

                }

            } else {

                exit();

            }

        } else {

            $this->redirect('/#' . $usuario->correo);

        }

    }


    public function mantto($op = null) {

        if ($this->Session->check('usuario') !== true) {

            $response = array(

                'success' => false,

                'message' => 'SESSION',

                'data' => 'SesiÃ³n Expirada. Por favor vuelva iniciar sesiÃ³n para continuar'

            );

            $encoded = json_encode($response);

            //exit(AppController::fnEncrypt($encoded));

            exit($encoded);

        }

        $usuario = $this->Session->read('usuario');



        if ($this->request->is('post')) {

            $this->layout = '';

            ini_set('max_execution_time', 300);



            $sql = '';

            if (isset($op)) {

                switch ($op) {


                    case 1:

                        $prejson = $this->request->data('objJSON');

                        $json = AppController::JSONisValid($prejson);

                        $sql = "CALL NPV_PAMERGAMER_PERFIL_GET('$usuario->codigo','$json->personaje','$json->nick')";

                        exit(AppController::getResult($sql));



                    case 3:

                        $prejson = $this->request->data('objJSON');

                        $json = AppController::JSONisValid($prejson);

                        $sql = "CALL NPV_PAMERGAMER_GRABAR_EXAMEN('$usuario->codigo','$json->curso','$json->semana','$json->preg1','$json->preg2','$json->preg3','$json->preg4')";

                        exit(AppController::getResult($sql));





                }

            } else {

                exit();

            }

        } else {

            $this->redirect('/#' . $usuario->correo);

        }

    }


    public function close() {

        $this->Session->destroy();

        session_destroy();

        $this->redirect('/users');

    }


}

