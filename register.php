<?php 
      include("function.php");
      session_start();
	  if(!empty($_POST)){
		 $errors = array();
	

     $pdo = new PDO('mysql:dbname=notresite;host=localhost' , 'root' ,'' );
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	   
	   if(empty($_POST['pseudo']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['pseudo']))
               {	
		          $erreur =" Votre pseudo n'est pas valide (alphanumérique)";
		             } else {
			        

			                 $req = $pdo->prepare('SELECT id_utilisateur FROM utilisateur WHERE  pseudo = ?');
			                 $req->execute([$_POST['pseudo']]);
			                 $user = $req->fetch();//permet de :recuperer le premier enregistrement 
			                     
								 if($user){ 
					                $erreur ='Ce pseudo existe déjà!';
									 }
					        }
					
 
	   if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	             {
               	
		          $erreur =" Votre email n'est pas valide ";
		             }else {
			        

			                 $req = $pdo->prepare('SELECT id_utilisateur FROM utilisateur WHERE  email = ?');
			                 $req->execute([$_POST['email']]);
			                 $user = $req->fetch();//permet de :recuperer le premier enregistrement 
			                     if($user){ 
					                 $erreur  = 'Cette adresse e-mail est déjà utilisée !';
									 }
					        } 
							
		if(empty($_POST['mdp']) || ($_POST['mdp2'] != $_POST['mdp']))
	             {
               	
		          $erreur ="les deux mots de passe ne correspondent pas";
		             }
	
	 
	      if(!isset($erreur)) {
          
       


		$req = $pdo->prepare("INSERT INTO utilisateur SET pseudo = ?, mdp = ?, email = ?");
		$mdp = password_hash($_POST['mdp'],PASSWORD_BCRYPT);
		$req ->execute([$_POST['pseudo'], $mdp, $_POST['email'] ]);
		$user_id = $pdo->lastInsertId();
         $erreur = "Votre compte a bien été créé ! <a href=\"login.php\">Me connecter</a>";
	
	
	  }
	   
	   
	   
	 }
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
 <div class="container main_login">
<h3> S'inscrire : </h3><br>

<form  action="#" method="POST">

  
    <legend>inscrivez vous  et donnez vos avis  !</legend>
	   
	   <div class="col-sm-6"> 
			  
				  <label for="fname">Pseudo:</label>
				          
					<input type="text" class="form-control" id="fname" placeholder="Entrer Votre Nom" name="pseudo" > 
					
				</div>
				
				<div class="col-sm-6"> 
				  <label  for="email">Email:</label>
				 
					<input type="email" class="form-control" id="email" placeholder="Entrer email" name="email" >
				</div>
				
				<div class="col-sm-6"> 
				  <label  for="email">Mot de passe:</label>
				
					<input type="password" class="form-control" id="mdp" placeholder="Entrer mot de passe" name="mdp" > 
				</div>
				
			<div class="col-sm-6"> 
				  <label  for="email">Confirmer votre mot de passe:</label>
				 
					<input type="password" class="form-control" id="mdp2" placeholder="confirmer mot de passe" name="mdp2" >
				</div>
				<br>
			<div class="col-sm-6">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">S'inscrire</button>
				  </div>
				  </form>
				</div><br>
			
		
 <?php if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?></div>