<?php 
  include('function.php');
  if(!empty($_POST) AND !empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
	
$pdo = new PDO('mysql:dbname=notresite;host=localhost' , 'root' ,'' );
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $req = $pdo->prepare('SELECT * FROM utilisateur WHERE pseudo = :pseudo ');
    $req->execute(['pseudo' => $_POST['pseudo']]);
    $user = $req->fetch();
	if($user){
          if(password_verify($_POST['mdp'], $user->mdp ))
               {
	                session_start();
	                $_SESSION['auth'] = $user;
	                 
	                header('Location: account.php');
			   exit();} else{ session_start();
             $erreur ='Mot de passe incorrect ! ';	}
	}else {session_start();
             $erreur = 'Aucun compte trouvé ! ';}
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
 <h3> Se connecter : </h3><br><br>
 
 
        <form action ="#"  method="POST">
              
	   <div class="col-sm-6"> 
			  
				  <label for="fname">Pseudo:</label>
				          
					<input type="text" class="form-control" id="fname" placeholder="Enter Votre Nom" name="pseudo" > 
					
				</div>
			<div class="col-sm-6"> 
				  <label  for="email">Mot de passe:</label>
				
					<input type="password" class="form-control" id="mdp" placeholder="Enter mot de passe" name="mdp" > 
				</div>
				
				
				<br><br>
            <div class="col-sm-6">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Se connecter </button>
				  </div>
			
				</div>
				<br>
            <a href="register.php" > <input type="button" class="btn btn-default" value=" Je n'ai pas de compte "> </a>
        </form><br>
        <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
    </div>
  

</body>

</html>