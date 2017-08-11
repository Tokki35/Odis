<html style="background-color:rgb(89,89,89)">
	<?php $chemin = "/integration.odisPro"; ?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Keywords" content="site, pièce, détachée, neuf , automobile , voiture, achat , vente , marque, distributeur,stock, prix, référence, constructeur" />
		<meta mame="Description" content="Groupe odis - Vente de pièce auto, industrie et peinture. 11 magasins en bretagne avec de nombreuses références en stocks." />
		
		<link href="<?php echo $chemin;?>/inc/css/main.css" type="text/css" rel="stylesheet" />
		<link href="<?php echo $chemin;?>/inc/css/bootstrap.css" type="text/css" rel="stylesheet" />
		<link href="<?php echo $chemin;?>/inc/css/accueil.css" type="text/css" rel="stylesheet" />
		<link rel="icon" href="<?php echo $chemin;?>/inc/img/favicon.ico">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="<?php echo $chemin;?>/inc/js/jquery-3.2.1.min.js" ></script>
		<title>Groupe ODIS - Vente de pièce Auto, Industrie et Peinture</title>

	</head>
	<body>		
	<div class="menuHaut" style="background-color:white">
		<div class="parallelogramme" style="z-index:1000;">
			<a href="<?php echo $chemin;?>/odis.php">
				<img src="<?php echo $chemin;?>/inc/img/logo.png"/ >
				<p class="votreDistri"><b>Votre distributeur régional</b></p>
			</a>
		</div>
		<!--<div class="textHeader"> 
			Fournitures Industrielles <br />
			Pièces automobiles <br />
			Peintures 
		</div>-->
		<div class="textHeader" style="z-index:0;margin-left:250px;margin-top:-30px;"> 
		<div id="myCarousel" class="carousel slide" data-ride="carousel"  style="height:180px;width:1275px">
		<ol class="carousel-indicators" style="bottom:0px">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		 </ol>
	    <!-- Wrapper for slides -->
	    <div class="carousel-inner" style="height:100%;width:100%" >
	      <div class="item active">
			<img src="<?php echo $chemin;?>/inc/img/bandeau.png" style="height:100%;width:100%" />
	      </div>

	      <div class="item">
				<a href="<?php echo $chemin?>/Automobile.php">
					<img src="<?php echo $chemin;?>/inc/img/bandeau2.png" style="height:100%;width:100%" />
				</a>
	      </div>
	    </div>
	  </div>
		</div>
		<div class="carteMenu carteMenuHi">
			<img src="<?php echo $chemin;?>/inc/img/carte.png" />
		</div>
	</div>
	<?php include ('inc/menu.php');?>	