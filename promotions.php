<?php include ('inc/_header.php');?>							
<!-- Contenu -->
<div class="container" style="margin-top: 120px;">
	<div class="starter-template">
		<h1><img src="inc/img/puce-h1.png"><b>P</b>romotions</h1>
    <img style="margin-left:300px;"src="inc/img/promo.png" />
	</div>
</div><!-- /.container -->
<script>
$(function () {
  document.getElementById("Nos promotions").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';
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
      document.getElementById('menuPreci').className= 'dropdown';

  		document.getElementById('ulActu').autoHidingNavbar('setDisableAutohide', true);
  });
});
</script>
<?php include('inc/_footer.php'); ?>