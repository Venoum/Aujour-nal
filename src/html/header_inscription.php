<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/header_inscription.css">
	<title>Header</title>
	<div id="container">
		<form action="#">
			<img src="../img/header/NSP_plume.jpg" alt="Logo du site web" class="logo">
			<div id="connexion">
				<input type="submit" value="Connexion">
				<input type="submit" value="Inscription">
				<img src="../img/header/loupe.png" alt="" class="toolbar">
			</div>
		</form>
	</div>
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Campus</a></li>
			<li><a href="#">Bon Plan</a></li>
			<li><a <?php if ($header_nav == '1') {echo ' id="en-cours" ';} ?> href="#">Life Style</a></li>
			<li><a href="#">Culture</a></li>
			<li><a href="#">Evenement</a></li>
		</ul>
	</nav>

	
</head>
<body>
	
</body>
</html>