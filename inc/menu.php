<?php
$cheminBase = "/integration.odisPro/"; 
function menuElem($intitule,$url,$chemin,$class=null){
  $cheminBase = "/integration.odisPro/"; 
  $intituleImg = $intitule;
  if(strrpos($intitule,"<br />")){
    $intituleImg= substr($intitule,0,strrpos($intitule,"<br />")).substr($intitule,strrpos($intitule,"<br />")+6);
  }
  else{

  }
	$element = "<li id='".$intituleImg."' class='showNav'><a href='".$cheminBase.$url.".php' class='".$class."''><img src='".$chemin."/inc/img/menu/".$intituleImg.".png' alt='".$intituleImg."'/><br />".$intitule."</a></li>";
	return $element;
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		  </button>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
		  <ul class="nav navbar-nav">

		  	      <li id="menuAbout" class="dropdown">
                <a href="<?php echo $cheminBase; ?>odis.php" class="dropdown-toggle" data-hover="dropdown" >Qui Sommes nous?</a>
                <ul id="ulAbout" class="dropdown-menu">
                  <li role="separator" class="divider"></li>
                  <?php 
                  	echo menuElem("Présentation du <br />groupe","odis",$chemin); 
                  	echo menuElem("Historique <br />du groupe","historique",$chemin); 
                    echo menuElem("Nos forces et <br />nos valeurs","forces",$chemin); 
                    echo menuElem("Nos agences","magasins",$chemin); 
                  ?>         
                </ul>
              </li>

              <li id="menuAuto" class="dropdown">
                <a href="<?php echo $cheminBase; ?>Automobile.php" class="dropdown-toggle" data-hover="dropdown">Pièces automobiles</a>
                <ul id="ulAuto" class="dropdown-menu">
                  <li role="separator" class="divider"></li>
                  <?php 
                  	echo menuElem("Liaison au sol","Automobile/liaison",$chemin); 
                  	echo menuElem("Chauffage <br />Climatisation","Automobile/chauffage",$chemin); 
                  	echo menuElem("Moteur","Automobile/moteur",$chemin); 
                  	echo menuElem("Pièces<br /> techniques","Automobile/pieces",$chemin); 
                  	echo menuElem("Visibilité","Automobile/visibilite",$chemin); 
                  	echo menuElem("Freinage","Automobile/freinage",$chemin); 
                  	echo menuElem("Equipements<br /> de garage","Automobile/materiel",$chemin); 
                  	echo menuElem("Echappement","Automobile/echappement",$chemin); 
                  	echo menuElem("Electricité","Automobile/electricite",$chemin); 
                  	echo menuElem("Accessoires","Automobile/Accessoires",$chemin); 
                  	echo menuElem("Entretien<br /> et nettoyage","Automobile/nettoyage",$chemin); 
                  ?>    
                </ul>
              </li>
              <li id="menuIndustrie" class="dropdown"><!-- style="background-color: rgb(146,208,80)" -->
                <a href="<?php echo $cheminBase; ?>Industrie.php" class="dropdown-toggle" data-hover="dropdown">Fournitures industrielles</a>
                <ul class="dropdown-menu" id="ulIndustrie">
                  <li role="separator" class="divider"></li>   
               	  <?php 
                  	echo menuElem("Protection - Hygiène <br />Sécurité","Industrie/protection",$chemin,"vert"); 
                  	echo menuElem("Composants Hydrauliques <br />et pneumatiques","Industrie/hydrolique",$chemin,"vert"); 
                  	echo menuElem("Levage <br />manutention","Industrie/levage",$chemin,"vert"); 
                  	echo menuElem("Environnement","Industrie/environnement",$chemin,"vert"); 
                  	echo menuElem("Maintenance","Industrie/maintenance",$chemin,"vert"); 
                  	echo menuElem("Abrasifs","Industrie/abrasifs",$chemin,"vert"); 
                  	echo menuElem("Equipement atelier","Industrie/equipement",$chemin,"vert"); 
                  	echo menuElem("Soudage <br />Coupage","Industrie/soudage",$chemin,"vert"); 
                  	echo menuElem("Outillage","Industrie/outillage",$chemin,"vert"); 
                  	echo menuElem("Gaines - Tuyaux <br />Flexibles","Industrie/gaines",$chemin,"vert"); 
                  ?>     
                </ul>
              </li>
              <li id="menuPeinture" class="dropdown">
                <a href="<?php echo $cheminBase; ?>Peinture.php" class="dropdown-toggle" data-hover="dropdown">Peintures <br />&nbsp;</a> 
                <ul id="ulPeinture" class="dropdown-menu">
                  <li role="separator" class="divider"></li>  
                   <?php 
                  	echo menuElem("Peinture Automobiles <br />et Poids Lourds","Peinture/peintAutoPoidsLourds",$chemin,"jaune"); 
                  	echo menuElem("Peinture industrie","Peinture/peintureIndustrie",$chemin,"jaune"); 
                    echo menuElem("Abrasifs.","Peinture/abrasifs",$chemin,"jaune"); 
                    echo menuElem("Masquage","Peinture/masquage",$chemin,"jaune"); 
                    echo menuElem("Nettoyant et <br />dégraissage","Peinture/nettoyants",$chemin,"jaune"); 
                    echo menuElem("Préparation et <br />application","Peinture/preparation",$chemin,"jaune"); 
                    echo menuElem("Mastics, colles <br />Et résines","Peinture/mastics",$chemin,"jaune"); 
                    echo menuElem("Essuyage et <br />finition","Peinture/essuyage",$chemin,"jaune"); 
                    echo menuElem("Matériels <br />de protection","Peinture/materielsProtection",$chemin,"jaune"); 
                  ?>
                </ul>
              </li>

			        <li id="menuPrestations" class="dropdown">
                <a href="<?php echo $cheminBase; ?>sav.php" class="dropdown-toggle" data-hover="dropdown">Nos services <br />&nbsp;</a>
                <ul class="dropdown-menu" id="ulPrestations">
                  <li role="separator" class="divider"></li>
                  <?php 
                  	echo menuElem("Service après <br />vente","sav",$chemin); 
                  	echo menuElem("Nos formations","formations",$chemin); 
                  	echo menuElem("Nos ateliers <br />techniques","ateliers",$chemin); 
                  ?>         
                </ul>
              </li>

              <li id="menuActu" class="dropdown">
                <a href="<?php echo $cheminBase; ?>actualites.php" class="dropdown-toggle" data-hover="dropdown">Actualités <br />&nbsp;</a>
                <ul class="dropdown-menu" id="ulActu">
                  <li role="separator" class="divider"></li>
                  <?php 
                    echo menuElem("Flash Odis -<br /> Odis News","actualites",$chemin); 
                    echo menuElem("Nos promotions","promotions",$chemin); 
                    echo menuElem("Nous contacter","contact",$chemin); 
                  ?>         
                </ul>
              </li>

              <li id="menuPreci" class="dropdown">
                <a href="<?php echo $cheminBase; ?>precisium.php" class="dropdown-toggle" data-hover="dropdown">Réseau Précisium</a>
                <ul style="height: 117.833px;" class="dropdown-menu" id="ulPreci">
                  <li role="separator" class="divider"></li>
                  <?php 
                  ?>         
                </ul>
              </li>
		  </ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>