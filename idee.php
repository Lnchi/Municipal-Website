 <?php
require('dbconnect.php');
require('functions.php');
 require('functions_boite.php');

if(isset($_GET['titre'],$_GET['id']) AND !empty($_GET['titre']) AND !empty($_GET['id'])) {  //vérifier si les variables existent et qui ne sont pas vides
    $get_titre = htmlspecialchars($_GET['titre']);  //récupèrer nos variables et les sécuriser
   $get_id = htmlspecialchars($_GET['id']);
   
   $titre_original = $db->prepare('SELECT sujet FROM idees WHERE id = ?');
   $titre_original->execute(array($get_id));
   $titre_original = $titre_original->fetch()['sujet'];        //récupèrer le titre
   if($get_titre == url_custom_encode($titre_original))       //fct pour encoder du texte et le passer dans l'url en supprimant des caractères ( enlève les mots qui contiennent moins de 2 carac)  
   {
      $topic = $db->prepare('SELECT * FROM idees WHERE id = ?');
      $topic->execute(array($get_id));
      $topic = $topic->fetch();
	  
       $auteur = $db->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = ?');
       $auteur->execute(array($topic['id_createur']));
       $auteur = $auteur->fetch();
	  
   } else {
      die('Erreur: Le titre ne correspond pas à l\'id');
   }
   require('idee.view.php');
} else {
   die('Erreur...');
}
?>