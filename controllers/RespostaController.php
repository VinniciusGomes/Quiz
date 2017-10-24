<?php
    class RespostaController extends Controller{
        public function process($params){
            session_start();
            $id_perg = $_SESSION['id_perg'];
            $resposta = $_POST['alternativa'];

            $quiz = new Quiz();
            
            $result = $quiz->responder($_SESSION['id_user'], $id_perg, $resposta);
            
            if(!isset($_SESSION['pontuacao'])){
                $_SESSION['pontuacao'] = 0;
            }
            
            if($resposta == 1){
                $_SESSION['pontuacao'] = $_SESSION['pontuacao'] + 1;
            }
            
            if(!isset($_SESSION['questao'])){
                $_SESSION['questao'] = 1;
            }else{
                if($_SESSION['questao']  == 10 ){
                    $_SESSION['questao'] = 1;
                    $quiz->setarRank($_SESSION['id_user'], $_SESSION['pontuacao']);
                    Controller::redirect('resultado');
                }else{
                    $_SESSION['questao'] = $_SESSION['questao'] + 1;
                }
            }
            
            $this->redirect('perguntas');
        }
    }
?>
