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
	
     <div class="col-md-10">
	 
	 <div class="cms_bloc cms_bloc_title">
	   <h2><b>Donnez votre avis!</b></h2><br><br><br><br>

	   </div>

<div id="table-responsive1" class="table-responsive" >
            
    <form method="POST">
      <table id="main-table" class="table exotic-table">
   
      <thead>
       <tr >
         <th id="titres_boite_idees" colspan="2">Poster une idée</th> 
      </tr>
	  </thead>
      <tr>
         <td>Sujet</td>
         <td><input type="text" name="isujet" size="70" maxlength="70" /></td>
      </tr>
	  
	   
	   <tbody>
      <tr>
         <td>Catégorie</td>
         <td>
          <?= $categorie ?>
         </td>
      </tr>
      <tr>
         <td class="text-center">Sous-Catégorie</td> 
         <td>
            <select name="souscategorie">
                <?php while($sc = $souscategories->fetch()) { ?>
               <option value="<?= $sc['id'] ?>"><?= $sc['nom'] ?></option>
               <?php } ?>
            </select>
         </td>
      </tr>
      <tr>
         <td class="text-center">Contenu</td>
         <td><textarea name="icontenu" style=" width:90% ; "></textarea></td>
      </tr>
      <tr>
         <td>Me notifier des réponses par mail</td>
         <td><input class="float-left" type="checkbox" name="imail" /></td>
      </tr>
      <tr>
         <td colspan="2"><input type="submit" name="isubmit" value="Poster l'idée" /></td> 
      </tr>
	  
      <?php if(isset($terror)) { ?>
      <tr>
         <td colspan="2"><?= $terror ?></td>
      </tr>
      <?php } ?>
	</tbody>  
   </table>
   
   </form>
   
     </div>
   </div>
 </div>
 </div>


<?php include("footer.php"); ?>

	 </body>
</html>
