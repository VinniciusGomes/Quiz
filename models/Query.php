<?php
	class Query{
		public function select(){
			$result = Db::queryAll("SELECT * FROM pergunta");
            return $result;
		}

		public function update(){
            $result = Db::queryCount("UPDATE pergunta SET perg_enunciado='Porção cercada por água:' WHERE perg_id=6");
        }
	}
?>