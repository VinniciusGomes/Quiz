<?php
	class Quiz{
		public function responder($id_user, $id_perg, $acerto){
			Db::connect('localhost', 'root', '', 'quizpedag');
			$result = Db::queryCount("INSERT INTO teste (test_correto, test_log_id, test_perg_id, test_data) VALUES (?, ?, ?, ?)", 
                      array($acerto, $id_user, $id_perg, date("Y-m-d", time())));
		}
        
        public function setarRank($id_user, $pontuacao){
            Db::queryCount("INSERT INTO rank (rank_pontuacao, rank_log_id, rank_data) VALUES (?, ?, ?)", 
                           array($pontuacao, $id_user, date('Y-m-d', time())));
        }
	}
?>