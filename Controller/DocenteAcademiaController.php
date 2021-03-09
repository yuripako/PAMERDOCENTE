<?php
App::uses('AppController', 'Controller');

class DocenteAcademiaController extends AppController {

    public $uses = array('Usuario');

    ////////////////////////////////////METODOS  DE EDGAR
 

  //////////////////////////////////// FIN DE METODOS EDGAR



  ////////////////////////////////////METODOS DE ERICK PRADO


 ////////////////////////////////////FIN DE METODOS PRADO



////////////////////////////////////METODOS DE ERICK HUARACHA


 //////////////////////////////////// FIN DE METODOS HUARACHA


    
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

                    
                    //  ERICK PRADOS DE  1-50   EDGAR 51-100 HUARCHA 101--->
                   
                    //INICIO DE CASE DE PRADO

                    
                      
                    //FIN DE PRADO


                    //INICIO DE CASE DE EDGAR
                


                    //FIN DE EDGAR

                    
                    //INICIO DE HUARACHA
                


                    //FIN DE HUARACHA
                   

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

