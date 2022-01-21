
<?php  session_start();
include('function.php');

$bdd = new PDO('mysql:host=127.0.0.1;dbname=notresite', 'root', '');?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

<meta charset="utf-8" />
<link rel="stylesheet" href="fcss.css">

<title>La mairie de thenia</title>

</head>

<body>

 <?php include("header.php"); ?>
 
 
 <div class="container main">
 
	<div id="row3" class="row">
	
     <div  class="col-md-6">
	 
	   <div class="cms_bloc cms_bloc_title">
	   <h2><b>Mot du maire</b></h2><br><br>

	   </div>
	  
	   <div class=" text-justify cms_bloc cms_bloc_text">
			<p>Chères et chers internautes,</p>
			 <p> Au nom du conseil municipal et de tous les employés, c'est avec grand plaisir que je vous accueille sur le site Internet de la ville de Thénia et que je vous souhaite la bienvenue. Grâce à cet accès par les voies virtuelles de l'autoroute de l'information, notre ville franchit un pas de géant dans sa communication, sa promotion et dans le soin de son image.<strong class="accroche"> </strong></p>
            <p>Vous y trouverez des informations relatives aux activités, les loisirs,les principales formalités administratives… tout autant que sur la culture. De plus, vous y serez toujours informé des dernières actualités.</p>
            <p>Je vous souhaite une excellente visite de notre site et vous invite à nous faire part de vos observations et propositions dans l’espace participatif de boite à idées de façon à ce que nous puissions améliorer en permanence cette vitrine d'une ville dynamique.
</p>
                    <img height="250" width="250" src="photo_maire.jpg"  class="fit-to-original" /></p>
                 <p style="text-align: left;">      <strong class="mise_en_avant_1 bg-danger">Le Maire</strong><br /><b> Ali BENTAALLA </b></p>
			
<br><br><br><br>


	  <div id="card4" class="card border-danger golge">
            <div class="card-header"><a  class="isteColor">
                <h5 class="text-center m-2" style="font-weight: bold">Actualités</h5></a></div>
                 <div class="card-body">
                    <div class="carousel vert slide" data-ride="carousel" data-interval="2000">
                      <div class="carousel-inner">
                       <div class="carousel-item active">
                       <ul class="timeline">
                       <li>
                        
                        <a id="size_titres_actualite" target="_blank" href="#">Préparations pour le début de la saison festivale</a>
                        <a href="#" class="float-right">20 Mai, 2019</a>
                        <p class="article"><p>A l'occasion du début de la saison festivale 2019, la mairie de Thénia prépare...</p>
                      </li>
                      <hr>
                      <li>
                        <a id="size_titres_actualite" href="#">Les décisions prises dans la dernière assemblées générale</a>
                        <a href="#" class="float-right">19 Mai, 2019</a>
                        <p>La dernière assemblées générale qui a eu lieu le 18 Mai...</p>
                      </li>
                       
                      <!--<li>
                        <a href="#">Les derniers gros titres des nouvelles</a>
                        <a href="#" class="float-right">18 Mai, 2018</a>
                        <p>Description..</p>
                      </li>-->
                    </ul>
                  </div>
                 <div class="carousel-item">
                    <ul class="timeline">
                      <li>
                        <a id="size_titres_actualite" href="#">Les derniers gros titres des nouvelles</a>
                        <a href="#" class="float-right">17 Mai, 2019</a>
                        <p class="article"><p>Description..</p>
                      </li>
                      <hr>
                      <li>
                        <a id="size_titres_actualite" href="#">Les derniers gros titres des nouvelles</a>
                        <a href="#" class="float-right">17 Mai, 2019</a>
                        <p>Description..</p>
                      </li>
                       <hr>
                     
                    </ul>
                  </div> 
                </div>
              </div>
            </div>
          </div> 
		  

  
       </div>
 
    </div>
	
	
	 	  <div id="general-card" class="col-md-4 float-right">
		  <br><br><br><br><br><br>
		<!--Card-->
            <div class="card ">
                <!--Card image-->
                <img class="img-fluid" src="/ourproject/egalite-citoyennete-participez.jpg"  alt="Card image cap">
            
                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h5 class="card-title">Boite à idée</h5>
                    <!--Text-->
                    <p class="card-text">Donnez votre avis.</p>
                    <a href="boite.php" class="btn  cliquez">Je participe</a>
                </div>
            </div>
        <!--/.Card-->
		
		 <div id="card3" class="float-right">
		 <br><br><br>
      <div   class="card text-center ">
	  
        <img class="card-img-top" src="/ourproject/mairie-thenia.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Carte intéractive</h5>
          <hr>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12791.489073965875!2d3.5564998!3d36.7256288!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fb9f3a5a7d904df!2sMairie+de+Th%C3%A9nia!5e0!3m2!1sen!2sdz!4v1556288795722!5m2!1sen!2sdz" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
          <a href="https://goo.gl/maps/UmDivZetHRHNsWM48"><address class="font-italic">CENTRE VILLE, Thenia, Boumerdes (35), Algérie - Boumerdès</address></a>
        </div>
       
      </div><br><br><br><br>
	  
	  <div class=" text-center">
  	     
		 <span ><b class="alert-purple bg-light">La mairie vous accueille :</b><br></br></span>
		 <span>Du Dimanche au Jeudi de 8h00 à 15h30.</span><br>
		 <span><b class="alert-purple"> Téléphone :</b> 024 83 30 45(mairie)</br>
		 
		 <b class="alert-purple">Courriel :</b> Contact@Thenia.dev </br>
		</span><br><br>
		<b class="alert-purple bg-light">--------  Fermeture le vendredi  --------</b>
	 </div>
    
	</div>
        </div>
		 
   
	</div>
    
   </div>
 
<?php include("footer.php"); ?>


</body>
</html>
