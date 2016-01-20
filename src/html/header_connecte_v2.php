<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/header_connecte_v2.css">
	<title>Header - 3b</title>
	<div id="container">
		<form action="#">
			<img src="../img/header/NSP_plume.jpg" alt="Logo du site web" class="logo">
			<div id="connexion">
				<img id="photo_profil" src="../img/article/ludo.png" alt="Photo de profil">
				<span>Ludovic Bouvinet</span>
				<input type="text" placeholder="Votre recherche" id="holder_bold">
				<img src="../img/header/loupe.png" alt="" class="toolbar">
				<br>
				<a href="">Paramètres du compte</a>
				<br>
				<a href="">Rédiger un article</a>
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