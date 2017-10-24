<?php
    class VerificaTesteController extends Controller{
        public function process($params){
            session_start();
            $teste = new VerificaTeste();
            $result = $teste->verificar($_SESSION['id_user']);
            
            if(empty($result)){
                $this->redirect("perguntas");
            }else{
                $this->redirect("tutorial?e=1");
            }
        }
    }
?>