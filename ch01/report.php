<!DOCTYPE html>
<html>
<head>
	<title>Fui Abduzido por Aliens - Reportar uma Abdução</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Fui Abduzido por Aliens - Relatar uma Abdução</h2>

<?php 

	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$how_many = $_POST['howmany'];
	$what_they_did = $_POST['whattheydid'];
	$when_it_happened = $_POST['whenithappened'];
	$how_long = $_POST['Howlong'];
	$alien_description = $_POST['aliendescription'];
	$fang_spotted = $_POST['fangspotted'];
	$email = $_POST['email'];
	$to = 'andre.50cent_@hotmail.com';
	$subject = 'Fui abduzido por aliens - Relatar uma abdução';
	$other = $_POST['other'];



	$msg = "$first_name Você foi abduzido $when_it_happened  E retornou  $how_long .\n ".
		   "Numero de alienigenas: $how_many\n ".
		   " Descrição deles: $alien_description\n".
		   "Os Alienigenas Fizeram isso: $what_they_did \n".
		   " Você viu o Fang ? $fang_spotted <br>".
		   "Outros Comentários: $other";

	
		   // Abre Conexão com o banco de dados
$dbc = mysqli_connect('localhost', 'root', '', 'aliendatabase') or die('Erro ao tentar Conectar ao banco de dados');

		$query = "INSERT INTO aliens_abduction (first_name,last_name,when_it_happened,".
				"how_long,how_many,alien_description,what_they_did, fang_spotted, other, email)".
				"VALUES('$first_name', '$last_name', '$when_it_happened', '$how_long', '$how_many', '$alien_description',".
				"'$what_they_did', '$fang_spotted', '$other',".
				"'$email')";

		$result = mysqli_query($dbc, $query) or die('Erro no Comando');
		mysqli_close($dbc);
			// Fecha Conexão com o Banco de dados


	echo $msg; // Essa mensagem aparece se a conexão funcioanar
	
 ?>

</body>
</html>