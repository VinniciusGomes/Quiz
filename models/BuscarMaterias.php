<?php
	class BuscarMaterias{
		public function buscar(){
			$result = Db::queryAll("SELECT cat_id, cat_materia FROM categoria ORDER BY cat_materia");
			for ($i=0; $i < sizeof($result); $i++) { 
				echo "<option value='".$result[$i]['cat_id']."' selected style='color: #000'>".$result[$i]['cat_materia']."</option>";
			}
		}
	}
?>

