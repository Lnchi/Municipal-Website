<?php
 session_start();
include('function.php');
connctetoi();
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
<?php 
if(isset($_SESSION['auth']) ) {
	$id_utilisateur = $_SESSION['auth']->id_utilisateur; ?>
 
<h2><strong><span >Mes demandes d'état civil </span></strong></h2>

<br>
<h5><span style="color: #848484;; font-family: Krub, sans-serif;"> Acte de naissance: </span></h5>
<br><br>

<table class="table tables-bordered table-hover table-stripped">
<tr><th> Numéro de la demande </th><th> Actions</th></tr>
<?php
include("dbconnect.php");//connexion a la BDD 
$query = "select * from actenaissance where id_demandeur=$id_utilisateur "; // prerparer la requete 
$result = $db->query($query) ; // objet de reception
$data = $result->fetchALL(); //tableau qui vas cantenire les information issue de la BDD 
for($i =0;$i<count($data);$i++){
	
	$id_demande_an=$data[$i]["id_demande_an"];
	
	echo "<tr><td>Ma demandes numéro:  $id_demande_an </td>";
	echo "<td>";
	echo "<a href='delete_demandes.php?id_demande_an=$id_demande_an' onclick ='return confirm(\"voulez vous vraiment supprimer la demandes ?\");' > <input type='button' class='btn btn-danger' value='Supprimer !'> </a>";
	echo "<a href='update_demandes1.php?id_demande_an=$id_demande_an' > <input type='button' class='btn btn-warning' value='Modifier !'> </a>";
	echo"</tr>";
                }	// demander au systme de nous donner le nombre de ligne du tableau  data 
?>
</table>
<br>


<h5><span style="color: #848484; font-family: Krub, sans-serif;"> Acte de mariage: </span></h5>

<br><br>
<table class="table tables-bordered table-hover table-stripped">
<tr><th> Numéro de la demande </th><th> Actions</th></tr>
<?php
include("dbconnect.php");//connexion a la BDD 
$query = "select * from actemariage where id_demandeur=$id_utilisateur "; // prerparer la requete 
$result = $db->query($query) ; // objet de reception
$data = $result->fetchALL(); //tableau qui vas cantenire les information issue de la BDD 
for($i =0;$i<count($data);$i++){
	
	$id_demande_am=$data[$i]["id_demande_am"];
	
	echo "<tr><td>Ma demandes numéro:  $id_demande_am </td>";
	echo "<td>";
	echo "<a href='delete_demandes.php?id_demande_am=$id_demande_am' onclick ='return confirm(\"voulez vous vraiment supprimer la demandes ?\");' > <input type='button' class='btn btn-danger' value='Supprimer !'> </a>";
	echo "<a href='update_demandes1.php?id_demande_am=$id_demande_am' > <input type='button' class='btn btn-warning' value='Modifier !'> </a>";
	echo"</tr>";
                }	// demander au systme de nous donner le nombre de ligne du tableau  data 
?>
</table>

<br>


<h5><span style="color: #848484; font-family: Krub, sans-serif;"> Acte de décès: </span></h5>

<br><br>
<table class="table tables-bordered table-hover table-stripped">
<tr><th> Numéro de la demande </th><th> Actions</th></tr>
<?php
include("dbconnect.php");//connexion a la BDD 
$query = "select * from actedeces where id_demandeur=$id_utilisateur "; // prerparer la requete 
$result = $db->query($query) ; // objet de reception
$data = $result->fetchALL(); //tableau qui vas cantenire les information issue de la BDD 
for($i =0;$i<count($data);$i++){
	
	$id_demande_ad=$data[$i]["id_demande_ad"];
	
	echo "<tr><td>Ma demandes numéro:  $id_demande_ad </td>";
	echo "<td>";
	echo "<a href='delete_demandes.php?id_demande_ad=$id_demande_ad' onclick ='return confirm(\"voulez vous vraiment supprimer la demandes ?\");' > <input type='button' class='btn btn-danger' value='Supprimer !'> </a>";
	echo "<a href='update_demandes1.php?id_demande_ad=$id_demande_ad' > <input type='button' class='btn btn-warning' value='Modifier !'> </a>";
	echo"</tr>";
                }	// demander au systme de nous donner le nombre de ligne du tableau  data 
?>
</table>
<?php }?>
</div>

 
  <?php include("footer.php"); ?>


</body>
</html>
