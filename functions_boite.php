<?php
function get_pseudo($id) {
   global $db;
   $pseudo = $db->prepare('SELECT pseudo FROM utilisateur WHERE id_utilisateur = ?');
   $pseudo->execute(array($id));
   $pseudo = $pseudo->fetch()['pseudo'];
   return $pseudo;
}
?>