<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Article</title>
	<link rel="stylesheet" href="../css/article.css">
</head>
<body>
<header>
	<?php
		$header_nav = '1';
		include("header_inscription.php");
		/* Peut etre faire un script ou Symfony :) pour le style de la page "actuelle" */

	?>
</header>
<div id="background">
	<section id="article">
		<h1>Lorem ipsum dolor sit amet,  sit  amet consectetur.</h1>
		<div id="corpus">	<!--C'est du css la mais on voit avec symphony pour les données ? (script JS sur le src de img?)-->
			<p>Ludovic BOUVINET</p>
			<img id="photo_profil" src="../img/article/ludo.png" alt="Photo de profil">
			<p class="grade">Rédacteur en chef</p> 
		
			<p id="chapeau">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			<p class="pg1">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
			</p>
			<p class="pg2">
				&nbsp;&nbsp;&nbsp;Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed 
				<span id="emplacementA">« Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam »</span>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ex ea commodo consequat. Duis aute irure in dolor in adipisci.
				<img id="emplacementB" src="../img/article/times-square.jpg" alt="">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaeratLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			</p>
		</div>	
	</section>
</div>
<div id="intro_commentaire">
		<div class="Ntxt">Notez cet article</div>
		<div class="Etxt">&</div>
		<div class="Atxt">Donnez nous votre avis</div>
		<img id="arrow" src="../img/article/arrow.png" alt="">
		<img id="star" src="../img/article/star_true.png" alt="">
		<img id="star" src="../img/article/star_true.png" alt="">
		<img id="star" src="../img/article/star_false.png" alt="">
		<img id="star" src="../img/article/star_false.png" alt="">
		<img id="star" src="../img/article/star_false.png" alt="">
		<div id="intro_compte"> 
			<img id="photo_profil_com" src="../img/article/ludo.png" alt="Photo de profil">
			<div class="Vtxt">Vous</div>
		</div>
		<textarea name="commentaire" cols="50" rows="5" placeholder="Ecrire un commentaire"></textarea>
</div>
<div id="background_2">
	<section id="note_commentaire">
		<img id="photo_profil_note" src="../img/article/ludo.png" alt="Photo de profil">
		<div id="name">Ludovic BOUVINET</div>
		<img id="star2" src="../img/article/star_true.png" alt="">
		<img id="star2" src="../img/article/star_true.png" alt="">
		<img id="star2" src="../img/article/star_false2.png" alt="">
		<img id="star2" src="../img/article/star_false2.png" alt="">
		<img id="star2" src="../img/article/star_false2.png" alt="">
		<br>
		<img id="photo_profil_note" src="../img/article/ludo.png" alt="Photo de profil">
		<div id="name">Enzo BOUVINET</div>
		<img id="star2" src="../img/article/star_true.png" alt="">
		<img id="star2" src="../img/article/star_true.png" alt="">
		<img id="star2" src="../img/article/star_false2.png" alt="">
		<img id="star2" src="../img/article/star_false2.png" alt="">
		<img id="star2" src="../img/article/star_false2.png" alt="">
		<br>
		<img id="photo_profil_note" src="../img/article/ludo.png" alt="Photo de profil">
		<div id="name">Yannick BOUVINET</div>
		<img id="star2" src="../img/article/star_true.png" alt="">
		<img id="star2" src="../img/article/star_true.png" alt="">
		<img id="star2" src="../img/article/star_false2.png" alt="">
		<img id="star2" src="../img/article/star_false2.png" alt="">
		<img id="star2" src="../img/article/star_false2.png" alt="">
		<br>
		<img id="photo_profil_note" src="../img/article/ludo.png" alt="Photo de profil">
		<div id="name">Eric BOUVINET</div>
		<img id="star2" src="../img/article/star_true.png" alt="">
		<img id="star2" src="../img/article/star_true.png" alt="">
		<img id="star2" src="../img/article/star_false2.png" alt="">
		<img id="star2" src="../img/article/star_false2.png" alt="">
		<img id="star2" src="../img/article/star_false2.png" alt="">
		<br>
		<a href="#">Afficher toutes les notes</a>
	</section>
	<section id="flux_notes_commentaires">
		<!--
		<img id="photo_profil_flux" src="../img/article/ludo.png" alt="Photo de profil">
		<div id="info_flux">11/10/15 <br> 17h30</div>
		<div id="msg1">
			<h1>Ludovic Bouvinet a écrit</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
		</div>
		<img id="photo_profil_flux" src="../img/article/ludo.png" alt="Photo de profil">
		<div id="info_flux">11/10/15 <br> 11h30</div>
		<div id="msg1">
			<h1>Enzo Bouvinet a écrit</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
		</div>
		<img id="photo_profil_flux" src="../img/article/ludo.png" alt="Photo de profil">
		<div id="info_flux">09/10/15 <br> 21h32</div>
		<div id="msg1">
			<h1>Ludovic Bouvinet a écrit</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
		</div>
		<a href="#">Afficher tout les commentaires</a>
		-->
	</section>
</div>

<footer>
	<?php
		include("footer.php");
	?>
</footer>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
</body>
</html>