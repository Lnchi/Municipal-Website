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
   <div class="row">
	
     <div class="col-md-14">
	 
	  <div class="cms_bloc cms_bloc_title ">
	   <h2><b>Acte d'état civil :</b></h2><br><br></div>
	   
	  
	   <div class="col-md-8 text-center">
			      <img id="image" src="/ourproject/demarches.jpg" class="img-thumbnail">
			    </div><hr><br>
				  <div class=" text-justify cms_bloc cms_bloc_text">
			
			<strong><h5>Un acte de naissance,de mariage ou décès est un acte juridique authentique signé par un officier d'état civil en Mairie .</h5></strong>
			<p>faites votre demande d'acte d'état civil rapidement et directement en ligne sans vous déplacer</p>
       <br></div><br><hr>
	   
	   <?php 
 
 if(isset($_SESSION['auth'])): ?>
	  <div class="card-container centermx drop-shadow lifted">
          <div id="card_etatcivil" class="card">
            <div id="card-header_etatcivil" class="card-header ">
               Choisir le bon formulaire , trés simple et rapide :
            </div>

            <div class="card-body "><br><br>
	        <a href="actenaissance.php"> Acte de naissance </a>
            <p>Demande d'extrait d'acte de naissance.</p><br>
		
	        <a href="actedeces.php"> Acte de décès </a>
            <p>Demande d'acte de décès.</p><br>

            <a href="actemariage.php"> Acte de mariage </a>
            <p>Demande d'extrait d'acte de mariage.</p><br>

        	</div> 
			<?php else: ?>  
			<strong> Veuillez vous connecter SVP !</strong><br><br>
			<a href="login.php" target="_blank"> <input type="button" class="btn btn-default" value="Se connecter"> </a>
			<?php endif; ?>
			<br><br>
    <div class="card-footer condensed">
        
    </div>
  </div>
</div>
		
		
 </div>		
</div>
		</div>	
			
			<?php include("footer.php"); ?>


</body>
</html>

			
			
			
			