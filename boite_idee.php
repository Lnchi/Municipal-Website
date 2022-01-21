
 <?php
 session_start();
require('dbconnect.php'); /* Connexion à la bdd */
require('functions.php'); /* Mes fonctions */

if(isset($_GET['categorie']) AND !empty($_GET['categorie'])) {
   $get_categorie = htmlspecialchars($_GET['categorie']);
   $categories = array();
   $req_categories = $db->query('SELECT * FROM categories');
   while($c = $req_categories->fetch()) {
      array_push($categories, array($c['id'],url_custom_encode($c['nom']))); //url_custom_encode fct pour dégager les accents
   }
   foreach($categories as $cat) {
      if(in_array($get_categorie, $cat)) {
         $id_categorie = intval($cat[0]); //l'element 0 dans le tab contient le id 
      }
   }
   if(@$id_categorie) {
      if(isset($_GET['souscategorie']) AND !empty($_GET['souscategorie'])) {
         $get_souscategorie = htmlspecialchars($_GET['souscategorie']);
         $souscategories = array();
         $req_souscategories = $db->prepare('SELECT * FROM souscategories WHERE id_categorie = ?');
         $req_souscategories->execute(array($id_categorie));
         while($c = $req_souscategories->fetch()) {
            array_push($souscategories, array($c['id'],url_custom_encode($c['nom'])));
         }
         foreach($souscategories as $cat) {
            if(in_array($get_souscategorie, $cat)) {
               $id_souscategorie = intval($cat[0]);
            }
         }
      }
      $req = "SELECT *, idees.id idee_base_id  FROM idees                                      
            LEFT JOIN idees_categorie ON idees.id = idees_categorie.id_idee 
            LEFT JOIN categories ON idees_categorie.id_categorie = categories.id
            LEFT JOIN souscategories ON idees_categorie.id_souscategorie = souscategories.id
            LEFT JOIN utilisateur ON idees.id_createur = utilisateur.id_utilisateur
            WHERE categories.id = ?";     //FROM idees -> Table qu'on va selectionner par défaut comme une référence et pour chaque référence idée on va lui implémenter à coté le résultat des autres tables |||| Les jointures pour lier les catégorie et les sc à leurs idées

      if(@$id_souscategorie) {
         $req .= " AND souscategories.id = ?";
         $exec_array = array($id_categorie,$id_souscategorie);
      } else {
         $exec_array = array($id_categorie);
      }

      $req .= " ORDER BY idees.id DESC"; 
      
      $topics = $db->prepare($req);
      $topics->execute($exec_array);
   } else {
      die('Erreur: Catégorie introuvable...');
   }
} else {
   die('Erreur: Aucune catégorie sélectionnée...');
}

require('boite_idee.view.php');
?>