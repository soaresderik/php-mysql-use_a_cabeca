<!DOCTYPE HTML>
<html>
<head>
	<title>Faça-me Elvis</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="container">
<img src="blankface.jpg" style="float:right">
<img src="elvislogo.gif">
<p>Por favor, selecione o endereco de e-mail que deseja deletar da lista e clique em Remover</p>

<form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
<?php 
	$dbc = mysqli_connect('localhost', 'root', '', 'elvis_store') or die('Erro ao tentar conectar com o Banco');

	//exclui as linhas dos clientes
	if (isset($_POST['submit'])) {
		foreach ($_POST['todelete'] as $delete_id) {
			$query = "DELETE FROM email_list WHERE id = $delete_id";
			mysqli_query($dbc,$query) or die('Erro no Codigo');
		}

		echo "Cliente(s) removido(s).<br>";
	}

	//exibe as linhas com os clientes para remover da lista
	$query = "SELECT * FROM email_list";
	$result = mysqli_query($dbc, $query);

	while ($row = mysqli_fetch_array($result)) {
		echo '<input type="checkbox" value="'.$row['id'].'" name="todelete[]">';

		echo $row['first_name'];
	    echo ' ' . $row['last_name'];
	    echo ' ' . $row['email'];
	    echo '<br />';
	}

	mysqli_close($dbc);

 ?>

 <input type="submit" name="submit" value="remove">
 </form>
 </div>
</body>
</html>