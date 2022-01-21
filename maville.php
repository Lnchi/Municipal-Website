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
	
     <div class="col-md-10">
	 
	 <div class="container-fluid container-text">
	 
	   <div class="cms_bloc cms_bloc_title">

	   <h2><b>Thénia</b></h2><br><br>

	   </div>
	  
	   <div class=" text-justify cms_bloc cms_bloc_text">
			
			<p>Thénia (الثنية en <strong class="mise_en_avant_1 text-danger">arabe</strong>, Tizi Naïth aïcha2 en <strong class="mise_en_avant_1 text-danger">kabyle</strong>; Ménerville pendant la<strong class="mise_en_avant_1 text-danger"> colonisation française</strong>) est une commune algérienne de la wilaya de Boumerdès, dans la daïra de Thénia, à la limite est de la Mitidja.</p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>

	   </div><br></div><br>
	  
            
		 <div class="container-fluid container-text">	
		<div class="cms_bloc cms_bloc_title">
	   <h2><b>Histoire</b></h2><br><br>

	   </div>	
	   
	   
	     <div class=" text-justify cms_bloc cms_bloc_text">
			
			<p>La région de Thénia a vu passer de nombreuses époques historiques.</p> </div>
            <p><h5 class="mise_en_avant_1 text-danger">Période numide</h5></p><hr>
			<p>L'état numide en Algérie s'étend de -250 à -25.</p><br>
			
            <p><h5 class="mise_en_avant_1 text-danger">Période berbéro-romaine</h5></p><hr>
			
			  <div class="row">
			    <div class="col-md-3">
			      <img src="/ourproject/ruines_romaines_thenia.jpg" class="img-thumbnail float-xs-left">
			    </div>
				<p class="text-justify text-right"><br>La présence romaine en Algérie s'étend de 25 av. J.-C. à 430 ap. J.-C..</p>
			  </div><br>
			   
               <p><h5 class="mise_en_avant_1 text-danger">Période berbéro-vandale</h5></p><hr>
			   <p>La présence vandale en Algérie s'étend de 477 à 533.</p><br>
			 
                <p><h5 class="mise_en_avant_1 text-danger">Période berbéro-byzantine</h5></p><hr>
			    <p>La présence byzantine en Algérie s'étend de 534 à 647.</p><br>
				
				<p><h5 class="mise_en_avant_1 text-danger">Période berbéro-arabe</h5></p><hr>
			    <p>La période berbéro-arabe en Algérie s'étend de 647 à 1515.</p><br>
				
				<p><h5 class="mise_en_avant_1 text-danger">Période turque</h5></p><hr>
			    <p>La présence turque en Algérie s'étend de 1515 à 1830.</p><br>
				
				<p><h5 class="mise_en_avant_1 text-danger">Période française</h5></p><hr>
			    <p>La présence française en Algérie a duré de 1830 à 1962.</p><br>
			
		</div>
		</div>
</div>
</div>		
			
			
			<?php include("footer.php"); ?>


</body>
</html>			
<br><br>