<?php 

if (isset($_POST['submit'])) {
	# code...
}
	$from = 'andre.50cent_@hotmail.com';

	$subject = $_POST['subject'];
	$text = $_POST['elvismail'];
	$output_form = false;

	if (empty($subject) && empty($text)) {
		//Está faltando $subject e $text
		echo "Voce esqueceu de digitar o assunto e a menssagem.<br>";
		$output_form = true;
	}

	if (empty($subject) && (!empty($text))) {
		echo "<p>Voce esqueceu o assunto do email.</p> <br>";
		$output_form = true;
	}

	if ((!empty($subject)) && empty($text)) {
		echo "Voce esqueceu de digitar o email.<br>";
		$output_form = true;
	}

	if ((!empty($subject)) && (!empty($text))) {

	$dbc = mysqli_connect('localhost', 'root', '', 'elvis_store') or die('Erro ao tentar conectar ao Banco');

	$query = "SELECT * FROM email_list";
	$result = mysqli_query($dbc, $query) or die('Erro ao executar comando');

	while ($row = mysqli_fetch_array($result))
	{
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];

		$msg = "Querido $first_name $last_name, \n $text ";

		$to = $row['email'];

		mail($to, $subject, $msg, 'From: '. $from);

		echo 'Email Enviado para: '.$to.'<br>';
	}

	mysqli_close($dbc);
	}
	else{
		$output_form = true;
	}

	if ($output_form) {
 ?>
 <head>
	<title>Faça-me Elvis</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="container">

 	<img src="elvislogo.gif">
	<p><strong>Privado:</strong>SOMENTE para uso de Elmer<br>
	escrever e enviar um e-mail para lista de correspodências de membros</p>

 	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label for="subject">Assunto: </label><br>
	<input type="text" id="subject" name="subject" size="60" value="<?php echo $subject ?>"><br>

	<label for="elvismail">Mensagem:</label><br>
	<textarea id="elvismail" name="elvismail" rows="8" cols="60"><?php echo $text; ?></textarea><br>

	<input type="Submit" value="Enviar" name="submit" id="submit">
	</form>

</div>
</body>

<?php 
	}
 ?>