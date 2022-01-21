<?php
     session_start();
     require('dbconnect.php');

     $errors=array();
      if(!array_key_exists('actenaissance_nom',$_POST) || $_POST['actenaissance_nom']==''){
      $errors['actenaissance_nom']="Champ Nom invalide";}
	  
	  if(!array_key_exists('actenaissance_prenom',$_POST) || $_POST['actenaissance_prenom']==''){
      $errors['actenaissance_prenom']="Champ Prénom invalide";}
	 
	  if(!array_key_exists('actenaissance_complement',$_POST) || $_POST['actenaissance_complement']==''){
	  $errors['actenaissance_complement']="Champ Bâtiment / complément invalide";}
	 
	  if(!array_key_exists('actenaissance_adresse',$_POST) || $_POST['actenaissance_adresse']==''){
	  $errors['actenaissance_adresse']="Champ Adresse invalide";}
	  
	    if(!array_key_exists('actenaissance_codepostal',$_POST) || $_POST['actenaissance_codepostal']==''){
	  $errors['actenaissance_codepostal']="Champ Code postal invalide";}
	  
	    if(!array_key_exists('actenaissance_ville',$_POST) || $_POST['actenaissance_ville']==''){
	  $errors['actenaissance_ville']="Champ Ville invalide";}
	  
	    if(!array_key_exists('actenaissance_telephone',$_POST) || $_POST['actenaissance_telephone']==''){
	  $errors['actenaissance_telephone']="Champ Téléphone invalide";}
	  
	    if(!array_key_exists('actenaissance_courriel',$_POST) || $_POST['actenaissance_courriel']==''){
	  $errors['actenaissance_courriel']="Champ Courriel invalide";}
	  
	  
	  
	  
	    if(!array_key_exists('actenaissance_nom_naissance',$_POST) || $_POST['actenaissance_nom_naissance']==''){
	  $errors['actenaissance_nom_naissance']="Champ Nom naissance invalide";}
	  
	    if(!array_key_exists('actenaissance_prenom_naissance',$_POST) || $_POST['actenaissance_prenom_naissance']==''){
	  $errors['actenaissance_prenom_naissance']="Champ Prénom d'usage invalide";}
	  
	  
	  if(!array_key_exists('jour_naissance_actenaissance',$_POST) || $_POST['jour_naissance_actenaissance']==''){
	  $errors['  jour_naissance_actenaissance']="Champ 1 Date de naissance invalide";}
	  
	  if(!array_key_exists('annee_naissance_actenaissance',$_POST) || $_POST['annee_naissance_actenaissance']==''){
	  $errors['  annee_naissance_actenaissance']="Champ 3 Date de naissance invalide";}
	  
	
	  
	    if(!array_key_exists('actenaissance_commune',$_POST) || $_POST['actenaissance_commune']==''){
	  $errors['actenaissance_commune']="Champ Commune invalide";}
	  
	    if(!array_key_exists('actenaissance_cp',$_POST) || $_POST['actenaissance_cp']==''){
	  $errors['actenaissance_cp']="Champ Code postale de naissance invalide";}
	  
	  if(!array_key_exists('actenaissance_nompere',$_POST) || $_POST['actenaissance_nompere']==''){
	  $errors['actenaissance_nompere']="Champ Nom du père invalide";}
	  
	  if(!array_key_exists('actenaissance_prenompere',$_POST) || $_POST['actenaissance_prenompere']==''){
	  $errors['actenaissance_prenompere']="Champ Prénom d'usage du père invalide";}
	  
	  if(!array_key_exists('actenaissance_nommere',$_POST) || $_POST['actenaissance_nommere']==''){
	  $errors['actenaissance_nommere']="Champ Code Nom de naissance de la mère invalide";}
	  
	  if(!array_key_exists('actenaissance_prenommere',$_POST) || $_POST['actenaissance_prenommere']==''){
	  $errors['actenaissance_prenommere']="Champ Prénom d'usage de la mère invalide";}
	  
	  
      if(!empty($errors)){
	
	   $_SESSION['errors']=$errors;
	   $_SESSION['inputs']=$_POST;
	   header('Location:actenaissance.php');
}
      else{
	
      //Reception des données du formulaire
      $Civilite=$_POST['Civilite']; 
      $actenaissance_nom=$_POST['actenaissance_nom']; 	//$nom est une variable qui recoit la donnée (name=...)
	  $actenaissance_prenom=$_POST['actenaissance_prenom'];
      $actenaissance_complement=$_POST['actenaissance_complement'];
      $actenaissance_adresse=$_POST['actenaissance_adresse'];
      $actenaissance_codepostal=$_POST['actenaissance_codepostal'];
	   $actenaissance_ville=$_POST['actenaissance_ville'];
      $actenaissance_telephone=$_POST['actenaissance_telephone'];
      $actenaissance_courriel=$_POST['actenaissance_courriel'];
	  $demande_en_qualité_de=$_POST['demande_en_qualité_de'];
	  
	
	  
      $actenaissance_nom_naissance=$_POST['actenaissance_nom_naissance'];
	   $actenaissance_prenom_naissance=$_POST['actenaissance_prenom_naissance'];
	   
	     $jour_naissance_actenaissance=$_POST['jour_naissance_actenaissance'];
	  $mois_naissance_actenaissance=$_POST['mois_naissance_actenaissance'];
	  $annee_naissance_actenaissance=$_POST['annee_naissance_actenaissance'];
	   
      $actenaissance_commune=$_POST['actenaissance_commune'];
      $actenaissance_cp=$_POST['actenaissance_cp'];
      $actenaissance_nompere=$_POST['actenaissance_nompere'];
	   $actenaissance_prenompere=$_POST['actenaissance_prenompere'];
      $actenaissance_nommere=$_POST['actenaissance_nommere'];
      $actenaissance_prenommere=$_POST['actenaissance_prenommere'];
	  
	  $nature_acte=$_POST['nature_acte'];
      $nombre_exemplaires=$_POST['nombre_exemplaires'];
  
  
      $insert=$db->prepare("INSERT INTO actenaissance(Civilite,actenaissance_nom, actenaissance_prenom, actenaissance_complement, actenaissance_adresse,actenaissance_codepostal,actenaissance_ville,actenaissance_telephone,actenaissance_courriel,demande_en_qualité_de,actenaissance_nom_naissance,actenaissance_prenom_naissance,jour_naissance_actenaissance,mois_naissance_actenaissance,annee_naissance_actenaissance,actenaissance_commune,actenaissance_cp,actenaissance_nompere,actenaissance_prenompere,actenaissance_nommere,actenaissance_prenommere,nature_acte,nombre_exemplaires) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
      $insert->execute(array($Civilite,$actenaissance_nom, $actenaissance_prenom, $actenaissance_complement, $actenaissance_adresse,$actenaissance_codepostal,$actenaissance_ville,$actenaissance_telephone,$actenaissance_courriel,$demande_en_qualité_de,$actenaissance_nom_naissance,$actenaissance_prenom_naissance,$jour_naissance_actenaissance,$mois_naissance_actenaissance,$annee_naissance_actenaissance,$actenaissance_commune,$actenaissance_cp,$actenaissance_nompere,$actenaissance_prenompere,$actenaissance_nommere,$actenaissance_prenommere,$nature_acte,$nombre_exemplaires));

      $_SESSION['success']=1;
      header('Location:actenaissance.php');
}
 ?>