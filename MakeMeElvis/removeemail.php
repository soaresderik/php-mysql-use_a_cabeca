<?php 
	$dbc = mysqli_connect('localhost', 'root', '', 'elvis_store') or die('Erro ao tentar conectar com o Banco');

	$email = $_POST['removeemail'];

	$query = "DELETE FROM email_list WHERE email = '$email' ";

	$result = mysqli_query($dbc, $query) or die('Erro no Comando');

	echo "O email $email foi deletado com sucesso";

	mysqli_close($dbc);

 ?>