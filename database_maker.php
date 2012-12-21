<?php 
	/*
	
		CREATE TABLE grupo_de_questoes (id_grupo integer auto increment primary key, numero_id_grupo varchar(30), titulo_de_seccao varchar(100), texto_de_descricao text, texto_adicional text, ordem_da_questao integer, pagina integer);
		CREATE TABLE questoes (id_questao integer auto increment primary key, numero_id_questao varchar(30), id_grupo integer, questao text, texto_adicional text, tipo varchar(80), obrigatoria varchar(50));
		CREATE TABLE tipo_opcoes (id_opcao integer auto increment primary key, id_questao integer, value varchar(200), label varchar (250), coluna integer);
		CREATE TABLE user_list (id_user integer auto increment primary key, first_name varchar(200), last_name varchar(200), email varchar (300), gender varchar(60), role varchar(80));
		CREATE TABLE quiz_info (id_quizz integer auto increment primary key, quizz_name varchar(200), quizz_url varchar(400), quizz_description text, quizz_additional_info text, quizz_tags text);

	*/
?>