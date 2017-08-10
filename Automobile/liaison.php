<?php include ('../inc/_header.php');?>							
<!-- Contenu -->

  <?php $cheminImg = "../inc/img/Automobile/Liaison au sol/"; ?>
  <?php $cheminImgBandeau = "../inc/img/Automobile/"; ?>
  <img id="sidebar" style="margin-left:0px;margin-top: 120px;float:left" src="<?php echo $cheminImg; ?>Visuel.png" />

<div id="content" style="margin-top: 120px;">
  <div id="paragraphe" style="margin-top: 30px;float:left;width:70%">
    <h1 style="color:rgb(255,0,0)"><img src="../inc/img/puce-H1-2.png" />Liaison au sol</h1><br />
    <p style="margin-left:95px;font-size:1.3em;">La liaison au sol est composée de plusieurs pièces mécaniques liées entre le châssis de la voiture et la route. <br />
    Celle-ci permet entre autres d’avoir une bonne tenue de route et d’optimiser votre confort. 
  </p>
  </div>
  <div style="margin-top: 20px;float:left;">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Amortisseurs.png" />
   <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Rotules.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Supports moteurs.png" />
  </div>  
   <div style="margin-top: 30px;float:left;">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Transmission.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Roulements.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Pneumatiques Jantes.png" />
  </div>  
  <div id="conseilOdis" style="margin-top: 100px;float:left;width:70%">
  <p style="margin-left:95px;font-size:1.3em;border:2px solid rgb(255,0,0);padding:15px">
    <img src="<?php echo $cheminImgBandeau; ?>conseilOdis.PNG" style="margin-left:10px;margin-top:-90px;"/><br />
    Il est important d’aller voir un spécialiste quand votre liaison au sol présente des signes d’usures (vibrations, freinage plus lent, bruit lorsque vous conduisez…). Il faut savoir que les défauts de ces pièces se propagent rapidement mettant en danger votre sécurité et celle de vos passagers. 
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
  document.getElementById("Liaison au sol").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';

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