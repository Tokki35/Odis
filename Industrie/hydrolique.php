<?php include ('../inc/_header.php');?>							
<!-- Contenu -->

  <?php $cheminImg = "../inc/img/Industrie/Composants hydrauliques et pneumatiques/"; ?>
  <?php $cheminImgBandeau = "../inc/img/Industrie/"; ?>
  <img id="sidebar" style="margin-left:0px;margin-top: 120px;float:left" src="<?php echo $cheminImg; ?>Visuel.png" />

<div id="content" style="margin-top: 120px;">
  <div id="paragraphe" style="margin-top: 30px;float:left;width:70%">
    <h1 style="color:rgb(0,176,80)"><img src="../inc/img/puce-H1-2.png" />Composants Hydrauliques et Pneumatiques</h1><br />
    <p style="margin-left:95px;font-size:1.3em;">Le Groupe ODIS met à votre disposition plusieurs composants de différents types et de différentes <br />marques qui vous garantissent le bon fonctionnement de vos équipements hydrauliques et/ou pneumatiques 
</p>
  </div>
  <div style="margin-top: 20px;float:left">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>tuyaux et tubes hydrauliques.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>raccords hydrauliques.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>verins hydrauliques.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>pompes hydrauliques.png" />
   <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>filtration.png" />
  </div>
  <div style="margin-top: 30px;float:left">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>tuyaux et tubes pneumatiques.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>raccords pneumatiques.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>distributeurs pneumatiques.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>actionneurs pneumatiques.png" />
  </div>
  <div id="conseilOdis" style="margin-top: 100px;float:left;width:70%;">
    <p style="margin-left:95px;font-size:1.3em;border:2px solid rgb(0,204,102);padding:15px">
    <img src="<?php echo $cheminImgBandeau; ?>conseilOdis.PNG" style="margin-left:10px;margin-top:-90px;"/><br />
    Si le vérin avance par saccades, cela peut être du à la présence d’air dans le système. Il faut ainsi purger le verin. Pour cela vous devez positionner le vérin à l’envers, le déployer et l’huile descendra vers la pompe.
    </p>
  </div> 

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
  document.getElementById("menuIndustrie").className= 'dropdown open';
  document.getElementById("Composants Hydrauliques et pneumatiques").style.backgroundColor = 'rgba(0, 204, 102, 0.5)';

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