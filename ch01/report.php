<!DOCTYPE html>
<html>
<head>
	<title>Fui Abduzido por Aliens - Reportar uma Abdução</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Fui Abduzido por Aliens - Relatar uma Abdução</h2>

<?php 

	$name = $_POST['firstname'] .' '. $_POST['lastname'];
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

	$msg = "$name Você foi abduzido $when_it_happened  E retornou  $how_long .\n ".
		   "Numero de alienigenas: $how_many\n ".
		   " Descrição deles: $alien_description\n".
		   "Os Alienigenas Fizeram isso: $what_they_did \n".
		   " Você viu o Fang ? $fang_spotted <br>".
		   "Outros Comentários: $other";

	mail($to, $subject, $msg, 'From: '. $email);

	echo $msg;
	
 ?>

</body>
</html>