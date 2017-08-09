<?php include ('inc/_header.php');?>							

<!-- Contenu -->
<div style="margin-top: 120px;">
  <?php $cheminImg = "inc/img/Automobile/"; ?>
  <img style="display: inline;margin-left:5px;float:left" src="<?php echo $cheminImg; ?>automobile.png" />
	<div style="font-size:1.1em;display:inline;float:left;margin-left:30px;width:1000px;">
    <br /><br />
    <p>Le groupe ODIS vous propose de nombreuses références en Automobile allant des pièces techniques aux équipements intérieurs et extérieurs de votre véhicule. Grâce à de partenariats avec de grandes marques, nous vous proposons des produits contrôlés et de qualité  pour satisfaire l’ensemble de vos besoins.
    </p>
  </div>

    <img style="display: inline;float:left" src="<?php echo $cheminImg; ?>notreOffre.png" />
    <div style="font-size:1.1em;display:inline;float:left;margin-left:30px;width:1050px;">
      <br />
      <p>Notre gamme s’articule autour de 11 familles de produits.</p>
      <br />
      <div >
        <a href="Automobile/liaison.php"><img style="display: inline-block;float:left;margin-left:-20px" src="<?php echo $cheminImg; ?>liaison.png" /></a>
        <a href="Automobile/chauffage.php"><img style="display: inline-block;margin-left:5px;float:left" src="<?php echo $cheminImg; ?>chauffage.png" /></a>
        <a href="Automobile/moteur.php"><img style="display: inline-block;margin-left:5px;float:left" src="<?php echo $cheminImg; ?>moteur.png" /></a>
        <a href="Automobile/pieces.php"><img style="display: inline-block;margin-left:5px;float:left" src="<?php echo $cheminImg; ?>pieces.png" /></a>
        <a href="Automobile/visibilite.php"><img style="display: inline-block;margin-left:5px;float:left" src="<?php echo $cheminImg; ?>visibilite.png" /></a>

        <a href="Automobile/freinage.php"><img style="display: inline-block;margin-left:5px;float:left" src="<?php echo $cheminImg; ?>freinage.png" /></a>
        <a href="Automobile/materiel.php"><img style="display: inline-block;margin-left:5px;float:left" src="<?php echo $cheminImg; ?>materiel.png" /></a>
        <a href="Automobile/echappement.php"><img style="display: inline-block;margin-left:5px;float:left" src="<?php echo $cheminImg; ?>echappement.png" /></a>
        <a href="Automobile/electricite.php"><img style="display: inline-block;margin-left:5px;float:left" src="<?php echo $cheminImg; ?>electricite.png" /></a>
        <a href="Automobile/accessoires.php"><img style="display: inline-block;margin-left:5px;float:left" src="<?php echo $cheminImg; ?>accessoires.png" /></a>

        <a href="Automobile/nettoyage.php"><img style="display: inline-block;margin-left:5px;float:left" src="<?php echo $cheminImg; ?>entretient.png" /></a>
      </div>
    </div>
    <img style="display: inline;float:left" src="<?php echo $cheminImg; ?>nosForces.png" />
    <div style="display:inline;float:left;margin-left:30px;width:1000px;font-size:1.1em;">
      <br />
      <p>Notre gamme Automobile est essentiellement composée de pièces d’origine.  Grâce à de partenariats avec de grandes marques, nous sommes en mesure de vous proposer des produits de qualité et contrôlés pour satisfaire au mieux l’ensemble de vos besoins. 
      </p>
      <br />
    </div>
    <img style="display: inline;float:left;margin-left:50px; width:30%" src="<?php echo $cheminImg; ?>precisium.png" />   
    <img style="display: inline;float:left;margin-left:50px; width:30%" src="<?php echo $cheminImg; ?>garageEtCo.png" />
    
    <div style="display:inline;float:left;margin-left:30px;width:1000px;font-size:1.1em;">
      <marquee behavior="alternate" scrollamount="2" scrolldelay="50" height="180" width="100%" style="margin-top:50px;text-align: center;" direction="right">
        <img alt="Bosal" src="<?php echo $cheminImg; ?>/Logos bandeau/Bosal.png"  border="0">
        <img alt="Bosal" src="<?php echo $cheminImg; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Champion" src="<?php echo $cheminImg; ?>/Logos bandeau/Champion.png"  border="0">
        <img alt="Bosal" src="<?php echo $cheminImg; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Corteco" src="<?php echo $cheminImg; ?>/Logos bandeau/Corteco 2.png"  border="0">
        <img alt="Bosal" src="<?php echo $cheminImg; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Fulmen" src="<?php echo $cheminImg; ?>/Logos bandeau/Fulmen.png"  border="0">
        <img alt="Bosal" src="<?php echo $cheminImg; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Dayco" src="<?php echo $cheminImg; ?>/Logos bandeau/Dayco.png"  border="0">
        <img alt="Bosal" src="<?php echo $cheminImg; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="MANN FILTER" src="<?php echo $cheminImg; ?>/Logos bandeau/MANN FILTER.png"  border="0">
        <img alt="Bosal" src="<?php echo $cheminImg; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Delphi" src="<?php echo $cheminImg; ?>/Logos bandeau/Delphi.png"  border="0">
        <img alt="Bosal" src="<?php echo $cheminImg; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Salari" src="<?php echo $cheminImg; ?>/Logos bandeau/Salari.png"  border="0">
      </marquee>
    </div>
</div><!-- /.container -->

<!-- Contenu -->
<script>
$(function () {
  document.getElementById("menuAuto").className= 'dropdown open';
  $('#menuAuto').on('mouseleave', function(e) {
  		document.getElementById('ulAuto').autoHidingNavbar('setDisableAutohide', true);
  });
  $('.dropdown').on('mouseleave', function(e) {
  		document.getElementById('menuAbout').className= 'dropdown';
  		document.getElementById('menuAuto').className= 'dropdown open';
  		document.getElementById("menuIndustrie").className= 'dropdown';  	
  		document.getElementById('menuPeinture').className= 'dropdown';		
      document.getElementById('menuActu').className= 'dropdown'; 
      document.getElementById('menuPrestations').className= 'dropdown'; 
      document.getElementById('menuPreci').className= 'dropdown';

  		document.getElementById('ulAuto').autoHidingNavbar('setDisableAutohide', true);
  });
});
</script>
<?php include('inc/_footer.php'); ?>