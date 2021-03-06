<?php include ('../inc/_header.php');?>             
<!-- Contenu -->

  <?php $cheminImg = "../inc/img/Automobile/Visibilité/"; ?>
  <?php $cheminImgBandeau = "../inc/img/Automobile/"; ?>
  <img id="sidebar" style="margin-left:0px;margin-top: 120px;float:left" src="<?php echo $cheminImg; ?>Visuel.png" />

<div id="content" style="margin-top: 120px;">
  <div id="paragraphe" style="margin-top: 30px;float:left;width:70%">
    <h1 style="color:rgb(255,0,0)"><img src="../inc/img/puce-H1-2.png" />Visibilité</h1><br />
    <p style="margin-left:95px;font-size:1.3em;"> Un bon éclairage ainsi qu’un entretien régulier des rétroviseurs et des balai d’essui-glace est un gage de bonne visibilité, <br />
    contribue à la propreté de votre véhicule et à la sécurité des passagers. 
    </p>
  </div>
  <div style="margin-top: 20px;float:left">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Projecteurs.png" />
   <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Phares.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Lampes.png" />
  </div>
  <div style="margin-top: 30px;float:left">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Essuie-glaces.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Rétroviseurs.png" />
  </div>  
  <div id="conseilOdis" style="margin-top: 100px;float:left;width:70%">
  <p style="margin-left:95px;font-size:1.3em;border:2px solid rgb(255,0,0);padding:15px">
    <img src="<?php echo $cheminImgBandeau; ?>conseilOdis.PNG" style="margin-left:10px;margin-top:-90px;"/><br />
    Assurez-vous régulièrement du bon fonctionnement de tous vos éclairages. Dans le cas où vos phares deviennent opaques ouvrez vos optiques par l’arrière pour que l’humidité parte facilement. De même que pour pouvoir récupérer des phares devenus ternes par l’usure, pensez à les polir .<br /><br />
    Changez vos essuie-glace (en moyenne tous les 6 à 12 mois) dès l’apparition de symptômes d’usure tels que l’apparition de traînées sur le pare-brise, des mouvements de balais  saccadés, bruits des  balais … 
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
  document.getElementById("Visibilité").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';

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