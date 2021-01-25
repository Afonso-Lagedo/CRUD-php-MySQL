<?php 

#mysqli
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "teste1";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
	
#criando tabelas

$query = "
	CREATE TABLE CURSOS(
		id_curso int not null auto_increment,
		nome_curso varchar(255) not null,
		carga_horaria int not null,
		primary key (id_curso)
	)
	
";

$executar = mysqli_query($conexao,$query);

if($executar)
{
	echo "EXECUTADO COM SUCESSO (cursos)<br>";
}
else{
	echo "FALHA AO EXECUTAR (cursos)<br>";	
}

$query = "
	CREATE TABLE ALUNOS(
		id_aluno int not null auto_increment,
		nome_aluno varchar(255) not null,
		data_nascimento varchar(255),
		primary key (id_aluno)
	)
	
";

$executar = mysqli_query($conexao,$query);

if($executar)
{
	echo "EXECUTADO COM SUCESSO (alunos)<br>";
}
else{
	echo "FALHA AO EXECUTAR (alunos)<br>";	
}

$query = "
	CREATE TABLE ALUNOS_CURSOS(
		id_aluno_curso int not null auto_increment,
		id_aluno int not null,
		id_curso int not null,
		primary key (id_aluno_curso)
	)
	
";

$executar = mysqli_query($conexao,$query);

if($executar)
{
	echo "EXECUTADO COM SUCESSO (alunos_cursos)<br>";
}
else{
	echo "FALHA AO EXECUTAR (cursos_cursos)<br>";	
}




?>

