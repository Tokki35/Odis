<?php include ('inc/_header.php');?>							
<!-- Contenu -->
<div class="container" style="margin-top: 120px">
	<div class="starter-template">

    
		<h1><img src="inc/img/puce-h1.png">Les <b>A</b>teliers du groupe ODIS</h1>
    <p style="width:60%;display:inline;float:left;font-size: 1.1em;">
    Le groupe Odis possède plusieurs ateliers techniques permettant de vous assurer les dépannages rapides dans vos ateliers, une maintenance périodique de vos matériels d’atelier, le montage de vos  matériels neufs mais également la mise à jour de vos appareils techniques.<br /> <br />
    Les mécaniciens partagent votre passion et vous propose différents services de qualité dans les domaines Maritime, Industriel, Automobile, du TP et  des Poids-lourd. 
    </p>
    <div style="width:40%;display:inline;float:left;font-size: 1.1em;">
    <img src="inc/img/ateliers.png" /><br /><br />
    </div>
    <h1>Nos Prestations</h1>
    <img src="inc/img/diesel.png" />
    <img style="margin-left:-100px" src="inc/img/diesel-bandeau.png" />
	</div>
</div><!-- /.container -->
<script>
$(function () {
  document.getElementById("Nos ateliers techniques").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';
  document.getElementById("menuPrestations").className= 'dropdown open';
  $('#menuPrestations').on('mouseleave', function(e) {
  		document.getElementById('ulPrestations').autoHidingNavbar('setDisableAutohide', true);
  });
  $('.dropdown').on('mouseleave', function(e) {
  		document.getElementById('menuAbout').className= 'dropdown';
  		document.getElementById('menuAuto').className= 'dropdown';
  		document.getElementById("menuIndustrie").className= 'dropdown';  	
  		document.getElementById('menuPeinture').className= 'dropdown';		
      document.getElementById('menuActu').className= 'dropdown'; 
      document.getElementById('menuPrestations').className= 'dropdown open'; 
      document.getElementById('menuPreci').className= 'dropdown';

  		document.getElementById('ulPrestations').autoHidingNavbar('setDisableAutohide', true);
  });
});
</script>
<?php include('inc/_footer.php'); ?>
