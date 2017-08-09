<?php include ('inc/_header.php');?>							
<!-- Contenu -->
<div class="container" style="margin-top: 120px;">
	<div class="starter-template">
   <div style="width:100%;display:inline;float:left;font-size: 1.1em;">
		<h1><img src="inc/img/puce-h1.png">Nous <b>C</b>ontacter</h1> 
    <p style="width:70%;display:inline;float:left;">En cas de besoin, vous pouvez nous joindre par mail, courrier ou téléphone. Nous serons ravi de répondre à vos besoins et de vous apporter des réponses.</p>      
    <img style="margin-top:350px;margin-left:250px;" src="inc/img/contact.png" />
	</div>
</div><!-- /.container -->
<script>
$(function () {
  document.getElementById("Nous contacter").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';
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
