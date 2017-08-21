<?php include ('inc/_header.php');?>		
<?php 
if(isset($_POST['titre'])){
  $titre = $_POST['titre'];
  $nom = $_POST['nom'];
  $header = "From: ". $_POST['email']; 
  $message = "Message en provenance de ODISPro \r\n";
  $message .= "De la part de ".$nom." \r\n\r\n";
  $message .= $_POST['message'];
   
  $to = 'kevin.hainry@groupe-odis.fr';
    
  /* Envoi de l'e-mail */
 if(mail($to, $titre, $message,$header)){
  echo "<script>alert('Message envoyé')</script>";
  }
  else{
    echo "<script>alert('Erreur lors de l'envoie, veuillez réessayer plus tard)</script>";
  }
}
?>				
<!-- Contenu -->
<div class="container" style="margin-top: 120px;">
	<div class="starter-template">
   <div style="width:100%;display:inline;float:left;font-size: 1.1em;">
		<h1><img src="inc/img/puce-h1.png">Nous <b>C</b>ontacter</h1> 
    <p style="width:70%;display:inline;float:left;">En cas de besoin, vous pouvez nous joindre par mail, courrier ou téléphone. Nous serons ravi de répondre à vos besoins et de vous apporter des réponses.</p><br /><br /><br />

<form method="POST" class="cf">
  <div class="half left cf">
    <input name="nom" type="text" id="input-name" placeholder="Nom">
    <input name="email" type="email" id="input-email" placeholder="Email">
    <input name="titre" type="text" id="input-subject" placeholder="Titre">
  </div>
  <div class="half right cf">
    <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
  </div>  
  <input type="submit" value="Valider" id="input-submit">
</form>    

    <img style="margin-top:50px;margin-left:250px;" src="inc/img/contact.png" />
	</div>
</div><!-- /.container -->
<script>
$(function () {
  document.getElementById("Nous contacter").style.backgroundColor = 'rgba(255, 13, 13, 0.5)';
  document.getElementById("menuActu").className= 'dropdown open';
  $('#menuActu').on('mouseleave', function(e) {
  		document.getElementById('ulActu').autoHidingNavbar('setDisableAutohide', true);
  });
  $('.dropdown').on('mouseleave', function(e) {
  		document.getElementById('menuAbout').className= 'dropdown';
  		document.getElementById('menuAuto').className= 'dropdown';
  		document.getElementById("menuIndustrie").className= 'dropdown';  	
  		document.getElementById('menuPeinture').className= 'dropdown';		
      document.getElementById('menuPrestations').className= 'dropdown'; 	
      document.getElementById('menuActu').className= 'dropdown open';  
      document.getElementById('menuPreci').className= 'dropdown';

  		document.getElementById('ulActu').autoHidingNavbar('setDisableAutohide', true);
  });
});
</script>
<?php include('inc/_footer.php'); ?>
<style>
@import url(https://fonts.googleapis.com/css?family=Merriweather);
*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

form {
  background: #f1f1f1;
  font-family: 'Merriweather', sans-serif;
  padding: 1em;
}

form {
  max-width: 600px;
  text-align: center;
  margin: 20px auto;
}
form input, form textarea {
  border: 0;
  outline: 0;
  padding: 1em;
  -moz-border-radius: 8px;
  -webkit-border-radius: 8px;
  border-radius: 8px;
  display: block;
  width: 100%;
  margin-top: 1em;
  font-family: 'Merriweather', sans-serif;
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  resize: none;
}
form input:focus, form textarea:focus {
  -moz-box-shadow: 0 0px 2px #e74c3c !important;
  -webkit-box-shadow: 0 0px 2px #e74c3c !important;
  box-shadow: 0 0px 2px #e74c3c !important;
}
form #input-submit {
  color: white;
  background: #e74c3c;
  cursor: pointer;
}
form #input-submit:hover {
  -moz-box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
  -webkit-box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
  box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
}
form textarea {
  height: 126px;
}

.half {
  float: left;
  width: 48%;
  margin-bottom: 1em;
}

.right {
  width: 50%;
}

.left {
  margin-right: 2%;
}

@media (max-width: 480px) {
  .half {
    width: 100%;
    float: none;
    margin-bottom: 0;
  }
}
/* Clearfix */
.cf:before,
.cf:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */
}

.cf:after {
  clear: both;
}

$red: #e74c3c;

</style>