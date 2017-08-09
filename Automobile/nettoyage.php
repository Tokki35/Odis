<?php include ('../inc/_header.php');?>							
<!-- Contenu -->

<div style="margin-top: 120px;">
	<?php $cheminImg = "../inc/img/Automobile/Entretien et nettoyage/"; ?>
  <?php $cheminImgBandeau = "../inc/img/Automobile/"; ?>
  <img style="margin-left:5px;float:left" src="<?php echo $cheminImg; ?>Visuel.png" />
  <div style="margin-top: 30px;float:left;margin-left:1%;width:70%">
    <h1 style="color:rgb(255,0,0)"><img src="../inc/img/puce-H1-2.png" />Entretien et nettoyage</h1><br />
    <p style="margin-left:95px;font-size:1.3em;"> Pour éviter l’usure prématurée de votre véhicule de nombreux fluides sont à votre disposition. Un véhicule qui est bien entretenu limite  fortement les risques de panne. 
    </p>
  </div>
  <div style="margin-top: 20px;float:left;margin-left:10%">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Huiles.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Lave-glace.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Liquide de refroidissement.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Antigel.png" />
  </div>  
  <div style="margin-top: 30px;float:left;margin-left:16%">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>AD Blue.png" />
   <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Aérosols.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Accessoires de nettoyage.png" />
  </div>  
  <div style="margin-top: 100px;float:left;margin-left:1%;width:70%">
  <p style="margin-left:95px;font-size:1.3em;border:2px solid rgb(255,0,0);padding:15px">
    <img src="<?php echo $cheminImgBandeau; ?>conseilOdis.PNG" style="margin-left:10px;margin-top:-90px;"/><br />
    Pour faire durer davantage votre voiture prenez vous devez respecter les différents étapes d’entretien de votre véhicule, effectuer des lavages réguliers de votre carrosserie, vidanger l’huile, remplacer les filtres, vérifier les bougies et surtout ne négliger pas les éléments situés en dessous du véhicule telle la suspension. 
     </p>
  </div>
</div><!-- /.container -->
    
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
  document.getElementById("Entretient et nettoyage").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';

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