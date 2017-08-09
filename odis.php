<?php include ('inc/_header.php');?>							
<!-- Contenu -->
<div class="container" style="margin-top: 120px;">
	<div class="starter-template">
  <div style="width:50%;display:inline;float:left;font-size:1.1em;">
  		<h1><img src="inc/img/puce-h1.png"><b>P</b>résentation du groupe</h1>
    	<p>Le groupe ODIS s’inscrit comme un acteur majeur de la distribution de pièces automobiles, de fournitures industrielles et de peintures dans le Grand Ouest.<br /><br />
      Spécialiste de la négoce avec une équipe technique de 165 personnes à votre service, pour vous accueillir et vous conseiller, que vous soyez professionnels ou particuliers.<br /><br />
      Vous trouverez des experts dans chacun des trois métiers qui sauront répondre à vos besoins en proposant des prestations de qualité grâce notamment à des partenariats avec de grandes marques. </p>
  </div>
  <div style="width:10%;display:inline;float:left">&nbsp;</div>
  <div style="width:40%;display:inline;float:left">
    <br /><br />
    <img src="inc/img/Presentation.PNG" />
  </div>
	</div>
</div><!-- /.container -->
<script>
$(function () {
  document.getElementById("Présentation du groupe").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';
  document.getElementById("menuAbout").className= 'dropdown open';
  $('#menuAbout').on('mouseleave', function(e) {
  		document.getElementById('ulAbout').autoHidingNavbar('setDisableAutohide', true);
  });
  $('.dropdown').on('mouseleave', function(e) {
  		document.getElementById('menuAbout').className= 'dropdown open';
  		document.getElementById('menuAuto').className= 'dropdown';
  		document.getElementById("menuIndustrie").className= 'dropdown';  	
  		document.getElementById('menuPeinture').className= 'dropdown';		
      document.getElementById('menuActu').className= 'dropdown'; 
      document.getElementById('menuPrestations').className= 'dropdown'; 
      document.getElementById('menuPreci').className= 'dropdown';
      
  		document.getElementById('ulAbout').autoHidingNavbar('setDisableAutohide', true);
  });
});
</script>
<?php include('inc/_footer.php'); ?>
