<?php include ('inc/_header.php');?>		

<style type="text/css">
  .imgHidden {
    display: none;
    width: 50%;
    position: absolute;
    left: 360;
    margin-top: 155;
  }
</style>					
<!-- Contenu -->
<div class="container" style="margin-top: 120px;">
	<div class="starter-template">
		<h1><img src="inc/img/puce-h1.png">Un <b>S</b>avoir-Faire Réseau</h1>
     <p style="width:60%;display:inline;float:left;font-size: 1.1em;">
     Le groupe ODIS et son Homme Réseau Précisium vous garanti une prestation de qualité qui saura assurer votre sécurité et la longévité de votre véhicule. <br /><br />
    Aujourd’hui plus de 850 Précisium nous font confiance,  vous souhaitez également rejoindre l’aventure? </p>
    <div style="width:40%;display:inline;float:left;font-size: 1.1em;">
    <img src="inc/img/precisium-nb.png" /><br /><br />
    </div>
    <img src="inc/img/precisium-pourquoi.png"   />
	</div>
</div><!-- /.container -->

 <map name="mouseover_map">
    <area shape="rect" coords="646,20,1073,140"   href=""   onMouseOver="show('image')"       onMouseOut="hide('image')"        alt="Précisium image"/>
    <area shape="rect" coords="0,349,290,482"     href=""   onMouseOver="show('vendre')"      onMouseOut="hide('vendre')"       alt="Précisium vendre"/>
    <area shape="rect" coords="1100,480,1524,580" href=""   onMouseOver="show('travailler')"  onMouseOut="hide('travailler')"   alt="Précisium travailler"/>
    <area shape="rect" coords="545,740,730,860"   href=""   onMouseOver="show('fideliser')"   onMouseOut="hide('fideliser')"    alt="Précisium fideliser"/>
 </map>
<img src="inc/img/precisium-menu.png" width="100%" usemap="#mouseover_map" name="mouseover" />

<img id="img" class="imgHidden" src="" />

<script>
$(function () {
  document.getElementById("menuPreci").className= 'dropdown open';
  $('#menuPreci').on('mouseleave', function(e) {
  		document.getElementById('ulPreci').autoHidingNavbar('setDisableAutohide', true);
  });
  $('.dropdown').on('mouseleave', function(e) {
  		document.getElementById('menuAbout').className= 'dropdown';
  		document.getElementById('menuAuto').className= 'dropdown';
  		document.getElementById("menuIndustrie").className= 'dropdown';
  		document.getElementById('menuPeinture').className= 'dropdown';
      document.getElementById('menuPrestations').className= 'dropdown';
      document.getElementById('menuActu').className= 'dropdown';
      document.getElementById('menuPreci').className= 'dropdown open';

  		document.getElementById('ulPreci').autoHidingNavbar('setDisableAutohide', true);
  });
});

function show(id){
  document.getElementById('img').style.display='inline';
  document.getElementById('img').src ='inc/img/precisium-' + id + '.png';
}
function hide(id){
  document.getElementById('img').style.display='none';
}
</script>
<?php include('inc/_footer.php'); ?>