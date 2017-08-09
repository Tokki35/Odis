<?php include ('inc/_header.php');?>							
<!-- Contenu -->
<div class="container" style="font-size:1.1em;margin-top: 120px;">
	<div class="starter-template">
		<h1><img src="inc/img/puce-h1.png"><b>F</b>orces et <b>V</b>aleurs du Groupe ODIS</h1>
    <p>Le Groupe ODIS garantie un service optimal pour assurer la satisfaction de ses clients professionnels et particuliers.</p>
    <img src="inc/img/forces.png" style="margin-left:150px;" />
	</div>
</div><!-- /.container -->
<script>
$(function () {
  document.getElementById("Nos forces et nos valeurs").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';
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
