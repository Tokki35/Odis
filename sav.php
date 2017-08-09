<?php include ('inc/_header.php');?>							
<!-- Contenu -->
<div class="container" style="margin-top: 120px;">
	<div class="starter-template">
    <div style="margin-top:150px;width:10%;display:inline;float:left;font-size: 1.1em;">
      <img src="inc/img/sav1.png" />
    </div>
    <div style="width:50%;display:inline;float:left;font-size: 1.1em;">
    <h1><img src="inc/img/puce-h1.png">Un <b>S</b>ervice après-vente intégré</h1>
    <p style="width:100%;display:inline;float:left;">Au sein du groupe Odis vous trouverez une équipe professionnelle dotée d’une excellente connaissance technique des produit vendus. Les 16 techniciens du SAV vous propose une solution adaptée pour tout matériel et toute activité.  <br /><br />
    Ce service après-vente automobile et matériel intègre : l’étude, l’installation, la mise en service, la location, les dépannages, les pièces détachées ainsi que les contrats de maintenance préventive.</p>      
  </div>
  <div style="width:20%;display:inline;float:left;margin-bottom: 25px;">

    <img src="inc/img/sav2.png" />
  </div>
    <img style="position:absolute;margin-top:350px;left:0;margin-left: 30%;" src="inc/img/sav3.png" />
    <img src="inc/img/sav-bandeau.png" />
	</div>
</div><!-- /.container -->
<script>
$(function () {
  document.getElementById("Service après vente").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';
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
