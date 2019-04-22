DROP DATABASE IF EXISTS quizPedag;

CREATE DATABASE quizPedag;

USE quizPedag;

DROP TABLE IF EXISTS login;
DROP TABLE IF EXISTS pergunta;
DROP TABLE IF EXISTS alternativa;
DROP TABLE IF EXISTS teste;
DROP TABLE IF EXISTS rank;

CREATE TABLE login (
	log_id int NOT NULL AUTO_INCREMENT,
	log_usuario varchar(50) NOT NULL,
	log_nome varchar(100) NOT NULL,
	log_senha varchar(15) NOT NULL,
	log_nivel boolean NOT NULL,
	log_dat_cad date NOT NULL,
	Log_logado boolean NOT NULL DEFAULT 0,
	PRIMARY KEY (log_id)
);

CREATE TABLE categoria (
	cat_id int NOT NULL AUTO_INCREMENT,
	cat_materia varchar(100) NOT NULL,
	PRIMARY KEY (cat_id)
);

CREATE TABLE pergunta (
	perg_id int NOT NULL AUTO_INCREMENT,
	perg_enunciado varchar(255) NOT NULL,
	perg_cat_id int NOT NULL,
	PRIMARY KEY (perg_id),
	FOREIGN KEY (perg_cat_id) REFERENCES categoria (cat_id)
);

CREATE TABLE alternativa (
	alt_id int NOT NULL AUTO_INCREMENT,
	alt_texto varchar(255) NOT NULL,
	alt_perg_id int NOT NULL,
	alt_resposta boolean NOT NULL,
	PRIMARY KEY (alt_id),
	FOREIGN KEY (alt_perg_id) REFERENCES pergunta (perg_id)
);

CREATE TABLE teste (
	test_id int NOT NULL AUTO_INCREMENT,
	test_acerto boolean NOT NULL,
	test_log_id int NOT NULL,
	test_perg_id int NOT NULL,
	test_data date NOT NULL,
	PRIMARY KEY (test_id),
	FOREIGN KEY (test_log_id) REFERENCES login(log_id),
	FOREIGN KEY (test_perg_id) REFERENCES pergunta(perg_id)
);

CREATE TABLE rank (
	rank_id int NOT NULL AUTO_INCREMENT,
	rank_pontuacao int NOT NULL,
	rank_log_id int NOT NULL,
	rank_data date NOT NULL,
	PRIMARY KEY (rank_id),
	FOREIGN KEY (rank_log_id) REFERENCES login(log_id)
);


-- Usuário Padrao
INSERT INTO login (log_usuario, log_nome, log_senha, log_nivel, log_dat_cad) VALUES ("admin", "Administrador", "admin", 0, "2017-10-10");
