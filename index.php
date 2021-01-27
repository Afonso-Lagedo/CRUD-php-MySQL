<?php 

#mysqli
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "teste1";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
	
$consulta = mysqli_query($conexao, "SELECT ALUNOS.nome_aluno, CURSOS.nome_curso FROM ALUNOS, CURSOS, ALUNOS_CURSOS WHERE ALUNOS_CURSOS.id_aluno = ALUNOS.id_aluno and ALUNOS_CURSOS.id_curso = CURSOS.id_curso");
echo'<table border=1>
		<tr> 
			<th>Nome do aluno</th>  
			<th>Nome do curso</th> 
		</tr>';

while ($linha = mysqli_fetch_array($consulta)){

	echo'<tr> 
			<td>'.
				$linha['nome_aluno']
			.'</td>
			<td>'.
				$linha['nome_curso']
			.'</td>
		</tr>';  
}

echo '</table>';

?>


