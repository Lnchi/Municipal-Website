 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"  id="bootstrap-css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<meta charset="utf-8" />
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="fcss.css">
</head>

<body>

<?php include("header.php"); ?>

<div class="container main">
 
	<div class="row">
	
     <div class="col-md-14">
	 <div class="cms_bloc cms_bloc_title">
	   <h2><b>Donnez votre avis!</b></h2><br><br>

	   </div>

    <div class="table-responsive" >
           
			 
<table id="main-table" class="table exotic-table">
<thead >
   <tr>
      <th id="titres_boite_idees">Sujet d'idée</th>
      
      <th id="titres_boite_idees" class="text-center ">Création</th>
   </tr>
   </thead >
   <?php while($t = $topics->fetch()) { ?> <!-- ça vient me chercher toutes les idées-->
   
   <tbody>
   <tr>
      <td>
         <h4><a href=""><a class="text-warning" id="size2_boite_idees" href="idee.php?titre=<?= url_custom_encode($t['sujet']) ?>&id=<?= $t['idee_base_id'] ?>"><?= $t['sujet'] ?></a></a></h4>
      </td>
     
      <td class="text-center"><?= $t['date_heure'] ?><br />par <?= $t['pseudo'] ?>  </td>
   </tr>
   <?php } ?>
    </tbody>
</table>
<a class="text-dark" id="size2_boite_idees" href="/ourproject/nouvelle_idee.php?categorie=<?= $id_categorie ?>">Créer une nouvelle idée !</a> <!--prendre l'id de la catégorie qu'on a récuperé dans boite_idee.php (il va etre passer par l'url -->
     </div>
   </div>
 </div>
   </div>

 



<?php include("footer.php"); ?>

	 </body>
</html>
