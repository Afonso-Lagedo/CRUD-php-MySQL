<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo Curso</h1><br>
<form method="post" action="processa_curso.php">
	<label>Nome Curso:</label><br>
	<input type="text" name="nome_curso" placeholder="Digite o nome do curso">
	<br><br>
	<label>Carga horária:</label><br>
	<input type="text" name="carga_horaria" placeholder="Digite a carga horária">
	<br><br>
	<input type="submit" value="Inserir curso">
</form>

<?php } else { ?> 
	<?php while ($linha = mysqli_fetch_array($consulta_cursos)){?>
			<?php if($linha['id_curso'] == $_GET['editar']){ ?>

	<h1>Editar Curso</h1><br>
	<form method="post" action="edita_curso.php">
		<input type="hidden" name="id_curso" value= "<?php echo $linha['id_curso']; ?>">
		<label>Nome Curso:</label><br>
		<input type="text" name="nome_curso" placeholder="Digite o nome do curso" value="<?php echo $linha['nome_curso']; ?>">
		<br><br>
		<label>Carga horária:</label><br>
		<input type="text" name="carga_horaria" placeholder="Digite a carga horária"  value="<?php echo $linha['carga_horaria']; ?>">
		<br><br>
		<input type="submit" value="Editar curso">
	</form>
		<?php } ?>
	<?php } ?>
<?php } ?>