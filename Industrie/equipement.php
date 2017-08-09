<?php include ('../inc/_header.php');?>							
<!-- Contenu -->

<div style="margin-top: 120px;">
	<?php $cheminImg = "../inc/img/Industrie/EQUIPEMENT/"; ?>
  <img style="margin-left:5px;float:left" src="<?php echo $cheminImg; ?>Visuel.png" />
  <div style="margin-top: 30px;float:left;margin-left:1%;width:70%">
    <h1 style="color:rgb(0,176,80)"><img src="../inc/img/puce-H1-2.png" />Equipement atelier</h1><br />
    <p style="margin-left:95px;font-size:1.3em;">Que vous soyez professionnels ou particuliers, nous mettons à votre disposition toute une gamme<br /> 
    de produits pour équiper vos ateliers et améliorer vos conditions de travail. <br />
    Notre SAV dispose des compétences techniques nécessaires pour assurer l’entretien et la réparation de vos équipements dans les meilleurs délais.
</p>
  </div>
  <div style="margin-top: 20px;float:left;margin-left:8%">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>nettoyeurs haute pression.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>balayeuses autolaveuses.png" />
   <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>compresseurs.png" />
   <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>groupes électrogènes.png" />

  </div>
  <div style="margin-top: 30px;float:left;margin-left:2%">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>tourets.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>etaux.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>presses hydrauliques.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>chauffages.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>servantes d'atelier.png" />    
  </div>

  <?php $cheminImgBandeau = "../inc/img/Industrie/"; ?>
  <div style="display:inline;float:left;margin-left:30px;width:1000px;font-size:1.1em;">
    <marquee behavior="alternate" scrollamount="2" scrolldelay="50" height="180" width="100%" style="margin-top:50px;text-align: center;" direction="right">
      <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Brain Bee.png"  border="0">
      <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Champion" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Chicago pneumatic.png"  border="0">
      <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Corteco" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Facom.png"  border="0">
      <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Fulmen" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Hitachi.png"  border="0">
      <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Dayco" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Karcher.png"  border="0">
      <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="MANN FILTER" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/KS tools.png"  border="0">
      <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Delphi" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Lemaitre.png"  border="0">
      <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Salari" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Makita.png"  border="0">
      <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Salari" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Miller.png"  border="0">
      <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Salari" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Pferd.png"  border="0">
      <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Salari" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Ravaglioli.png"  border="0">
      <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Salari" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Schill.png"  border="0">
      <img alt="Bosal" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Salari" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Snap on.png"  border="0">
    </marquee>
  </div>
</div><!-- /.container -->




<!-- Contenu -->
<script>
$(function () {
  document.getElementById("menuIndustrie").className= 'dropdown open';
  document.getElementById("Equipement atelier").style.backgroundColor = 'rgba(0, 204, 102, 0.5)';

  $('#menuIndustrie').on('mouseleave', function(e) {
  		document.getElementById('ulIndustrie').autoHidingNavbar('setDisableAutohide', true);
  });
  $('.dropdown').on('mouseleave', function(e) {
  		document.getElementById('menuAbout').className= 'dropdown';
  		document.getElementById('menuAuto').className= 'dropdown';
  		document.getElementById("menuIndustrie").className= 'dropdown open';  	
  		document.getElementById('menuPeinture').className= 'dropdown';		
      document.getElementById('menuActu').className= 'dropdown'; 
      document.getElementById('menuPrestations').className= 'dropdown'; 

  		document.getElementById('ulIndustrie').autoHidingNavbar('setDisableAutohide', true);
  });
});
</script>
<?php include('../inc/_footer.php'); ?>