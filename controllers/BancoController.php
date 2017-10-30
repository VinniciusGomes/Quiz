<?php
    class BancoController extends Controller{
        public function process($params){
            $banco = new Query();
            //$banco->update();
            $result = $banco->select();
            
            for($i=0; $i < sizeof($result); $i++){
                echo "per_id: " . $result[$i]['perg_id'] . "----------- perg_enunciado: " . $result[$i]['perg_enunciado'] . "<br>";
            }
            
        }
    }
?>