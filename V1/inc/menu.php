<?php 
function menuElem($intitule,$url,$chemin){
	$element = "<li class='showNav'><a href='".$url.".php'><img src='".$chemin."/inc/img/etoileOdisBlanche.png' class='etoileMenu' />".$intitule."</a></li>";
	return $element;
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:rgb(89,89,89)">
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

		  	  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-hover="dropdown" >Qui Sommes nous?</a>
                <ul class="dropdown-menu">
                  <li role="separator" class="divider"></li>
                  <?php 
                  	echo menuElem("Présentation du <br />groupe","odis",$chemin); 
                  	echo menuElem("Nos magasins","magasins",$chemin); 
                  ?>         
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-hover="dropdown">Pièces automobiles</a>
                <ul class="dropdown-menu">
                  <li role="separator" class="divider"></li>
                  <?php 
                  	echo menuElem("Liaison au sol","#",$chemin); 
                  	echo menuElem("Chauffage -<br />Climatisation","#",$chemin); 
                  	echo menuElem("Moteur","#",$chemin); 
                  	echo menuElem("Pièces techniques","#",$chemin); 
                  	echo menuElem("Visibilité","#",$chemin); 
                  	echo menuElem("Freinage","#",$chemin); 
                  	echo menuElem("Matériel de garage","#",$chemin); 
                  	echo menuElem("Echappement","#",$chemin); 
                  	echo menuElem("Electricité","#",$chemin); 
                  	echo menuElem("Accessoires","#",$chemin); 
                  	echo menuElem("Fluide","#",$chemin); 
                  ?>    
                </ul>
              </li>
              <li class="dropdown"><!-- style="background-color: rgb(146,208,80)" -->
                <a href="#" class="dropdown-toggle green" data-hover="dropdown">Fournitures industrielles</a>
                <ul class="dropdown-menu green">
                  <li role="separator" class="divider"></li>   
               	  <?php 
                  	echo menuElem("Protection - Hygiène <br />- Sécurité","#",$chemin); 
                  	echo menuElem("Hydraulique et <br />pneumatique","#",$chemin); 
                  	echo menuElem("Levage - <br />manutention","#",$chemin); 
                  	echo menuElem("Environnement","#",$chemin); 
                  	echo menuElem("Maintenance","#",$chemin); 
                  	echo menuElem("Abrasifs","#",$chemin); 
                  	echo menuElem("Equipement <br />d’atelier","#",$chemin); 
                  	echo menuElem("Soudure","#",$chemin); 
                  	echo menuElem("Outillage","#",$chemin); 
                  	echo menuElem("Gaines - Tuyaux - <br />Flexibles","#",$chemin); 
                  ?>     
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle yellow" data-hover="dropdown">Peintures</a>
                <ul class="dropdown-menu yellow">
                  <li role="separator" class="divider"></li>  
                   <?php 
                  	echo menuElem("Para-peinture","#",$chemin); 
                  	echo menuElem("Poids Lourds","#",$chemin); 
                  	echo menuElem("Industrie","#",$chemin); 
                  	echo menuElem("Automobile","#",$chemin); 
                  ?>
                </ul>
              </li>

			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-hover="dropdown">Nos services</a>
                <ul class="dropdown-menu">
                  <li role="separator" class="divider"></li>
                  <?php 
                  	echo menuElem("Service après vente","#",$chemin); 
                  	echo menuElem("Atelier diesel","#",$chemin); 
                  	echo menuElem("Atelier tachygraphe","#",$chemin); 
                  ?>         
                </ul>
              </li>

               <li class="dropdown">
                <a href="http://catalogue.odispro.fr/login.aspx" class="dropdown-toggle">Boutique en ligne</a>
              </li>


		    
		  </ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>