<?php 
session_start();
 include('function.php');
   connctetoi();
?>

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
 
 <body>
      <?php include("header.php"); ?>
	  
  <div class="container main">
            <center>
                 <strong><span style=" font-family: Krub, sans-serif;">Salut  <b style="color: #848484;" ><?= $_SESSION['auth']->pseudo; ?></b> </span></strong></span></p>
	             <strong><span style=" font-family: Krub, sans-serif;">Votre email : <b style="color: #848484" ><?= $_SESSION['auth']->email; ?> </b> </span></strong></span></p>
	                                <br>  
      <?php  if(isset($_SESSION['auth']) ) {  ?>
                 <a href="logout.php" > <input type="button" class="btn btn-default"  value=" Se déconnecter ?"> </a>  <?php } ?>
				                   <br>
		    
			</center>
		 <br>
	
	<div class="container-fluid container-text">
	    <div class="cms_bloc cms_bloc_title">
          <h2 style="color: #848484">Boîte à idées </h2>
        </div>
	    <div class=" text-justify cms_bloc cms_bloc_text">
	      <h5>Une suggestion, des idées ? votre avis nous intéresse :)</h5> <h5 style="text-align: justify;"><img src="idée.png" style="border: #000000 0px solid;" />  </h5>
          <a href="boite.php" target="_blank"> <input type="button" class="btn btn-default" value=" Cliquer pour poster vos idées !"> </a>
        </div>
	</div>
	
		<br/>
	<div class="container-fluid container-text">
	    <div class="cms_bloc cms_bloc_title">
            <h2 style="color: #848484"> Démarches administratives</h2>

	    </div>
	  
	   <div class=" text-justify cms_bloc cms_bloc_text">
		  <h5>Quelles démarches pouvez-vous faire sans vous déplacer ?   </h5><br>
          <h5>Retrouvez tous les formulaires ici !  </h5> <p  style="text-align: justify;"><img src="démarches.png" style="border: #000000 0px solid;" />  </p>
            <a href="demarches.php" target="_blank"> <input type="button" class="btn btn-default"  value=" Faire ma démarche en ligne  "> </a>
       </div>
    </div>
		<br>
   

  
   <div class="container-fluid container-text">
	     <div class="cms_bloc cms_bloc_title">
            <h2 style="color: #848484;" >Mes demandes d'état civil  </h2>
	     </div>
	     <div class=" text-justify cms_bloc cms_bloc_text">
		     <h5> Mes demandes envoyées : <br>  </h5>
                 <p  style="text-align: justify;"><img src="mes_demandes.jpg" style="border: #000000 0px solid;" />  </p>
                 <a href="liste.php" > <input type="button" class="btn btn-default"  value=" Modifier ou supprimer mes demandes "> </a>
		 </div>
   </div>
		
					
 </div>
   </body>
   <?php include("footer.php"); ?>
