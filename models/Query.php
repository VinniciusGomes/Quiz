<?php
	class Query{
		public function select(){
			//$result = Db::queryAll("SELECT * FROM pergunta");
			$result = Db::queryAll("SELECT * FROM login");
			//$result = Db::queryAll("SELECT * FROM rank");
            return $result;
		}

		public function update(){
            //$result = Db::queryCount("UPDATE pergunta SET perg_enunciado='Porção cercada por água:' WHERE perg_id=6");
            $result = Db::queryCount("UPDATE login SET log_senha='c13nc14' WHERE log_id=1");
        }

        public function insert(){
        	$result = Db::queryCount("INSERT INTO rank (rank_data, rank_log_id, rank_pontuacao) VALUES ('2017-11-08', 33, 9)");
        }
	}
?>