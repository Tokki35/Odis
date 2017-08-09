<?php include ('inc/_header.php');?>							
<!-- Contenu -->
<div class="container" style="margin-top: 120px;">
	<div class="starter-template">
		<h1><img src="inc/img/puce-h1.png">Un <b>S</b>avoir-Faire Réseau</h1>
     <p style="width:60%;display:inline;float:left;font-size: 1.1em;">
     Le groupe ODIS et son Homme Réseau Précisium vous garanti une prestation de qualité qui saura assurer votre sécurité et la longévité de votre véhicule. <br /><br />
    Aujourd’hui plus de 850 Précisium nous font confiance,  vous souhaitez également rejoindre l’aventure? </p>
    <div style="width:40%;display:inline;float:left;font-size: 1.1em;">
    <img src="inc/img/precisium-nb.png" /><br /><br />
    </div>
    <img src="inc/img/precisium-pourquoi.png" />


	</div>
</div><!-- /.container -->
<img src="inc/img/precisium-menu.png" width="100%" />
<img src="inc/img/precisium-image.png" width="100%" />
<img src="inc/img/precisium-vendre.png" width="100%" />
<img src="inc/img/precisium-travailler.png" width="100%" />
<img src="inc/img/precisium-fideliser.png" width="100%" />
<script>
$(function () {
  document.getElementById("menuPreci").className= 'dropdown open';
  $('#menuPreci').on('mouseleave', function(e) {
  		document.getElementById('ulPreci').autoHidingNavbar('setDisableAutohide', true);
  });
  $('.dropdown').on('mouseleave', function(e) {
  		document.getElementById('menuAbout').className= 'dropdown';
  		document.getElementById('menuAuto').className= 'dropdown';
  		document.getElementById("menuIndustrie").className= 'dropdown';
  		document.getElementById('menuPeinture').className= 'dropdown';
      document.getElementById('menuPrestations').className= 'dropdown';
      document.getElementById('menuActu').className= 'dropdown';
      document.getElementById('menuPreci').className= 'dropdown open';

  		document.getElementById('ulPreci').autoHidingNavbar('setDisableAutohide', true);
  });
});
</script>
<?php include('inc/_footer.php'); ?>
