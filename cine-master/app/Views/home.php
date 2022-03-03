<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/styleindex.css">
	<title>Home Page</title>
</head>
<body>

<?php
require_once('sidebar.php');
?>

<section class="head">
	  <div class="background1">
	  </div>
	  <div class="background2"></div>
	  <a class="btn" href="login/index">Connection</a>
  </section>

  <section>
	  <h2> Nos Catégories</h2>
	  <h2 class="s-titre">Films</h2>
	  <div class="movies">
		<div class="ctg ">
			<img src="/public/assets/comedy.jpg" alt="">
			<div class="content">
				<h4>Comedie</h4>
			</div>
		</div>
		<div class="ctg">
			<img src="/public/assets/adventure.jpg" alt="">
			<div class="content">
				<h4>Aventure</h4>
			</div>
		</div>
		<div class="ctg">
			<img src="/public/assets/actn.jpg" alt="">
			<div class="content">
				<h4>Action</h4>
			</div>
		</div>
		<div class="ctg">
			<img src="/public/assets/fantastique.jpg" alt="">
			<div class="content">
				<h4>Fantastique</h4>
			</div>
		</div>
		</div>

		
		<h2 class="s-titre">Séries</h2>
		<div class="series">
			<div class="ctg ">
				<img src="/public/assets/comedy_s.png" alt="">
				<div class="content">
					<h4>Comedie</h4>
				</div>
			</div>
			<div class="ctg">
				<img src="/public/assets/aventure_s.jpeg" alt="">
				<div class="content">
					<h4>Aventure</h4>
				</div>
			</div>
			<div class="ctg">
				<img src="/public/assets/action_s.jpg" alt="">
				<div class="content">
					<h4>Action</h4>
				</div>
			</div>
			<div class="ctg">
				<img src="/public/assets/fantasy._sjpg.jpg" alt="">
				<div class="content">
					<h4>Fantastique</h4>
				</div>
			</div>
			</div>
	
	
  </section>
  <section class="about-us">
	  <h2>Qui Sommes Nous ? </h2>
	  <p class="about-us-para"><span><strong>Ciné Master</strong></span> est une communauté d'amateurs des films et des séries, où chacun peut s'inscrire, créer son propre post sur son film /sa série préféré et partager son point de vue concernant d'autres posts, partager vos derniers épisodes regardés, et découvrez des nouveautés… <br><br> Avec <strong>Ciné Master</strong>, suivez, réagissez, commentez, et inspirez-vous
		de l’activité de vos amis. </p>
  </section>
</body>	
</html>