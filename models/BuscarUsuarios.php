<?php
	class BuscarUsuarios{
		public function buscar(){
			Db::connect('localhost', 'root', '', 'quizpedag');
			$result = Db::queryAll("SELECT log_nome, log_id FROM login WHERE log_id<>1 ORDER BY log_nome");
			for ($i=0; $i < sizeof($result); $i++) { 
				echo "<option value='" .$result[$i]['log_id']. "' selected style='color: #000'>".
                $result[$i]['log_nome']. "</option>";
			}
		}
	}
?>