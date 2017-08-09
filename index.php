<?php include ('inc/_headerAccueil.php');?>							
<!-- Contenu -->
<div class="title">
	<!--<img style="position: absolute;margin-left:50px;margin-top:50px" src="inc/img/Accueil/commander en ligne.png" />-->
	<br /><br /><br />
	<h1>3 MÉTIERS <br />
		3 SAVOIR-FAIRE
		</h1>
	<br /><br /><br /><br />
	<div class="blockAccueilPrincipal">
		<div class="blockAccueil" onclick="window.location.href='Automobile.php'">
			<h2>AUTOMOBILE</h2>
			<div class="flip-container">
				<div class="flipping">
					<div id="frontAuto" class="front"></div>
					<div class="back" id="backAuto">
							<p>Avec  + de 50 000 références de pièces automobiles en stock, le groupe ODIS offre aux particuliers et professionnels de l’automobile une gamme complète et qualitative.</p>
					</div>
				</div>		
			</div>	
		</div>	
		<div class="blockAccueil barre">
			<h2>&nbsp;</h2>
			<img src="inc/img/Accueil/barre.png">
		</div>		
		<div class="blockAccueil" onclick="window.location.href='Industrie.php'">
			<h2>INDUSTRIE</h2>
			<div class="flip-container">
				<div class="flipping">
					<div id="frontIndustrie" class="front">
					</div>
					<div class="back" id="backIndustrie">
							<p>Le groupe ODIS dispose d’un large choix d’équipements, d’outillage et de consommables qui répondent aux besoins spécifiques de chaque métiers de l’industrie et d’autres domaines. 
</p>
					</div>
				</div>		
			</div>	
		</div>	
		<div class="blockAccueil barre">
			<h2>&nbsp;</h2>
			<img src="inc/img/Accueil/barre.png">
		</div>		
		<div class="blockAccueil" onclick="window.location.href='Peinture.php'">
			<h2>PEINTURE</h2>
			<div class="flip-container">
				<div class="flipping">
					<div id="frontPeinture" class="front"></div>
					<div class="back" id="backPeinture">
							<p>Grâce à son équipe d’experts et à ses équipements de la dernière technologie , le groupe ODIS garantie une gamme de peintures répondant aux exigences des carrossiers et des industriels.
</p>
					</div>
				</div>		
			</div>	
		</div>	
	</div>
</div><!-- /.container -->

<!-- Contenu -->
<script type="text/javascript">
	function showP(id){
		$("#"+id).attr('class', 'pShow');
	}
	function hideP(id){
		$("#"+id).attr('class', 'pHide');
	}
</script>
<?php include('inc/_footer.php'); ?>