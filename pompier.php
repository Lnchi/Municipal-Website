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
 <body>
   <?php include("header.php"); ?>
 <div class="container main">
 <h2><b>La caserne de thénia </b></h2><br><br>
 <p><strong>Secteur d'intervention :</p></strong>
<p style="text-align: justify;">Les sapeurs pompiers de thénia interviennent sur un secteur de 4 communes, soit une population de 21 439 habitants et une superficie de 167,87 km2 ,<br />En 2018, ils ont accompli 636 interventions.</p>

	 <div id="card3" >
		 <br><br><br>
      <div   class="card text-center ">
	  
        <div class="card-body">
          <h5 class="card-title"></h5>
          <hr>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12791.489073965875!2d3.5564998!3d36.7256288!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fb9f3a5a7d904df!2sMairie+de+Th%C3%A9nia!5e0!3m2!1sen!2sdz!4v1556288795722!5m2!1sen!2sdz" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
          <a href="https://goo.gl/maps/UmDivZetHRHNsWM48"><address class="font-italic"style="color: #848484" ><b> Rue Boushaki Yahia, Thenia <br><strong>N° tél: </strong> 024 96 31 76 </p> <br></b></address></a>
        </div>
       
      </div><br><br>
	  
	  
    
	</div>
	<br> <br>

 <h5  style="color: #848484"><b>Constitution de la caserne : </b></h5>

<ul>
<p><b>Chef de centre :</b> Mr ben mouhamed </p>
<p><strong><li>2 Officiers</li></strong></p>
<li>Mr Ahmed</li>
<li>Mr Amine</li>
<p><strong><li>6 Sous Officiers</li></strong></p>
<li>Mr Ali</li>
<li >Mr Mourad </li>
<li>Mr Mustapha</li>
<li>Mr douvet</li>
</ul>
 <h5  style="color: #848484"><b>Materiels : </b></h5>

<ul>
<li>1 VSAV (Ambulance)</li>
<li>1 CCR (V&eacute;hicule incendie Poids lourd)</li>
<li>1 VPS (V&eacute;hicule incendie l&eacute;ger et D&eacute;sincarc&eacute;ration)</li>
<li>1 VTU (V&eacute;hicule intervention diverses)</li>
<li>1 VL (Voiture)</li>
<li>1 BLS Bateau Leger de Sauvetage</li>
</ul>

</div>
</body>
<?php include("footer.php"); ?>