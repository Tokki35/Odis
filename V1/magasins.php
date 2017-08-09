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
		   $('#map_All').gMap({
				address: "Rennes",
				zoom: 7,
				scrollwheel: true,
				markers:[
					<?php
					foreach ($all as $contact)
					{				
						$nom = $contact -> nom;
						$addrRue = $contact -> adresseRue;
						$addrCpVille = $contact -> adresseCPVille;
						$tel = $contact -> telephone;
						$email = $contact -> email;
					?>
						{
							address: "<?php echo $addrRue.' '.$addrCpVille; ?>",
							html: "<?php echo '<img src=\'http://recette.odispro.fr:8080/recette.odisPro/inc/img/batiments/'.$nom.'.jpg\'><br /><b>'. 
											$nom .'</b><br > '. 
											$addrRue .'<br /> '. 
											$addrCpVille .'<br /> '. '<u>Tel.</u> : '. 
											$tel .'<br /> '. '<u>Email.</u> : <a href=\"mailto:'. $email .'\">'. $email .'</a>' ?>"
						},
					<?php 
					}
					?>
				]
			});
		});
	</script>
<br />
<div id="map_All" style="height: 500px; width:50%"></div>	
<br />
</div><!-- /.container -->

<?php include('inc/_footer.php'); ?>
					
			