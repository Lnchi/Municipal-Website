<?php
if(isset($_GET["id_demande_an"]))
 {
    $id_demande_an = $_GET["id_demande_an"];
          if (!empty ($id_demande_an) && is_numeric($id_demande_an))
             {
	             include("dbconnect.php");
	             $query = "delete from 	actenaissance where id_demande_an=$id_demande_an";
	            $db->exec($query);
	             header("Location:liste.php");
                }
     }
?>