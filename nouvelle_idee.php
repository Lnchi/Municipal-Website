 <?php
require('dbconnect.php'); /* Connexion à la base de donnée */
require('functions.php'); /* Mes fonctions */
session_start();
include('function.php');
 connctetoi();


/* Traitement du formulaire de création d'idées */

if(isset($_GET['categorie'])) {
   $get_categorie = htmlspecialchars($_GET['categorie']);
   $categorie = $db->prepare('SELECT * FROM categories WHERE id = ?');
   $categorie->execute(array($get_categorie));
   $cat_exist = $categorie->rowCount();
   if($cat_exist == 1) {
      $categorie = $categorie->fetch();
      $categorie = $categorie['nom']; //le nom de la catégorie qui va apparaitre
      $souscategories = $db->prepare('SELECT * FROM souscategories WHERE id_categorie = ? ORDER BY nom');
      $souscategories->execute(array($get_categorie));
	  
      if(isset($_SESSION['auth'])) {
		  
		  
         if(isset($_POST['isubmit'])) { //on vérifie si la variable existe cad si le formulaire a été envoyé
            if(isset($_POST['isujet'],$_POST['icontenu'])) {
               $sujet = htmlspecialchars($_POST['isujet']); //sécuriser les vars
               $contenu = htmlspecialchars($_POST['icontenu']);
               $souscategorie = htmlspecialchars($_POST['souscategorie']);
               $verify_sc = $db->prepare('SELECT id FROM souscategories WHERE id = ? AND id_categorie = ?'); //on vérifie si notre sc correspond
               $verify_sc->execute(array($souscategorie,$get_categorie));
               $verify_sc = $verify_sc->rowCount();
               if($verify_sc == 1) {
                  if(!empty($sujet) AND !empty($contenu)) {
                     if(strlen($sujet) <= 70) {
                        if(isset($_POST['imail'])) {
                           $notif_mail = 1;
                        } else {
                           $notif_mail = 0;
                        }
                        $ins = $db->prepare('INSERT INTO idees (id_createur, sujet, contenu, notif_createur, date_heure) VALUES(?,?,?,?,NOW())');
                        $ins->execute(array($_SESSION['auth']->id_utilisateur,$sujet,$contenu,$notif_mail));
						
						 $terror = "Votre idée a bien été postée";
                        
                        $lt = $db->query('SELECT id FROM idees ORDER BY id DESC LIMIT 0,1'); //récuperer la derniere idee et l'insérer dans idees_categorie
                        $lt = $lt->fetch();
                        $id_topic = $lt['id'];
                        $ins = $db->prepare('INSERT INTO idees_categorie (id_idee, id_categorie, id_souscategorie) VALUES (?,?,?)');
                        $ins->execute(array($id_topic, $get_categorie, $souscategorie));
                     } else {
                        $terror = "Votre sujet ne peut pas dépasser 70 caractères";
                     }
                  } else {
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																
                  }
                } 
				 else {
                  $terror = "Sous-catégorie invalide";
               }
            }
         }
      } else {
         $terror = "Veuillez vous connecter pour poster une nouvelle idée";
      }
   }
   else {
      die('Catégorie invalide...');
   }
}
 else {
   die('Aucune catégorie définie...');
}

require('nouvelle_idee.view.php'); /* Appel du fichier "vue" de notre page */ 
 
 ?>
 
 
 
 
 
 
 
 
 
 
 

