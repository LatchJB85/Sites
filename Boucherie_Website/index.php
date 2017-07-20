<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!doctype html>
<html>

<head>
	
	<link rel= "stylesheet" href= "css/styles.css" type="text/css" media="screen" />
	<meta charset="utf-8" />
	<title> Boucherie Mariéthoz SA</title>
	<meta name="viewport" content="initial-scale=1.0"/>	
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	
	<script>
	
	function menumobile() 
	{
		bloc = document.getElementById("menu");
		if(bloc.className=="afficher")
		{
			bloc.className="masquer";
		}
		else
		{
			bloc.className="afficher";
		}
	}
	</script>
	
	
</head>

<body>
	<div class="global">
	
		<header class="entete">
		
		<button href="#"  type="button"id="menutitre" class="mobile" style="margin-top: 1px;";
			onclick="menumobile(); return false;"><img class="menu" height="14px" width="20px" src="img/hamburger.png"  alt="Menu"/><label class="menu">&ensp;Menu</label></button>
	
		
		
		</header>
		
		<nav class="blocmenu">
			<ul id="menu">
			
				<li><a href="index.php?part=_index">Page d'Accueil</a></li>
				<li><a href="index.php?part=_traiteur">Offres Traiteur</a></li>
				<li><a href="index.php?part=_formulaire">Demande d'Offre </a></li>
				<li><a href="index.php?part=_equipe">A Propos De Nous</a></li>
				<li><a href="index.php?part=_contacts">Nous Contacter</a></li>
				
			</ul>
		</nav>
	
	<section class="contenu">
	<?php
if (isset($_GET['part']))
{
	$part = $_GET['part'];
}
		else
		{
			$part = '_index';
		}
		include('parts/'.$part.'.php');
		
	?>
	
	</section>
	


	<footer class="pied">
	
		
			
	<h5 id="webmaster">Website by L@tch85&ensp;&ensp;Logo & Background by IGN SA&ensp;&ensp;Pictures of our Products by Florian Bouvet</h5>
			
		
			
					
	
	</footer>

</html>