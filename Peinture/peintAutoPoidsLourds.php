<?php include ('../inc/_header.php');?>							
<!-- Contenu -->

  <?php $cheminImg = "../inc/img/Peinture/Peinture automobiles et Poids lourds/"; ?>
  <?php $cheminImgBandeau = "../inc/img/Peinture/"; ?>
<img id="sidebar" style="margin-left:0px;margin-top: 120px;float:left" src="<?php echo $cheminImg; ?>Visuel.png" />

<div id="content" style="margin-top: 120px;">
  <div id="paragraphe" style="margin-top: 30px;float:left;width:70%">
    <h1 style="color:rgb(255,192,0)"><img src="../inc/img/puce-H1-2.png" />Peinture Automobile et Poids Lourds</h1><br />
    <p style="margin-left:95px;font-size:1.3em;"> Le groupe Odis déploie son expertise en peinture automobile et poids lourds grâce à des supports, un référencement technique et commercial auprès des constructeurs.
    </p>
  </div>
  <div style="margin-top: 20px;float:left">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Primaire.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Apprêts.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Base Mat.png" />
   <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Base Brillant.png" />
  </div>  
  <div style="margin-top: 30PX;float:left">
   <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Vernis.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Dégraissant.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Aérosols.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Diluants.png" />
  </div> 
  <div id="conseilOdis" style="margin-top: 100px;float:left;width:70%">
  <p style="margin-left:95px;font-size:1.3em;border:2px solid rgb(255,192,0);padding:15px">
    <img src="<?php echo $cheminImgBandeau; ?>conseilOdis.PNG" style="margin-left:10px;margin-top:-90px;"/><br />
    Il est important d’être attentif au choix de produits et du matériel de peinture pour votre véhicule. Afin d’assurer une protection des surfaces à peindre, il est nécessaire d’appliquer un revêtement adapté aux supports. Pensez à enlever toute trace de rouille et de décaper l’ancienne surface avant application de la nouvelle peinture. 
    </p>
  </div>
  <div style="display:inline;float:left;margin-left:100px;width:1000px;font-size:1.1em;">
    <marquee behavior="alternate" scrollamount="2" scrolldelay="50" height="180" width="100%" style="margin-top:50px;text-align: center;" direction="right">
      <img alt="3M" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/3M.png"  border="0">
      <img alt="" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Besa" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Besa.png"  border="0">
      <img alt="" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Max meyer" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Max meyer.png"  border="0">
      <img alt="" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Octoral" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Octoral.png"  border="0">
      <img alt="" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="PPG" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/PPG.png"  border="0">
      <img alt="" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Standox" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Standox.png"  border="0">
      <img alt="" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/blank.png"  border="0">
      <img alt="Texa" src="<?php echo $cheminImgBandeau; ?>/Logos bandeau/Texa.png"  border="0">
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
  document.getElementById("menuPeinture").className= 'dropdown open';
  document.getElementById("Peinture Automobiles et Poids Lourds").style.backgroundColor = 'rgba(255, 192, 0, 0.5)';

  $('#menuIndustrie').on('mouseleave', function(e) {
  		document.getElementById('ulIndustrie').autoHidingNavbar('setDisableAutohide', true);
  });
  $('.dropdown').on('mouseleave', function(e) {
  		document.getElementById('menuAbout').className= 'dropdown';
  		document.getElementById('menuAuto').className= 'dropdown';
  		document.getElementById("menuIndustrie").className= 'dropdown';  	
  		document.getElementById('menuPeinture').className= 'dropdown open';		
      document.getElementById('menuActu').className= 'dropdown'; 
      document.getElementById('menuPrestations').className= 'dropdown'; 

  		document.getElementById('ulPeinture').autoHidingNavbar('setDisableAutohide', true);
  });
});
</script>
<?php include('../inc/_footer.php'); ?>