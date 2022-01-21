
<?php 
require('dbconnect.php'); /* Contient la connexion à la $db */
require('functions.php');
session_start();
include('function.php');
 connctetoi();
$categories = $db->query('SELECT * FROM categories ORDER BY nom'); //requete 
$subcat = $db->prepare('SELECT * FROM souscategories WHERE id_categorie = ? ORDER BY nom');  //Prépare une requête à l'exécution et retourne un objet
                                                                                             //Appeler PDO::prepare() et PDOStatement::execute() pour les requêtes qui doivent être exécutées plusieurs fois avec différentes valeurs de paramètres optimisent les performances de votre application en autorisant le pilote à négocier coté client et/ou serveur avec le cache des requêtes et les meta-informations. 
require('boite.view.php');
?>

