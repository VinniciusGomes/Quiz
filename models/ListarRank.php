<?php
class ListarRank{
	public function listar(){
        if($_SESSION['nivel'] == 1){
            $result = Db::queryAll("SELECT log_nome, log_id, max(rank_pontuacao) as rank_pontuacao 
                FROM rank INNER JOIN login ON rank.rank_log_id=login.log_id AND rank.rank_pontuacao <= 10 GROUP BY login.log_nome ORDER BY rank_pontuacao DESC LIMIT 10");
		  for ($i=0; $i < sizeof($result); $i++) { 	
			 if($i >= 0 && $i <3){
				$icone = "<i class='fa fa-trophy' aria-hidden='true' style='font-size: 1.5em; color: #FFD700; float: right; width: 1%;'></i>"; // Ouro
			 }elseif($i >=3 && $i <=6){
                $icone = "<i class='fa fa-trophy' aria-hidden='true' style='font-size: 1.5em; color: #c0c0c0; float: right; width: 1%;'></i>"; // Prata
			 }else{
				$icone = "<i class='fa fa-trophy' aria-hidden='true' style='font-size: 1.5em; color: #cd7f32; float: right; width: 1%;'></i>"; // Bronze
			 }

            if($result[$i]['rank_pontuacao'] <= 9){
			     echo "<li class='collection-item s4 m4'>".$icone."<div style='color: #000; float: right; width: 0%;'><br>0" .$result[$i]['rank_pontuacao']."</div>
            		  <div style='color: #000'><div style='font-size: .9em; font-weight: 700;'>Nome </div>".$result[$i]['log_nome']."</div>
        		      </li>";
            }else{
                echo "<li class='collection-item s4 m4'>".$icone."<div style='color: #000; float: right; width: 0%;'><br>" .$result[$i]['rank_pontuacao']."</div>
            		  <div style='color: #000'><div style='font-size: .9em; font-weight: 700;'>Nome </div>".$result[$i]['log_nome']."</div>
        		      </li>";
            }    
		  }
        }else{
            $result = Db::queryAll("SELECT log_nome, log_id, max(rank_pontuacao) as rank_pontuacao 
                FROM rank INNER JOIN login ON rank.rank_log_id=login.log_id AND rank.rank_pontuacao <= 10 GROUP BY login.log_nome ORDER BY rank_pontuacao DESC");

            for ($i=0; $i < sizeof($result); $i++) {
                
                echo "<li class='collection-item s4 m4'><div style='color: #000; float: right;'><br>".$result[$i]['rank_pontuacao']."</div>
            		      <div style='color: #000'><div style='font-size: .9em; font-weight: 700;'>Nome </div>".$result[$i]['log_nome']."</div>
        		      </li>";
            }
        }
	}
}
?>