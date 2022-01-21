 
 
  <!DOCTYPE html>
<html>
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

</head>

<body>

<?php include("header.php"); ?>

<div class="container main">
 
	<div class="row">
	
     <div class="col-md-14">
	 
	  <div class="cms_bloc cms_bloc_title ">
	   <h2><b>Donnez votre avis !</b></h2><br><br></div>
	   
	   <div class=" text-justify cms_bloc cms_bloc_text">
			
			<p>Proposez vos idées, commentez les propositions... vous êtes dans l’espace participatif de boite à idées !</p>
            
       <br></div><hr>
	   
	    <div id="image" class="col-md-8 text-center">
			      <img src="/ourproject/jeparticipe.jpg" class="img-thumbnail">
			    </div><hr><br><br>
	 
          <div class="table-responsive" >
           
			 
<table id="main-table" class="table exotic-table ">

<thead >
   <tr>
      <th id="titres_boite_idees">Boite à idées</th>
     
   </tr>
   </thead>
 
   <?php
   
   while($c = $categories->fetch()) {
      $subcat->execute(array($c['id']));  //on va lui faire passer l'id de la catégorie en cours dans la boucle
      $souscategories = ''; //on initialise la var
      while($sc = $subcat->fetch()) { //on va chercher la requete 
         $souscategories .= '<a class="text-warning" id="size2_boite_idees" href="/ourproject/boite_idee.php?categorie='.url_custom_encode($c['nom']).'&souscategorie='.url_custom_encode($sc['nom']).'">'.$sc['nom'].'</a> | '; //ajouter du contenu à la var (=.)
      }
      $souscategories = substr($souscategories, 0, -3); //réduire la taille de la chaine de carac, ça va nous enlever les 3 derniers carac
   ?>
  
  <tbody>
   <tr>
      <td>
         <h4 ><a class="text-white" id="size1_boite_idees" href="/ourproject/boite_idee.php?categorie=<?= url_custom_encode($c['nom']) ?>"><?= $c['nom'] ?></a></h4><br>
         <p >
          <?= $souscategories ?> <!--echo on affiche les souscatégories-->
         </p>
      </td>
    
   </tr>
   <?php } ?>
   
   </tbody>
</table>

  </div>
   
  </div>
   </div>
    
 </div>

<?php include("footer.php"); ?>

	 </body>
</html>
