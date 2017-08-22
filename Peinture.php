<?php include ('inc/_header.php');?> 

<!-- Contenu -->   

<?php $cheminImg = "inc/img/Peinture/"; ?>
<img id="sidebar" style="margin-left:0pxdisplay: inline;float:left" src="<?php echo $cheminImg; ?>peinture.png" />         

<div id="content">
  <div style="font-size:1.1em;display:inline;float:left;margin-left:30px;width:1000px;">
    <br /><br />
    <p>Le groupe ODIS vous propose toute une gamme de solutions Peinture dans plusieurs secteurs d’activités  :  les matériels de transport et agricoles, les travaux publics, l’industrie et les constructions métalliques.</p>
  </div>

    <img style="display: inline;float:left" src="<?php echo $cheminImg; ?>notreOffre.png" />
    <div style="font-size:1.1em;display:inline;float:left;margin-left:30px;margin-top:-20px;width:1000px;">
      <br />
      <p>Notre gamme s’articule autour de … familles de produits.</p>
      <br />
      <div >
        <a href="Peinture/peintAutoPoidsLourds.php"><img style="display: inline-block;margin-left:20px;float:left" src="<?php echo $cheminImg; ?>peintureAuto.png" /></a>
        <a href="Peinture/peintureIndustrie.php"><img style="display: inline-block;margin-left:20px;float:left" src="<?php echo $cheminImg; ?>peintureIndus.png" /></a>
        <a href="Peinture/abrasifs.php"><img style="display: inline-block;margin-left:20px;float:left" src="<?php echo $cheminImg; ?>abrasifs.png" /></a>
        <a href="Peinture/masquage.php"><img style="display: inline-block;margin-left:20px;float:left" src="<?php echo $cheminImg; ?>masquage.png" /></a>
        <a href="Peinture/materielsProtection.php"><img style="display: inline-block;margin-left:20px;float:left" src="<?php echo $cheminImg; ?>materielsProtection.png" /></a>
   
        <a href="Peinture/nettoyants.php"><img style="display: inline-block;margin-left:20px;float:left" src="<?php echo $cheminImg; ?>nettoyage.png" /></a>
        <a href="Peinture/preparation.php"><img style="display: inline-block;margin-left:20px;float:left" src="<?php echo $cheminImg; ?>preparation.png" /></a>
        <a href="Peinture/mastics.php"><img style="display: inline-block;margin-left:20px;float:left" src="<?php echo $cheminImg; ?>mastics.png" /></a>
        <a href="Peinture/essuyage.php"><img style="display: inline-block;margin-left:20px;float:left" src="<?php echo $cheminImg; ?>essuyage.png" /></a>
      </div>
    </div>
    <img style="display: inline;float:left" src="<?php echo $cheminImg; ?>nosValeurs.png" />
    <div style="display:inline;float:left;margin-left:30px;margin-top:-20px;width:1000px;font-size:1.1em;">
      <br />
      <p>Grâce à une logistique efficace et une maîtrise technique des spécialistes en peinture, le groupe Odis vous garanti une prestation de qualité avec un fort respect du client.</p>
      <br />
    </div>   
    <img style="display: inline;float:left" src="<?php echo $cheminImg; ?>nosAtouts.png" />
     <div style="display:inline;float:left;margin-left:30px;margin-top:-20px;width:1000px;font-size:1.1em;">
      <br />
      <p>Spécialiste en peinture grâce à une organisation et des supports techniques en Carrosserie, un référencement technique et commercial auprès des constructeurs.</p>
 
      <br />
      <p>Des techniciens formés en continu aux nouvelles technologies, ils ont la capacité d’accompagner le client au quotidien et de s’adapter au processus de fabrication ainsi que l’automatisation des préparations de teintes. </p>
    
      <br />
      <p>La démarche du groupe Odis s’inscrit dans une amélioration continue disposant d’une machine Automatique avec une grande précision de teintes. Le stock est composé d’une multitude de marques ayant pour objectif un meilleur rapport qualité/prix  et une rapidité de livraison. 
</p>
      <br />
    </div>    

    <div style="display:inline;float:left;margin-left:30px;width:1000px;font-size:1.1em;">
      <marquee behavior="alternate" scrollamount="2" scrolldelay="50" height="180" width="100%" style="margin-top:50px;text-align: center;" direction="right">
        <img alt="3M" src="<?php echo $cheminImg; ?>/Logos bandeau/3M.png"  border="0">
        <img alt="" src="<?php echo $cheminImg; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Besa" src="<?php echo $cheminImg; ?>/Logos bandeau/Besa.png"  border="0">
        <img alt="" src="<?php echo $cheminImg; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Max meyer" src="<?php echo $cheminImg; ?>/Logos bandeau/Max meyer.png"  border="0">
        <img alt="" src="<?php echo $cheminImg; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Octoral" src="<?php echo $cheminImg; ?>/Logos bandeau/Octoral.png"  border="0">
        <img alt="" src="<?php echo $cheminImg; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="PPG" src="<?php echo $cheminImg; ?>/Logos bandeau/PPG.png"  border="0">
        <img alt="" src="<?php echo $cheminImg; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Standox" src="<?php echo $cheminImg; ?>/Logos bandeau/Standox.png"  border="0">
        <img alt="" src="<?php echo $cheminImg; ?>/Logos bandeau/blank.png"  border="0">
        <img alt="Texa" src="<?php echo $cheminImg; ?>/Logos bandeau/Texa.png"  border="0">
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
        }    
        else{
           $("#sidebar").css("position","");
           $("#sidebar").css("margin-top","0px");
           $("#content").css("margin-left","0px");
        }     
    });

  document.getElementById("navbar").onmouseout = function() {
          document.getElementById('content').style.marginTop = "0px";
          document.getElementById('sidebar').style.marginTop = "0px";
  } 
  document.getElementById("navbar").onmouseover = function() {
        document.getElementById('content').style.marginTop = "120px";
        document.getElementById('sidebar').style.marginTop = "120px";
   }

    /*
  document.getElementById("menuPeinture").className= 'dropdown open';
  $('#menuPeinture').on('mouseleave', function(e) {
  		document.getElementById('ulPeinture').autoHidingNavbar('setDisableAutohide', true);
  });
  $('.dropdown').on('mouseleave', function(e) {
  		document.getElementById('menuAbout').className= 'dropdown';
  		document.getElementById('menuAuto').className= 'dropdown';
  		document.getElementById("menuIndustrie").className= 'dropdown';  	
  		document.getElementById('menuPeinture').className= 'dropdown open';		
      document.getElementById('menuActu').className= 'dropdown'; 
      document.getElementById('menuPrestations').className= 'dropdown'; 
      document.getElementById('menuPreci').className= 'dropdown';
      
  		document.getElementById('ulPeinture').autoHidingNavbar('setDisableAutohide', true);
  });*/
});
</script>
<?php include('inc/_footer.php'); ?>