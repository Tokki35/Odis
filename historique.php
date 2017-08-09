<?php include ('inc/_header.php');?>    
<style media="screen">

    .containerSection {
      width: 165px;
      height: 124px;
      position: relative;
      margin: 100 auto 40px;      
      -webkit-perspective: 1100px;
         -moz-perspective: 1100px;
           -o-perspective: 1100px;
              perspective: 1100px;
    }

    #carousel {
      width: 100%;
      height: 100%;
      position: absolute;
      -webkit-transform: translateZ( -288px );
         -moz-transform: translateZ( -288px );
           -o-transform: translateZ( -288px );
              transform: translateZ( -288px );
      -webkit-transform-style: preserve-3d;
         -moz-transform-style: preserve-3d;
           -o-transform-style: preserve-3d;
              transform-style: preserve-3d;
      -webkit-transition: -webkit-transform 1s;
         -moz-transition: -moz-transform 1s;
           -o-transition: -o-transform 1s;
              transition: transform 1s;
    }

    #carousel figure {
      display: block;
      position: absolute;
      width: 90%;
      height: 100%;
      left: 10px;
      line-height: 200px;
      font-size: 50px;
      font-weight: bold;
      color: white;
      text-align: right;
      font-size: 2.5em;

    }

    #carousel.panels-backface-invisible figure {
      -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }

#carousel figure:nth-child(1) { background-image: url('inc/img/batiments/Agences carrés/1.jpg')}
#carousel figure:nth-child(2) { background-image: url('inc/img/batiments/Agences carrés/2.jpg')}
#carousel figure:nth-child(3) { background-image: url('inc/img/batiments/Agences carrés/3.jpg') }
#carousel figure:nth-child(4) { background-image: url('inc/img/batiments/Agences carrés/4.jpg') }
#carousel figure:nth-child(5) { background-image: url('inc/img/batiments/Agences carrés/5.jpg') }
#carousel figure:nth-child(6) { background-image: url('inc/img/batiments/Agences carrés/6.jpg') }
#carousel figure:nth-child(7) { background-image: url('inc/img/batiments/Agences carrés/7.jpg') }
#carousel figure:nth-child(8) { background-image: url('inc/img/batiments/Agences carrés/8.jpg') }
#carousel figure:nth-child(9) { background-image: url('inc/img/batiments/Agences carrés/9.jpg') }
#carousel figure:nth-child(10) { background-image: url('inc/img/batiments/Agences carrés/10.jpg') }
#carousel figure:nth-child(11) { background-image: url('inc/img/batiments/Agences carrés/11.jpg') }

#carousel figure:nth-child(1) { transform: rotateY(0deg) translateZ(288px);}
#carousel figure:nth-child(2) { transform: rotateY(33deg) translateZ(288px);}
#carousel figure:nth-child(3) { transform: rotateY(66deg) translateZ(288px);}
#carousel figure:nth-child(4) { transform: rotateY(99deg) translateZ(288px);}
#carousel figure:nth-child(5) { transform: rotateY(132deg) translateZ(288px);}
#carousel figure:nth-child(6) { transform: rotateY(165deg) translateZ(288px);}
#carousel figure:nth-child(7) { transform: rotateY(198deg) translateZ(288px);}
#carousel figure:nth-child(8) { transform: rotateY(231deg) translateZ(288px);}
#carousel figure:nth-child(9) { transform: rotateY(264deg) translateZ(288px);}
#carousel figure:nth-child(10) { transform: rotateY(297deg) translateZ(288px);}
#carousel figure:nth-child(11) { transform: rotateY(327deg) translateZ(288px);}

img{


  </style>          
<!-- Contenu -->
<div class="container" style="margin-top: 120px;">
  <div class="starter-template"> 
  <div style="width:70%;display:inline;float:left;font-size: 1.1em;">
      <h1><img src="inc/img/puce-h1.png"><b>H</b>istorique du groupe</h1>
      <p style="width:70%;display:inline;float:left;">En 2000, la société Comptoir Auto Paris Rennes, basée à Saint-Grégoire, est rachetée par Mr Philippe DELAMOTTE. Elle sera connue peu de temps après sous le nom de CAPR. <br /><br />
      Le groupe Odis voit le jour en 2006 lors de l’acquisition des sociétés Bertho-Lamour et Difac.
      L’année 2011 est marquée par la mise en place de la plateforme d’approvisionnement « Appr’Odis » permettant de centraliser les approvisionnements. <br /><br />
      A partir de 2006, le groupe ne cesse de croître, comptant aujourd’hui 11 agences réparties dans le Grand Ouest avec un chiffre d'affaires de plus de … millions en 2016.
      </p>      
  </div>
  <div style="width:30%;display:inline;float:left;margin-top: -100px;">
    <br /><br />
      <section class="containerSection">
        <div id="carousel">
          <figure>2000</figure>
          <figure>2006</figure>
          <figure>2007</figure>
          <figure>2008</figure>
          <figure>2009</figure>
          <figure>2009</figure>
          <figure>2010</figure>
          <figure>2013</figure>
          <figure>2013</figure>
          <figure>2014</figure>
          <figure>2016</figure>
        </div>
      </section>

      <img src="inc/img/historique ODIS.png" width="150%" style="margin-left:-120px;display:inline;float:left;"" />
  </div>
  </div>
</div><!-- /.container -->
<script>
function next(val){
  var carousel = document.getElementById('carousel'),
      panelCount = carousel.children.length,
      transformProp = Modernizr.prefixed('transform'),
      theta = 0;
  var increment = val + 1;
  theta += ( 360 / panelCount ) * increment * -1;
  carousel.style[ transformProp ] = 'translateZ( -288px ) rotateY(' + theta + 'deg)';
  setTimeout(function(){next(increment);},3000);
}

$(function () {
  document.getElementById('carousel').toggleClassName('panels-backface-invisible');
  document.getElementById("Historique du groupe").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';
  document.getElementById("menuAbout").className= 'dropdown open';
  $('#menuAbout').on('mouseleave', function(e) {
      document.getElementById('ulAbout').autoHidingNavbar('setDisableAutohide', true);
  });
  $('.dropdown').on('mouseleave', function(e) {
      document.getElementById('menuAbout').className= 'dropdown open';
      document.getElementById('menuAuto').className= 'dropdown';
      document.getElementById("menuIndustrie").className= 'dropdown';   
      document.getElementById('menuPeinture').className= 'dropdown';    
      document.getElementById('menuActu').className= 'dropdown'; 
      document.getElementById('menuPrestations').className= 'dropdown'; 
      document.getElementById('menuPreci').className= 'dropdown';

      document.getElementById('ulAbout').autoHidingNavbar('setDisableAutohide', true);
  });
next(-1);


});
</script>
<script type="text/javascript" src="<?php echo $chemin; ?>/inc/js/utils.js"></script>
<?php include('inc/_footer.php'); ?>
