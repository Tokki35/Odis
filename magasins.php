<?php include ('inc/_header.php');?>	                                  
   <!-- Contenu -->
<div class="container" style="height: 100%">
	<?php
		$fichier_xml = $_SERVER['DOCUMENT_ROOT'].$chemin.'/inc/bdd/contacts.xml';
		$xml = simplexml_load_file ($fichier_xml);
		$all = $xml ->xpath('elem');
	?>
	<script>
			$(function()
			{   
				var gmarkers = [];
				<?php
				foreach ($all as $contact)
				{			
					$id = $contact -> id;
					$nom = $contact -> nom;
					$addrRue = $contact -> adresseRue;
					$addrCpVille = $contact -> adresseCPVille;
					$tel = $contact -> telephone;
					$email = $contact -> email;
					$latitude = $contact -> latitude;
					$longitude = $contact -> longitude;
				?>
					marker = new google.maps.Marker({
						latitude: <?php echo $latitude; ?>,
						longitude: <?php echo $longitude; ?>,
						html: "<?php echo '<img src=\'http://recette.odispro.fr:8080/integration.odisPro/inc/img/batiments/'.$id.'.jpg\' style=\'width:200px\'><br /><b>'. $nom .'</b><br /> '.$addrRue .'<br /> '.$addrCpVille .'<br /> '.'<u>Tel.</u> : '. $tel .'<br /> '.'<u>Email.</u> : <a href=\"mailto:'.$email.'\">'. $email .'</a>' ?>"
						});
					gmarkers.push(marker);
				<?php 
				}
				?>
			   $('#map_All').gMap({
					address: "Rennes",
					zoom: 7,
					scrollwheel: true,
					markers:gmarkers
				});
			
			   document.getElementById('loc_CAPR').onclick = function() { 
			   	console.log(gmarkers[0]);
				 google.maps.event.trigger(gmarkers[0], 'click'); 
				}

			});
		</script>
<br />
<div id="map_All" style="margin-top: 120px;height: 500px; width:70%"></div>
<p style="font-size:2em;position: absolute;top: 370;left: 66%;">
	<b style="color:red">C</b><b>APR (35)</b><br />
	<b style="color:red">O</b><b>DIS 35 (35)</b><br />
	<b style="color:red">O</b><b>DIS</b> <b style="color:red">I</b><b>NJECTION (35)</b><br />
	<b style="color:red">O</b><b>DIS 49 - <b style="color:red">C</b>OMPTOIR DE L'OUEST (49)</b><br />
	<b style="color:red">B</b><b>ERTHO </b><b style="color:red">L</b><b>AMOUR Vannes (56)</b><br />
	<b style="color:red">B</b><b>ERTHO </b><b style="color:red">L</b><b>AMOUR Lorient (56)</b><br />
	<b style="color:red">S</b><b>IMA Granville (50)</b><br />
	<b style="color:red">S</b><b>IMA Cherbourg (50)</b><br />
	<b style="color:red">S</b><b>IMA Avranches (50)</b><br />
	<b style="color:red">D</b><b>IFAC (44)</b><br />
	<b style="color:red">D</b><b>IFAC </b><b style="color:red">S</b><b>UD (44)</b>
</p>
<br />
</div><!-- /.container -->
<script>
$(function () {
  document.getElementById("Nos agences").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';
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
					
