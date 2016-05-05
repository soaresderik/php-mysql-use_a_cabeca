<!DOCTYPE html>
<html>
<head>
	<title>Abdução</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="container">
<h2>Fui Abduzido por Aliens - Relatar uma Abdução</h2>
<p>Compartilhe sua história de abdução alienigena</p>
<form method="post" action="report.php">
	<label for="firstname">Nome:</label>
	<input type="text" id="firstname" name="firstname"><br>

	<label for="lastname">Sobrenome:</label>
	<input type="text" id="lastname" name="lastname"><br>

	<label for="email">Endereço de E-mail:</label>
	<input type="text" id="email" name="email"><br>

	<label for="whenithappened">Quando Aconteceu ?</label>
	<input type="text" id="whenithappened" name="whenithappened"><br>

	<label for="Howlong">Por quanto tempo ficou ?</label>
	<input type="text" id="Howlong" name="Howlong"><br>

	<label for="howmany">Quantos você viu ?</label>
	<input type="text" id="howmany" name="howmany"><br>

	<label for="aliendescription">Descreva Eles:</label>
	<input type="text" id="aliendescription" name="aliendescription" size="32"><br>

	<label for="whattheydid">O que fizeram com você ?</label>
	<input type="text" id="whattheydid" name="whattheydid" size="32"><br>

	<label for="fangspotted"> Você viu Meu cachorro Fang ?</label>
	Sim <input id="fangspotted" name="fangspotted" type="radio" value="sim">
	Não <input id="fangspotted" name="fangspotted" type="radio" value="nao"><br>
	<img src="fang.jpg">
	<br>

	<label for="other">Mais alguma coisa que queira adicionar ?</label>
	<textarea id="other" name="other"></textarea></br>
	<input type="submit" value="Relatar Abdução" name="submit">
</form>
</div>
</body>
</html>