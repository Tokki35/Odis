<?php include ('../inc/_header.php');?>							
<!-- Contenu -->

<div style="margin-top: 120px;">
	<?php $cheminImg = "../inc/img/Peinture/Peinture Industrie/"; ?>
  <img style="margin-left:5px;float:left" src="<?php echo $cheminImg; ?>Visuel.png" />
  <div style="margin-top: 30px;float:left;margin-left:1%;width:70%">
    <h1 style="color:rgb(255,192,0)"><img src="../inc/img/puce-H1-2.png" />Peinture Industrie</h1><br />
    <p style="margin-left:95px;font-size:1.3em;">Afin de satisfaire au mieux sa clientèle, le personnel est formé aux dernières technologies ce qui permet d’accompagner le client au quotidien. Ainsi, les techniciens spécialistes ont la capacité de s’adapter aux processus de fabrication et à l’automatisation des teintes. 
    </p>
  </div>
  <div style="margin-top: 20px;float:left;margin-left:2%">
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Primaire.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Apprêts.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Laque mono-composant.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Laque bi-composant.png" />
  </div>  
  <div style="margin-top: 30px;float:left;margin-left:2%">
   <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Base pigmentaire.png" />
   <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Vernis.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Aérosols.png" />
    <img style="margin-left: 25px;" src="<?php echo $cheminImg; ?>Diluants.png" />
  </div>
  <div style="margin-top: 30px;float:left;margin-left:1%;width:70%">
    <p style="margin-left:95px;font-size:1.3em;"><u><b>Recommandation:</b></u> Il est important d’être attentif au choix de produits et du matériel de peinture que vous utilisez
    </p>
  </div>
  <?php $cheminImgBandeau = "../inc/img/Peinture/"; ?>
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
  document.getElementById("Peinture industrie").style.backgroundColor = 'rgba(255, 192, 0, 0.5)';

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