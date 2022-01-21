<?php
     session_start(); //sotcker les différents errors
     require('dbconnect.php');

     $errors=array();
	 
      if(!array_key_exists('nom',$_POST) || $_POST['nom']==''){  //si la clé nom dans le tableau n'existe pas ou vide
      $errors['nom']="Vous n'avez pas renseigné votre nom";}
	  
	  if(!array_key_exists('prenom',$_POST) || $_POST['prenom']==''){
      $errors['prenom']="Vous n'avez pas renseigné votre prénom";}
	 
	  if(!array_key_exists('email',$_POST) || $_POST['email']=='' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ //validateur email
	  $errors['email']="Vous n'avez pas renseigné un email valide";}
	 
	  if(!array_key_exists('cp',$_POST) || $_POST['cp']==''){
	  $errors['cp']="Vous n'avez pas renseigné votre code postal+ville";}
	 
	  if(!array_key_exists('message',$_POST) || $_POST['message']==''){
	  $errors['message']="Vous n'avez pas renseigné votre message";}
	 
	
	 
      if(!empty($errors)){
	
	   $_SESSION['errors']=$errors;
	   $_SESSION['inputs']=$_POST; // dans la session on va stocker tous les champs renseignés (les données )
	   header('Location:Contact.php');
}
      else{
	       
		   $_nom=$_POST['nom'];
		   $_prenom=$_POST['prenom'];
		   $_email=$_POST['email'];
		   $_cp=$_POST['cp'];
		   $_message=$_POST['message'] ;
		   mail('contactthenia@local.dev', 'Formulaire de contact', $_nom,$_prenom,$_email,$_cp,$_message );
           
      $_SESSION['success']=1;
      header('Location:Contact.php');
}
 ?>