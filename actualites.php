<?php include ('inc/_header.php');?>							
<!-- Contenu -->
<div class="container" style="margin-top: 120px;">
	<div class="starter-template">
		<h1>Les Actualités du groupe ODIS</h1>
    <img style="margin-left:50px;"src="inc/img/actualites.png" />
	</div>
</div><!-- /.container -->
<script>
$(function () {
  document.getElementById("Flash Odis - Odis News").style.backgroundColor = '#0003';
  document.getElementById("menuActu").className= 'dropdown open';
  $('#menuActu').on('mouseleave', function(e) {
  		document.getElementById('ulActu').autoHidingNavbar('setDisableAutohide', true);
  });
  $('.dropdown').on('mouseleave', function(e) {
  		document.getElementById('menuAbout').className= 'dropdown';
  		document.getElementById('menuAuto').className= 'dropdown';
  		document.getElementById("menuIndustrie").className= 'dropdown';  	
  		document.getElementById('menuPeinture').className= 'dropdown';		
      document.getElementById('menuPrestations').className= 'dropdown'; 	
      document.getElementById('menuActu').className= 'dropdown open';  

  		document.getElementById('ulActu').autoHidingNavbar('setDisableAutohide', true);
  });
});
</script>
<?php include('inc/_footer.php'); ?>
