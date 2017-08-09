<?php include ('../inc/_header.php');?>							
<!-- Contenu -->

<div style="margin-top: 120px;">
	<?php $cheminImg = "../inc/img/Automobile/Moteur/"; ?>
  <img style="margin-left:5px;float:left" src="<?php echo $cheminImg; ?>Visuel.png" />
  <div style="margin-top: 30px;float:left;margin-left:1%;width:70%">
    <h1 style="color:rgb(255,0,0)"><img src="../inc/img/puce-H1-2.png" />Moteur</h1><br />
    <p style="margin-left:95px;font-size:1.3em;"> Le moteur transmet une énergie mécanique qui permet le déplacement du véhicule.
    </p>
  </div>
  <div style="margin-top: 20px;float:left;margin-left:8%">
   <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Bougies.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Distribution.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Embrayage.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Alimentation d'air et carburant.png" />
  </div>  
   <div style="margin-top: 30px;float:left;margin-left:2%">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Filtres.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Pièces d'allumage.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Cardan.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Boîte de vitesse.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Culasse.png" />
  </div>  
  <div style="margin-top: 30px;float:left;margin-left:1%;width:70%">
    <p style="margin-left:95px;font-size:1.3em;"><u><b>Recommandation:</b></u> La durée de vie de votre moteur dépendra de votre conduite. Quelques petites astuces :  prendre une bonne qualité d’huile permet un meilleur fonctionnement de votre moteur, pensez à changer les filtres à gazole, air et huile régulièrement.
    </p>
  </div>
</div><!-- /.container -->
    
    <?php $cheminImgBandeau = "../inc/img/Automobile/"; ?>
    <div style="display:inline;float:left;margin-left:100px;width:1000px;font-size:1.1em;">
      <marquee behavior="alternate" scrollamount="2" scrolldelay="50" height="180" width="100%" style="margin-top:50px;text-align: center;" direction="right">
        <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Bosal.png"  border="0">
        <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Champion" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Champion.png"  border="0">
        <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/../Logos bandeau/blank.png"  border="0">
        <img alt="Corteco" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Corteco 2.png"  border="0">
        <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Fulmen" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Fulmen.png"  border="0">
        <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Dayco" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Dayco.png"  border="0">
        <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="MANN FILTER" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/MANN FILTER.png"  border="0">
        <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Delphi" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Delphi.png"  border="0">
        <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Salari" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Salari.png"  border="0">
      </marquee>
    </div>

<!-- Contenu -->
<script>
$(function () {
  document.getElementById("menuAuto").className= 'dropdown open';
  document.getElementById("Moteur").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';

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

  		document.getElementById('ulAuto').autoHidingNavbar('setDisableAutohide', true);
  });
});
</script>
<?php include('../inc/_footer.php'); ?>