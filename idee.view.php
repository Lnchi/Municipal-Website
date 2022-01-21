


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
      <th id="titres_boite_idees">Auteur</th>
      <th id="titres_boite_idees" class="text-center">Sujet : <?= $topic['sujet'] ?></th>
   </tr>
   </thead >
   
   
   
   <tbody>
   <tr>
   
      <td><?= get_pseudo($topic['id_createur']) ?></td>
      <td class="text-center"><?= $topic['contenu'] ?></td>
      
   </tr>
  
   
    </tbody>
</table>

<br />

     </div>
   </div>
 </div>
   </div>

<?php include("footer.php"); ?>

	 </body>
</html>
