<?php include ('../inc/_header.php');?>							
<!-- Contenu -->

<div style="margin-top: 120px;">
	<?php $cheminImg = "../inc/img/Peinture/Nettoyants et dégraissage/"; ?>
  <?php $cheminImgBandeau = "../inc/img/Peinture/"; ?>
  <img style="margin-left:5px;float:left" src="<?php echo $cheminImg; ?>Visuel.png" />
  <div style="margin-top: 30px;float:left;margin-left:1%;width:70%">
    <h1 style="color:rgb(255,192,0)"><img src="../inc/img/puce-H1-2.png" />Nettoyant et dégraissage</h1><br />
    <p style="margin-left:95px;font-size:1.3em;">Le groupe Odis vous donne la solution pour nettoyer et traiter la surface avant l’application de la peinture.
    </p>
  </div>
  <div style="margin-top: 20px;float:left;margin-left:2%">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Dégraissant.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Solvants.png" />
  </div>
  <div style="margin-top: 100px;float:left;margin-left:1%;width:70%">
  <p style="margin-left:95px;font-size:1.3em;border:2px solid rgb(255,192,0);padding:15px">
    <img src="<?php echo $cheminImgBandeau; ?>conseilOdis.PNG" style="margin-left:10px;margin-top:-90px;"/><br />
    Avant toute application de peinture nous vous conseillons d’avoir un support propre en dépoussiérant la surface et en éliminant les parties qui n’adhèrent pas. 
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
  document.getElementById("menuPeinture").className= 'dropdown open';
  document.getElementById("Nettoyant et dégraissage").style.backgroundColor = 'rgba(255, 192, 0, 0.5)';

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