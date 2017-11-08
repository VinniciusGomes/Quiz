<?php
    class BancoController extends Controller{
        public function process($params){
            $banco = new Query();
            //$banco->update();
            //$banco->insert();
            $result = $banco->select();
            
            for($i=0; $i < sizeof($result); $i++){
                echo "log_id: " . $result[$i]['log_id'] . "----------- log_usuario: " . $result[$i]['log_nome'] . "----------- log_senha: " .$result[$i]['log_senha']. "<br>";

            }
        }
    }
?>