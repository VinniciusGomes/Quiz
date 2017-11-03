<?php
	class Query{
		public function select(){
			//$result = Db::queryAll("SELECT * FROM pergunta");
			$result = Db::queryAll("SELECT * FROM login");
            return $result;
		}

		public function update(){
            //$result = Db::queryCount("UPDATE pergunta SET perg_enunciado='Porção cercada por água:' WHERE perg_id=6");
            $result = Db::queryCount("UPDATE login SET log_senha='c13nc14' WHERE log_id=1");
        }
	}
?>