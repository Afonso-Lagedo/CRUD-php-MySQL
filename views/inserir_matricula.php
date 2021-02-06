<h1>Inserir Matrícula</h1>


<form method="post" action="processa_matricula.php">
	<p>Aluno</p>
	<select name="escolha_aluno">
		<option>Selecione um aluno</option>
		<?php 
			while($linha = mysqli_fetch_array($consulta_alunos)){
			echo'<option value=" '.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
			
		}

		?>
	</select>
	<br><br>
	<p>Curso</p>
	<select name="escolha_curso">
		<option>Selecione um curso</option>
		<?php 
			while($linha = mysqli_fetch_array($consulta_cursos)){
			echo'<option value=" '.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
			
		}

		?>
	</select>
	<br><br>
	<input type="submit" value="Matricular aluno no curso">

</form>