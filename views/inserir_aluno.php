<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo Aluno</h1><br>
<form method="post" action="processa_aluno.php">
	<label>Nome Aluno:</label><br>
	<input type="text" name="nome_aluno" placeholder="Digite o nome do aluno">
	<br><br>
	<label>Data de nascimento:</label><br>
	<input type="text" name="data_nascimento" placeholder="Digite a data de nascimento">
	<br><br>
	<input type="submit" value="Inserir aluno">
</form>

<?php } else { ?> 
	<?php while ($linha = mysqli_fetch_array($consulta_alunos)){?>
			<?php if($linha['id_aluno'] == $_GET['editar']){ ?>
			<h1>Editar Aluno</h1><br>
			<form method="post" action="edita_aluno.php">

				<input type="hidden" name="id_aluno" value= "<?php echo $linha['id_aluno']; ?>">

				<label>Nome Aluno:</label><br>
				<input type="text" name="nome_aluno" placeholder="Digite o nome do aluno" value="<?php echo $linha['nome_aluno'] ?>">
				<br><br>
				<label>Data de nascimento:</label><br>
				<input type="text" name="data_nascimento" placeholder="Digite a data de nascimento" value="<?php echo $linha['data_nascimento'] ?>">
				<br><br>
				<input type="submit" value="Editar aluno">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>