<a href="?pagina=inserir_curso">Inserir novo curso</a>

<table style="border: 1px solid #000; width:100% ">
	<tr>
		<th>Nome curso</th>
		<th>Carga horária</th>
		<th>Deletar</th>
	</tr>

	<?php 
		while($linha = mysqli_fetch_array($consulta_cursos)){
			echo'<tr><td>'.$linha['nome_curso'].'</td>';
			echo'<td>'.$linha['carga_horaria'].'</td>';
	?>
	<td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso'];?>">Deletar</a></td></tr>	
	<?php	
		}

	?>
</table>