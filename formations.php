<?php include ('inc/_header.php');?>							
<!-- Contenu -->
<div class="container" style="margin-top: 120px;">
	<div class="starter-template">
		<h1><img src="inc/img/puce-h1.png">Les <b>F</b>ormations du groupe ODIS</h1>
    <img src="inc/img/formations.png" style="margin-left:150px;" />
    <img src="inc/img/formations-bandeau.png" />
	</div>
</div><!-- /.container -->
<script>
$(function () {
  document.getElementById("Nos formations").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';
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
