<?php
class CadastrarUsuario{
	public function cadastrar($nick, $nome, $senha, $nivel){
		// Inserindo usuario no banco
		$verifica = $this->verificaNick($nick);

		if($verifica == null){
			$result = Db::queryCount("INSERT INTO login (log_usuario, log_nome, log_senha, log_nivel, log_dat_cad)  VALUES (?, ?, ?, ?, ?)", array($nick, $nome, $senha, $nivel, date('Y/m/d', time())));
			return $result;
		}else{
			EditarUsuariosController::redirect('editar-usuarios?e=2');
		}
	}

	public function verifica($nome){
		Db::connect('localhost', 'root', '', 'quizpedag');
		// Buscando usuarios existentes
		$result = Db::queryAll("SELECT log_nome FROM login WHERE log_nome=?", array($nome));
		return $result;
	}

	public function verificaNick($nick){
		Db::connect('localhost', 'root', '', 'quizpedag');
		// Buscando usuarios existentes
		$result = Db::queryAll("SELECT log_usuario FROM login WHERE log_usuario=?", array($nick));
		return $result;
	}
}
?>