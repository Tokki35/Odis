<?php include ('../inc/_header.php');?>							
<!-- Contenu -->

  <?php $cheminImg = "../inc/img/Automobile/Pièces techniques/"; ?>
  <?php $cheminImgBandeau = "../inc/img/Automobile/"; ?>
  <img id="sidebar" style="margin-left:0px;margin-top: 120px;float:left" src="<?php echo $cheminImg; ?>Visuel.png" />

<div id="content" style="margin-top: 120px;">
  <div id="paragraphe" style="margin-top: 30px;float:left;width:70%">
    <h1 style="color:rgb(255,0,0)"><img src="../inc/img/puce-H1-2.png" />Pièces techniques</h1><br />
    <p style="margin-left:95px;font-size:1.3em;"> Votre véhicule est composé d’une multitude de pièces techniques essentiels à son bon fonctionnement.  <br />
    Bien qu’elles soient solides, un mauvais entretien de ces pièces peut conduire à des soucis de démarrage, <br />
    un encrassage et provoquer une fumée noire ainsi qu’une perte de puissance de votre véhicule.  
    </p>
  </div>
  <div style="margin-top: 20px;float:left">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Pompes.png" />
   <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Injecteurs.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Vannes EGR.png" />
  </div>  
   <div style="margin-top: 20px;float:left">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Capteurs.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Débitmètres.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Turbos.png" />
  </div>    
  <div id="conseilOdis" style="margin-top: 100px;float:left;width:70%">
  <p style="margin-left:95px;font-size:1.3em;border:2px solid rgb(255,0,0);padding:15px">
    <img src="<?php echo $cheminImgBandeau; ?>conseilOdis.PNG" style="margin-left:10px;margin-top:-90px;"/><br />
    Ces pièces techniques sont solides mais peuvent s’obstruer et conduire à une panne.  Vous pouvez augmenter la durée de vie de vos pièces par de simples gestes. Par exemple pour augmenter celle des injecteurs utiliser un carburant de bonne qualité, changez régulièrement le filtre d’essence. Quant à la vanne EGR, pour éviter son encrassement éviter de rouler constamment en ville.
    </p>
  </div>
    
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

</div><!-- /.container -->
<!-- Contenu -->
<script>
$(function () {
  $(window).scroll(function() {
  if ($(window).scrollTop() >= 315) {
         $("#sidebar").css("position","fixed");
         $("#sidebar").css("top","0px");
         $("#sidebar").css("margin-top","0px");
         $("#content").css("margin-left","400px");
         $("#paragraphe").css("width","95%");
         $("#conseilOdis").css("width","95%");   

      }    
      else{
         $("#sidebar").css("position","");
         $("#sidebar").css("margin-top","120px");
         $("#content").css("margin-left","0px");
         $("#paragraphe").css("width","70%");
         $("#conseilOdis").css("width","70%");   
      }         
  });
  document.getElementById("menuAuto").className= 'dropdown open';
  document.getElementById("Pièces techniques").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';

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