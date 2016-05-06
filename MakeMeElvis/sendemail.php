<?php 
	$from = 'andre.50cent_@hotmail.com';

	$subject = $_POST['subject'];
	$text = $_POST['elvimail'];

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
	
 ?>